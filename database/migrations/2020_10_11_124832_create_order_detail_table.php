<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordersdetail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bookID')->unique();
            $table->integer('quantity');
            $table->foreign('bookID')->references('id')->on('books')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('ordersdetail');
        Schema::table('ordersdetail', function (Blueprint $table){
           $table->dropForeign('bookID');
        });
    }
}
