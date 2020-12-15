<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertaShoppingCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oferta_shopping_cart', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shopping_cart_id');
            $table->unsignedBigInteger('oferta_id');

            $table->foreign('shopping_cart_id')->references('id')->on('shopping_carts')->onDelete('cascade');
            $table->foreign('oferta_id')->references('id')->on('ofertas')->onDelete('cascade');

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
        Schema::dropIfExists('oferta_shopping_cart');
    }
}
