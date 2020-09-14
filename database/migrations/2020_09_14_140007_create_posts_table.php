<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {

            $table->id();
            //creo la colonna
            $table->unsignedBigInteger('user_id');
            //creo una relazione con la tabella users
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');

            $table->string('title');
            $table->longText('content');
            $table->text('image');
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
        Schema::dropIfExists('posts');
    }
}
