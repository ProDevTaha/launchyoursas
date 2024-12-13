@extends('layout')

@section('title')
Launchyoursas | Terms of Service 
@endsection

@section('content')
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
  <main class="main">

    <section id="terms-of-service" class="terms-of-service bg-ight container m-auto mt-3 mb-3 shadow rounded" style="background-color: aliceblue">
      <div class="container">
        <h2 class="section-title">Terms of Service</h2>
        
        <p>Welcome to LaunchYourSaas! These Terms of Service ("Terms") govern your access to and use of our services. By accessing or using LaunchYourSaas, you agree to comply with and be bound by these Terms.</p>

        <h3>1. Acceptance of Terms</h3>
        <p>By accessing or using the website or services provided by LaunchYourSaas, you acknowledge that you have read, understood, and agree to these Terms of Service, as well as any additional guidelines, policies, or agreements that may be posted on our site from time to time.</p>

        <h3>2. Use of Services</h3>
        <p>Our services are available to individuals who are at least 18 years old. You agree not to misuse or interfere with the proper functioning of our services, and you are responsible for ensuring that your use complies with all applicable laws and regulations.</p>

        <h3>3. Account Responsibilities</h3>
        <p>To use some of our services, you may need to create an account. You are responsible for maintaining the confidentiality of your account information and for all activities under your account.</p>

        <h3>4. Privacy Policy</h3>
        <p>We respect your privacy. Please refer to our Privacy Policy for details on how we collect, use, and protect your personal information.</p>

        <h3>5. Limitation of Liability</h3>
        <p>LaunchYourSaas will not be liable for any damages arising from the use or inability to use our services, including direct, indirect, incidental, or consequential damages.</p>

        <h3>6. Changes to Terms</h3>
        <p>We may modify or update these Terms at any time, and such changes will be effective immediately upon posting. It is your responsibility to review these Terms periodically to ensure that you are aware of any updates.</p>

        <h3>7. Governing Law</h3>
        <p>These Terms are governed by and construed in accordance with the laws of the jurisdiction in which we operate, and any disputes will be resolved in the appropriate courts within that jurisdiction.</p>

        <h3>8. Contact Us</h3>
        <p>If you have any questions or concerns regarding these Terms of Service, please contact us at <a href="mailto:contact@launchyoursaas.com">contact@launchyoursaas.com</a>.</p>

      </div>
    </section>

  </main>

  @include('footer')
@endsection
