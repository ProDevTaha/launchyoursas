@extends('layout')

@section('title')
  Checkout - Plan Details
@endsection

@section('content')

  <main class="main mt-5">

    <section id="checkout-details" class="terms-of-service bg-ight container m-auto mt-3 mb-3 shadow rounded" style="background-color: aliceblue">
      <div class="container">
          <h2>{{ $plan['name'] }}</h2>
          <p class="price">
              <span class="currency">$</span>
              <span class="amount">{{ $plan['price'] }}</span>
              <span class="period">/ month</span>
          </p>
          <p class="description">{{ $plan['description'] }}</p>
  
          <h4>Features Included:</h4>
          <ul class="features-list">
              @foreach ($plan['features'] as $feature)
                  <li>
                      <i class="bi bi-check-circle-fill"></i>
                      <strong>{{ $feature['name'] }}</strong>: {{ $feature['description'] }}
                  </li>
              @endforeach
          </ul>
  
          <div class="plan-details">
              <h4>Duration:</h4>
              <p>{{ $plan['duration'] }}</p>
  
              <h4>Delivery:</h4>
              <p>{{ $plan['delivery'] }}</p>
  
              <h4>How It Works:</h4>
              <p>{{ $plan['how_works'] }}</p>
          </div>
  
          <a role="button" href="/checkout/{{ $plan['price'] }}" type="submit" class="btn btn-primary w-50">Proceed to Checkout</a>
      </div>
  </section>
  

  </main>

  @include('footer')
@endsection
