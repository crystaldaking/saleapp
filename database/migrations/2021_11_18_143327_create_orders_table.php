<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Order_time - дата создания ордера
         * Price - цена ордера
         * Status - 0 (создан), 1 (подтвержен), 2 (заверешен), 3 (отменен), 4 (возвращен)
         */
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('order_time');
            $table->decimal('price',12);
            $table->integer('status');

            $table->foreignId('token_id')->references('id')->on('tokens');
            $table->foreignId('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('orders');
    }
}
