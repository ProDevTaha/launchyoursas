@extends('layout')
@section('title')
Launchyoursas | Privacy Policy 
@endsection
@section('content')

  <main class="main">
    <header id="header" class="header d-flex align-items-center bg-light">
        <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
            <h1 class="sitename">LaunchYourSaas</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
            <li><a href="/" class="active">Home</a></li>
            <li><a href="/#about">About</a></li>
            <li><a href="/#features">Features</a></li>
            <li><a href="/#services">Services</a></li>
            <li><a href="/#pricing">Pricing</a></li>
            <li><a href="/#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="/#pricing">Get Started</a>

        </div>
    </header>
    <section id="privacy-policy" class="privacy-policy container m-auto mt-3 mb-3 shadow rounded" style="background-color: aliceblue">
        <div class="container">
          <h2 class="section-title">Privacy Policy</h2>
          
          <p>Your privacy is important to us. This Privacy Policy explains how we collect, use, and share information when you use our website and services.</p>
  
          <h3>1. Information We Collect</h3>
          <p>We may collect the following types of information:</p>
          <ul>
            <li><strong>Personal Information:</strong> Such as name, email address, phone number, and other details when you create an account or contact us.</li>
            <li><strong>Usage Data:</strong> Information on how you use our website, including IP addresses, browser type, and pages visited.</li>
            <li><strong>Cookies:</strong> We use cookies to enhance user experience, analyze website traffic, and personalize content.</li>
          </ul>
  
          <h3>2. How We Use Your Information</h3>
          <p>The information we collect is used to:</p>
          <ul>
            <li>Provide and improve our services.</li>
            <li>Communicate with you regarding your account and services.</li>
            <li>Personalize your experience on our website.</li>
            <li>Send promotional emails or other relevant communications (with your consent).</li>
          </ul>
  
          <h3>3. Data Security</h3>
          <p>We implement appropriate technical and organizational measures to protect your personal information from unauthorized access, alteration, disclosure, or destruction. However, please be aware that no security measures are 100% effective, and we cannot guarantee the complete security of your data.</p>
  
          <h3>4. Sharing Your Information</h3>
          <p>We do not share your personal information with third parties, except in the following circumstances:</p>
          <ul>
            <li>When required by law, such as to comply with a legal process or governmental request.</li>
            <li>If we merge with or are acquired by another company.</li>
            <li>To service providers who assist us in running our business (e.g., hosting, payment processing), but they are required to keep the information confidential.</li>
          </ul>
  
          <h3>5. Your Rights</h3>
          <p>You have the following rights regarding your personal data:</p>
          <ul>
            <li>Access to your data.</li>
            <li>Correction of your data if it is inaccurate or incomplete.</li>
            <li>Request for data deletion, subject to certain conditions.</li>
            <li>Opt-out of receiving promotional emails by unsubscribing or adjusting your communication preferences.</li>
          </ul>
  
          <h3>6. Cookies and Tracking Technologies</h3>
          <p>We use cookies and other tracking technologies to analyze website traffic and personalize content. You can manage your cookie preferences through your browser settings.</p>
  
          <h3>7. Changes to This Privacy Policy</h3>
          <p>We may update this Privacy Policy from time to time. We will notify you of any significant changes by posting the updated policy on this page with a revised date. Please review the Privacy Policy periodically for updates.</p>
  
          <h3>8. Contact Us</h3>
          <p>If you have any questions or concerns about this Privacy Policy, please contact us at <a href="mailto:contact@launchyoursaas.com">contact@launchyoursaas.com</a>.</p>
  
        </div>
    </section>
  </main>

   @include('footer')
@endsection