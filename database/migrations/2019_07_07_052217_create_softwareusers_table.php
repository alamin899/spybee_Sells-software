<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoftwareusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('softwareusers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('useremail','100')->unique();
            $table->string('role');
            $table->string('unid')->unique();
            $table->string('phone1')->unique();
            $table->string('phone2')->unique();
            $table->string('useraddress');
            $table->string('profileimage')->nullable();
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
        Schema::dropIfExists('softwareusers');
    }
}
