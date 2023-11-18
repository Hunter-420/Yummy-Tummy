@extends('layouts.adminDashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product Details</title>

        <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js">
        </script>

    </head>

    <body>
        <section class="h-100 h-custom" style="background-color: #eee; container">
            <div class=" py-5 h-100 container">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card">
                            <div class="card-body p-4">

                                <div class="row">

                                    <div class="">
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
                                            <h2>Customer Details</h2>

                                            <div class="row d-flex">
                                                <div class="col-lg-4 ">
                                                    <div class="card mb-4 ">
                                                        <div class="card-body text-center">
                                                            @if(is_null($productDetails->profile_photo_path))
                                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                                                alt="avatar" class="rounded-circle img-fluid"
                                                                style="width: 150px;">
                                                            @else
                                                            <img src="{{ url('storage/'.$productDetails->profile_photo_path)}}"
                                                                alt="avatar" class="rounded-circle img-fluid"
                                                                style="width: 150px;">
                                                            @endif

                                                            <!-- <h5 class="my-3">{{ $productDetails->name }}</h5> -->
                                                            <!-- <p class="text-muted mb-1">Full Stack Developer</p> -->
                                                            <!-- <p class="text-muted mb-4">{{ $productDetails->location }}</p> -->

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
                                                                    <p class="text-muted mb-0">
                                                                        {{ $productDetails->name }}</p>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p class="mb-0">Email</p>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                    <p class="text-muted mb-0">
                                                                        {{ $productDetails->email }}</p>
                                                                </div>
                                                            </div>
                                                            <!-- <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $productDetails->contactno }}</p>
              </div>
            </div> -->
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p class="mb-0">Mobile</p>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                    <p class="text-muted mb-0">
                                                                        {{ $productDetails->contactno }}</p>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p class="mb-0">Address</p>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                    <p class="text-muted mb-0">
                                                                        {{ $productDetails->location }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </section>
                                    </div>




                                    <!-- product detail -->
                                    <h2>Product Details</h2>
                                    <div class="">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">Product Name</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <p class="text-muted mb-0">{{ $productDetails->food_name }}</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">Image</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <img src="{{ url('products/'.$productDetails->food_image) }}"
                                                            class="card-img-top" alt="Product 1"
                                                            style="height: 200px; width: 300px;">
                                                    </div>
                                                </div>
                                                <!-- <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $productDetails->contactno }}</p>
              </div>
            </div> -->
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">Description</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <p class="text-muted mb-0">
                                                            {{ $productDetails->food_descriptions }}</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">Category</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <p class="text-muted mb-0">{{ $productDetails->category_tag }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">Status</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <p class="text-muted mb-0">
                                                            @if($productDetails->is_available == 1)
                                                            Available
                                                            @else
                                                            Not Available
                                                            @endif
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">Price</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <p class="text-muted mb-0">{{ $productDetails->food_price }}</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>



        </section>

    </body>

</html>
@endsection