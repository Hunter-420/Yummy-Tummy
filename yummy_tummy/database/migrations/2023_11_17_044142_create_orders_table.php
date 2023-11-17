<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('chef_id');
            $table->unsignedBigInteger('product_id');
            $table->string('payment_method');
            $table->boolean('payment_status');
            $table->decimal('price', 10, 2); // Add the price field
            $table->timestamps();

            // Add foreign key constraints if needed
            // $table->foreign('customer_id')->references('id')->on('customers');
            // $table->foreign('chef_id')->references('id')->on('chefs');
            // $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
