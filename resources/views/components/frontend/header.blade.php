<style>
.header {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    box-shadow: 0 4px 32px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    z-index: 1000;
}

.header.scrolled {
    background: rgba(255, 255, 255, 0.98);
    box-shadow: 0 8px 40px rgba(0, 0, 0, 0.12);
}

.header-area {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem 0;
    position: relative;
}

/* Logo Styling */
.logo {
    flex-shrink: 0;
    transition: transform 0.3s ease;
}

.logo:hover {
    transform: scale(1.05);
}

.logo a {
    display: block;
    position: relative;
}

.logo img {
    height: 40px;
    width: auto;
    transition: all 0.3s ease;
    filter: drop-shadow(0 2px 8px rgba(0, 0, 0, 0.1));
}

.logo-dark {
    display: block;
}

.logo-white {
    display: none;
}

/* Navigation Styling */
.header-navbar {
    flex: 1;
    display: flex;
    justify-content: center;
}

.navbar {
    padding: 0;
}

.navbar-nav {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin: 0;
    padding: 0;
    list-style: none;
}

.nav-item {
    position: relative;
}

.nav-link {
    color: #4a5568;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.95rem;
    padding: 0.75rem 1.25rem;
    border-radius: 12px;
    transition: all 0.3s ease;
    position: relative;
    display: block;
    text-transform: capitalize;
}

.nav-link::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, #667eea, #764ba2);
    opacity: 0;
    border-radius: 12px;
    transition: opacity 0.3s ease;
    z-index: -1;
}

.nav-link:hover,
.nav-link.active {
    color: #ffffff;
    transform: translateY(-2px);
}

.nav-link:hover::before,
.nav-link.active::before {
    opacity: 1;
}

.nav-link.active {
    box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
}

/* Header Right Section */
.header-right {
    display: flex;
    align-items: center;
    gap: 1rem;
    flex-shrink: 0;
}

/* Theme Switch */
.theme-switch-wrapper {
    display: flex;
    align-items: center;
}

.theme-switch {
    display: inline-block;
    height: 34px;
    position: relative;
    width: 60px;
    cursor: pointer;
}

.theme-switch input {
    display: none;
}

