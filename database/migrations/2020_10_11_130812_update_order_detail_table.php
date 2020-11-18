<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ordersdetail', function (Blueprint $table) {
            $table->unsignedBigInteger('ordercode');
            $table->foreign('ordercode')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ordersdetail', function (Blueprint $table) {
            $table->dropForeign('ordercode');
        });
    }
}
