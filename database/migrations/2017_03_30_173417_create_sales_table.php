<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id');
            $table->integer('account_id');
            $table->date('date');
            $table->timestamps();
        });

        Schema::create('sales_itens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sale_id');
            $table->integer('item_id');
            $table->integer('quantity');
            $table->float('price');
            $table->float('total');
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
        Schema::dropIfExists('sales_itens');
        Schema::dropIfExists('sales');
    }
}
