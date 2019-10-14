<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pdisplayname')->nullable();
            $table->string('pname');
            $table->string('pserialno');
            $table->string('pbrand')->nullable();
            $table->string('pmodel')->nullable();
            $table->string('pwarrenty')->nullable();
            $table->date('pbuydate')->nullable();
            $table->float('pbuyprice');
            $table->float('psellprice');
            $table->string('profileimage')->nullable();
            $table->integer('quantity');
            $table->string('vendor')->nullable();
            $table->string('pshortdesc')->nullable();
            $table->string('pfulldesc')->nullable();
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
        Schema::dropIfExists('products');
    }
}
