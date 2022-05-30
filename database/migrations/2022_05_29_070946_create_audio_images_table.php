<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudioImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audio_images', function (Blueprint $table) {
            $table->id();
            $table->integer('audio_id');
            $table->text('image_details')->nullable();
            $table->text('image_flexflix')->nullable();
            $table->text('image_flexflix_details')->nullable();
            $table->text('image_home')->nullable();
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
        Schema::dropIfExists('audio_images');
    }
}
