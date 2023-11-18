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
            <form class="row g-3 p-10 m-10 container items-center" method="POST" action="{{ route('admin.editProduct', $product->id) }}" enctype="multipart/form-data">
                @csrf

                <div class="col-md-6">
                    <label for="foodName" class="form-label">Food Name</label>
                    <input type="text" class="form-control" id="foodName" name="food_name" value='{{$product->food_name}}'>
                </div>
                <div class="col-6">
                    <label for="ingredients" class="form-label">Ingredients</label>
                    <input type="text" class="form-control" id="ingredients" placeholder="" name="ingredients" value='{{$product->ingredients}}'>
                </div>
                <div class="col-md-12">
                    <label for="foodDescription" class="form-label">Description</label>
                    <input type="text" class="form-control" id="foodDescription" name="food_descriptions" value='{{$product->food_descriptions}}'>
                </div>
           
                <div class="col-12">
    <label for="foodImage" class="form-label">Food Image</label>
    <input type="file" class="form-control" id="foodImage"  name="food_image">
    
    @if($product->food_image)
        <img src="{{ url('products/'.$product->food_image) }}" alt="Current Image" style="max-width: 200px; margin-top: 10px;">
    @endif
</div>

                <div class="col-md-4">
                    <label for="category" class="form-label">Category</label>
                    <input type="text" class="form-control" id="category" name="category_tag" value='{{$product->category_tag}}'>
                </div>
                <div class="col-md-2">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="food_price" value='{{$product->food_price}}'>
                </div>
                <div class="col-md-4">
    <label for="inputState" class="form-label">Status</label>
    <select id="inputState" class="form-select" name="is_available">
        <option value="true" {{ $product->is_available == true ? 'selected' : '' }}>Available</option>
        <option value="false" {{ $product->is_available == false ? 'selected' : '' }}>Not Available</option>
    </select>
</div>

                <div class="col-md-2">
                    <label for="avialableQuantity" class="form-label">Available Quantity</label>
                    <input type="text" class="form-control" id="avialableQuantity" name="quantity_available" value='{{$product->quantity_available}}'>
                </div>
      
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-lg"
                        style="background-color: #007bff; border-color: #007bff;">Update Food Item</button>
                </div>

            </form>

        </div>


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    </body>

</html>
@endsection