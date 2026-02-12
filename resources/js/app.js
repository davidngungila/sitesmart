import './bootstrap';
import Chart from 'chart.js/auto';

// Make Chart available globally
window.Chart = Chart;

// Sidebar toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const sidebar = document.getElementById('sidebar');
    const mobileOverlay = document.getElementById('mobile-overlay');
    const mainContent = document.querySelector('.main-content');
    
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', function() {
            sidebar.classList.toggle('mobile-open');
            if (mobileOverlay) {
                mobileOverlay.classList.toggle('active');
            }
        });
    }
    
    if (mobileOverlay) {
        mobileOverlay.addEventListener('click', function() {
            sidebar.classList.remove('mobile-open');
            mobileOverlay.classList.remove('active');
        });
    }
    
    // Desktop sidebar toggle
    const sidebarToggle = document.getElementById('sidebar-toggle');
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('collapsed');
            if (mainContent) {
                mainContent.classList.toggle('expanded');
            }
        });
    }
    
    // Submenu toggle
    const menuItems = document.querySelectorAll('.sidebar-menu-item.has-submenu');
    menuItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const submenu = this.nextElementSibling;
            if (submenu && submenu.classList.contains('sidebar-submenu')) {
                submenu.classList.toggle('open');
                this.classList.toggle('active');
            }
        });
    });
    
    // Close sidebar on mobile when clicking outside
    document.addEventListener('click', function(e) {
        if (window.innerWidth <= 1024) {
            if (!sidebar.contains(e.target) && !mobileMenuToggle.contains(e.target)) {
                sidebar.classList.remove('mobile-open');
                if (mobileOverlay) {
                    mobileOverlay.classList.remove('active');
                }
            }
        }
    });
    
    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 1024) {
            sidebar.classList.remove('mobile-open');
            if (mobileOverlay) {
                mobileOverlay.classList.remove('active');
            }
        }
    });
    
    // User profile dropdown (hover on desktop, click on mobile)
    const userProfileWrapper = document.getElementById('user-profile-dropdown');
    const profileDropdown = document.getElementById('profile-dropdown-menu');
    
    if (userProfileWrapper && profileDropdown) {
        let hoverTimeout;
        let isOpen = false;
        
        // Desktop: Show on hover
        if (window.innerWidth > 768) {
            userProfileWrapper.addEventListener('mouseenter', function() {
                clearTimeout(hoverTimeout);
                profileDropdown.style.display = 'block';
                isOpen = true;
            });
            
            userProfileWrapper.addEventListener('mouseleave', function() {
                hoverTimeout = setTimeout(function() {
                    profileDropdown.style.display = 'none';
                    isOpen = false;
                }, 200);
            });
            
            // Keep open when hovering over dropdown
            profileDropdown.addEventListener('mouseenter', function() {
                clearTimeout(hoverTimeout);
            });
            
            profileDropdown.addEventListener('mouseleave', function() {
                profileDropdown.style.display = 'none';
                isOpen = false;
            });
        }
        
        // Mobile: Toggle on click
        userProfileWrapper.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.stopPropagation();
                isOpen = !isOpen;
                profileDropdown.style.display = isOpen ? 'block' : 'none';
            }
        });
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!userProfileWrapper.contains(e.target)) {
                profileDropdown.style.display = 'none';
                isOpen = false;
            }
        });
    }
    
    // Notifications dropdown
    const notificationWrapper = document.getElementById('notification-wrapper');
    const notificationDropdown = document.getElementById('notification-dropdown');
    const notificationIcon = notificationWrapper?.querySelector('.notification-icon');
    
    if (notificationWrapper && notificationDropdown && notificationIcon) {
        let notificationHoverTimeout;
        let notificationOpen = false;
        
        // Desktop: Show on hover
        if (window.innerWidth > 768) {
            notificationWrapper.addEventListener('mouseenter', function() {
                clearTimeout(notificationHoverTimeout);
                notificationDropdown.style.display = 'block';
                notificationOpen = true;
            });
            
            notificationWrapper.addEventListener('mouseleave', function() {
                notificationHoverTimeout = setTimeout(function() {
                    notificationDropdown.style.display = 'none';
                    notificationOpen = false;
                }, 200);
            });
            
            // Keep open when hovering over dropdown
            notificationDropdown.addEventListener('mouseenter', function() {
                clearTimeout(notificationHoverTimeout);
            });
            
            notificationDropdown.addEventListener('mouseleave', function() {
                notificationDropdown.style.display = 'none';
                notificationOpen = false;
            });
        }
        
        // Mobile: Toggle on click
        notificationIcon.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.stopPropagation();
                notificationOpen = !notificationOpen;
                notificationDropdown.style.display = notificationOpen ? 'block' : 'none';
            }
        });
        
        // Close notification dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!notificationWrapper.contains(e.target)) {
                notificationDropdown.style.display = 'none';
                notificationOpen = false;
            }
        });
        
        // Mark all as read functionality
        const markAllReadBtn = document.getElementById('mark-all-read');
        if (markAllReadBtn) {
            markAllReadBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                // Remove unread class from all notifications
                const unreadNotifications = notificationDropdown.querySelectorAll('.notification-item.unread');
                unreadNotifications.forEach(item => {
                    item.classList.remove('unread');
                    const dot = item.querySelector('.notification-dot');
                    if (dot) dot.remove();
                });
                
                // Update badge count
                const badge = notificationWrapper.querySelector('.notification-badge');
                if (badge) {
                    badge.textContent = '0';
                    badge.style.display = 'none';
                }
            });
        }
        
        // Mark individual notification as read
        const notificationItems = notificationDropdown.querySelectorAll('.notification-item');
        notificationItems.forEach(item => {
            item.addEventListener('click', function(e) {
                if (this.classList.contains('unread')) {
                    this.classList.remove('unread');
                    const dot = this.querySelector('.notification-dot');
                    if (dot) dot.remove();
                    
                    // Update badge count
                    const badge = notificationWrapper.querySelector('.notification-badge');
                    if (badge) {
                        const currentCount = parseInt(badge.textContent) || 0;
                        const newCount = Math.max(0, currentCount - 1);
                        badge.textContent = newCount.toString();
                        if (newCount === 0) {
                            badge.style.display = 'none';
                        }
                    }
                }
            });
        });
    }
    
    // Handle window resize - close dropdowns on mobile
    window.addEventListener('resize', function() {
        if (window.innerWidth <= 768) {
            if (profileDropdown) profileDropdown.style.display = 'none';
            if (notificationDropdown) notificationDropdown.style.display = 'none';
        }
    });
});

// Initialize tooltips if Bootstrap is available
if (typeof bootstrap !== 'undefined') {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
}
