# SiteSmart Setup Guide

## Quick Start

### 1. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### 2. Environment Configuration

Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

Update your database configuration in `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sitesmart
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Database Setup

Create your database:

```sql
CREATE DATABASE sitesmart;
```

Run migrations (when ready):

```bash
php artisan migrate
```

### 4. Build Assets

For development:

```bash
npm run dev
```

For production:

```bash
npm run build
```

### 5. Start Development Server

In one terminal:

```bash
php artisan serve
```

In another terminal (if using `npm run dev`):

```bash
npm run dev
```

Visit: `http://localhost:8000`

## Development Workflow

### Adding New Routes

1. Add route in `routes/web.php`
2. Create corresponding view in `resources/views/[module]/[view].blade.php`
3. Update sidebar navigation if needed

### Styling

- Main styles: `resources/css/app.css`
- Uses CSS custom properties for theming
- Tailwind CSS utilities available
- Custom component classes defined

### JavaScript

- Main JS: `resources/js/app.js`
- Chart.js available globally via `window.Chart`
- Sidebar toggle functionality included
- Mobile menu handling included

## Color Customization

Colors are defined in CSS custom properties in `resources/css/app.css`:

```css
:root {
    --primary-color: #1F3A8A;    /* Navy Blue */
    --accent-color: #F97316;     /* Construction Orange */
    --bg-color: #F3F4F6;          /* Light Gray */
    --sidebar-bg: #1F2937;       /* Dark Gray */
}
```

## Responsive Breakpoints

- Desktop: 1024px+
- Tablet: 768px - 1023px
- Mobile: < 768px

## Troubleshooting

### Assets not loading

Make sure Vite dev server is running:

```bash
npm run dev
```

### Routes not working

Clear route cache:

```bash
php artisan route:clear
php artisan config:clear
```

### Sidebar not responsive

Check browser console for JavaScript errors. Ensure `app.js` is loaded correctly.

## Next Steps

1. Set up authentication (Laravel Breeze/Jetstream)
2. Create database migrations
3. Implement controllers and models
4. Add form validation
5. Implement file uploads
6. Add real data to dashboard
7. Implement CRUD operations

## Notes

- All routes currently use closures for demonstration
- Replace with actual controllers as you develop
- Add authentication middleware to protected routes
- Create database migrations for full functionality
