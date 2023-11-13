    <!DOCTYPE html>
	<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Shopping Cart</title>
	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	</head>
	<body>
	    <!-- Navigation -->
	    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	        <a class="navbar-brand" href="#">BrandName</a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	            <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarNav">
	            <ul class="navbar-nav ml-auto">
	                <li class="nav-item active">
	                    <a class="nav-link" href="#">Home</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="#">Products</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="#">Cart</a>
	                </li>
	            </ul>
	        </div>
	    </nav>
	 
	    <!-- Product List -->

	    <section id="product-list" class="container m-5 ">

	        <div class="row">
            @foreach($products as $product)

	            <div class="col-md-4">

	                <div class="card">
	                    <img src="{{ url('products/'.$product->food_image) }}" class="card-img-top" alt="Product 1">
	                    <div class="card-body">
	                        <h5 class="card-title">{{ $product->food_name }}</h5>
	                        <p class="card-text">{{ $product->food_descriptions }}</p>
                            <a  href="">
	                        <div class="d-flex">
                            <form action="{{ route('customer.carts.store') }}" method="post">
    @csrf
    <input type="hidden" name="customer_id" value='{{Auth::user()->name }}'>
    <input type="hidden" name="chef_id" value='{{$product->chief_id}}'>
    <input type="hidden" name="product_id" value='{{$product->id}}'>

    <button class="btn btn-primary add-to-cart" data-product-id="1" type="submit">Add to Cart</button></a>
</form>

                           
                            <a  href="{{ route('customer.viewCartProduct',$product->id) }}">
                            <button class="btn btn-secondary add-to-cart ml-5" data-product-id="1">Product Details</button></a>
                            </div>
	                    </div>
	                </div>
                </div>
                @endforeach
	            </div>
	            
	    </section>
    

	 
	    <!-- Shopping Cart -->
	    <!-- <section id="shopping-cart" class="container mt-5">
	        <h2>Shopping Cart</h2>
	        <table class="table">
	            <thead>
	                <tr>
	                    <th>Product</th>
	                    <th>Price</th>
	                    <th>Quantity</th>
	                    <th>Total</th>
	                    <th></th>
	                </tr>
	            </thead>
	            <tbody id="cart-items"> -->
	                <!-- Cart items will be dynamically added here -->
	            <!-- </tbody>
	            <tfoot>
	                <tr>
	                    <td colspan="3"></td>
	                    <td><strong>Total:</strong></td>
	                    <td id="cart-total">$0.00</td>
	                </tr>
	            </tfoot>
	        </table>
	    </section> -->
	 
	    <!-- Bootstrap & jQuery JS -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	    <script src="script.js"></script>


        <style>
            	body {
	    font-family: Arial, sans-serif;
	}
	 
	#product-list .card {
	    margin-bottom: 20px;
	}
	 
	#shopping-cart {
	    display: none;
	}
	 
	#shopping-cart table {
	    margin-top: 20px;
	}
	 
	#shopping-cart table th {
	    text-align: center;
	}
	 
	#shopping-cart table td {
	    vertical-align: middle;
	}
	 
	#shopping-cart table td:last-child {
	    text-align: right;
	}
	 
	#shopping-cart table tfoot td:first-child {
	    text-align: right;
	}
	 
	#shopping-cart table tfoot td:last-child {
	    font-weight: bold;
	}
        </style>
	</body>
	</html>