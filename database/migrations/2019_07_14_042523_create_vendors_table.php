<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vname');
            $table->string('vemail');
            $table->string('vphone','20')->unique();
            $table->string('cpname');
            $table->string('cpemail');
            $table->string('cpmob1');
            $table->string('cpmob2');
            $table->string('varea');
            $table->string('companyname');
            $table->string('vsaddress');
            $table->string('vfaddress');
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
        Schema::dropIfExists('vendors');
    }
}
