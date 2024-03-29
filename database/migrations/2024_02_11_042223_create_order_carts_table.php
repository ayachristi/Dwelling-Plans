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
        Schema::create('order_carts', function (Blueprint $table) {
            $table->id('oc_id');

            $table->bigInteger('order_id')->unsigned();
            $table->foreign('order_id')
                ->references('order_id')
                ->on('orders')
                ->onCascade('delete');


            $table->bigInteger('cart_id')->unsigned();
            $table->foreign('cart_id')
                ->references('cart_id')
                ->on('carts')
                ->onCascade('delete');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_carts');
    }
};
