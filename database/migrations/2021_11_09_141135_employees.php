<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('employees', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('userEmployee');
            $table->string('passwordEmployee');
            $table->string('nameEmployee');
            $table->string('lastnameEmployee');
            $table->string('phoneNumberEmployee');
            $table->string('emailEmployee');
            $table->BigInteger('id_employeeposition')->unsigned();
            $table->timestamps();
            $table->foreign('id_employeeposition')->references('id')->on('employeepositions')->onDelete("cascade");

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
