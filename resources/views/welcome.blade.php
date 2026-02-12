<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SiteSmart - Construction Project Management System</title>
            @vite(['resources/css/app.css', 'resources/js/app.js'])
            <style>
        .welcome-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #1F3A8A 0%, #3B4FA8 100%);
            padding: 2rem;
        }
        .welcome-card {
            background: white;
            border-radius: 1rem;
            padding: 3rem;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            text-align: center;
        }
        .logo-large {
            font-size: 4rem;
            color: #F97316;
            margin-bottom: 1rem;
        }
        .welcome-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #1F3A8A;
            margin-bottom: 1rem;
        }
        .welcome-subtitle {
            color: #6B7280;
            font-size: 1.125rem;
            margin-bottom: 2rem;
        }
        .welcome-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        .btn-welcome {
            padding: 0.875rem 2rem;
            border-radius: 0.5rem;
            font-weight: 500;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.2s ease;
        }
        .btn-welcome-primary {
            background-color: #1F3A8A;
            color: white;
        }
        .btn-welcome-primary:hover {
            background-color: #172A6F;
        }
        .btn-welcome-accent {
            background-color: #F97316;
            color: white;
        }
        .btn-welcome-accent:hover {
            background-color: #EA580C;
        }
            </style>
    </head>
<body>
    <div class="welcome-container">
        <div class="welcome-card">
            <div class="logo-large">
                <i class="fas fa-hard-hat"></i>
            </div>
            <h1 class="welcome-title">SiteSmart</h1>
            <p class="welcome-subtitle">Construction Project Management System</p>
            <p style="color: #6B7280; margin-bottom: 2rem;">
                Manage your construction projects efficiently with our comprehensive platform.
                Track budgets, materials, workers, and progress all in one place.
            </p>
            <div class="welcome-buttons">
                <a href="{{ route('login') }}" class="btn-welcome btn-welcome-primary">
                    <i class="fas fa-sign-in-alt"></i> Login
                </a>
                <a href="{{ route('register') }}" class="btn-welcome btn-welcome-accent">
                    <i class="fas fa-user-plus"></i> Register
                </a>
            </div>
        </div>
    </div>
    </body>
</html>