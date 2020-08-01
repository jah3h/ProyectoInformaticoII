<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Producto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('cantidad');
            $table->string('unidad_medida_cod');
            $table->decimal('precio');
            $table->unsignedBigInteger('lista_compra_id');
            $table->boolean('estado')->default(0);
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
        //
    }
}
