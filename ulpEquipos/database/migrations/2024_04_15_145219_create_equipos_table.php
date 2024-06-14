<?php

use App\Models\User;
use App\Models\Equipo;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('marca');
            $table->string('modelo');
            $table->string('fecha_ingreso');
            $table->enum('status', [Equipo::Activo, Equipo::Inactivo])->default(Equipo::Activo);
            $table->text('descripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};
