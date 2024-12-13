@extends('layout')
@section('title')
  Launchyoursas | Home 
@endsection
@section('content')
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
            <h1 class="sitename">LaunchYourSaas</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
            <li><a href="#hero" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#pricing">Pricing</a></li>
            <li><a href="#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="#pricing">Get Started</a>

        </div>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                <div class="company-badge mb-4">
                    <i class="bi bi-gear-fill me-2"></i>
                    Working for your success
                </div>

                <h1 class="mb-4">
                    Transforming Visions<br>
                    into Scalable <br>
                    <span class="accent-text">SaaS Applications</span>
                </h1>

                <p class="mb-4 mb-md-5">
                    We craft high-performance SaaS web and mobile apps designed to scale with your business, delivering seamless user experiences and measurable results.
                </p>

                <div class="hero-buttons">
                    <a href="#pricing" class="btn btn-primary me-0 me-sm-2 mx-1">Get Started</a>
                </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                <img src="{{asset('img/illustration-1.webp')}}" alt="Hero Image" class="img-fluid">

                <div class="customers-badge">
                    <div class="customer-avatars">
                    <img src="{{asset('img/avatar-1.webp')}}" alt="Customer 1" class="avatar">
                    <img src="{{asset('img/avatar-2.webp')}}" alt="Customer 2" class="avatar">
                    <img src="{{asset('img/avatar-3.webp')}}" alt="Customer 3" class="avatar">
                    <img src="{{asset('img/avatar-4.webp')}}" alt="Customer 4" class="avatar">
                    <img src="{{asset('img/avatar-5.webp')}}" alt="Customer 5" class="avatar">
                    <span class="avatar more">12+</span>
                    </div>
                    <p class="mb-0 mt-2">2000 Happy Clients Worldwide</p>
                </div>
                </div>
            </div>
            </div>

            <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                <div class="stat-icon">
                    <i class="bi bi-trophy"></i>
                </div>
                <div class="stat-content">
                    <h4>3x Awards</h4>
                    <p class="mb-0">Recognized for Excellence</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                <div class="stat-icon">
                    <i class="bi bi-briefcase"></i>
                </div>
                <div class="stat-content">
                    <h4>650 Projects</h4>
                    <p class="mb-0">Global Trust Earned</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                <div class="stat-icon">
                    <i class="bi bi-graph-up"></i>
                </div>
                <div class="stat-content">
                    <h4>20k Users</h4>
                    <p class="mb-0">Success Delivered</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                <div class="stat-icon">
                    <i class="bi bi-award"></i>
                </div>
                <div class="stat-content">
                    <h4>6 Certif</h4>
                    <p class="mb-0">Proven Expertise</p>
                </div>
                </div>
            </div>
            </div>

        </div>

        </section>

        <!-- About Section -->
        <section id="about" class="about section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 align-items-center justify-content-between">

            <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                <span class="about-meta">MORE ABOUT US</span>
                <h2 class="about-title">Your Trusted Partner for SaaS Innovation</h2>
                <p class="about-description">We specialize in creating cutting-edge SaaS web and mobile applications designed to elevate your business. With a focus on scalability, efficiency, and seamless user experiences, our expert team is committed to delivering solutions that meet your unique needs.</p>

                <div class="row feature-list-wrapper">
                <div class="col-md-6">
                    <ul class="feature-list">
                    <li><i class="bi bi-check-circle-fill"></i> Expertly tailored SaaS platforms</li>
                    <li><i class="bi bi-check-circle-fill"></i> Innovative web and mobile app solutions</li>
                    <li><i class="bi bi-check-circle-fill"></i> Scalable and future-proof designs</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="feature-list">
                    <li><i class="bi bi-check-circle-fill"></i> Comprehensive support and maintenance</li>
                    <li><i class="bi bi-check-circle-fill"></i> Focused on user-friendly experiences</li>
                    <li><i class="bi bi-check-circle-fill"></i> Trusted by clients worldwide</li>
                    </ul>
                </div>
                </div>

                {{-- <div class="info-wrapper">
                <div class="row gy-4">
                    <div class="col-lg-5">
                    <div class="profile d-flex align-items-center gap-3">
                        <img src="{{asset('img/avatar-1.webp')}}" alt="CEO Profile" class="profile-image">
                        <div>
                        <h4 class="profile-name">Mario Smith</h4>
                        <p class="profile-position">CEO &amp; Founder</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-7">
                    <div class="contact-info d-flex align-items-center gap-2">
                        <i class="bi bi-telephone-fill"></i>
                        <div>
                        <p class="contact-label">Call us anytime</p>
                        <p class="contact-number">+123 456-789</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div> --}}
            </div>

            <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                <div class="image-wrapper">
                <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                    <img src="{{asset('img/about-5.webp')}}" alt="Business Meeting" class="img-fluid main-image rounded-4">
                    <img src="{{asset('img/about-2.webp')}}" alt="Team Discussion" class="img-fluid small-image rounded-4">
                </div>
                <div class="experience-badge floating">
                    <h3>10+ <span>Years</span></h3>
                    <p>Of experience in business service</p>
                </div>
                </div>
            </div>
            </div>

        </div>

        </section><!-- /About Section -->

        <!-- Features Section -->
        <section id="features" class="features section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
            <h2>Features</h2>
            <p>Transform Your Business with Cutting-Edge SaaS Tools</p>
            </div><!-- End Section Title -->
        
            <div class="container">
        
            <div class="d-flex justify-content-center">
        
                <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
        
                <li class="nav-item">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                    <h4>Intuitive Design</h4>
                    </a>
                </li><!-- End tab nav item -->
        
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                    <h4>Scalable Performance</h4>
                    </a><!-- End tab nav item -->
        
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                    <h4>Advanced Insights</h4>
                    </a>
                </li><!-- End tab nav item -->
        
                </ul>
        
            </div>
        
            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
        
                <div class="tab-pane fade active show" id="features-tab-1">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                    <h3>Design and Customize with Ease</h3>
                    <p class="fst-italic">
                        Build your SaaS platform quickly with user-friendly tools and customizable options.
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-all"></i> <span>Drag-and-drop editor for effortless setup.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Pre-designed templates for diverse industries.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Real-time editing to see changes instantly.</span></li>
                    </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                    <img src="{{asset('img/features-illustration-1.webp')}}" alt="Intuitive Design" class="img-fluid">
                    </div>
                </div>
                </div><!-- End tab content item -->
        
                <div class="tab-pane fade" id="features-tab-2">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                    <h3>Seamless and Reliable Performance</h3>
                    <p class="fst-italic">
                        Scale your business with secure and robust solutions designed for growth.
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-all"></i> <span>Cloud hosting with 99.9% uptime guarantee.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Built-in encryption to ensure data security.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Effortless scalability to handle increased demand.</span></li>
                    </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                    <img src="{{asset('img/features-illustration-2.webp')}}" alt="Scalable Performance" class="img-fluid">
                    </div>
                </div>
                </div><!-- End tab content item -->
        
                <div class="tab-pane fade" id="features-tab-3">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                    <h3>Data-Driven Decisions</h3>
                    <ul>
                        <li><i class="bi bi-check2-all"></i> <span>Comprehensive analytics dashboard.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Track customer behavior and engagement.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Optimize performance with actionable insights.</span></li>
                    </ul>
                    <p class="fst-italic">
                        Leverage real-time data to boost your service impact and drive growth.
                    </p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                    <img src="{{asset('img/features-illustration-3.webp')}}" alt="Advanced Insights" class="img-fluid">
                    </div>
                </div>
                </div><!-- End tab content item -->
        
            </div>
        
            </div>
        
        </section><!-- /Features Section -->
    
        <!-- Features Cards Section -->
        <section id="features-cards" class="features-cards section">

            <div class="container">
        
            <div class="row gy-4">
        
                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="feature-box orange">
                    <i class="bi bi-award"></i>
                    <h4>Expert Recognition</h4>
                    <p>Gain acknowledgment for your excellence with tools designed to help you shine and stand out.</p>
                </div>
                </div><!-- End Feature Box-->
        
                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="feature-box blue">
                    <i class="bi bi-patch-check"></i>
                    <h4>Verified Solutions</h4>
                    <p>Leverage trusted and proven methods tailored to streamline your workflow and deliver success.</p>
                </div>
                </div><!-- End Feature Box-->
        
                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="feature-box green">
                    <i class="bi bi-sunrise"></i>
                    <h4>Seamless Integration</h4>
                    <p>Enjoy effortless compatibility with intuitive solutions that adapt to your unique requirements.</p>
                </div>
                </div><!-- End Feature Box-->
        
                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="feature-box red">
                    <i class="bi bi-shield-check"></i>
                    <h4>Reliable Security</h4>
                    <p>Safeguard your data and operations with robust protections built to ensure your peace of mind.</p>
                </div>
                </div><!-- End Feature Box-->
        
            </div>
        
            </div>
        
        </section><!-- /Features Cards Section -->
    
        <!-- Features 2 Section -->
        <section id="features-2" class="features-2 section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
        
            <div class="row align-items-center">
        
                <div class="col-lg-4">
        
                <div class="feature-item text-end mb-5" data-aos="fade-right" data-aos-delay="200">
                    <div class="d-flex align-items-center justify-content-end gap-4">
                    <div class="feature-content">
                        <h3>Access Anywhere</h3>
                        <p>Enjoy seamless access on any device. Our platform adapts to your screen size, ensuring optimal user experience everywhere.</p>
                    </div>
                    <div class="feature-icon flex-shrink-0">
                        <i class="bi bi-display"></i>
                    </div>
                    </div>
                </div><!-- End .feature-item -->
        
                <div class="feature-item text-end mb-5" data-aos="fade-right" data-aos-delay="300">
                    <div class="d-flex align-items-center justify-content-end gap-4">
                    <div class="feature-content">
                        <h3>Customizable Icons</h3>
                        <p>Enhance your interface with Feather icons. Tailor the design to fit your brand’s style and elevate user engagement.</p>
                    </div>
                    <div class="feature-icon flex-shrink-0">
                        <i class="bi bi-feather"></i>
                    </div>
                    </div>
                </div><!-- End .feature-item -->
        
                <div class="feature-item text-end" data-aos="fade-right" data-aos-delay="400">
                    <div class="d-flex align-items-center justify-content-end gap-4">
                    <div class="feature-content">
                        <h3>Crystal Clear Resolution</h3>
                        <p>Our design is optimized for retina displays, offering sharp, high-definition visuals on all devices for an exceptional experience.</p>
                    </div>
                    <div class="feature-icon flex-shrink-0">
                        <i class="bi bi-eye"></i>
                    </div>
                    </div>
                </div><!-- End .feature-item -->
        
                </div>
        
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="phone-mockup text-center">
                    <img src="{{asset('img/phone-app-screen.webp')}}" alt="Phone Mockup" class="img-fluid">
                </div>
                </div><!-- End Phone Mockup -->
        
                <div class="col-lg-4">
        
                <div class="feature-item mb-5" data-aos="fade-left" data-aos-delay="200">
                    <div class="d-flex align-items-center gap-4">
                    <div class="feature-icon flex-shrink-0">
                        <i class="bi bi-code-square"></i>
                    </div>
                    <div class="feature-content">
                        <h3>W3C Compliant Code</h3>
                        <p>Our code meets the highest standards, ensuring optimal performance, accessibility, and future-proofing your project.</p>
                    </div>
                    </div>
                </div><!-- End .feature-item -->
        
                <div class="feature-item mb-5" data-aos="fade-left" data-aos-delay="300">
                    <div class="d-flex align-items-center gap-4">
                    <div class="feature-icon flex-shrink-0">
                        <i class="bi bi-phone"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Mobile-Friendly Design</h3>
                        <p>Our responsive layout adjusts seamlessly to any screen, offering users an enjoyable experience on smartphones and tablets.</p>
                    </div>
                    </div>
                </div><!-- End .feature-item -->
        
                <div class="feature-item" data-aos="fade-left" data-aos-delay="400">
                    <div class="d-flex align-items-center gap-4">
                    <div class="feature-icon flex-shrink-0">
                        <i class="bi bi-browser-chrome"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Cross-Browser Compatibility</h3>
                        <p>Ensure consistent performance across all browsers, with solutions optimized for Chrome, Firefox, Safari, and more.</p>
                    </div>
                    </div>
                </div><!-- End .feature-item -->
        
                </div>
            </div>
        
            </div>
        
        </section><!-- /Features 2 Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
            <h2>What Our Clients Say</h2>
            <p>Real feedback from those who have experienced our services and products.</p>
            </div><!-- End Section Title -->
        
            <div class="container">
        
            <div class="row g-5">
        
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial-item">
                    <img src="{{asset('img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>CEO & Founder</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>"The service provided was exceptional! We have seen great improvements in our business operations. Highly recommended!"</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->
        
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-item">
                    <img src="{{asset('img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>"Working with this team was a fantastic experience! Their attention to detail and creativity helped bring my vision to life."</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->
        
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="testimonial-item">
                    <img src="{{asset('img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>"The results exceeded my expectations! Their professional approach and reliable support made all the difference for my store."</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->
        
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="testimonial-item">
                    <img src="{{asset('img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>"Their commitment to quality and customer satisfaction is unmatched. I highly recommend them to anyone looking for a reliable partner."</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->
        
            </div>
        
            </div>
        
        </section><!-- /Testimonials Section -->
    
        <!-- Services Section -->
        <section id="services" class="services section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
            <h2>Our Services</h2>
            <p>Explore our wide range of services designed to meet your needs and exceed your expectations.</p>
            </div><!-- End Section Title -->
        
            <div class="container" data-aos="fade-up" data-aos-delay="100">
        
            <div class="row g-4">
        
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card d-flex">
                    <div class="icon flex-shrink-0">
                    <i class="bi bi-activity"></i>
                    </div>
                    <div>
                    <h3>Project Management</h3>
                    <p>We provide comprehensive project management services that ensure timely delivery, within budget, and aligned with your goals.</p>
                    </div>
                </div>
                </div><!-- End Service Card -->
        
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card d-flex">
                    <div class="icon flex-shrink-0">
                    <i class="bi bi-diagram-3"></i>
                    </div>
                    <div>
                    <h3>Consulting Services</h3>
                    <p>Our expert consultants provide valuable insights and strategic advice to help your business grow and stay ahead of the competition.</p>
                    </div>
                </div>
                </div><!-- End Service Card -->
        
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card d-flex">
                    <div class="icon flex-shrink-0">
                    <i class="bi bi-easel"></i>
                    </div>
                    <div>
                    <h3>Design & Branding</h3>
                    <p>Our design team specializes in creating visually appealing and user-friendly experiences that help establish a strong brand identity.</p>
                    </div>
                </div>
                </div><!-- End Service Card -->
        
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card d-flex">
                    <div class="icon flex-shrink-0">
                    <i class="bi bi-clipboard-data"></i>
                    </div>
                    <div>
                    <h3>Data Analytics</h3>
                    <p>We offer data-driven insights and analytics that help you make informed decisions, optimize operations, and improve performance.</p>
                    </div>
                </div>
                </div><!-- End Service Card -->
        
            </div>
        
            </div>
        
        </section><!-- /Services Section -->

        <!-- Pricing Section -->
        <section id="pricing" class="pricing section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
            <h2>Pricing Plans</h2>
            <p>Choose the perfect plan to suit your needs. We offer flexible pricing options for every budget.</p>
            </div><!-- End Section Title -->
        
            <div class="container" data-aos="fade-up" data-aos-delay="100">
        
            <div class="row g-4 justify-content-center">
        
                <!-- Basic Plan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="pricing-card">
                    <h3>Basic Plan</h3>
                    <div class="price">
                    <span class="currency">$</span>
                    <span class="amount">49</span>
                    <span class="period">/ month</span>
                    </div>
                    <p class="description">A great starting point for individuals or small teams to access essential features at an affordable price.</p>
        
                    <h4>Features Included:</h4>
                    <ul class="features-list">
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Access to basic features
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        24/7 customer support
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Regular updates
                    </li>
                    </ul>
        
                    <a href="/checkoutDetails/49" class="btn btn-primary">
                    Buy Now
                    <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                </div><!-- End Basic Plan -->
        
                <!-- Standard Plan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="pricing-card popular">
                    <div class="popular-badge">Most Popular</div>
                    <h3>Standard Plan</h3>
                    <div class="price">
                    <span class="currency">$</span>
                    <span class="amount">59</span>
                    <span class="period">/ month</span>
                    </div>
                    <p class="description">Perfect for growing teams that need additional features, flexibility, and enhanced support.</p>
        
                    <h4>Features Included:</h4>
                    <ul class="features-list">
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Everything in the Basic Plan
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Advanced analytics
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Priority customer support
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        More integrations
                    </li>
                    </ul>
        
                    <a href="/checkoutDetails/59" class="btn btn-light">
                    Buy Now
                    <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                </div><!-- End Standard Plan -->
        
                <!-- Premium Plan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="pricing-card">
                    <h3>Premium Plan</h3>
                    <div class="price">
                    <span class="currency">$</span>
                    <span class="amount">89</span>
                    <span class="period">/ month</span>
                    </div>
                    <p class="description">For larger teams or businesses that need advanced features, scalability, and dedicated support for high performance.</p>
        
                    <h4>Features Included:</h4>
                    <ul class="features-list">
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Everything in the Standard Plan
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Customizable solutions
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Dedicated account manager
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Enterprise-grade security
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Unlimited integrations
                    </li>
                    </ul>
        
                    <a  href="/checkoutDetails/89" class="btn btn-primary">
                    Buy Now
                    <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                </div><!-- End Premium Plan -->
        
            </div>
        
            </div>
        
        </section><!-- /Pricing Section -->

        @include('contact') 

    </main>
   @include('footer')
@endsection