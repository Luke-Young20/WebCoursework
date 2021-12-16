<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->bigIncrements('id');
            #$table->string('type');
            $table->string('name');
            $table->string('last_name');
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned()->nullable();

            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade')->ouUpdate('cascade'); 
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
