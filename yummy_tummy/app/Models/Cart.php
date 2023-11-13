<?php

// app/Models/Cart.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'chef_id', 'product_id'];

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function chef()
    {
        return $this->belongsTo(User::class, 'chef_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

