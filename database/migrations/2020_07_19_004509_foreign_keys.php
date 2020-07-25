<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lista_compras', function (Blueprint $table)  {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('productos', function (Blueprint $table)  {
            $table->foreign('lista_compra_id')->references('id')->on('lista_compras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
