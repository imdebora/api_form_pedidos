<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_x_produto', function (Blueprint $table) {
            $table->unsignedBigInteger('pedido_id')->nullable();
            $table->foreign('pedido_id')
                ->references('id')
                ->on('pedido');
            $table->unsignedBigInteger('produto_id')->nullable();
            $table->foreign('produto_id')
                ->references('id')
                ->on('produto');
            $table->string('quantidade');
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
        Schema::dropIfExists('pedido_x_produto');
    }
};