.slider {
    background: linear-gradient(135deg, #ffd89b 0%, #19547b 100%);
    bottom: 0;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    transition: all 0.4s ease;
    border-radius: 34px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.slider:before {
    background: #ffffff;
    bottom: 4px;
    content: "";
    height: 26px;
    left: 4px;
    position: absolute;
    transition: all 0.4s ease;
    width: 26px;
    border-radius: 50%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

input:checked + .slider {
    background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
}

input:checked + .slider:before {
    transform: translateX(26px);
}

.icon-light,
.icon-dark {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 14px;
    transition: all 0.3s ease;
}

.icon-light {
    left: 8px;
    color: #f39c12;
}

.icon-dark {
    right: 8px;
    color: #f1c40f;
}

input:checked + .slider .icon-light {
    opacity: 0.3;
}

input:not(:checked) + .slider .icon-dark {
    opacity: 0.3;
}

/* Search Icon */
.search-icon {
    width: 44px;
    height: 44px;
    background: rgba(102, 126, 234, 0.1);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.search-icon::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s ease;
}

.search-icon:hover::before {
    left: 100%;
}

.search-icon:hover {
    background: linear-gradient(135deg, #667eea, #764ba2);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
}

.search-icon i {
    font-size: 18px;
    color: #667eea;
    transition: color 0.3s ease;
}

.search-icon:hover i {
    color: #ffffff;
}

/* Subscribe Button */
.botton-sub {
    margin-left: 0.5rem;
}

.btn-subscribe {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: #ffffff;
    text-decoration: none;
    padding: 0.75rem 1.5rem;
    border-radius: 12px;
    font-weight: 600;
    font-size: 0.9rem;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    display: inline-block;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.btn-subscribe::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s ease;
}

.btn-subscribe:hover::before {
    left: 100%;
}

.btn-subscribe:hover {
    color: #ffffff;
    text-decoration: none;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
}

/* Mobile Menu Button */
.navbar-toggler {
    border: none;
    padding: 0.5rem;
    background: rgba(102, 126, 234, 0.1);
    border-radius: 8px;
    transition: all 0.3s ease;
    display: none;
}

.navbar-toggler:focus {
    box-shadow: none;
    outline: none;
}

.navbar-toggler-icon {
    background-image: none;
    width: 20px;
    height: 2px;
    background: #667eea;
    border-radius: 1px;
    position: relative;
    transition: all 0.3s ease;
}

.navbar-toggler-icon::before,
.navbar-toggler-icon::after {
    content: '';
    position: absolute;
    width: 20px;
    height: 2px;
    background: #667eea;
    border-radius: 1px;
    transition: all 0.3s ease;
}

.navbar-toggler-icon::before {
    top: -6px;
}

.navbar-toggler-icon::after {
    top: 6px;
}

.navbar-toggler:hover {
    background: rgba(102, 126, 234, 0.2);
}

/* Dark Mode */
.dark-mode .header {
    background: rgba(26, 32, 44, 0.95);
    border-bottom-color: rgba(255, 255, 255, 0.1);
    box-shadow: 0 4px 32px rgba(0, 0, 0, 0.3);
}

.dark-mode .header.scrolled {
    background: rgba(26, 32, 44, 0.98);
}

.dark-mode .logo-dark {
    display: none;
}

.dark-mode .logo-white {
    display: block;
}

.dark-mode .nav-link {
    color: #e2e8f0;
}

.dark-mode .search-icon {
    background: rgba(255, 255, 255, 0.1);
}

.dark-mode .search-icon i {
    color: #e2e8f0;
}

.dark-mode .navbar-toggler {
    background: rgba(255, 255, 255, 0.1);
}

.dark-mode .navbar-toggler-icon,
.dark-mode .navbar-toggler-icon::before,
.dark-mode .navbar-toggler-icon::after {
    background: #e2e8f0;
}

/* Responsive Design */
@media (max-width: 991px) {
    .navbar-toggler {
        display: block;
    }
    
    .header-navbar {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(20px);
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        transform: translateY(-10px);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 1000;
    }
    
    .navbar-collapse.show + .header-navbar,
    .navbar-collapse.collapsing + .header-navbar {
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
    }
    
    .navbar-nav {
        flex-direction: column;
        padding: 1rem;
        gap: 0.25rem;
    }
    
    .nav-link {
        padding: 1rem;
        border-radius: 8px;
        width: 100%;
        text-align: center;
    }
    
    .header-right {
        gap: 0.75rem;
    }
    
    .btn-subscribe {
        padding: 0.6rem 1.2rem;
        font-size: 0.85rem;
    }
    
    .dark-mode .header-navbar {
        background: rgba(26, 32, 44, 0.98);
        border-top-color: rgba(255, 255, 255, 0.1);
    }
}

@media (max-width: 576px) {
    .header-area {
        padding: 0.75rem 0;
    }
    
    .logo img {
        height: 35px;
    }
    
    .header-right {
        gap: 0.5rem;
    }
    
    .theme-switch {
        width: 50px;
        height: 28px;
    }
    
    .theme-switch .slider:before {
        width: 20px;
        height: 20px;
        bottom: 4px;
    }
    
    .theme-switch input:checked + .slider:before {
        transform: translateX(22px);
    }
    
    .search-icon {
        width: 38px;
        height: 38px;
    }
    
    .search-icon i {
        font-size: 16px;
    }
    
    .btn-subscribe {
        padding: 0.5rem 1rem;
        font-size: 0.8rem;
    }
}

/* Scroll Animation */
@keyframes slideDown {
    from {
        transform: translateY(-100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.header {
    animation: slideDown 0.5s ease forwards;
}

/* Mobile Menu Animation */
@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.navbar-collapse.show .nav-item {
    animation: fadeInDown 0.3s ease forwards;
}

.navbar-collapse.show .nav-item:nth-child(1) { animation-delay: 0.1s; }
.navbar-collapse.show .nav-item:nth-child(2) { animation-delay: 0.2s; }
.navbar-collapse.show .nav-item:nth-child(3) { animation-delay: 0.3s; }
.navbar-collapse.show .nav-item:nth-child(4) { animation-delay: 0.4s; }
.navbar-collapse.show .nav-item:nth-child(5) { animation-delay: 0.5s; }
</style>

<header class="header navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <div class="header-area">
            <div class="logo">
                <a href="{{ route("frontend.home") }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Site Logo" class="logo-dark"/>
                    <img src="{{ asset('images/logo.png') }}" alt="Site Logo" class="logo-white"/>
                </a>
            </div>
            
            <div class="header-navbar">
                <nav class="navbar">
                    <div class="collapse navbar-collapse" id="main_nav">
                        @if (count($menu) > 0)
                        <ul class="navbar-nav">
                            @foreach ($menu as $item)
                            <li class="nav-item">
                                <a class="nav-link{{ request()->url() == $item["href"] ? " active" : "" }}" href="{{ $item["href"] }}">{{ $item["text"] }}</a>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </nav>
            </div>
            
            <div class="header-right">
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox" />
                        <span class="slider round">
                            <i class="lar la-sun icon-light"></i>
                            <i class="lar la-moon icon-dark"></i>
                        </span>
                    </label>
                </div>
                
                <div class="search-icon">
                    <i class="las la-search"></i>
                </div>
                
                @auth
                <div class="botton-sub">
                    <a href="{{ route("dashboard.home") }}" class="btn-subscribe">Dashboard</a>
                </div>
                @else
                <div class="botton-sub">
                    <a href="{{ route("auth.login") }}" class="btn-subscribe">Log In</a>
                </div>
                @endauth
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </div>
</header>

<script>
// Header scroll effect
document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.header');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
    
    // Theme toggle functionality
    const themeToggle = document.getElementById('checkbox');
    
    // Check for saved theme preference or default to 'light' mode
    const currentTheme = localStorage.getItem('theme') || 'light';
    document.body.classList.toggle('dark-mode', currentTheme === 'dark');
    themeToggle.checked = currentTheme === 'dark';
    
    themeToggle.addEventListener('change', function() {
        if (this.checked) {
            document.body.classList.add('dark-mode');
            localStorage.setItem('theme', 'dark');
        } else {
            document.body.classList.remove('dark-mode');
            localStorage.setItem('theme', 'light');
        }
    });
    
    // Mobile menu smooth toggle
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    navbarToggler.addEventListener('click', function() {
        // Add a small delay to allow Bootstrap to handle the collapse
        setTimeout(() => {
            if (navbarCollapse.classList.contains('show')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        }, 50);
    });
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        const isClickInsideNav = navbarCollapse.contains(event.target);
        const isClickOnToggler = navbarToggler.contains(event.target);
        
        if (!isClickInsideNav && !isClickOnToggler && navbarCollapse.classList.contains('show')) {
            navbarToggler.click();
        }
    });
    
    // Search functionality (placeholder)
    const searchIcon = document.querySelector('.search-icon');
    searchIcon.addEventListener('click', function() {
        // Add your search functionality here
        console.log('Search clicked');
        // Example: show search modal or redirect to search page
    });
});
</script>