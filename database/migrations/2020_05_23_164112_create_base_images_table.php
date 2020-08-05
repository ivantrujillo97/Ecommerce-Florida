<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaseImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_images', function (Blueprint $table) {
            $table->bigIncrements('base_image_id');
            $table->string('base_image_name');
            $table->bigInteger('base_id')->unsigned();
            $table->timestamps();


            $table->foreign('base_id')->references('base_id')->on('bases')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('base_images');
    }
}
