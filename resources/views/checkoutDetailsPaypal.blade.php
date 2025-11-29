<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://assets.edlin.app/bootstrap/v5.3/bootstrap.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  <!-- Title -->
  <link rel="stylesheet" href="{{asset('build/css/intlTelInput.css')}}" />
  <link rel="stylesheet" href="{{asset('build/css/demo.css')}}" />
  <style>
    body {
        background: #f8f9fc;
        font-family: "Inter", Arial, sans-serif;
    }

    h1 {
        font-weight: 700;
        font-size: 2rem;
        margin-top: 20px;
        color: #2d2f36;
    }

    .shadow {
        border-radius: 12px !important;
    }

    form {
        background: #ffffff;
        border-radius: 14px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    }

    label.form-label {
        font-weight: 600;
        color: #2d2f36;
    }

    .form-control {
        padding: 12px;
        border-radius: 10px;
        border: 1px solid #d7d9df;
        transition: all .3s;
    }

    .form-control:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.15rem rgba(13,110,253,0.25);
    }

    .btn-primary {
        padding: 12px;
        border-radius: 10px;
        font-size: 1.1rem;
        font-weight: 600;
        letter-spacing: .5px;
    }

    .alert-info {
        background: #e9f5ff;
        border: none;
        color: #0c63e4;
        font-weight: 500;
        border-radius: 10px;
    }

    #paypal-success .alert-success {
        border-radius: 10px;
        padding: 15px;
        font-size: 1rem;
    }

    .footer-text {
        font-size: .9rem;
        color: #6c757d;
    }

    a {
        color: #0d6efd;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    /* Phone input style fix */
    .iti--allow-dropdown input {
        padding-left: 50px !important;
    }

</style>

  <title>Launchyoursas | checkout</title>

</head>

<body>
<div class="container text-center">
  <div class="row mt-3">
    <div class="col-12">
      <h1>Confirm Your Info to Continue</h1>
    </div>
  </div>
  
  <div class="row mt-2">
    <div class="col-12">

      <div class="row mt-3" id="paypal-success" style="display: none;">
        <div class="col-12 col-lg-6 offset-lg-3">
          <div class="alert alert-success" role="alert">
            You have successfully sent me money! Thank you!
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-12 col-lg-6 offset-lg-3">
          <div class="d-flex justify-content-center shadow rounded p-2 text-dark">
            <label for="paypal-amount" class="form-label fw-bold">
              Payment Amount <i class="bi bi-info-circle" data-bs-toggle="tooltip" title="This is the amount you need to pay via PayPal."></i>
            </label>
            <span class="ms-3 fw-bold ">{{$price}}$</span>
          </div>
          <div class="input-group shadow-sm rounded">
            <input type="hidden"
                   class="form-control border-start-0 border-end-0 bg-white"
                   id="paypal-amount"
                   value="{{$price}}"
                   aria-label="Amount (to the nearest pound)"
                   disabled>
          </div>
          <h5 class="alert alert-info mt-3" role="alert">
            Your information helps us create your IPTV account securely and deliver your access quickly and reliably.
          </h5>
        </div>
      </div>
      <form class="shadow p-3  m-auto col-12 col-lg-6 offset-lg-3 text-start" action="{{route('sendIfrmations.post')}}" method="POST" >
        @csrf
        <input type="hidden"name="price"  value="{{$price}}"/>
      <div class="mb-3">
  <label for="fullname" class="form-label">Full Name</label>
  <input type="text"
         name="fullname"
         placeholder="Your name"
         class="form-control"
         id="fullname"
         required
         oninvalid="this.setCustomValidity('Please enter your full name')"
         oninput="this.setCustomValidity('')" />
</div>

<div class="mb-3">
  <label for="email" class="form-label">Email Address</label>
  <input type="email"
         name="email"
         placeholder="example@gmail.com"
         class="form-control"
         id="email"
         required
         oninvalid="this.setCustomValidity('Please enter a valid email address')"
         oninput="this.setCustomValidity('')" />
</div>

      
        <div class="mb-3 d-flex flex-column">
          <label for="phone" class="form-label">Phone</label>
          <input type="tel" name="phone" placeholder="+1 415 555 2671" class="form-control" id="phone" required
       oninvalid="this.setCustomValidity('Please enter your phone number')"
       oninput="this.setCustomValidity('')">

        </div>
        
        <div class="text-center">
          <button type="submit" class="btn btn-primary w-75">Proceed to Payment</button>
        </div>
        
      </form>
      
    </div>
  </div>
  <div class="row">
    <div class="col-12 mt-3 mb-3">
      &copy; {{ date("Y") }} <a class="border-bottom" href="">Launchyoursas</a>, is a brand of “SMARTECHNO LTD” registrer in England and Wales no : 15752621 All Right Reserved.
    </div>
  </div>
</div>
</body>
<script src="{{asset('build/js/intlTelInputWithUtils.js')}}"></script>
<script>
  const input = document.querySelector("#phone");
  const iti = window.intlTelInput(input, {
    // allowDropdown: false,
    // autoPlaceholder: "off",
    // containerClass: "test",
    // countryOrder: ["jp", "kr"],
    // countrySearch: false,
    // customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
    //   return "e.g. " + selectedCountryPlaceholder;
    // },
    // dropdownContainer: document.querySelector('#custom-container'),
    // excludeCountries: ["us"],
    // fixDropdownWidth: false,
    // formatAsYouType: false,
    // formatOnDisplay: false,
    // geoIpLookup: function(callback) {
    //   fetch("https://ipapi.co/json")
    //     .then(function(res) { return res.json(); })
    //     .then(function(data) { callback(data.country_code); })
    //     .catch(function() { callback(); });
    // },
    // hiddenInput: () => ({ phone: "phone_full", country: "country_code" }),
    // i18n: { 'de': 'Deutschland' },
    initialCountry: "us",
    // loadUtils: () => import("/build/js/utils.js"), // leading slash (and http-server) required for this to work in chrome
    // nationalMode: false,
    // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    // placeholderNumberType: "MOBILE",
    // showFlags: false,
    // separateDialCode: true,
    // strictMode: true,
    // useFullscreenPopup: true,
    // validationNumberTypes: null,
  });
  window.iti = iti; // useful for testing

  const button = document.querySelector("#btn");
  const errorMsg = document.querySelector("#error-msg");
  const validMsg = document.querySelector("#valid-msg");
  const errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

  const reset = () => {
    input.classList.remove("error");
    errorMsg.innerHTML = "";
    validMsg.innerHTML = "";
    errorMsg.classList.add("hide");
    validMsg.classList.add("hide");
  };

  const showError = (msg) => {
    input.classList.add("error");
    errorMsg.innerHTML = msg;
    errorMsg.classList.remove("hide");
  };

  // on click button: validate
  button.addEventListener('click', () => {
    reset();
    if (!input.value.trim()) {
      showError("Required");
    } else if (iti.isValidNumber()) {
      validMsg.innerHTML = "Valid number: " + iti.getNumber();
      validMsg.classList.remove("hide");
    } else {
      const errorCode = iti.getValidationError();
      const msg = errorMap[errorCode] || "Invalid number";
      showError(msg);
    }
  });

  // on keyup / change flag: reset
  input.addEventListener('change', reset);
  input.addEventListener('keyup', reset);
</script>
</html>