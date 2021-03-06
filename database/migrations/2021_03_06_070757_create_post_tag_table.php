<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            // ================ CARA 1 ===================
            // untuk menjadikan primary key
            $table->foreignId('post_id')->constrained('posts');
            $table->foreignId('tag_id')->constrained('tags');
            $table->primary(['post_id', 'tag_id']);
            // ================ CARA 1 ===================


            // // ================ CARA 2 ===================
            // // untuk menjadikan primary key
            // $table->foreignId('post_id');
            // $table->foreignId('tag_id');
            // $table->primary(['post_id', 'tag_id']);

            // // untuk menjadikannya FK dan row akan terhapus jika FK dihapus
            // $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            // $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
            // // ================ CARA 2 ===================
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tag');
    }
}
