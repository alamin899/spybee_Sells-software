<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellproducts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->date('sellsdate');
            $table->string('sellsinvoice');
            $table->string('productname');
            $table->string('productserialno');
            $table->float('productunitprice');
            $table->integer('productquantity');
            $table->string('productwarrenty');
            $table->float('total_amount');
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
        Schema::dropIfExists('sellproducts');
    }
}
