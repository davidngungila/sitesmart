<aside id="sidebar" class="sidebar">
    <!-- Sidebar Header -->
    <div class="sidebar-header">
        <div class="sidebar-logo">
            <i class="fas fa-hard-hat"></i>
            <span class="logo-text">SiteSmart</span>
        </div>
        <button id="sidebar-toggle" class="menu-toggle" title="Toggle Sidebar">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    
    <!-- Sidebar Menu -->
    <nav class="sidebar-menu">
        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}" class="sidebar-menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <i class="fas fa-home"></i>
            <span class="menu-text">Dashboard</span>
        </a>
        
        <!-- Projects -->
        <div class="sidebar-menu-item has-submenu {{ request()->routeIs('projects.*') ? 'active' : '' }}" style="justify-content: space-between;">
            <div style="display: flex; align-items: center; gap: 0.75rem;">
                <i class="fas fa-folder-open"></i>
                <span class="menu-text">Projects</span>
            </div>
            <i class="fas fa-chevron-right"></i>
        </div>
        <div class="sidebar-submenu {{ request()->routeIs('projects.*') ? 'open' : '' }}">
            <a href="{{ route('projects.index') }}" class="sidebar-submenu-item {{ request()->routeIs('projects.index') ? 'active' : '' }}">
                <i class="fas fa-list"></i>
                <span>All Projects</span>
            </a>
            <a href="{{ route('projects.create') }}" class="sidebar-submenu-item {{ request()->routeIs('projects.create') ? 'active' : '' }}">
                <i class="fas fa-plus-circle"></i>
                <span>Create Project</span>
            </a>
            <a href="{{ route('projects.phases') }}" class="sidebar-submenu-item {{ request()->routeIs('projects.phases') ? 'active' : '' }}">
                <i class="fas fa-layer-group"></i>
                <span>Project Phases</span>
            </a>
            <a href="{{ route('projects.milestones') }}" class="sidebar-submenu-item {{ request()->routeIs('projects.milestones') ? 'active' : '' }}">
                <i class="fas fa-flag-checkered"></i>
                <span>Milestones</span>
            </a>
            <a href="{{ route('projects.timeline') }}" class="sidebar-submenu-item {{ request()->routeIs('projects.timeline') ? 'active' : '' }}">
                <i class="fas fa-chart-line"></i>
                <span>Timeline (Gantt)</span>
            </a>
            <a href="{{ route('projects.documents') }}" class="sidebar-submenu-item {{ request()->routeIs('projects.documents') ? 'active' : '' }}">
                <i class="fas fa-file-alt"></i>
                <span>Documents</span>
            </a>
        </div>
        
        <!-- Tasks & Planning -->
        <div class="sidebar-menu-item has-submenu {{ request()->routeIs('tasks.*') ? 'active' : '' }}" style="justify-content: space-between;">
            <div style="display: flex; align-items: center; gap: 0.75rem;">
                <i class="fas fa-tasks"></i>
                <span class="menu-text">Tasks & Planning</span>
            </div>
            <i class="fas fa-chevron-right"></i>
        </div>
        <div class="sidebar-submenu {{ request()->routeIs('tasks.*') ? 'open' : '' }}">
            <a href="{{ route('tasks.index') }}" class="sidebar-submenu-item {{ request()->routeIs('tasks.index') ? 'active' : '' }}">
                <i class="fas fa-list-check"></i>
                <span>All Tasks</span>
            </a>
            <a href="{{ route('tasks.calendar') }}" class="sidebar-submenu-item {{ request()->routeIs('tasks.calendar') ? 'active' : '' }}">
                <i class="fas fa-calendar-alt"></i>
                <span>Task Calendar</span>
            </a>
            <a href="{{ route('tasks.wbs') }}" class="sidebar-submenu-item {{ request()->routeIs('tasks.wbs') ? 'active' : '' }}">
                <i class="fas fa-sitemap"></i>
                <span>Work Breakdown</span>
            </a>
            <a href="{{ route('tasks.delayed') }}" class="sidebar-submenu-item {{ request()->routeIs('tasks.delayed') ? 'active' : '' }}">
                <i class="fas fa-exclamation-triangle"></i>
                <span>Delayed Tasks</span>
            </a>
        </div>
        
        <!-- Financial Management -->
        <div class="sidebar-menu-item has-submenu {{ request()->routeIs('finance.*') ? 'active' : '' }}" style="justify-content: space-between;">
            <div style="display: flex; align-items: center; gap: 0.75rem;">
                <i class="fas fa-dollar-sign"></i>
                <span class="menu-text">Financial Management</span>
            </div>
            <i class="fas fa-chevron-right"></i>
        </div>
        <div class="sidebar-submenu {{ request()->routeIs('finance.*') ? 'open' : '' }}">
            <a href="{{ route('finance.budgets') }}" class="sidebar-submenu-item {{ request()->routeIs('finance.budgets') ? 'active' : '' }}">
                <i class="fas fa-wallet"></i>
                <span>Project Budgets</span>
            </a>
            <a href="{{ route('finance.expenses') }}" class="sidebar-submenu-item {{ request()->routeIs('finance.expenses') ? 'active' : '' }}">
                <i class="fas fa-receipt"></i>
                <span>Expenses</span>
            </a>
            <a href="{{ route('finance.payments') }}" class="sidebar-submenu-item {{ request()->routeIs('finance.payments') ? 'active' : '' }}">
                <i class="fas fa-money-bill-wave"></i>
                <span>Income / Payments</span>
            </a>
            <a href="{{ route('finance.invoices') }}" class="sidebar-submenu-item {{ request()->routeIs('finance.invoices') ? 'active' : '' }}">
                <i class="fas fa-file-invoice"></i>
                <span>Invoices</span>
            </a>
            <a href="{{ route('finance.reports') }}" class="sidebar-submenu-item {{ request()->routeIs('finance.reports') ? 'active' : '' }}">
                <i class="fas fa-chart-bar"></i>
                <span>Budget vs Actual</span>
            </a>
        </div>
        
        <!-- Materials & Inventory -->
        <div class="sidebar-menu-item has-submenu {{ request()->routeIs('materials.*') ? 'active' : '' }}" style="justify-content: space-between;">
            <div style="display: flex; align-items: center; gap: 0.75rem;">
                <i class="fas fa-boxes"></i>
                <span class="menu-text">Materials & Inventory</span>
            </div>
            <i class="fas fa-chevron-right"></i>
        </div>
        <div class="sidebar-submenu {{ request()->routeIs('materials.*') ? 'open' : '' }}">
            <a href="{{ route('materials.index') }}" class="sidebar-submenu-item {{ request()->routeIs('materials.index') ? 'active' : '' }}">
                <i class="fas fa-list"></i>
                <span>Material List</span>
            </a>
            <a href="{{ route('materials.stock') }}" class="sidebar-submenu-item {{ request()->routeIs('materials.stock') ? 'active' : '' }}">
                <i class="fas fa-warehouse"></i>
                <span>Stock In / Out</span>
            </a>
            <a href="{{ route('materials.orders') }}" class="sidebar-submenu-item {{ request()->routeIs('materials.orders') ? 'active' : '' }}">
                <i class="fas fa-shopping-cart"></i>
                <span>Purchase Orders</span>
            </a>
            <a href="{{ route('materials.suppliers') }}" class="sidebar-submenu-item {{ request()->routeIs('materials.suppliers') ? 'active' : '' }}">
                <i class="fas fa-truck"></i>
                <span>Suppliers</span>
            </a>
            <a href="{{ route('materials.alerts') }}" class="sidebar-submenu-item {{ request()->routeIs('materials.alerts') ? 'active' : '' }}">
                <i class="fas fa-bell"></i>
                <span>Low Stock Alerts</span>
            </a>
        </div>
        
        <!-- Workforce Management -->
        <div class="sidebar-menu-item has-submenu {{ request()->routeIs('workforce.*') ? 'active' : '' }}" style="justify-content: space-between;">
            <div style="display: flex; align-items: center; gap: 0.75rem;">
                <i class="fas fa-users"></i>
                <span class="menu-text">Workforce Management</span>
            </div>
            <i class="fas fa-chevron-right"></i>
        </div>
        <div class="sidebar-submenu {{ request()->routeIs('workforce.*') ? 'open' : '' }}">
            <a href="{{ route('workforce.workers') }}" class="sidebar-submenu-item {{ request()->routeIs('workforce.workers') ? 'active' : '' }}">
                <i class="fas fa-user-hard-hat"></i>
                <span>Workers</span>
            </a>
            <a href="{{ route('workforce.contractors') }}" class="sidebar-submenu-item {{ request()->routeIs('workforce.contractors') ? 'active' : '' }}">
                <i class="fas fa-handshake"></i>
                <span>Contractors</span>
            </a>
            <a href="{{ route('workforce.attendance') }}" class="sidebar-submenu-item {{ request()->routeIs('workforce.attendance') ? 'active' : '' }}">
                <i class="fas fa-calendar-check"></i>
                <span>Attendance</span>
            </a>
            <a href="{{ route('workforce.payroll') }}" class="sidebar-submenu-item {{ request()->routeIs('workforce.payroll') ? 'active' : '' }}">
                <i class="fas fa-money-check-alt"></i>
                <span>Payroll</span>
            </a>
        </div>
        
        <!-- Monitoring & Reports -->
        <div class="sidebar-menu-item has-submenu {{ request()->routeIs('reports.*') ? 'active' : '' }}" style="justify-content: space-between;">
            <div style="display: flex; align-items: center; gap: 0.75rem;">
                <i class="fas fa-chart-pie"></i>
                <span class="menu-text">Monitoring & Reports</span>
            </div>
            <i class="fas fa-chevron-right"></i>
        </div>
        <div class="sidebar-submenu {{ request()->routeIs('reports.*') ? 'open' : '' }}">
            <a href="{{ route('reports.daily') }}" class="sidebar-submenu-item {{ request()->routeIs('reports.daily') ? 'active' : '' }}">
                <i class="fas fa-clipboard-list"></i>
                <span>Daily Site Reports</span>
            </a>
            <a href="{{ route('reports.progress') }}" class="sidebar-submenu-item {{ request()->routeIs('reports.progress') ? 'active' : '' }}">
                <i class="fas fa-chart-line"></i>
                <span>Progress Tracking</span>
            </a>
            <a href="{{ route('reports.risk') }}" class="sidebar-submenu-item {{ request()->routeIs('reports.risk') ? 'active' : '' }}">
                <i class="fas fa-shield-alt"></i>
                <span>Risk Register</span>
            </a>
            <a href="{{ route('reports.analytics') }}" class="sidebar-submenu-item {{ request()->routeIs('reports.analytics') ? 'active' : '' }}">
                <i class="fas fa-chart-area"></i>
                <span>Performance Analytics</span>
            </a>
        </div>
        
        <!-- Documents -->
        <a href="{{ route('documents.index') }}" class="sidebar-menu-item {{ request()->routeIs('documents.*') ? 'active' : '' }}">
            <i class="fas fa-folder"></i>
            <span class="menu-text">Documents</span>
        </a>
        
        <!-- Communication -->
        <a href="{{ route('communication.index') }}" class="sidebar-menu-item {{ request()->routeIs('communication.*') ? 'active' : '' }}">
            <i class="fas fa-comments"></i>
            <span class="menu-text">Communication</span>
        </a>
        
        <!-- Administration -->
        @auth
        @if(auth()->user()->role === 'admin' || auth()->user()->is_admin ?? false)
        <div class="sidebar-menu-item has-submenu {{ request()->routeIs('admin.*') ? 'active' : '' }}" style="justify-content: space-between;">
            <div style="display: flex; align-items: center; gap: 0.75rem;">
                <i class="fas fa-cog"></i>
                <span class="menu-text">Administration</span>
            </div>
            <i class="fas fa-chevron-right"></i>
        </div>
        <div class="sidebar-submenu {{ request()->routeIs('admin.*') ? 'open' : '' }}">
            <a href="{{ route('admin.users') }}" class="sidebar-submenu-item {{ request()->routeIs('admin.users') ? 'active' : '' }}">
                <i class="fas fa-user-cog"></i>
                <span>User Management</span>
            </a>
            <a href="{{ route('admin.roles') }}" class="sidebar-submenu-item {{ request()->routeIs('admin.roles') ? 'active' : '' }}">
                <i class="fas fa-user-shield"></i>
                <span>Roles & Permissions</span>
            </a>
            <a href="{{ route('admin.settings') }}" class="sidebar-submenu-item {{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                <i class="fas fa-sliders-h"></i>
                <span>System Settings</span>
            </a>
            <a href="{{ route('admin.audit') }}" class="sidebar-submenu-item {{ request()->routeIs('admin.audit') ? 'active' : '' }}">
                <i class="fas fa-history"></i>
                <span>Audit Logs</span>
            </a>
        </div>
        @endif
        @else
        <div class="sidebar-menu-item has-submenu {{ request()->routeIs('admin.*') ? 'active' : '' }}" style="justify-content: space-between;">
            <div style="display: flex; align-items: center; gap: 0.75rem;">
                <i class="fas fa-cog"></i>
                <span class="menu-text">Administration</span>
            </div>
            <i class="fas fa-chevron-right"></i>
        </div>
        <div class="sidebar-submenu {{ request()->routeIs('admin.*') ? 'open' : '' }}">
            <a href="{{ route('admin.users') }}" class="sidebar-submenu-item {{ request()->routeIs('admin.users') ? 'active' : '' }}">
                <i class="fas fa-user-cog"></i>
                <span>User Management</span>
            </a>
            <a href="{{ route('admin.roles') }}" class="sidebar-submenu-item {{ request()->routeIs('admin.roles') ? 'active' : '' }}">
                <i class="fas fa-user-shield"></i>
                <span>Roles & Permissions</span>
            </a>
            <a href="{{ route('admin.settings') }}" class="sidebar-submenu-item {{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                <i class="fas fa-sliders-h"></i>
                <span>System Settings</span>
            </a>
            <a href="{{ route('admin.audit') }}" class="sidebar-submenu-item {{ request()->routeIs('admin.audit') ? 'active' : '' }}">
                <i class="fas fa-history"></i>
                <span>Audit Logs</span>
            </a>
        </div>
        @endauth
    </nav>
</aside>

<style>
.sidebar.collapsed .logo-text,
.sidebar.collapsed .menu-text {
    display: none;
}

.sidebar.collapsed .sidebar-menu-item {
    justify-content: center;
    padding: 0.75rem;
}

.sidebar.collapsed .sidebar-submenu {
    display: none;
}

.sidebar.collapsed .fa-chevron-right {
    display: none;
}
</style>
