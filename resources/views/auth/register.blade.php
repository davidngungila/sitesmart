<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - SiteSmart</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .auth-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #1F3A8A 0%, #3B4FA8 100%);
            padding: 2rem;
        }
        .auth-card {
            background: white;
            border-radius: 1rem;
            padding: 3rem;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }
        .auth-logo {
            text-align: center;
            margin-bottom: 2rem;
        }
        .auth-logo-icon {
            font-size: 3rem;
            color: #F97316;
            margin-bottom: 0.5rem;
        }
        .auth-title {
            font-size: 2rem;
            font-weight: bold;
            color: #1F3A8A;
            margin-bottom: 0.25rem;
        }
        .auth-subtitle {
            color: #6B7280;
            font-size: 0.9rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #1F2937;
            font-size: 0.9rem;
        }
        .form-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #E5E7EB;
            border-radius: 0.5rem;
            font-size: 1rem;
            transition: all 0.2s ease;
        }
        .form-input:focus {
            outline: none;
            border-color: #1F3A8A;
            box-shadow: 0 0 0 3px rgba(31, 58, 138, 0.1);
        }
        .form-input.error {
            border-color: #EF4444;
        }
        .form-select {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #E5E7EB;
            border-radius: 0.5rem;
            font-size: 1rem;
            background-color: white;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .form-select:focus {
            outline: none;
            border-color: #1F3A8A;
            box-shadow: 0 0 0 3px rgba(31, 58, 138, 0.1);
        }
        .form-error {
            color: #EF4444;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
        .btn-auth {
            width: 100%;
            padding: 0.875rem;
            border-radius: 0.5rem;
            font-weight: 500;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.2s ease;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        .btn-primary {
            background-color: #1F3A8A;
            color: white;
        }
        .btn-primary:hover {
            background-color: #172A6F;
        }
        .auth-footer {
            text-align: center;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid #E5E7EB;
        }
        .auth-footer a {
            color: #1F3A8A;
            text-decoration: none;
            font-weight: 500;
        }
        .auth-footer a:hover {
            text-decoration: underline;
        }
        .input-group {
            position: relative;
        }
        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #6B7280;
        }
        .input-icon + .form-input {
            padding-left: 2.75rem;
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-logo">
                <div class="auth-logo-icon">
                    <i class="fas fa-hard-hat"></i>
                </div>
                <h1 class="auth-title">SiteSmart</h1>
                <p class="auth-subtitle">Create your account</p>
            </div>

            @if ($errors->any())
                <div style="background: #FEE2E2; color: #991B1B; padding: 1rem; border-radius: 0.5rem; margin-bottom: 1.5rem; font-size: 0.9rem;">
                    <strong>Error:</strong>
                    <ul style="margin: 0.5rem 0 0 1.5rem; padding: 0;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label class="form-label" for="name">Full Name</label>
                    <div class="input-group">
                        <i class="fas fa-user input-icon"></i>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            class="form-input @error('name') error @enderror" 
                            value="{{ old('name') }}" 
                            required 
                            autofocus
                            placeholder="Enter your full name"
                        >
                    </div>
                    @error('name')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label" for="email">Email Address</label>
                    <div class="input-group">
                        <i class="fas fa-envelope input-icon"></i>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="form-input @error('email') error @enderror" 
                            value="{{ old('email') }}" 
                            required
                            placeholder="Enter your email"
                        >
                    </div>
                    @error('email')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label" for="role">Role</label>
                    <select id="role" name="role" class="form-select @error('role') error @enderror">
                        <option value="client" {{ old('role') == 'client' ? 'selected' : '' }}>Client</option>
                        <option value="project_manager" {{ old('role') == 'project_manager' ? 'selected' : '' }}>Project Manager</option>
                        <option value="site_supervisor" {{ old('role') == 'site_supervisor' ? 'selected' : '' }}>Site Supervisor</option>
                        <option value="accountant" {{ old('role') == 'accountant' ? 'selected' : '' }}>Accountant</option>
                        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                    @error('role')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <div class="input-group">
                        <i class="fas fa-lock input-icon"></i>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="form-input @error('password') error @enderror" 
                            required
                            placeholder="Enter your password (min. 8 characters)"
                        >
                    </div>
                    @error('password')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                    <div class="input-group">
                        <i class="fas fa-lock input-icon"></i>
                        <input 
                            type="password" 
                            id="password_confirmation" 
                            name="password_confirmation" 
                            class="form-input" 
                            required
                            placeholder="Confirm your password"
                        >
                    </div>
                </div>

                <button type="submit" class="btn-auth btn-primary">
                    <i class="fas fa-user-plus"></i>
                    Create Account
                </button>
            </form>

            <div class="auth-footer">
                <p style="color: #6B7280; margin-bottom: 0.5rem;">Already have an account?</p>
                <a href="{{ route('login') }}">Sign in instead</a>
            </div>
        </div>
    </div>
</body>
</html>
