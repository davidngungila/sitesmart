<header class="top-header">
    <div class="header-left">
        <button id="mobile-menu-toggle" class="menu-toggle d-lg-none" title="Toggle Menu">
            <i class="fas fa-bars"></i>
        </button>
        
        <div class="search-box">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Search... (Ctrl+K)" id="global-search">
        </div>
    </div>
    
    <div class="header-right">
        <!-- Notifications Dropdown -->
        <div class="notification-wrapper" id="notification-wrapper" style="position: relative;">
            <div class="notification-icon" style="position: relative; cursor: pointer; padding: 0.5rem;">
                <i class="fas fa-bell" style="font-size: 1.25rem; color: var(--text-secondary); transition: color 0.2s;"></i>
                <span class="notification-badge" style="position: absolute; top: 0; right: 0; background: #EF4444; color: white; border-radius: 50%; width: 18px; height: 18px; display: flex; align-items: center; justify-content: center; font-size: 0.7rem; font-weight: bold;">3</span>
            </div>
            
            <!-- Notifications Dropdown Menu -->
            <div id="notification-dropdown" class="header-dropdown" style="display: none; position: absolute; top: 100%; right: 0; margin-top: 0.5rem; background: white; border-radius: 0.5rem; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); min-width: 320px; max-width: 400px; max-height: 500px; overflow-y: auto; z-index: 1000;">
                <div style="padding: 1rem; border-bottom: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center;">
                    <h3 style="margin: 0; font-size: 1rem; font-weight: 600; color: var(--text-primary);">Notifications</h3>
                    <button id="mark-all-read" style="background: none; border: none; color: var(--primary-color); cursor: pointer; font-size: 0.875rem; padding: 0.25rem 0.5rem;">Mark all as read</button>
                </div>
                <div class="notification-list">
                    <a href="#" class="notification-item unread">
                        <div style="display: flex; gap: 0.75rem; padding: 1rem;">
                            <div style="width: 40px; height: 40px; border-radius: 50%; background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); display: flex; align-items: center; justify-content: center; color: white; flex-shrink: 0;">
                                <i class="fas fa-tasks"></i>
                            </div>
                            <div style="flex: 1;">
                                <div style="font-weight: 500; color: var(--text-primary); margin-bottom: 0.25rem;">New Task Assigned</div>
                                <div style="font-size: 0.875rem; color: var(--text-secondary); margin-bottom: 0.25rem;">You have been assigned to "Foundation Work" project</div>
                                <div style="font-size: 0.75rem; color: var(--text-secondary);">2 minutes ago</div>
                            </div>
                            <div class="notification-dot" style="width: 8px; height: 8px; background: var(--accent-color); border-radius: 50%; flex-shrink: 0; margin-top: 0.5rem;"></div>
                        </div>
                    </a>
                    <a href="#" class="notification-item unread">
                        <div style="display: flex; gap: 0.75rem; padding: 1rem;">
                            <div style="width: 40px; height: 40px; border-radius: 50%; background: linear-gradient(135deg, #10B981, #059669); display: flex; align-items: center; justify-content: center; color: white; flex-shrink: 0;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div style="flex: 1;">
                                <div style="font-weight: 500; color: var(--text-primary); margin-bottom: 0.25rem;">Budget Approved</div>
                                <div style="font-size: 0.875rem; color: var(--text-secondary); margin-bottom: 0.25rem;">Your budget request for Project A has been approved</div>
                                <div style="font-size: 0.75rem; color: var(--text-secondary);">1 hour ago</div>
                            </div>
                            <div class="notification-dot" style="width: 8px; height: 8px; background: var(--accent-color); border-radius: 50%; flex-shrink: 0; margin-top: 0.5rem;"></div>
                        </div>
                    </a>
                    <a href="#" class="notification-item">
                        <div style="display: flex; gap: 0.75rem; padding: 1rem;">
                            <div style="width: 40px; height: 40px; border-radius: 50%; background: linear-gradient(135deg, #6366F1, #4F46E5); display: flex; align-items: center; justify-content: center; color: white; flex-shrink: 0;">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <div style="flex: 1;">
                                <div style="font-weight: 500; color: var(--text-primary); margin-bottom: 0.25rem;">System Update</div>
                                <div style="font-size: 0.875rem; color: var(--text-secondary); margin-bottom: 0.25rem;">New features have been added to the system</div>
                                <div style="font-size: 0.75rem; color: var(--text-secondary);">3 hours ago</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div style="padding: 1rem; border-top: 1px solid var(--border-color); text-align: center;">
                    <a href="#" style="color: var(--primary-color); text-decoration: none; font-size: 0.875rem; font-weight: 500;">View all notifications</a>
                </div>
            </div>
        </div>
        
        <!-- Messages -->
        <div class="message-icon" style="cursor: pointer; padding: 0.5rem;">
            <i class="fas fa-envelope" style="font-size: 1.25rem; color: var(--text-secondary); transition: color 0.2s;"></i>
        </div>
        
        <!-- User Profile Dropdown -->
        <div class="user-profile-wrapper" id="user-profile-dropdown" style="position: relative;">
            <div class="user-profile" style="display: flex; align-items: center; gap: 0.75rem; cursor: pointer; padding: 0.5rem; border-radius: 0.5rem; transition: background-color 0.2s;">
                <div class="user-avatar">
                    {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                </div>
                <div class="user-info" style="display: flex; flex-direction: column;">
                    <span style="font-weight: 500; font-size: 0.9rem;">{{ auth()->user()->name ?? 'Guest User' }}</span>
                    <span style="font-size: 0.75rem; color: var(--text-secondary);">{{ ucfirst(str_replace('_', ' ', auth()->user()->role ?? 'Guest')) }}</span>
                </div>
                <i class="fas fa-chevron-down" style="font-size: 0.75rem; color: var(--text-secondary); transition: transform 0.2s;"></i>
            </div>
            
            <!-- Profile Dropdown Menu -->
            <div id="profile-dropdown-menu" class="header-dropdown" style="display: none; position: absolute; top: 100%; right: 0; margin-top: 0.5rem; background: white; border-radius: 0.5rem; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); min-width: 220px; z-index: 1000;">
                <div style="padding: 0.75rem 1rem; border-bottom: 1px solid var(--border-color);">
                    <div style="font-weight: 500; color: var(--text-primary); margin-bottom: 0.25rem;">{{ auth()->user()->name ?? 'Guest User' }}</div>
                    <div style="font-size: 0.75rem; color: var(--text-secondary);">{{ auth()->user()->email ?? '' }}</div>
                </div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-user"></i>
                    <span>Profile</span>
                </a>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-cog"></i>
                    <span>Account Settings</span>
                </a>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-shield-alt"></i>
                    <span>Security</span>
                </a>
                <div style="border-top: 1px solid var(--border-color); margin-top: 0.25rem;"></div>
                <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                    @csrf
                    <button type="submit" class="dropdown-item logout-item">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>

<style>
.d-lg-none {
    display: none;
}

@media (max-width: 1024px) {
    .d-lg-none {
        display: block;
    }
}

/* Header Dropdown Styles */
.header-dropdown {
    animation: fadeInDown 0.2s ease;
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Notification Styles */
.notification-wrapper:hover .notification-icon i {
    color: var(--primary-color);
}

.notification-item {
    display: block;
    text-decoration: none;
    color: inherit;
    transition: background-color 0.2s;
    border-bottom: 1px solid var(--border-color);
}

.notification-item:last-child {
    border-bottom: none;
}

.notification-item:hover {
    background-color: var(--bg-color);
}

.notification-item.unread {
    background-color: #F0F9FF;
}

.notification-item.unread:hover {
    background-color: #E0F2FE;
}

/* Profile Dropdown Styles */
.user-profile-wrapper:hover .user-profile {
    background-color: var(--bg-color);
}

.user-profile-wrapper:hover .fa-chevron-down {
    transform: rotate(180deg);
}

.dropdown-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1rem;
    color: var(--text-primary);
    text-decoration: none;
    transition: background-color 0.2s;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    font-size: 0.9rem;
}

.dropdown-item:hover {
    background-color: var(--bg-color);
    color: var(--primary-color);
}

.dropdown-item i {
    width: 20px;
    text-align: center;
    color: var(--text-secondary);
}

.dropdown-item:hover i {
    color: var(--primary-color);
}

.logout-item {
    color: #EF4444;
}

.logout-item:hover {
    background-color: #FEE2E2;
    color: #DC2626;
}

.logout-item i {
    color: #EF4444;
}

.logout-item:hover i {
    color: #DC2626;
}

/* Notification Badge */
.notification-badge {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%, 100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
}

/* Scrollbar for notifications */
.notification-list::-webkit-scrollbar {
    width: 6px;
}

.notification-list::-webkit-scrollbar-track {
    background: var(--bg-color);
}

.notification-list::-webkit-scrollbar-thumb {
    background: var(--border-color);
    border-radius: 3px;
}

.notification-list::-webkit-scrollbar-thumb:hover {
    background: var(--text-secondary);
}
</style>
