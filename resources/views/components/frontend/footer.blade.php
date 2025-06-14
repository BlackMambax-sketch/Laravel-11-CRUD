<style>
.footer {
    position: relative;
    overflow: hidden;
}

.footer-area {
    background: linear-gradient(135deg, #2d3748 0%, #1a202c 100%);
    position: relative;
}

.footer-area::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        radial-gradient(circle at 20% 20%, rgba(102, 126, 234, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(118, 75, 162, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 60% 40%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
}

.footer-area-content {
    position: relative;
    z-index: 2;
    padding: 4rem 0 2rem;
}

.footer-area-content::before {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 4px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 2px;
    box-shadow: 0 0 20px rgba(102, 126, 234, 0.3);
}

.footer-menu {
    margin-bottom: 2rem;
}

.footer-menu h6 {
    color: #ffffff;
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    position: relative;
    padding-bottom: 0.5rem;
}

.footer-menu h6::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 40px;
    height: 2px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 1px;
}

.footer-menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-menu ul li {
    margin-bottom: 0.75rem;
    transform: translateX(0);
    transition: transform 0.3s ease;
}

.footer-menu ul li:hover {
    transform: translateX(8px);
}

.footer-menu ul li a {
    color: #cbd5e0;
    text-decoration: none;
    font-weight: 500;
    position: relative;
    transition: all 0.3s ease;
    display: inline-block;
    padding: 0.25rem 0;
}

.footer-menu ul li a::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    transition: width 0.3s ease;
}

.footer-menu ul li a:hover {
    color: #ffffff;
}

.footer-menu ul li a:hover::before {
    width: 100%;
}

.footer-description {
    text-align: center;
    margin-bottom: 2rem;
    padding: 0 1rem;
}

.footer-description p {
    color: #e2e8f0 !important;
    font-size: 1.1rem;
    line-height: 1.8;
    max-width: 600px;
    margin: 0 auto;
    position: relative;
    padding: 1.5rem;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 16px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.footer-description p::before {
    content: '"';
    position: absolute;
    top: -10px;
    left: 20px;
    font-size: 3rem;
    color: #667eea;
    font-family: serif;
    opacity: 0.3;
}

.footer-description p::after {
    content: '"';
    position: absolute;
    bottom: -30px;
    right: 20px;
    font-size: 3rem;
    color: #764ba2;
    font-family: serif;
    opacity: 0.3;
}

.social-menu {
    margin-bottom: 2rem;
}

.social-menu h6 {
    color: #ffffff;
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    position: relative;
    padding-bottom: 0.5rem;
}

.social-menu h6::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 40px;
    height: 2px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 1px;
}

.social-menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
}

.social-menu ul li a {
    color: #cbd5e0;
    text-decoration: none;
    font-weight: 500;
    position: relative;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    padding: 0.5rem 0.75rem;
    border-radius: 8px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(5px);
}

.social-menu ul li a::before {
    content: '→';
    margin-right: 0.5rem;
    transition: transform 0.3s ease;
    color: #667eea;
}

.social-menu ul li a:hover {
    color: #ffffff;
    background: rgba(102, 126, 234, 0.2);
    border-color: rgba(102, 126, 234, 0.3);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(102, 126, 234, 0.2);
}

.social-menu ul li a:hover::before {
    transform: translateX(4px);
}

.footer-area-copyright {
    background: rgba(0, 0, 0, 0.3);
    backdrop-filter: blur(10px);
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding: 1.5rem 0;
    position: relative;
    z-index: 2;
}

.copyright {
    text-align: center;
}

.copyright p {
    color: #a0aec0;
    margin: 0;
    font-size: 0.9rem;
    font-weight: 500;
    position: relative;
    display: inline-block;
    padding: 0.5rem 1rem;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

/* Responsive Design */
@media (max-width: 768px) {
    .footer-area-content {
        padding: 3rem 0 1.5rem;
    }
    
    .footer-menu,
    .social-menu {
        text-align: center;
        margin-bottom: 2.5rem;
    }
    
    .footer-menu h6::after,
    .social-menu h6::after {
        left: 50%;
        transform: translateX(-50%);
    }
    
    .footer-description p {
        font-size: 1rem;
        padding: 1rem;
    }
    
    .social-menu ul {
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .social-menu ul li a {
        margin: 0.25rem;
    }
}

/* Hover Effects for Mobile */
@media (hover: none) and (pointer: coarse) {
    .footer-menu ul li:hover {
        transform: none;
    }
    
    .social-menu ul li a:hover {
        transform: none;
    }
}

/* Dark Theme Enhancement */
.footer-area {
    box-shadow: 0 -10px 30px rgba(0, 0, 0, 0.2);
}

/* Scroll-triggered Animation */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.footer-menu,
.footer-description,
.social-menu {
    animation: fadeInUp 0.6s ease forwards;
}

.footer-description {
    animation-delay: 0.2s;
}

.social-menu {
    animation-delay: 0.4s;
}
</style>

<div class="footer">
    <div class="footer-area">
        <div class="footer-area-content">
            <div class="container">
                <div class="row">
                    @if (count($menu) > 0)
                    <div class="col-md-3">
                        <div class="footer-menu">
                            <h6>Menu</h6>
                            <ul>
                                @foreach ($menu as $item)
                                <li><a href="{{ $item["href"] }}">{{ $item["text"] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                    
                    <div class="col-md-6">
                        <div class="footer-description">
                            <p>{{ $sitesettings->description }}</p>
                        </div>
                    </div>
                    
                    @if ($socialmedia->count() > 0)
                    <div class="col-md-3">
                        <div class="social-menu">
                            <h6>Follow Us</h6>
                            <ul>
                                @foreach ($socialmedia as $media)
                                <li><a href="{{ $media->link }}" target="_blank" rel="noopener noreferrer">{{ $media->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        
        <div class="footer-area-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright">
                            <p>{{ $sitesettings->copyright_text }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
