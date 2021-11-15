<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('commentText');
            $table->dateTime('date_of_posting')->nullable();
            $table->bigInteger('author_id')->unsigned();
            $table->bigInteger('post_id')->unsigned();
            $table->timestamps();

            
            $table->foreign('author_id')->references('id')->on('authors')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('post_id')->references('id')->on('posts')
            ->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
