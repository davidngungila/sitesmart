# Authentication Setup Guide

## Quick Setup

### 1. Run Migrations

First, make sure your database is configured in `.env`, then run:

```bash
php artisan migrate
```

This will create the `users` table with the `role` column.

### 2. Create Your First User

You can register a new user through the registration page at `/register`, or create one via Tinker:

```bash
php artisan tinker
```

Then in Tinker:

```php
$user = App\Models\User::create([
    'name' => 'Admin User',
    'email' => 'admin@sitesmart.com',
    'password' => Hash::make('password123'),
    'role' => 'admin'
]);
```

### 3. Access the System

- **Login Page**: `http://localhost:8000/login`
- **Register Page**: `http://localhost:8000/register`
- **Dashboard**: `http://localhost:8000/dashboard` (requires login)

## User Roles

The system supports the following roles:

- **admin** - Full system access
- **project_manager** - Project and task management
- **site_supervisor** - Daily updates and progress tracking
- **accountant** - Financial management
- **client** - View-only access (default)

## Features

### Login
- Email and password authentication
- "Remember me" functionality
- Session-based authentication
- Automatic redirect to dashboard after login

### Registration
- User registration with role selection
- Password confirmation
- Automatic login after registration
- Email validation

### Logout
- Logout button in user profile dropdown
- Session cleanup
- Redirect to login page

### Protected Routes
All dashboard and module routes are protected with `auth` middleware. Unauthenticated users will be redirected to the login page.

## Testing

### Test Credentials

After creating a user, you can test login with:

```
Email: admin@sitesmart.com
Password: password123
```

(Change these credentials in production!)

## Security Notes

- Passwords are hashed using Laravel's bcrypt
- CSRF protection enabled on all forms
- Session-based authentication
- Remember token support
- Password minimum length: 8 characters

## Next Steps

1. Set up email verification (optional)
2. Add password reset functionality
3. Implement role-based access control (RBAC) middleware
4. Add two-factor authentication (2FA)
5. Set up user profile management

## Troubleshooting

### Can't login?
- Check database connection
- Verify user exists in database
- Check password is correct
- Clear cache: `php artisan config:clear`

### Migration errors?
- Drop and recreate database
- Run: `php artisan migrate:fresh`
- Or rollback: `php artisan migrate:rollback`

### Session issues?
- Clear cache: `php artisan cache:clear`
- Check `.env` `SESSION_DRIVER` setting
- Verify storage permissions
