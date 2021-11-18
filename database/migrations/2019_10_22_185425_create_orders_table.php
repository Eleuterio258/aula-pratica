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
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('lname');
             $table->string('email');
             $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('postalcode');
            $table->integer('subtotal');
            $table->integer('tax');
            $table->integer('iva');
            $table->integer('total');
            $table->enum('status', [0, 1, 2, 3])->defaut(0);
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
