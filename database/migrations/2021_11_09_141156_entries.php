<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Entries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('entries', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('productEntry');
            $table->string('quantityEntry');
            $table->string('priceProductEntry');
            $table->string('brandEntry');
            $table->date('dateEntry');
            $table->BigInteger('id_product')->unsigned();
            $table->timestamps();
            $table->foreign('id_product')->references('id')->on('products')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
