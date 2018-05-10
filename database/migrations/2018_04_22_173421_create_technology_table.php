<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnologyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
 
        Schema::create('technology', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('name');
            $table->string('screen');
            $table->string('system');
            $table->string('cpu');
            $table->integer('ram')->unsigned();
            $table->integer('rom')->unsigned();
            $table->string('memory');
            $table->integer('pin');
            $table->integer('product_id')->unsigned()->nullable();
            $table->foreign('product_id')->references('id')->on('products');
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
        Schema::dropIfExists('technology');
    }
}
