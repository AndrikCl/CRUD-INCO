<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Outputs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('outputs', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('id_product')->unsigned();
            $table->bigInteger('id_employee')->unsigned();
            $table->string('productOutput');
            $table->string('quantityOutput');
            $table->string('brandProductOutput');
            $table->date('dateOutput');
            $table->timestamps();
            $table->foreign('id_employee')->references('id')->on('employees')->onDelete("cascade");
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
