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
        Schema::create('cart', function (Blueprint $table) {
            $table->id('cart_id');
            $table->timestamps();

            $table->integer('user_id');
            $table->integer('cart_item1_id');
            $table->integer('cart_item2_id');
            $table->integer('cart_item3_id');
            $table->integer('cart_item4_id');
            $table->integer('cart_item5_id');
            $table->integer('cart_item1_amt');
            $table->integer('cart_item2_amt');
            $table->integer('cart_item3_amt');
            $table->integer('cart_item4_amt');
            $table->integer('cart_item5_amt');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
