<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* TODO: This table is needed to have a relationship 
        with post table, unfortunately being new to the laravel I
        cannot figure this out, I mean how to do it.
        */
        Schema::create('post_comment', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('post_id');
            $table->string('commenter');
            $table->string('comment_body');
            $table->tinyInteger('post_visibility')->default('1'); 
            /* 0 means hidden ; 1 means visible  */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_comment');
    }
}
