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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->charset='utf8mb4';
			$table->collation='utf8mb4_unicode_ci';
			$table->id();
			$table->string('nombre', 20);
			$table->string('clave',4);
            $table->timestamps();
        });
		Schema::create('ventas', function (Blueprint $table) {
            $table->charset='utf8mb4';
			$table->collation='utf8mb4_unicode_ci';
			$table->id();
			$table->string('nombre_producto', 20);
			$table->integer('valor_producto');
            $table->timestamps();
        });
		Schema::create('costos', function (Blueprint $table) {
            $table->charset='utf8mb4';
			$table->collation='utf8mb4_unicode_ci';
			$table->id();
			$table->string('nombre_insumo', 20);
			$table->integer('valor_insumo');
            $table->timestamps();
        });
		Schema::create('total_ventas', function (Blueprint $table) {
            $table->charset='utf8mb4';
			$table->collation='utf8mb4_unicode_ci';
			$table->id();
			$table->date('fecha', 20);
			$table->integer('total_vendido');
			$table->integer('total_gastado');
			$table->integer('total_ganancias');
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
        Schema::dropIfExists('usuarios');
    }
};
