<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer_id')->unsigned();
            $table->unsignedInteger('order_id')->unsigned();
            $table->unsignedInteger('product_id')->unsigned();
            $table->unsignedInteger('payment_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('shopping_orders')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_reports');
    }
};
