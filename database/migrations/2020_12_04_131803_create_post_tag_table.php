<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagTable extends Migration
{
    private $table = "past_tag";


    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')
                ->references('id')
                ->on('posts')
                ->cascadeOnDelete();
            $table->foreignId('tag_id')
                ->references('id')
                ->on('tags')
                ->cascadeOnDelete();
        });
    }


    public function down()
    {
        Schema::dropIfExists('post_tag');
    }
}
