<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $user = auth()->user(); // Get the authenticated user

        if ($user->role === 0) {
            return view('/admin/adminDashboard');
        } elseif ($user->role === 1) {
            return redirect('/customer/view-product-location');
                } else {
            // Handle other roles or cases as needed
            // You might want to return an error view or redirect to another page.
        }
    })->name('dashboard');
});

Route::resource('products', ProductController::class);

// Route::post('/admin/add-product', 'ProductController@store')->name('admin.addProduct');
Route::get('/admin/add-product', [ProductController::class, 'create'])->name('admin.addProduct');
Route::post('/admin/add-product', [ProductController::class, 'store'])->name('admin.storeProduct');
Route::get('/admin/view-product', [ProductController::class, 'index'])->name('admin.viewProduct');
Route::get('/admin/edit-product/{id}', [ProductController::class, 'edit'])->name('admin.editProduct');
// Route::get('/admin/edit-product/{id}', [ProductController::class, 'update'])->name('admin.editProduct');
Route::post('/admin/edit-product/{id}', [ProductController::class, 'update'])->name('admin.editProduct');

Route::get('/admin/delete-product/{id}', [ProductController::class, 'destroy'])->name('admin.deleteProduct');
Route::post('/admin/delete-product/{id}', [ProductController::class, 'destroy'])->name('admin.deleteProduct');
Route::delete('/admin/delete-product/{id}', [ProductController::class, 'destroy'])->name('admin.deleteProduct');


// for customer routing
Route::get('/customer/view-product', [ProductController::class, 'allProductShow'])->name('customer.viewProduct');
// products only in same location of chief and customer
Route::get('/customer/view-product-location', [ProductController::class, 'productShowByLocation'])->name('customer.viewProductByLocation');

// show products by searching
Route::get('/search/products', [ProductController::class, 'searchProducts'])->name('search.products');

// for cart
Route::get('/customer/cart/{id}', [CartController::class, 'viewCart'])->name('customer.viewCartProduct');

// payment
Route::get('/customer/payment', [TransactionController::class, 'index'])->name('customer.payment');


// add to cart
Route::post('/addcarts', [CartController::class, 'addToCart'])->name('customer.carts.store');

// my cart details
Route::get('/customer/mycart', [CartController::class, 'myCart'])->name('customer.viewMyCartProduct');

// delete item from my cart
Route::post('/customer/delete-mycart/{id}', [CartController::class, 'removeFromCart'])->name('customer.deleteMyCartProduct');
Route::get('/customer/delete-mycart/{id}', [CartController::class, 'removeFromCart'])->name('customer.deleteMyCartProduct');
Route::delete('/customer/delete-mycart/{id}', [CartController::class, 'removeFromCart'])->name('customer.deleteMyCartProduct');










