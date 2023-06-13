<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produto_id'); 
            $table->unsignedBigInteger('cliente_id'); 
            $table->string('quantidade', 50);
            $table->string('total_pedido', 50);
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->foreign('cliente_id')->references('id')->on('clientes');
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
        Schema::dropIfExists('pedidos');
    }
}
