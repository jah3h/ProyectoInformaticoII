<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UnidadMedida extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /*  Schema::create('unidad_medida', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('nombre');
            $table->timestamps();
        });

        DB::table('unidad_medida')->insert(['codigo' => 'mm','nombre' => 'Milímetro', 'created_at' => date("Y-m-d H:i:s") ]);
        DB::table('unidad_medida')->insert(['codigo' => 'cm','nombre' => 'Centímetro', 'created_at' => date("Y-m-d H:i:s") ]);
        DB::table('unidad_medida')->insert(['codigo' => 'm','nombre' => 'Metro', 'created_at' => date("Y-m-d H:i:s") ]);
        DB::table('unidad_medida')->insert(['codigo' => 'pulgada','nombre' => 'Pulgada', 'created_at' => date("Y-m-d H:i:s") ]);
        DB::table('unidad_medida')->insert(['codigo' => 'mg','nombre' => 'Miligramo', 'created_at' => date("Y-m-d H:i:s") ]);
        DB::table('unidad_medida')->insert(['codigo' => 'g','nombre' => 'Gramo', 'created_at' => date("Y-m-d H:i:s") ]);
        DB::table('unidad_medida')->insert(['codigo' => 'kg','nombre' => 'Kilogramo', 'created_at' => date("Y-m-d H:i:s") ]);
        DB::table('unidad_medida')->insert(['codigo' => 'ml','nombre' => 'Mililitro', 'created_at' => date("Y-m-d H:i:s") ]);
        DB::table('unidad_medida')->insert(['codigo' => 'l','nombre' => 'Litro', 'created_at' => date("Y-m-d H:i:s") ]);
        DB::table('unidad_medida')->insert(['codigo' => 'und','nombre' => 'Unidad', 'created_at' => date("Y-m-d H:i:s") ]);
        DB::table('unidad_medida')->insert(['codigo' => 'paq','nombre' => 'Paquete', 'created_at' => date("Y-m-d H:i:s") ]);*/
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidad_medida');
    }
}
