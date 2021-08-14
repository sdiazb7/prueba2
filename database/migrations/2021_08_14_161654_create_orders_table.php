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
            $table->foreign('client_id')->references('id')->on('clients')->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade');
			$table->string('reference_cod', 80)->comment('Codigo de referencia de la orden.');
            $table->string('customer_name',80);
            $table->string('customer_email',120);
            $table->string('customer_mobile',40);
            $table->integer('request_id')->nullable();
            $table->string('response_mess')->nullable();
            $table->string('process_url')->nullable();
            $table->string('status', 10)->nullable();
            $table->unsignedBigInteger('client_id')->comment('Relación con la tabla clients.');
            $table->unsignedBigInteger('product_id')->comment('Relación con la tabla products.');
            $table->decimal('product_price', 8, 2)->comment('El precio del producto en el momento de la compra.');
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
