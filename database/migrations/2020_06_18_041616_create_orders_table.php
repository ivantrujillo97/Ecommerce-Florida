<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->string('transaction_key', 100);
            $table->string('paypal_data',200)->nullable();
            $table->bigInteger('customer_id')->unsigned()->nullable();
            $table->string('order_price',100);
            $table->string('order_states',100);
            $table->date('order_delivery_date', 0);
            $table->string('order_delivery_time', 100);
            $table->timestamps();


            $table->foreign('customer_id')->references('customer_id')->on('customers')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
