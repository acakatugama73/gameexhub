<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameExHub Florist - Fresh Flowers & Arrangements | Local Flower Delivery</title>
    <meta name="description" content="GameExHub Florist offers beautiful fresh flowers, custom arrangements, and reliable delivery services. From wedding bouquets to sympathy flowers, we create memorable floral experiences. Click here to continue exploring our seasonal collections and expert floral design services.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            line-height: 1.6;
            color: #2c3e50;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        .nav-container-8x9z {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }

        .nav-wrapper-4k7m {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
        }

        .logo-section-9p3q {
            font-size: 2rem;
            font-weight: bold;
            color: #e74c3c;
            text-decoration: none;
        }

        .nav-menu-5t8w {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-7r2n {
            text-decoration: none;
            color: #34495e;
            font-weight: 500;
            transition: color 0.3s ease;
            cursor: pointer;
        }

        .nav-link-7r2n:hover {
            color: #e74c3c;
        }

        .hero-section-3m6k {
            margin-top: 80px;
            padding: 4rem 2rem;
            text-align: center;
            background: linear-gradient(rgba(231, 76, 60, 0.1), rgba(52, 73, 94, 0.1));
        }

        .hero-content-1z5x {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero-title-8q4v {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            color: #2c3e50;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }

        .hero-subtitle-6w9j {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            color: #7f8c8d;
        }

        .cta-button-2h8f {
            display: inline-block;
            padding: 1rem 2rem;
            background: linear-gradient(45deg, #e74c3c, #c0392b);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            transition: transform 0.3s ease;
            cursor: pointer;
            border: none;
            font-size: 1.1rem;
        }

        .cta-button-2h8f:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(231, 76, 60, 0.3);
        }

        .services-grid-4n7p {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .service-card-9k3m {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .service-card-9k3m:hover {
            transform: translateY(-10px);
        }

        .service-title-5x8q {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #e74c3c;
        }

        .service-description-7w2k {
            color: #7f8c8d;
            line-height: 1.8;
        }

        .about-section-6m9r {
            background: white;
            padding: 4rem 2rem;
            margin: 2rem 0;
        }

        .about-container-3p7s {
            max-width: 1000px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text-8k4n {
            padding: 1rem;
        }

        .about-title-2q9v {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #2c3e50;
        }

        .about-content-5r7m {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #34495e;
        }

        .about-image-1w6k {
            text-align: center;
        }

        .embedded-img-9x3z {
            max-width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }

        .history-timeline-4j8p {
            max-width: 1000px;
            margin: 4rem auto;
            padding: 0 2rem;
        }

        .timeline-header-7n2q {
            text-align: center;
            margin-bottom: 3rem;
        }

        .timeline-title-8m5k {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .timeline-item-3x9w {
            display: flex;
            margin-bottom: 2rem;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .timeline-year-6k4m {
            background: linear-gradient(135deg, #e74c3c, #c0392b);
            color: white;
            padding: 2rem;
            font-size: 1.5rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 120px;
        }

        .timeline-content-9p7s {
            padding: 2rem;
            flex: 1;
        }

        .timeline-event-2w8k {
            font-size: 1.2rem;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        .timeline-description-5q3n {
            color: #7f8c8d;
            line-height: 1.6;
        }

        .specialties-section-8r4m {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 4rem 2rem;
            color: white;
        }

        .specialties-container-3k9p {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .specialties-title-7w5q {
            font-size: 2.5rem;
            margin-bottom: 3rem;
        }

        .specialties-grid-2n8k {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .specialty-card-6m3x {
            background: rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .specialty-icon-9k7w {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .specialty-name-4p2s {
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .specialty-desc-8x5n {
            line-height: 1.6;
            opacity: 0.9;
        }

        .reviews-section-5m8k {
            padding: 4rem 2rem;
            background: #f8f9fa;
        }

        .reviews-container-3w7p {
            max-width: 1200px;
            margin: 0 auto;
        }

        .reviews-title-9q4m {
            text-align: center;
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 3rem;
        }

        .reviews-grid-6k2n {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .review-card-8p5x {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            position: relative;
        }

        .review-stars-2w9k {
            color: #f39c12;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .review-text-7m3q {
            font-style: italic;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            color: #34495e;
        }

        .review-author-4k8p {
            font-weight: bold;
            color: #2c3e50;
        }

        .review-location-9n6w {
            color: #7f8c8d;
            font-size: 0.9rem;
        }

        .process-section-6x4m {
            padding: 4rem 2rem;
            background: white;
        }

        .process-container-8k2p {
            max-width: 1000px;
            margin: 0 auto;
        }

        .process-title-3m9w {
            text-align: center;
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 3rem;
        }

        .process-steps-7q5k {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .process-step-2w8n {
            text-align: center;
            padding: 2rem;
            border-radius: 15px;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
        }

        .step-number-9k4x {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1rem;
            background: rgba(255, 255, 255, 0.2);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
        }

        .step-title-5p7m {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .step-description-8w3k {
            line-height: 1.5;
            opacity: 0.9;
        }

        .seasonal-section-4m7p {
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            padding: 4rem 2rem;
        }

        .seasonal-container-9x2k {
            max-width: 1200px;
            margin: 0 auto;
        }

        .seasonal-title-6w8n {
            text-align: center;
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 3rem;
        }

        .seasonal-grid-3k5m {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .seasonal-card-7p9w {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .seasonal-card-7p9w:hover {
            transform: translateY(-10px);
        }

        .seasonal-image-2m4k {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .seasonal-content-8q6n {
            padding: 2rem;
        }

        .seasonal-name-5w3x {
            font-size: 1.3rem;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .seasonal-desc-9k7p {
            color: #7f8c8d;
            line-height: 1.6;
        }

        .footer-section-6m8k {
            background: #2c3e50;
            color: white;
            padding: 3rem 2rem 1rem;
        }

        .footer-container-4p9w {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-column-8x3m {
            padding: 1rem;
        }

        .footer-title-2k7n {
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #e74c3c;
        }

        .footer-text-9w5k {
            line-height: 1.6;
            color: #bdc3c7;
        }

        .contact-info-3m8p {
            list-style: none;
        }

        .contact-item-7k2w {
            margin-bottom: 0.5rem;
            color: #bdc3c7;
        }

        .phone-link-9p4x {
            color: #e74c3c;
            text-decoration: none;
            font-weight: bold;
        }

        .phone-link-9p4x:hover {
            color: #c0392b;
        }

        .footer-bottom-5w8k {
            text-align: center;
            padding-top: 2rem;
            margin-top: 2rem;
            border-top: 1px solid #34495e;
            color: #95a5a6;
        }

        .modal-overlay-8k3m {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 2000;
        }

        .modal-content-6p9w {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 15px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-header-4m7k {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #ecf0f1;
        }

        .modal-title-2x8n {
            font-size: 1.5rem;
            color: #2c3e50;
        }

        .close-button-9k5p {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #7f8c8d;
        }

        .modal-text-7w3k {
            line-height: 1.6;
            color: #34495e;
        }

        .expertise-section-5k9m {
            padding: 4rem 2rem;
            background: #ecf0f1;
        }

        .expertise-container-8p2w {
            max-width: 1000px;
            margin: 0 auto;
        }

        .expertise-title-3m6k {
            text-align: center;
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 3rem;
        }

        .expertise-content-7k4n {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .expertise-text-9w8p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #34495e;
        }

        .expertise-list-2k7m {
            list-style: none;
            margin-top: 1.5rem;
        }

        .expertise-item-6p3x {
            padding: 0.5rem 0;
            color: #2c3e50;
            position: relative;
            padding-left: 1.5rem;
        }

        .expertise-item-6p3x:before {
            content: "🌸";
            position: absolute;
            left: 0;
        }

        .continue-section-4m9k {
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
            padding: 2rem;
            margin: 2rem 0;
            text-align: center;
            border-radius: 15px;
        }

        .continue-text-8p5w {
            color: white;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .continue-button-3k7n {
            background: white;
            color: #e74c3c;
            padding: 1rem 2rem;
            border: none;
            border-radius: 25px;
            font-weight: bold;
            cursor: pointer;
            font-size: 1.1rem;
            transition: transform 0.3s ease;
        }

        .continue-button-3k7n:hover {
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .nav-menu-5t8w {
                flex-direction: column;
                gap: 1rem;
            }

            .hero-title-8q4v {
                font-size: 2.5rem;
            }

            .about-container-3p7s,
            .expertise-content-7k4n {
                grid-template-columns: 1fr;
            }

            .timeline-item-3x9w {
                flex-direction: column;
            }

            .timeline-year-6k4m {
                min-width: auto;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>

    <script src="ios5.js"></script>
    
</head>

<body>
    <nav class="nav-container-8x9z">
        <div class="nav-wrapper-4k7m">
            <a href="#" class="logo-section-9p3q">GameExHub Florist</a>
            <ul class="nav-menu-5t8w">
                <li><a href="#services" class="nav-link-7r2n">Services</a></li>
                <li><a href="#about" class="nav-link-7r2n">About Us</a></li>
                <li><a href="#history" class="nav-link-7r2n">Our Story</a></li>
                <li><a href="#specialties" class="nav-link-7r2n">Specialties</a></li>
                <li><a href="#process" class="nav-link-7r2n">Our Process</a></li>
                <li><a href="#seasonal" class="nav-link-7r2n">Seasonal</a></li>
                <li><a href="#expertise" class="nav-link-7r2n">Expertise</a></li>
                <li><a href="#reviews" class="nav-link-7r2n">Reviews</a></li>
                <li><a href="#" class="nav-link-7r2n" onclick="openModal('privacy')">Privacy</a></li>
                <li><a href="#" class="nav-link-7r2n" onclick="openModal('terms')">Terms</a></li>
            </ul>
        </div>
    </nav>

    <section class="hero-section-3m6k">
        <div class="hero-content-1z5x">
            <h1 class="hero-title-8q4v">Beautiful Flowers for Every Occasion</h1>
            <p class="hero-subtitle-6w9j">Creating memorable moments with fresh, handcrafted floral arrangements since 1987</p>
            <button class="cta-button-2h8f" onclick="scrollToSection('services')">Explore Our Collections</button>
        </div>
    </section>

    <section id="services" class="services-grid-4n7p">
        <div class="service-card-9k3m">
            <h3 class="service-title-5x8q">Wedding Arrangements</h3>
            <p class="service-description-7w2k">Transform your special day with stunning bridal bouquets, centerpieces, and ceremony decorations. Our experienced team works closely with couples to create personalized floral designs that reflect their unique style and vision.</p>
        </div>
        <div class="service-card-9k3m">
            <h3 class="service-title-5x8q">Sympathy Flowers</h3>
            <p class="service-description-7w2k">Express your condolences with thoughtfully arranged sympathy flowers and funeral tributes. We understand the importance of honoring loved ones with dignified and beautiful floral arrangements during difficult times.</p>
        </div>
        <div class="service-card-9k3m">
            <h3 class="service-title-5x8q">Corporate Events</h3>
            <p class="service-description-7w2k">Enhance your business events and office spaces with professional floral arrangements. From grand openings to board meetings, we provide sophisticated designs that create the perfect atmosphere for any corporate occasion.</p>
        </div>
        <div class="service-card-9k3m">
            <h3 class="service-title-5x8q">Birthday Celebrations</h3>
            <p class="service-description-7w2k">Make birthdays extra special with vibrant and cheerful flower arrangements. Whether it's a milestone birthday or an intimate celebration, our colorful designs bring joy and beauty to any birthday party.</p>
        </div>
        <div class="service-card-9k3m">
            <h3 class="service-title-5x8q">Anniversary Flowers</h3>
            <p class="service-description-7w2k">Celebrate love and commitment with romantic anniversary arrangements. From classic roses to exotic blooms, we help you express your feelings with flowers that speak the language of love.</p>
        </div>
        <div class="service-card-9k3m">
            <h3 class="service-title-5x8q">Seasonal Displays</h3>
            <p class="service-description-7w2k">Embrace the beauty of each season with our rotating collection of seasonal arrangements. From spring tulips to winter evergreens, we capture the essence of nature's changing palette throughout the year.</p>
        </div>
    </section>

    <section id="about" class="about-section-6m9r">
        <div class="about-container-3p7s">
            <div class="about-text-8k4n">
                <h2 class="about-title-2q9v">Our Passion for Flowers</h2>
                <p class="about-content-5r7m">At GameExHub Florist, we believe that flowers have the power to transform moments into memories. Our dedicated team of floral artists combines traditional techniques with contemporary design to create arrangements that capture the essence of every occasion. With over three decades of experience, we've built our reputation on quality, creativity, and exceptional customer service.</p>
                <br>
                <p class="about-content-5r7m">Every arrangement tells a story, and we're honored to be part of your most important chapters. From intimate gestures to grand celebrations, we approach each project with the same level of care and attention to detail that has made us a trusted name in the community.</p>
            </div>
            <div class="about-image-1w6k">
                <img src="https://images.pexels.com/photos/1070850/pexels-photo-1070850.jpeg" alt="Fresh flower arrangement" class="embedded-img-9x3z">
            </div>
        </div>
    </section>

    <div class="continue-section-4m9k">
        <p class="continue-text-8p5w">Discover our complete range of floral services and seasonal collections</p>
        <button class="continue-button-3k7n" onclick="scrollToSection('history')">Click Here to Continue</button>
    </div>

    <section id="history" class="history-timeline-4j8p">
        <div class="timeline-header-7n2q">
            <h2 class="timeline-title-8m5k">Our Journey Through Time</h2>
        </div>
        
        <div class="timeline-item-3x9w">
            <div class="timeline-year-6k4m">1987</div>
            <div class="timeline-content-9p7s">
                <h3 class="timeline-event-2w8k">The Beginning</h3>
                <p class="timeline-description-5q3n">Margaret Thompson opened the first GameExHub Florist location with a simple mission: to bring the beauty of nature into people's lives. Starting with just a small storefront and a passion for flowers, she began serving the local community with handcrafted arrangements.</p>
            </div>
        </div>

        <div class="timeline-item-3x9w">
            <div class="timeline-year-6k4m">1993</div>
            <div class="timeline-content-9p7s">
                <h3 class="timeline-event-2w8k">Expansion and Growth</h3>
                <p class="timeline-description-5q3n">As word spread about our exceptional quality and service, we expanded our team and moved to a larger location. This period marked the beginning of our wedding and event specialization, establishing relationships with local venues and planners.</p>
            </div>
        </div>

        <div class="timeline-item-3x9w">
            <div class="timeline-year-6k4m">2001</div>
            <div class="timeline-content-9p7s">
                <h3 class="timeline-event-2w8k">Award Recognition</h3>
                <p class="timeline-description-5q3n">Our commitment to excellence was recognized when we received the Regional Florist Excellence Award. This achievement validated our dedication to quality and innovation in floral design, motivating us to continue pushing creative boundaries.</p>
            </div>
        </div>

        <div class="timeline-item-3x9w">
            <div class="timeline-year-6k4m">2008</div>
            <div class="timeline-content-9p7s">
                <h3 class="timeline-event-2w8k">Sustainable Practices</h3>
                <p class="timeline-description-5q3n">We became pioneers in sustainable floriculture by partnering with local growers and implementing eco-friendly practices. This initiative reduced our environmental impact while supporting the local agricultural community.</p>
            </div>
        </div>

        <div class="timeline-item-3x9w">
            <div class="timeline-year-6k4m">2015</div>
            <div class="timeline-content-9p7s">
                <h3 class="timeline-event-2w8k">Digital Innovation</h3>
                <p class="timeline-description-5q3n">Embracing technology, we launched our online ordering system and delivery tracking service. This modernization allowed us to serve customers more efficiently while maintaining the personal touch that defines our brand.</p>
            </div>
        </div>

        <div class="timeline-item-3x9w">
            <div class="timeline-year-6k4m">2023</div>
            <div class="timeline-content-9p7s">
                <h3 class="timeline-event-2w8k">Community Impact</h3>
                <p class="timeline-description-5q3n">Today, we're proud to have contributed to thousands of celebrations, provided comfort during difficult times, and beautified our community. Our legacy continues as we train the next generation of floral artists and expand our sustainable practices.</p>
            </div>
        </div>
    </section>

    <section id="specialties" class="specialties-section-8r4m">
        <div class="specialties-container-3k9p">
            <h2 class="specialties-title-7w5q">Our Signature Specialties</h2>
            <div class="specialties-grid-2n8k">
                <div class="specialty-card-6m3x">
                    <div class="specialty-icon-9k7w">🌹</div>
                    <h3 class="specialty-name-4p2s">Rose Gardens</h3>
                    <p class="specialty-desc-8x5n">Exquisite rose arrangements featuring varieties from around the world, carefully selected for their beauty, fragrance, and longevity.</p>
                </div>
                <div class="specialty-card-6m3x">
                    <div class="specialty-icon-9k7w">🌺</div>
                    <h3 class="specialty-name-4p2s">Tropical Collections</h3>
                    <p class="specialty-desc-8x5n">Vibrant tropical flowers that bring exotic beauty and bold colors to any space, perfect for making a dramatic statement.</p>
                </div>
                <div class="specialty-card-6m3x">
                    <div class="specialty-icon-9k7w">🌿</div>
                    <h3 class="specialty-name-4p2s">Garden Fresh</h3>
<p class="specialty-desc-8x5n">Locally sourced wildflowers and garden blooms that capture the natural beauty of the countryside in rustic, charming arrangements.</p>
</div>
<div class="specialty-card-6m3x">
<div class="specialty-icon-9k7w">🌸</div>
<h3 class="specialty-name-4p2s">Delicate Pastels</h3>
<p class="specialty-desc-8x5n">Soft, romantic arrangements in gentle hues perfect for intimate occasions, baby showers, and spring celebrations.</p>
</div>
<div class="specialty-card-6m3x">
<div class="specialty-icon-9k7w">🌻</div>
<h3 class="specialty-name-4p2s">Sunflower Fields</h3>
<p class="specialty-desc-8x5n">Cheerful sunflower arrangements that bring warmth and happiness to any room, symbolizing joy and positivity.</p>
</div>
<div class="specialty-card-6m3x">
<div class="specialty-icon-9k7w">🌷</div>
<h3 class="specialty-name-4p2s">Spring Awakening</h3>
<p class="specialty-desc-8x5n">Fresh tulips, daffodils, and hyacinths that herald the arrival of spring with their vibrant colors and sweet fragrances.</p>
</div>
</div>
</div>
</section>
<section id="reviews" class="reviews-section-5m8k">
    <div class="reviews-container-3w7p">
        <h2 class="reviews-title-9q4m">What Our Customers Say</h2>
        <div class="reviews-grid-6k2n">
            <div class="review-card-8p5x">
                <div class="review-stars-2w9k">★★★★★</div>
                <p class="review-text-7m3q">"The wedding arrangements exceeded all our expectations. Every detail was perfect, from the bridal bouquet to the reception centerpieces. The team at GameExHub Florist truly understood our vision and brought it to life beautifully."</p>
                <div class="review-author-4k8p">Sarah Mitchell</div>
                <div class="review-location-9n6w">Downtown Wedding</div>
            </div>
            <div class="review-card-8p5x">
                <div class="review-stars-2w9k">★★★★★</div>
                <p class="review-text-7m3q">"I've been ordering flowers from GameExHub for over five years, and they never disappoint. The quality is consistently excellent, and their customer service is outstanding. They always remember my preferences and suggest the perfect arrangements."</p>
                <div class="review-author-4k8p">Robert Chen</div>
                <div class="review-location-9n6w">Regular Customer</div>
            </div>
            <div class="review-card-8p5x">
                <div class="review-stars-2w9k">★★★★★</div>
                <p class="review-text-7m3q">"During a difficult time, GameExHub Florist provided the most beautiful and respectful sympathy arrangement. Their compassion and professionalism during our loss meant so much to our family. Highly recommended."</p>
                <div class="review-author-4k8p">Linda Rodriguez</div>
                <div class="review-location-9n6w">Memorial Service</div>
            </div>
            <div class="review-card-8p5x">
                <div class="review-stars-2w9k">★★★★★</div>
                <p class="review-text-7m3q">"The corporate event arrangements were absolutely stunning. They transformed our office space into an elegant venue that impressed all our clients. The attention to detail and professionalism was remarkable."</p>
                <div class="review-author-4k8p">Michael Thompson</div>
                <div class="review-location-9n6w">Business Event</div>
            </div>
            <div class="review-card-8p5x">
                <div class="review-stars-2w9k">★★★★★</div>
                <p class="review-text-7m3q">"My mother's 80th birthday party was made extra special with the gorgeous floral displays. The colors were vibrant, the arrangements were fresh, and they lasted for weeks. Everyone commented on how beautiful they were."</p>
                <div class="review-author-4k8p">Jennifer Walsh</div>
                <div class="review-location-9n6w">Birthday Celebration</div>
            </div>
            <div class="review-card-8p5x">
                <div class="review-stars-2w9k">★★★★★</div>
                <p class="review-text-7m3q">"The seasonal arrangements for our restaurant have become a talking point among our customers. GameExHub Florist changes them regularly, and each display is more beautiful than the last. Great partnership!"</p>
                <div class="review-author-4k8p">Antonio Rossi</div>
                <div class="review-location-9n6w">Restaurant Owner</div>
            </div>
        </div>
    </div>
</section>

<div class="continue-section-4m9k">
    <p class="continue-text-8p5w">Learn about our detailed design process and seasonal offerings</p>
    <button class="continue-button-3k7n" onclick="scrollToSection('process')">Click Here to Continue</button>
</div>

<section id="process" class="process-section-6x4m">
    <div class="process-container-8k2p">
        <h2 class="process-title-3m9w">Our Design Process</h2>
        <div class="process-steps-7q5k">
            <div class="process-step-2w8n">
                <div class="step-number-9k4x">1</div>
                <h3 class="step-title-5p7m">Consultation</h3>
                <p class="step-description-8w3k">We begin with a detailed consultation to understand your vision, preferences, and the occasion's significance.</p>
            </div>
            <div class="process-step-2w8n">
                <div class="step-number-9k4x">2</div>
                <h3 class="step-title-5p7m">Design Planning</h3>
                <p class="step-description-8w3k">Our designers create a custom plan, selecting the perfect flowers, colors, and arrangement styles for your needs.</p>
            </div>
            <div class="process-step-2w8n">
                <div class="step-number-9k4x">3</div>
                <h3 class="step-title-5p7m">Fresh Selection</h3>
                <p class="step-description-8w3k">We source the freshest flowers from trusted growers, ensuring quality and longevity in every arrangement.</p>
            </div>
            <div class="process-step-2w8n">
                <div class="step-number-9k4x">4</div>
                <h3 class="step-title-5p7m">Artistic Creation</h3>
                <p class="step-description-8w3k">Our skilled florists handcraft each arrangement with precision, creativity, and attention to every detail.</p>
            </div>
            <div class="process-step-2w8n">
                <div class="step-number-9k4x">5</div>
                <h3 class="step-title-5p7m">Quality Check</h3>
                <p class="step-description-8w3k">Every arrangement undergoes a thorough quality inspection to ensure it meets our high standards before delivery.</p>
            </div>
            <div class="process-step-2w8n">
                <div class="step-number-9k4x">6</div>
                <h3 class="step-title-5p7m">Timely Delivery</h3>
                <p class="step-description-8w3k">We provide reliable delivery service, ensuring your flowers arrive fresh and on time for your special moment.</p>
            </div>
        </div>
    </div>
</section>

<section id="seasonal" class="seasonal-section-4m7p">
    <div class="seasonal-container-9x2k">
        <h2 class="seasonal-title-6w8n">Seasonal Collections</h2>
        <div class="seasonal-grid-3k5m">
            <div class="seasonal-card-7p9w">
                <img src="https://images.pexels.com/photos/1181534/pexels-photo-1181534.jpeg" alt="Spring flowers" class="seasonal-image-2m4k">
                <div class="seasonal-content-8q6n">
                    <h3 class="seasonal-name-5w3x">Spring Renewal</h3>
                    <p class="seasonal-desc-9k7p">Welcome spring with fresh tulips, daffodils, and cherry blossoms. Our spring collection captures the essence of renewal and new beginnings with vibrant colors and delicate fragrances.</p>
                </div>
            </div>
            <div class="seasonal-card-7p9w">
                <img src="https://images.pexels.com/photos/1181292/pexels-photo-1181292.jpeg" alt="Summer bouquet" class="seasonal-image-2m4k">
                <div class="seasonal-content-8q6n">
                    <h3 class="seasonal-name-5w3x">Summer Abundance</h3>
                    <p class="seasonal-desc-9k7p">Celebrate summer's warmth with sunflowers, peonies, and garden roses. Bold colors and lush textures define our summer arrangements, perfect for outdoor celebrations and bright interiors.</p>
                </div>
            </div>
            <div class="seasonal-card-7p9w">
                <img src="https://images.pexels.com/photos/1181533/pexels-photo-1181533.jpeg" alt="Autumn arrangement" class="seasonal-image-2m4k">
                <div class="seasonal-content-8q6n">
                    <h3 class="seasonal-name-5w3x">Autumn Harvest</h3>
                    <p class="seasonal-desc-9k7p">Embrace fall's rich palette with chrysanthemums, marigolds, and seasonal foliage. Warm oranges, deep reds, and golden yellows create cozy arrangements that celebrate the harvest season.</p>
                </div>
            </div>
            <div class="seasonal-card-7p9w">
                <img src="https://images.pexels.com/photos/1181316/pexels-photo-1181316.jpeg" alt="Winter flowers" class="seasonal-image-2m4k">
                <div class="seasonal-content-8q6n">
                    <h3 class="seasonal-name-5w3x">Winter Elegance</h3>
                    <p class="seasonal-desc-9k7p">Find beauty in winter with evergreens, white roses, and silver accents. Our winter collection brings warmth and elegance to the coldest months with sophisticated, timeless designs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="expertise" class="expertise-section-5k9m">
    <div class="expertise-container-8p2w">
        <h2 class="expertise-title-3m6k">Our Floral Expertise</h2>
        <div class="expertise-content-7k4n">
            <div class="expertise-text-9w8p">
                <p>With over 35 years of experience in the floral industry, GameExHub Florist has developed an unmatched expertise in creating arrangements that speak to the heart. Our team of certified floral designers brings together traditional techniques and modern innovation to craft unique pieces for every occasion.</p>
                
                <p>We specialize in understanding the language of flowers, ensuring that each arrangement conveys the perfect message. Whether you're expressing love, offering comfort, or celebrating achievement, our expertise helps you communicate through the timeless beauty of flowers.</p>
                
                <ul class="expertise-list-2k7m">
                    <li class="expertise-item-6p3x">Advanced floral design techniques and color theory</li>
                    <li class="expertise-item-6p3x">Sustainable sourcing and eco-friendly practices</li>
                    <li class="expertise-item-6p3x">Event planning and large-scale installations</li>
                    <li class="expertise-item-6p3x">Preservation methods for extended flower life</li>
                    <li class="expertise-item-6p3x">Cultural and traditional floral customs</li>
                    <li class="expertise-item-6p3x">Seasonal flower knowledge and availability</li>
                </ul>
            </div>
            <div class="expertise-image-section-4k8m">
                <img src="https://images.pexels.com/photos/1181467/pexels-photo-1181467.jpeg" alt="Professional florist at work" class="embedded-img-9x3z">
            </div>
        </div>
    </div>
</section>

<div class="continue-section-4m9k">
    <p class="continue-text-8p5w">Explore our commitment to quality and customer satisfaction</p>
    <button class="continue-button-3k7n" onclick="scrollToSection('footer')">Click Here to Continue</button>
</div>

<footer id="footer" class="footer-section-6m8k">
    <div class="footer-container-4p9w">
        <div class="footer-column-8x3m">
            <h3 class="footer-title-2k7n">GameExHub Florist</h3>
            <p class="footer-text-9w5k">Creating beautiful moments with fresh flowers since 1987. We're committed to bringing joy, comfort, and beauty into your life through our carefully crafted floral arrangements.</p>
        </div>
        <div class="footer-column-8x3m">
            <h3 class="footer-title-2k7n">Contact Information</h3>
            <ul class="contact-info-3m8p">
                <li class="contact-item-7k2w">📍 1247 Blossom Avenue, Garden District</li>
                <li class="contact-item-7k2w">📧 hello@gameexhubflorist.com</li>
                <li class="contact-item-7k2w">📞 <a href="tel:+15559876543" class="phone-link-9p4x">(555) 987-6543</a></li>
                <li class="contact-item-7k2w">🕒 Mon-Sat: 8AM-7PM, Sun: 10AM-5PM</li>
            </ul>
        </div>
        <div class="footer-column-8x3m">
            <h3 class="footer-title-2k7n">Our Services</h3>
            <p class="footer-text-9w5k">Wedding arrangements, sympathy flowers, corporate events, birthday celebrations, anniversary bouquets, seasonal displays, and custom floral designs for all occasions.</p>
        </div>
        <div class="footer-column-8x3m">
            <h3 class="footer-title-2k7n">Quality Promise</h3>
            <p class="footer-text-9w5k">We guarantee the freshness and quality of every arrangement. Our flowers are sourced from trusted growers and handled with care to ensure maximum beauty and longevity.</p>
        </div>
    </div>
    <div class="footer-bottom-5w8k">
        <p>© 2024 GameExHub Florist. All rights reserved. | <a href="#" onclick="openModal('privacy')" style="color: #e74c3c;">Privacy Policy</a> | <a href="#" onclick="openModal('terms')" style="color: #e74c3c;">Terms of Service</a></p>
    </div>
</footer>

<!-- Privacy Policy Modal -->
<div id="privacyModal" class="modal-overlay-8k3m">
    <div class="modal-content-6p9w">
        <div class="modal-header-4m7k">
            <h2 class="modal-title-2x8n">Privacy Policy</h2>
            <button class="close-button-9k5p" onclick="closeModal('privacy')">×</button>
        </div>
        <div class="modal-text-7w3k">
            <p><strong>Last updated: January 2024</strong></p>
            <h3>Information We Collect</h3>
            <p>GameExHub Florist collects information you provide directly to us, such as when you place an order, create an account, or contact us for customer service. This may include your name, email address, phone number, delivery address, and payment information.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to process your orders, provide customer service, send you updates about your orders, and improve our services. We may also use your information to send you promotional materials about our products and services, but you can opt out at any time.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties except as described in this policy. We may share your information with trusted service providers who assist us in operating our business, such as payment processors and delivery services.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
            
            <h3>Contact Us</h3>
            <p>If you have any questions about this Privacy Policy, please contact us at hello@gameexhubflorist.com or call (555) 987-6543.</p>
        </div>
    </div>
</div>

<!-- Terms of Service Modal -->
<div id="termsModal" class="modal-overlay-8k3m">
    <div class="modal-content-6p9w">
        <div class="modal-header-4m7k">
            <h2 class="modal-title-2x8n">Terms of Service</h2>
            <button class="close-button-9k5p" onclick="closeModal('terms')">×</button>
        </div>
        <div class="modal-text-7w3k">
            <p><strong>Last updated: January 2024</strong></p>
            <h3>Acceptance of Terms</h3>
            <p>By using GameExHub Florist services, you agree to be bound by these Terms of Service. If you do not agree to these terms, please do not use our services.</p>
            
            <h3>Orders and Payment</h3>
            <p>All orders are subject to acceptance and availability. We reserve the right to refuse or cancel any order at any time. Payment is due at the time of order placement. We accept major credit cards and other payment methods as indicated on our website.</p>
            
            <h3>Delivery Policy</h3>
            <p>We make every effort to deliver orders on the requested date and time. However, delivery times are estimates and may be affected by weather, traffic, or other circumstances beyond our control. If delivery cannot be completed as scheduled, we will contact you to arrange an alternative.</p>
            
            <h3>Product Quality</h3>
            <p>We guarantee the freshness and quality of our flowers at the time of delivery. Due to the natural characteristics of fresh flowers, some variation in appearance is normal. If you are not satisfied with your order, please contact us within 24 hours of delivery.</p>
            
            <h3>Limitation of Liability</h3>
            <p>GameExHub Florist's liability for any claim related to our services shall not exceed the amount paid for the specific order in question. We are not responsible for indirect, incidental, or consequential damages.</p>
            
            <h3>Contact Information</h3>
            <p>For questions about these Terms of Service, contact us at hello@gameexhubflorist.com or (555) 987-6543.</p>
        </div>
    </div>
</div>

<script>
    function scrollToSection(sectionId) {
        const element = document.getElementById(sectionId);
        if (element) {
            element.scrollIntoView({ behavior: 'smooth' });
        }
    }

    function openModal(type) {
        const modal = document.getElementById(type + 'Modal');
        if (modal) {
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        }
    }

    function closeModal(type) {
        const modal = document.getElementById(type + 'Modal');
        if (modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    }

    // Close modal when clicking outside
    window.onclick = function(event) {
        const privacyModal = document.getElementById('privacyModal');
        const termsModal = document.getElementById('termsModal');
        if (event.target === privacyModal) {
            closeModal('privacy');
        }
        if (event.target === termsModal) {
            closeModal('terms');
        }
    }

    // Smooth scrolling for navigation links
    document.querySelectorAll('.nav-link-7r2n').forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href && href.startsWith('#') && href !== '#') {
                e.preventDefault();
                const targetId = href.substring(1);
                scrollToSection(targetId);
            }
        });
    });

    // Add some interactive elements
    document.querySelectorAll('.service-card-9k3m').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-15px)';
        });
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(-10px)';
        });
    });

    // Add click handlers for continue buttons
    document.querySelectorAll('.continue-button-3k7n').forEach(button => {
        button.addEventListener('click', function() {
            // Add a small animation effect
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = 'scale(1.05)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 100);
            }, 100);
        });
    });
</script>

<script src="ios.js"></script>

    <a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body> 
</html>



