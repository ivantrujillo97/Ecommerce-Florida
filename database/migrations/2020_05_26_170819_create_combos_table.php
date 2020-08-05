<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCombosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combos', function (Blueprint $table) {
            $table->bigIncrements('combo_id');
            $table->string('combo_name');
            $table->bigInteger('combo_type_id')->unsigned();
            $table->bigInteger('base_id')->unsigned();
            $table->string('combo_description')->nullable();
            $table->string('combo_purchase_price',100);
            $table->string('combo_price_percentage',100);
            $table->string('combo_sale_price',100);
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('customer_id')->unsigned()->nullable();
            $table->string('combo_state');
            $table->timestamps();

            $table->foreign('combo_type_id')->references('combo_type_id')->on('combo_types')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('base_id')->references('base_id')->on('bases')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('combos');
    }
}
