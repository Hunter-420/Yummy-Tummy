<?php

// app/Http/Controllers/OrderController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function createOrder(Request $request)
    {
        // Logic to create a new order based on the user's shopping cart
        // You might want to handle transactions, update product quantities, etc.
           // Validate and store the new order
           $request->validate([
            'customer_id' => 'required',
            'chef_id' => 'required',
            'product_id' => 'required',
            'payment_method' => 'required|string',
            'payment_status' => 'required|boolean',
            'price' => 'required|numeric', // Add validation for the price field
        ]);

        Order::create($request->all());

        return redirect()->route('customer.viewProductByLocation')->with('success', 'Order created successfully!');
    
    }


public function createCartOrder(Request $request)
{
       // Validate the form data if necessary
       $validatedData = $request->validate([
        // Add validation rules here if needed
    ]);

    // Retrieve cart items from the request
    $cartItems = $request->input('cart');

    // Loop through cart items and create an order for each item
    foreach ($cartItems as $cartItem) {
        $order = new Order();
        $order->customer_id = $cartItem['customer_id'];
        $order->chef_id = $cartItem['chef_id'];
        $order->product_id = $cartItem['product_id'];
        $order->payment_method = $cartItem['payment_method'];
        $order->payment_status = $cartItem['payment_status'];
        $order->price = $cartItem['price'];
        
        // Save the order to the database
        $order->save();
    }

    // You can also perform other actions here if needed

    // Redirect or return a response
    return redirect()->route('customer.viewProductByLocation')->with('success', 'Order created successfully!');
}


    public function updateOrderStatus($orderId, $status)
    {
        // Logic to update the status of a specific order
    }

    public function viewOrder($orderId)
    {
        // Logic to retrieve and display the details of a specific order
    }

    public function viewUserOrders($userId)
    {
        // Logic to retrieve and display a user's order history
        // Retrieve the user by ID
        $userID = Auth::id();
    $user = User::find($userId);

    // Check if the user exists
    if (!$user) {
        return redirect()->route('customer.viewProductByLocation')->with('error', 'User not found');
    }

  // Retrieve the user's orders with joined chef and product data
  $orders = DB::table('orders')
  ->join('products', 'orders.product_id', '=', 'products.id')
  ->join('users', 'orders.chef_id', '=', 'users.id') // Join with the users table for chief details
  ->select('products.*', 'orders.*','users.name as chef_name') // Select all columns from both tables            
  ->where('orders.customer_id', '=', $userId)
  ->get();
    


    // You can customize the view or pass additional data as needed
    return view('customer.orders.order', ['orders' => $orders]);
    }

    // Additional methods for handling order-related functionality
}

