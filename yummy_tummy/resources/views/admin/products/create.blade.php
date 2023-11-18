@extends('layouts.adminDashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Products</title>

    </head>

    <body>



        <x-validation-errors class="mb-4 container" />
        <div className="p-4 container">
            <form class="row g-3 p-10 m-10 container" method="POST" action="{{ route('admin.storeProduct') }}" enctype="multipart/form-data">
                @csrf

                <div class="col-md-6">
                    <label for="foodName" class="form-label">Food Name</label>
                    <input type="text" class="form-control" id="foodName" name="food_name">
                </div>
                <div class="col-6">
                    <label for="ingredients" class="form-label">Ingredients</label>
                    <input type="text" class="form-control" id="ingredients" placeholder="" name="ingredients">
                </div>
                <div class="col-md-12">
                    <label for="foodDescription" class="form-label">Description</label>
                    <input type="text" class="form-control" id="foodDescription" name="food_descriptions">
                </div>
           
                <div class="col-12">
                    <label for="foodImage" class="form-label">Food Image</label>
                    <input type="file" class="form-control" id="foodImage" required name="food_image">
                </div>
                <div class="col-md-4">
                    <label for="category" class="form-label">Category</label>
                    <input type="text" class="form-control" id="category" name="category_tag">
                </div>
                <div class="col-md-2">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="food_price">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Status</label>
                    <select id="inputState" class="form-select" name="is_available">
                        <option value="true" selected>Avialable</option>
                        <option value="false">Not Avialable</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="avialableQuantity" class="form-label">Available Quantity</label>
                    <input type="text" class="form-control" id="avialableQuantity" name="quantity_available">
                </div>
      
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-lg"
                        style="background-color: #007bff; border-color: #007bff;">Add Food Item</button>
                </div>

            </form>

        </div>


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
   


    </body>

</html>
@endsection