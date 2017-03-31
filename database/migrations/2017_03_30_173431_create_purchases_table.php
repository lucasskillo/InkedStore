<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('provider_id');
            $table->integer('account_id');
            $table->date('date');
            $table->timestamps();
        });

        Schema::create('purchases_itens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('purchase_id');
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
        Schema::dropIfExists('purchases_itens');
        Schema::dropIfExists('purchases');
    }
}
