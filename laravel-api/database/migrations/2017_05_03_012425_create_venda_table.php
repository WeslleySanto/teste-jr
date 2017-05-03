<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('venda', function (Blueprint $table) {
            $table->increments('id');
            $table->float('valor');
            
            $table->float('comissao');
            $table->integer('vendedor_id')->unsigned();
            $table->foreign('vendedor_id')
                  ->references('id')
                  ->on('vendedor')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('venda');
    }
}


