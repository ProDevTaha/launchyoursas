<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://assets.edlin.app/bootstrap/v5.3/bootstrap.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  <!-- Title -->
  <title>Launchyoursas | Chechout</title>
</head>
<body>
<div class="container text-center">
  <div class="row mt-3">
    <div class="col-12">
      <h1>Proceed to Payment</h1>
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
          <div class="form-text text-muted mt-1">
            The total amount is fixed and includes all charges.
          </div>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-12 col-lg-6 offset-lg-3" id="payment_options"></div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 mt-3 mb-3">
      &copy; {{ date("Y") }} <a class="border-bottom" href="">Launchyoursas</a>, is a brand of “SMARTECHNO LTD” registrer in England and Wales no : 15752621 All Right Reserved.
    </div>
  </div>
</div>
</body>
<script>
  function initPayPalButtons() {
    if (typeof paypal === "undefined") {
        console.error("PayPal SDK not loaded.");
        return;
    }

    paypal.Buttons({
        createOrder: function () {
            return fetch("/create/" + document.getElementById("paypal-amount").value)
                .then(response => response.text())
                .then(id => id);
        },
        onApprove: function () {
            return fetch("/complete", {method: "post", headers: {"X-CSRF-Token": '{{csrf_token()}}'}})
                .then(response => response.json())
                .then(order_details => {
                    console.log(order_details);
                    document.getElementById("paypal-success").style.display = 'block';
                })
                .catch(error => console.log(error));
        },
        onCancel: function (data) {
            console.log("Payment cancelled", data);
        },
        onError: function (err) {
            console.error("PayPal error:", err);
        }
    }).render('#payment_options');
  } 

  document.addEventListener('DOMContentLoaded', function () {
    const paypalButton = document.querySelector('.paypal-button-number-1');
    if (paypalButton) {
        paypalButton.click();
    } else {
        console.warn("PayPal button not found.");
    } 
  });
</script>
<script src="https://www.paypal.com/sdk/js?client-id={{config('paypal.client_id')}}&currency=USD&intent=capture" onload="initPayPalButtons()"></script>
</html>