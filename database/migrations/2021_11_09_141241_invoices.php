<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Invoices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('invoices', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('id_client')->unsigned();
            $table->bigInteger('id_product')->unsigned();
            $table->string('paymentPointInvoice');
            $table->date('dateInvoice');
            $table->string('ivaInvoice');
            $table->string('totalProductsInvoice');
            $table->string('totalPriceInvoice');
            $table->string('cashReceivedInvoice');
            $table->string('cashBackInvoice');
            $table->timestamps();
            $table->foreign('id_client')->references('id')->on('clients')->onDelete("cascade");
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
