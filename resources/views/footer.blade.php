<footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-5">
        <div class="col-lg-6 col-md-6 footer-about">
          <a href="/" class="logo d-flex align-items-center">
            <span class="sitename">LaunchYourSaas</span>
          </a>
          <div class="footer-contact pt-3">
            <p>24-26 Arcadia Avenue</p>
            <p>Fin0000, London, United Kingdom, N3 2JU</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+44 20 7793 4677</span></p>
            <p><strong>Email:</strong> <span>contact@launchyoursaas.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="https://www.facebook.com/profile.php?id=61569759606471"><i class="bi bi-facebook"></i></a>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-3 footer-links">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/#about">About Us</a></li>
            <li><a href="/#services">Services</a></li>
            <li><a href="/terms">Terms of Service</a></li>
            <li><a href="/privacy">Privacy Policy</a></li>
            <li><a href="/refund">Refund Policy</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-3 footer-links">
          <h3>Subscribe</h3>
          <form action="{{ route('subscribe') }}" method="POST">
            @csrf
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <input type="email" name="email" class="form-control" placeholder="Your email" required />
            <button type="submit" class="btn btn-primary mt-2 w-100">Send</button>
        </form>
      
      <script>
          // Check if the alert exists and show it for 2 seconds
          document.addEventListener('DOMContentLoaded', function () {
              const alert = document.getElementById('success-alert');
              if (alert) {
                  alert.style.display = 'block'; // Show the alert
                  setTimeout(() => {
                      alert.style.display = 'none'; // Hide it after 2 seconds
                  }, 2000);
              }
          });
      </script>
      
        </div>
      </div>
    </div>
  
    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> 
        <strong class="px-1 sitename">UNIVERSAL SKILLS LTD</strong> 
        <span>Company Registration Number: 16115542</span> 
        <span>All Rights Reserved</span> 
        <span id="currentYear"></span>
      </p>
    </div>
    <script>
      // Dynamically set the current year
      document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>
     
  
  </footer>
  