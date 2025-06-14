@extends("frontend.master")

@section("title", "Sign Up - ".config("app.name"))
@section("content")

<style>
.signup-section {
    min-height: 100vh;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
    padding: 2rem 0;
}

.signup-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        radial-gradient(circle at 30% 40%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 70% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 60% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
    animation: float 25s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-30px) rotate(2deg); }
}

.signup-card {
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
    max-width: 480px;
    width: 100%;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.signup-card:hover {
    transform: translateY(-8px);
    box-shadow: 
        0 40px 80px rgba(0, 0, 0, 0.15),
        0 20px 40px rgba(0, 0, 0, 0.08);
}

.signup-title {
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

.signup-subtitle {
    text-align: center;
    color: #718096;
    margin-bottom: 2rem;
    font-size: 1rem;
}

.form-group-modern {
    margin-bottom: 1.25rem;
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

.alert-disabled {
    background: linear-gradient(135deg, #fed7d7, #fbb6ce);
    border: none;
    border-radius: 12px;
    padding: 1.5rem;
    color: #c53030;
    font-weight: 600;
    text-align: center;
    font-size: 1.1rem;
}

.checkbox-container {
    display: flex;
    align-items: flex-start;
    margin-bottom: 1.5rem;
    padding: 0.5rem 0;
}

.checkbox-modern {
    position: relative;
    margin-right: 0.75rem;
    margin-top: 0.125rem;
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
    line-height: 1.5;
}

.checkbox-label a {
    color: #667eea;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    position: relative;
}

.checkbox-label a::after {
    content: '';
    position: absolute;
    bottom: -1px;
    left: 0;
    width: 0;
    height: 1px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    transition: width 0.3s ease;
}

.checkbox-label a:hover::after {
    width: 100%;
}

.checkbox-label a:hover {
    color: #764ba2;
}

.btn-signup {
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
    margin-bottom: 1.5rem;
}

.btn-signup::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s ease;
}

.btn-signup:hover::before {
    left: 100%;
}

.btn-signup:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(102, 126, 234, 0.4);
}

.btn-signup:active {
    transform: translateY(0);
}

.login-link {
    text-align: center;
    color: #718096;
    padding-top: 1rem;
    border-top: 1px solid #e2e8f0;
}

.login-link a {
    color: #667eea;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    position: relative;
}

.login-link a::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 0;
    height: 2px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    transition: width 0.3s ease;
}

.login-link a:hover::after {
    width: 100%;
}

.login-link a:hover {
    color: #764ba2;
}

/* Form Row for Side-by-Side Inputs */
.form-row-modern {
    display: flex;
    gap: 1rem;
    margin-bottom: 1.25rem;
}

.form-row-modern .form-group-modern {
    flex: 1;
    margin-bottom: 0;
}

/* Responsive Design */
@media (max-width: 768px) {
    .signup-card {
        margin: 1rem;
        padding: 2rem 1.5rem;
    }
    
    .signup-title {
        font-size: 2rem;
    }
    
    .form-row-modern {
        flex-direction: column;
        gap: 0;
    }
    
    .form-row-modern .form-group-modern {
        margin-bottom: 1.25rem;
    }
}

/* Dark mode support */
@media (prefers-color-scheme: dark) {
    .signup-card {
        background: rgba(26, 32, 44, 0.95);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .signup-title {
        color: #e2e8f0;
    }
    
    .signup-subtitle {
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
    
    .login-link {
        color: #a0aec0;
        border-top-color: #4a5568;
    }
}

/* Success Animation */
@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

.form-control-modern.success {
    border-color: #48bb78;
    animation: pulse 0.3s ease;
}

/* Password Strength Indicator */
.password-strength {
    height: 4px;
    background: #e2e8f0;
    border-radius: 2px;
    margin-top: 0.5rem;
    overflow: hidden;
}

.password-strength-bar {
    height: 100%;
    width: 0%;
    transition: all 0.3s ease;
    border-radius: 2px;
}

.strength-weak { background: #f56565; width: 25%; }
.strength-fair { background: #ed8936; width: 50%; }
.strength-good { background: #38b2ac; width: 75%; }
.strength-strong { background: #48bb78; width: 100%; }
</style>

<section class="signup-section">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center">
                <div class="signup-card">
                    @if ($enable_registration)
                        <h1 class="signup-title">Join Us</h1>
                        <p class="signup-subtitle">Create your account and get started</p>
                        
                        @if ($errors->any())
                        <div class="alert-modern">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                        @endif
                        
                        <form action="{{ route("auth.signup") }}" method="POST">
                            @csrf
                            
                            <div class="form-group-modern">
                                <input 
                                    type="text" 
                                    class="form-control-modern" 
                                    placeholder="Full Name" 
                                    name="name" 
                                    value="{{ old("name") }}"
                                    required
                                />
                            </div>
                            
                            <div class="form-group-modern">
                                <input 
                                    type="text" 
                                    class="form-control-modern" 
                                    placeholder="Username" 
                                    name="username" 
                                    value="{{ old("username") }}"
                                    required
                                />
                            </div>
                            
                            <div class="form-group-modern">
                                <input 
                                    type="email" 
                                    class="form-control-modern" 
                                    placeholder="Email Address" 
                                    name="email" 
                                    value="{{ old("email") }}"
                                    required
                                />
                            </div>
                            
                            <div class="form-group-modern">
                                <input 
                                    type="password" 
                                    class="form-control-modern" 
                                    placeholder="Password" 
                                    name="password"
                                    id="password"
                                    required
                                />
                                <div class="password-strength">
                                    <div class="password-strength-bar" id="strengthBar"></div>
                                </div>
                            </div>
                            
                            <div class="form-group-modern">
                                <input 
                                    type="password" 
                                    class="form-control-modern" 
                                    placeholder="Confirm Password" 
                                    name="password_confirmation"
                                    required
                                />
                            </div>
                            
                            <div class="checkbox-container">
                                <div class="checkbox-modern">
                                    <input name="agree" value="1" type="checkbox" id="agreeTerms" required>
                                    <div class="checkmark"></div>
                                </div>
                                <label class="checkbox-label" for="agreeTerms">
                                    I agree to the <a href="#" onclick="return false;">terms & conditions</a>
                                </label>
                            </div>
                            
                            <button type="submit" class="btn-signup">
                                Create Account
                            </button>
                            
                            <div class="login-link">
                                Already have an account? 
                                <a href="{{ route("auth.login") }}">Sign In</a>
                            </div>
                        </form>
                    @else
                        <div class="alert-disabled">
                            <span>🚫 User registration is currently not allowed!</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Password Strength Indicator
document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('password');
    const strengthBar = document.getElementById('strengthBar');
    
    if (passwordInput && strengthBar) {
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            const strength = calculatePasswordStrength(password);
            
            strengthBar.className = 'password-strength-bar';
            
            if (strength >= 80) {
                strengthBar.classList.add('strength-strong');
            } else if (strength >= 60) {
                strengthBar.classList.add('strength-good');
            } else if (strength >= 40) {
                strengthBar.classList.add('strength-fair');
            } else if (strength > 0) {
                strengthBar.classList.add('strength-weak');
            } else {
                strengthBar.style.width = '0%';
            }
        });
    }
    
    function calculatePasswordStrength(password) {
        let strength = 0;
        
        if (password.length >= 8) strength += 25;
        if (password.match(/[a-z]/)) strength += 25;
        if (password.match(/[A-Z]/)) strength += 25;
        if (password.match(/[0-9]/)) strength += 15;
        if (password.match(/[^a-zA-Z0-9]/)) strength += 10;
        
        return Math.min(strength, 100);
    }
    
    // Form Validation Animation
    const inputs = document.querySelectorAll('.form-control-modern');
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            if (this.value && this.checkValidity()) {
                this.classList.add('success');
                setTimeout(() => {
                    this.classList.remove('success');
                }, 300);
            }
        });
    });
});
</script>

@endsection