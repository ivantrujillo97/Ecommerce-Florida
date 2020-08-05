<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('product_name',100);
            $table->string('product_trademark',100);
            $table->string('product_net_content',100)->nullable();
            $table->string('product_colors',100)->nullable();
            $table->string('product_flavors',100)->nullable();
            $table->string('product_recipes')->nullable();
            $table->string('product_customization',100)->nullable();
            $table->string('product_price',100);
            $table->string('product_image_name')->nullable();
            $table->string('product_state',100);
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
        Schema::dropIfExists('products');
    }
}
