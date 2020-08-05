<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComboProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combo_products', function (Blueprint $table) {
            $table->bigIncrements('comobo_prduct_id');
            $table->bigInteger('combo_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->string('units');

            $table->foreign('combo_id')->references('combo_id')->on('combos')->onDelete('cascade')->onUpdate('restrict');
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('combo_product');
    }
}
