# SiteSmart - Construction Project Management System

A comprehensive web-based construction project management system built with Laravel and modern frontend technologies.

## 🎨 Color Scheme

- **Primary Color**: Navy Blue (#1F3A8A)
- **Accent Color**: Construction Orange (#F97316)
- **Background**: Light Gray (#F3F4F6)
- **Sidebar**: Dark Gray (#1F2937)

## 🚀 Features

### Core Modules

1. **Project Management**
   - Create and manage projects
   - Track project phases and milestones
   - Gantt chart timeline visualization
   - Project document management

2. **Task Management**
   - Create and assign tasks
   - Task calendar view
   - Work Breakdown Structure (WBS)
   - Track delayed tasks

3. **Financial Management**
   - Project budget allocation
   - Expense tracking
   - Payment management
   - Invoice generation
   - Budget vs Actual reports

4. **Materials & Inventory**
   - Material inventory tracking
   - Stock in/out management
   - Purchase order system
   - Supplier management
   - Low stock alerts

5. **Workforce Management**
   - Worker profiles
   - Contractor management
   - Attendance tracking
   - Payroll system

6. **Monitoring & Reports**
   - Daily site reports
   - Progress tracking
   - Risk register
   - Performance analytics

7. **Document Management**
   - Store blueprints and contracts
   - Version control
   - Document sharing

8. **Communication**
   - In-system messaging
   - Email notifications
   - SMS alerts
   - Client portal

9. **Administration**
   - User management
   - Role-based access control
   - System settings
   - Audit logs

## 📋 Requirements

- PHP >= 8.2
- Composer
- Node.js >= 18.x
- npm or yarn
- MySQL/MariaDB

## 🛠️ Installation

1. **Clone the repository**
   ```bash
   cd ConstructSmart
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure database in `.env`**
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=sitesmart
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Run migrations**
   ```bash
   php artisan migrate
   ```

7. **Build assets**
   ```bash
   npm run build
   ```

8. **Start development server**
   ```bash
   php artisan serve
   ```

9. **Start Vite dev server (in another terminal)**
   ```bash
   npm run dev
   ```

## 📁 Project Structure

```
SiteSmart/
├── app/                    # Application logic
├── resources/
│   ├── views/
│   │   ├── layouts/        # Main layout templates
│   │   ├── partials/       # Reusable components
│   │   ├── dashboard.blade.php
│   │   └── projects/       # Project views
│   ├── css/
│   │   └── app.css         # Main stylesheet
│   └── js/
│       └── app.js          # Main JavaScript
├── routes/
│   └── web.php             # Web routes
├── public/                 # Public assets
└── package.json            # Node dependencies
```

## 🎯 Key Technologies

- **Backend**: Laravel 12
- **Frontend**: HTML5, CSS3, JavaScript
- **CSS Framework**: Tailwind CSS 4
- **Icons**: Font Awesome, Bootstrap Icons
- **Charts**: Chart.js
- **Build Tool**: Vite

## 📱 Responsive Design

The system is fully responsive and optimized for:
- Desktop (1024px+)
- Tablet (768px - 1023px)
- Mobile (< 768px)

## 🎨 UI Components

### Sidebar Navigation
- Collapsible sidebar with submenu support
- Mobile-responsive with overlay
- Active state highlighting
- Icon-based navigation

### Dashboard
- KPI cards with metrics
- Interactive charts
- Recent activity feed
- Quick action buttons

### Tables
- Responsive data tables
- Sortable columns
- Action buttons
- Status badges

## 🔐 User Roles

1. **Admin** - Full system access
2. **Project Manager** - Project and task management
3. **Site Supervisor** - Daily updates and progress tracking
4. **Accountant** - Financial management
5. **Client** - View-only access

## 📊 Dashboard Features

- Total Projects count
- Ongoing Projects
- Total Budget
- Total Expenses
- Remaining Budget
- Active Workers
- Project Progress Chart
- Budget vs Actual Chart
- Recent Projects list
- Recent Tasks
- Quick Actions

## 🚧 Development

### Adding New Views

1. Create blade file in `resources/views/[module]/[view].blade.php`
2. Extend main layout: `@extends('layouts.app')`
3. Add route in `routes/web.php`
4. Update sidebar navigation if needed

### Styling

- Main styles are in `resources/css/app.css`
- Uses CSS custom properties for theming
- Tailwind CSS utilities available
- Custom component classes defined

### JavaScript

- Main JS in `resources/js/app.js`
- Chart.js available globally
- Sidebar toggle functionality included
- Mobile menu handling included

## 📝 Notes

- All routes currently use closure functions for demonstration
- Replace with actual controllers as you develop
- Authentication middleware should be added to protected routes
- Database migrations need to be created for full functionality

## 🔄 Next Steps

1. Set up authentication system
2. Create database migrations
3. Implement controllers and models
4. Add form validation
5. Implement file uploads
6. Add email notifications
7. Set up SMS integration
8. Implement reporting features

## 📄 License

This project is for educational/academic purposes.

## 👥 Support

For issues or questions, please refer to the Laravel documentation or create an issue in the repository.

---

**SiteSmart** - Building Smarter Construction Management 🏗️