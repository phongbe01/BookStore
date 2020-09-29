<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('summary');
            $table->string('image');
            $table->string('price');
            $table->integer('quantity');
            $table->unsignedBigInteger('authorID');
            $table->unsignedBigInteger('publisherID');
            $table->unsignedBigInteger('categoryID');
            $table->foreign('authorId')->references('id')->on('authors')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('publisherId')->references('id')->on('publishers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('categoryId')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('books');
        Schema::table('books', function (Blueprint $table){
           $table->dropForeign('authorId');
           $table->dropForeign('publisherId');
           $table->dropForeign('categoryId');
        });
    }
}
