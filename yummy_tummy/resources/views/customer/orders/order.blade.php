@extends('layouts.customerDashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>


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



<h2 class="">Order Details</h2>
<!-- my cart detail -->
<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Product</th>
      <th>Chief Name</th>
      <th>Price</th>
      <th>Payment Method</th>
      <th>Payment Status</th>
    </tr>
  </thead>
  <tbody>
  @foreach($orders as $order)    
  <tr>
      <td>
      <a  href="{{ route('customer.viewCartProduct',$order->product_id) }}">
        <div class="d-flex align-items-center">
          <img
              src="{{ url('products/'.$order->food_image) }}"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">{{$order->food_name}}</p>
           
          </div>
        </div>
</a>
      </td>
      <td>
        <p class="fw-normal mb-1">{{$order->chef_name}}</p>
        
      </td>
 
      <td>{{$order->food_price}}</td>
      <td>
      {{$order->payment_method}}
      </td>
      <td>
      @if($order->payment_status == 1)
            paid
        @else
            unpaid
        @endif
      </td>
  
    </tr>

    @endforeach




  </tbody>
</table>






                  
</section>

</body>
</html>
@endsection