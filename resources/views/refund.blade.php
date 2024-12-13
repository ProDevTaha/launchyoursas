@extends('layout')
@section('title')
Launchyoursas | Refund Policy 
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
    <section id="refund-policy" class="refund-policy container m-auto mt-3 mb-3 shadow rounded" style="background-color: aliceblue">
        <div class="container">
            <h2 class="section-title">Refund Policy</h2>

            <p>At Launchyoursas, we strive to provide the best services possible. If you are not satisfied with your purchase, this Refund Policy outlines your rights and the procedures for requesting a refund.</p>

            <h3>1. Eligibility for Refund</h3>
            <p>Refunds are available under the following conditions:</p>
            <ul>
                <li>The service or product is defective or not delivered as promised.</li>
                <li>A refund request is made within 14 days of purchase (unless otherwise specified in the product/service description).</li>
                <li>The service has not been used, consumed, or accessed significantly.</li>
            </ul>

            <h3>2. Non-Refundable Items</h3>
            <p>Certain purchases may not be eligible for a refund, including but not limited to:</p>
            <ul>
                <li>Custom or personalized services.</li>
                <li>Downloadable digital products once they are accessed or downloaded.</li>
                <li>Subscriptions or memberships after the trial period (if applicable).</li>
            </ul>

            <h3>3. Refund Process</h3>
            <p>To request a refund, please follow these steps:</p>
            <ul>
                <li>Contact our support team at <a href="mailto:contact@launchyoursaas.com">contact@launchyoursaas.com</a> with your order details, including the purchase date and reason for the refund request.</li>
                <li>Our team will review your request and may ask for additional information to process your refund.</li>
                <li>If approved, the refund will be processed to your original payment method within 7–10 business days.</li>
            </ul>

            <h3>4. Partial Refunds</h3>
            <p>In some cases, partial refunds may be issued for services or products that have been partially used or accessed. The refund amount will be calculated based on the extent of usage.</p>

            <h3>5. Late or Missing Refunds</h3>
            <p>If you haven’t received your refund after approval, please check the following:</p>
            <ul>
                <li>Verify your bank account or payment method for the refunded amount.</li>
                <li>Contact your bank or credit card company, as processing times may vary.</li>
                <li>If you still have not received your refund, please contact us at <a href="mailto:contact@launchyoursaas.com">contact@launchyoursaas.com</a>.</li>
            </ul>

            <h3>6. Changes to This Refund Policy</h3>
            <p>We may update this Refund Policy from time to time. Any changes will be posted on this page with a revised date. Please review this policy periodically for updates.</p>

            <h3>7. Contact Us</h3>
            <p>If you have any questions or concerns about this Refund Policy, please contact us at <a href="mailto:contact@launchyoursaas.com">contact@launchyoursaas.com</a>.</p>
        </div>
    </section>
</main>

@include('footer')
@endsection
