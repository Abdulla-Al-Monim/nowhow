<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDigitalstoreCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('digitalstore_comments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('digitalstore_id');
            $table->string('comment')->nullable();
            $table->integer('status')->comment('0 for en-active 1 for active')->default(0);
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
        Schema::dropIfExists('digitalstore_comments');
    }
}
