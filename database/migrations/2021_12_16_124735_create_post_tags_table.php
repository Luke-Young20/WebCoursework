<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tags', function (Blueprint $table) {
            $table->primary(['post_id', 'tag_id']);
            $table->bigInteger('post_id')->unsigned();
            $table->bigInteger('tag_id')->unsigned();
            $table->timestamps();


            $table->foreign('post_id')->references('id')->on('posts')
            ->onDelete('cascade')->ouUpdate('cascade'); // sql connecting many to many

            $table->foreign('tag_id')->references('id')->on('tags')
            ->onDelete('cascade')->ouUpdate('cascade'); // sql connecting many to many
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tags');
    }
}
