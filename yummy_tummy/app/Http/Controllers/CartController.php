<?php

// app/Http/Controllers/CartController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use App\Models\Product;



class CartController extends Controller
{
    public function viewCart($productId)
    {
       // Retrieve product details with the corresponding chief information using join
       $productDetails = DB::table('products')
       ->join('users', 'products.chief_id', '=', 'users.id')
       ->select('products.*', 'users.*')
       ->where('products.id', '=', $productId)
       ->first();

   // Check if the product is found
   if (!$productDetails) {
       return response()->json(['error' => 'Product not found'], 404);
   }

   // Pass data to the view and return it
   return view('customer.cart.cart', ['productDetails' => $productDetails]);
}

    

    public function addToCart(Request $request)
    {
        // Logic to add a product to the user's shopping cart
          // Assuming you have the user's ID and product's ID available
          $cart = Cart::create([
            'customer_id' => auth()->id(), // Assuming the customer is the authenticated user
            'chef_id' => $request->input('chef_id'), // Adjust this based on your data
            'product_id' => $request->input('product_id'),
            // Add other fields as needed
        ]);

        $products = Product::all(); 
        return view('customer.products.index', ['products' => $products]);
    }

    public function removeFromCart($userId, $productId)
    {
        // Logic to remove a product from the user's shopping cart
    }

    public function clearCart($userId)
    {
        // Logic to clear all items from the user's shopping cart
    }

    // Additional methods for updating quantities, applying discounts, etc.
}

