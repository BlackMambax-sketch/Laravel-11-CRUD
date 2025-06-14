@extends("frontend.master")
@section("title", "Log In - ".config("app.name"))
@section("content")

<style>
.login-section {
    min-height: 100vh;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
}

.login-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 40% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
    animation: float 20s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(1deg); }
}

.login-card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    border-radius: 24px;
    padding: 3rem 2.5rem;
    box-shadow: 
        0 32px 64px rgba(0, 0, 0, 0.1),
        0 16px 32px rgba(0, 0, 0, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.2);
    position: relative;
    z-index: 2;
    max-width: 420px;
    width: 100%;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.login-card:hover {
    transform: translateY(-8px);
    box-shadow: 
        0 40px 80px rgba(0, 0, 0, 0.15),
        0 20px 40px rgba(0, 0, 0, 0.08);
}

.login-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #2d3748;
    text-align: center;
    margin-bottom: 0.5rem;
    background: linear-gradient(135deg, #667eea, #764ba2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.login-subtitle {
    text-align: center;
    color: #718096;
    margin-bottom: 2.5rem;
    font-size: 1rem;
}

.form-group-modern {
    margin-bottom: 1.5rem;
    position: relative;
}

.form-control-modern {
    width: 100%;
    padding: 1rem 1.25rem;
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: #f7fafc;
    color: #2d3748;
}

.form-control-modern:focus {
    outline: none;
    border-color: #667eea;
    background: #ffffff;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    transform: translateY(-2px);
}

.form-control-modern::placeholder {
    color: #a0aec0;
    font-weight: 500;
}

.alert-modern {
    background: linear-gradient(135deg, #fed7d7, #feb2b2);
    border: none;
    border-radius: 12px;
    padding: 1rem 1.25rem;
    margin-bottom: 1.5rem;
    color: #c53030;
    font-weight: 500;
}

.alert-modern p {
    margin: 0;
    font-size: 0.9rem;
}

.checkbox-container {
    display: flex;
    align-items: center;
    margin-bottom: 2rem;
}

.checkbox-modern {
    position: relative;
    margin-right: 0.75rem;
}

.checkbox-modern input[type="checkbox"] {
    opacity: 0;
    position: absolute;
}

.checkbox-modern .checkmark {
    width: 20px;
    height: 20px;
    background: #f7fafc;
    border: 2px solid #e2e8f0;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    cursor: pointer;
}

.checkbox-modern input[type="checkbox"]:checked + .checkmark {
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-color: #667eea;
    transform: scale(1.1);
}

.checkbox-modern .checkmark::after {
    content: '✓';
    color: white;
    font-size: 12px;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.checkbox-modern input[type="checkbox"]:checked + .checkmark::after {
    opacity: 1;
}

.checkbox-label {
    color: #4a5568;
    font-weight: 500;
    cursor: pointer;
    user-select: none;
}

.btn-login {
    width: 100%;
    padding: 1rem;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    border-radius: 12px;
    color: white;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    position: relative;
    overflow: hidden;
}

.btn-login::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s ease;
}

.btn-login:hover::before {
    left: 100%;
}

.btn-login:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(102, 126, 234, 0.4);
}

.btn-login:active {
    transform: translateY(0);
}

.signup-link {
    text-align: center;
    margin-top: 2rem;
    color: #718096;
    padding-top: 1.5rem;
    border-top: 1px solid #e2e8f0;
}

.signup-link a {
    color: #667eea;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    position: relative;
}

.signup-link a::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 0;
    height: 2px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    transition: width 0.3s ease;
}

.signup-link a:hover::after {
    width: 100%;
}

.signup-link a:hover {
    color: #764ba2;
}

/* Responsive Design */
@media (max-width: 768px) {
    .login-card {
        margin: 1rem;
        padding: 2rem 1.5rem;
    }
    
    .login-title {
        font-size: 2rem;
    }
}

/* Dark mode support */
@media (prefers-color-scheme: dark) {
    .login-card {
        background: rgba(26, 32, 44, 0.95);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .login-title {
        color: #e2e8f0;
    }
    
    .login-subtitle {
        color: #a0aec0;
    }
    
    .form-control-modern {
        background: #2d3748;
        border-color: #4a5568;
        color: #e2e8f0;
    }
    
    .form-control-modern:focus {
        background: #374151;
    }
    
    .checkbox-label {
        color: #e2e8f0;
    }
    
    .signup-link {
        color: #a0aec0;
        border-top-color: #4a5568;
    }
}
</style>

<section class="login-section">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center">
                <div class="login-card">
                    <h1 class="login-title">Welcome Back</h1>
                    <p class="login-subtitle">Sign in to your account</p>
                    
                    @if ($errors->any())
                    <div class="alert-modern">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                    @endif
                    
                    <form action="{{ route("auth.login") }}" method="POST">
                        @csrf
                        
                        <div class="form-group-modern">
                            <input 
                                type="text" 
                                class="form-control-modern" 
                                placeholder="Email or Username" 
                                name="email_or_username" 
                                value="{{ old("email_or_username") }}"
                                required
                            />
                        </div>
                        
                        <div class="form-group-modern">
                            <input 
                                type="password" 
                                class="form-control-modern" 
                                placeholder="Password" 
                                name="password"
                                required
                            />
                        </div>
                        
                        <div class="checkbox-container">
                            <div class="checkbox-modern">
                                <input type="checkbox" name="remember" value="1" id="rememberMe">
                                <div class="checkmark"></div>
                            </div>
                            <label class="checkbox-label" for="rememberMe">Remember me</label>
                        </div>
                        
                        <button type="submit" class="btn-login">
                            Sign In
                        </button>
                        
                        <div class="signup-link">
                            Don't have an account? 
                            <a href="{{ route("auth.signup") }}">Create one</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection