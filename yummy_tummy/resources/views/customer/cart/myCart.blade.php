@extends('layouts.customerDashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My cart</title>

    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>

</head>
<body style="background-color: #eee;">
<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">

            <div class="row">


              <section style="background-color: #eee;">
  <!-- <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
          </ol>
        </nav>
      </div>
    </div> -->
    <h2>Your Details</h2>

    <div class="row d-flex">
      <div class="col-lg-4 ">
        <div class="card mb-4 ">
          <div class="card-body text-center">
         
          <img src="{{ Auth::user()->profile_photo_url }}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;"/>

           
            <!-- <h5 class="my-3">{{ Auth::user()->name }}</h5> -->
          

          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ Auth::user()->name }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
              </div>
            </div>
            <!-- <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ Auth::user()->name }}</p>
              </div>
            </div> -->
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ Auth::user()->contactno }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ Auth::user()->location }}</p>
              </div>
            </div>
          </div>
        </div>
          </div>
</section>             
 </div>



<h2 class="">Cart Details</h2>
<!-- my cart detail -->
<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Product</th>
      <th>Chief Name</th>
      <th>Status</th>
      <th>Price</th>
      <th>Remove</th>
    </tr>
  </thead>
  <tbody>
  @foreach($cartItems as $cartItem)
    <tr>
      <td>
      <a  href="{{ route('customer.viewCartProduct',$cartItem->product_id) }}">
        <div class="d-flex align-items-center">
          <img
              src="{{ url('products/'.$cartItem->food_image) }}"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">{{$cartItem->food_name}}</p>
           
          </div>
        </div>
</a>
      </td>
      <td>
        <p class="fw-normal mb-1">{{$cartItem->chef_name}}</p>
        
      </td>
      <td>
      @if($cartItem->is_available == 1)
            Available
        @else
            Not Available
        @endif
      </td>
      <td>{{$cartItem->food_price}}</td>
      <td>
      <a  href="{{ route('customer.deleteMyCartProduct',$cartItem->id) }}"><img src="{{ url('icons/trash-solid.svg') }}"
                                style="height: 30px; width: 30px;"></a>
      </td>
    </tr>

    @endforeach




  </tbody>
</table>



          <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Payment Method</p>
              </div>
              <div class="col-sm-9 d-flex">
              <button id="payment-button" class="container text-center ">Pay with Khalti</button>
    <button id="cash-button" class="container">Pay with Cash</button>              </div>
            </div>


              
                 <!-- Place this where you need payment button -->
 

    <!-- Place this where you need payment button -->
    <!-- Paste this code anywhere in you body tag -->
    <script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_dc74e0fd57cb46cd93832aee0a390234",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
                ],
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            var amountInRupies = {{ $totalPrice}} * 100; // Assuming food_price is in rupees
        checkout.show({ amount: amountInRupies });
        }

            // Simulate a click on page load
    document.addEventListener('DOMContentLoaded', function() {
        var paymentButton = document.getElementById('payment-button');
        // paymentButton.click();
        // paymentButton.style.display = 'none';
    });
    </script>
    <!-- Paste this code anywhere in you body tag -->


                  
</section>

</body>
</html>
@endsection