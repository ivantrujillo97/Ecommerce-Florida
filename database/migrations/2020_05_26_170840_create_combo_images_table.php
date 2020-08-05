<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComboImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combo_images', function (Blueprint $table) {
            $table->bigIncrements('combo_image_id');
            $table->string('combo_image_name');
            $table->bigInteger('combo_id')->unsigned();
            $table->timestamps();

            $table->foreign('combo_id')->references('combo_id')->on('combos')->onDelete('cascade')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('combo_images');
    }
}
