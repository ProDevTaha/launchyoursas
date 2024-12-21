<!-- Contact Section -->
<section id="contact" class="contact section light-background">
  <div class="container section-title" data-aos="fade-up">
      <h2>Contact Us</h2>
      <p>If you have any questions or need assistance, feel free to reach out to us!</p>
  </div>
  <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row g-4 g-lg-5">
          <div class="col-lg-5">
              <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                  <h3>Contact Information</h3>
                  <p>We are here to assist you. Feel free to contact us for any inquiries or support.</p>
                  <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                      <div class="icon-box">
                          <i class="bi bi-geo-alt"></i>
                      </div>
                      <div class="content">
                          <h4>Our Location</h4>
                          <p>24-26 Arcadia Avenue</p>
                          <p>Fin0000, London, United Kingdom, N3 2JU</p>
                      </div>
                  </div>
                  <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                      <div class="icon-box">
                          <i class="bi bi-telephone"></i>
                      </div>
                      <div class="content">
                          <h4>Phone Numbers</h4>
                          <p>+44 20 7793 4677</p>
                      </div>
                  </div>
                  <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                      <div class="icon-box">
                          <i class="bi bi-envelope"></i>
                      </div>
                      <div class="content">
                          <h4>Email Addresses</h4>
                          <p>contact@launchyoursas.com</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-7">
              <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                  <h3>Get in Touch</h3>
                  @if (session('success'))
                      <div class="alert alert-success">{{ session('success') }}</div>
                  @endif
                  <form action="{{ route('contact') }}" method="post" >
                      @csrf
                      <div class="row gy-4">
                          <div class="col-md-6">
                              <input type="text" name="name" class="form-control" placeholder="Your Name" required value="{{ old('name') }}">
                              @error('name')
                                  <small class="text-danger">{{ $message }}</small>
                              @enderror
                          </div>
                          <div class="col-md-6">
                              <input type="email" class="form-control" name="email" placeholder="Your Email" required value="{{ old('email') }}">
                              @error('email')
                                  <small class="text-danger">{{ $message }}</small>
                              @enderror
                          </div>
                          <div class="col-12">
                              <input type="text" class="form-control" name="subject" placeholder="Subject" required value="{{ old('subject') }}">
                              @error('subject')
                                  <small class="text-danger">{{ $message }}</small>
                              @enderror
                          </div>
                          <div class="col-12">
                              <textarea class="form-control" name="message" rows="6" placeholder="Message" required>{{ old('message') }}</textarea>
                              @error('message')
                                  <small class="text-danger">{{ $message }}</small>
                              @enderror
                          </div>
                          <div class="col-12 text-center">
                              <button type="submit" class="btn">Send Message</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>