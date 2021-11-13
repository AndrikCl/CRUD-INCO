<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('products', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('supplier_id')->unsigned();
            $table->string('nameProduct');
            $table->string('quantityProduct');
            $table->string('priceProduct');
            $table->string('brandProduct');
            $table->string('ivaProduct');
            $table->string('descriptionProduct');
            $table->timestamps();
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete("cascade");
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
