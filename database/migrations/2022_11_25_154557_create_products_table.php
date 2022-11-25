<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('upc');
            $table->integer('current_cost');
            $table->integer('profit_percentage');
            $table->tinyInteger('enable')->default(0);
            $table->unsignedBiginteger('brand');
            $table->timestamps();

            $table->foreign('brand')
                ->references('id')
                ->on('brands');

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
