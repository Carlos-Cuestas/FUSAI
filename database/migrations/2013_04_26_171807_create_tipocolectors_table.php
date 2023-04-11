<?php

use App\Models\TipoPago;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tipocolectors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('registro');
            $table->string('estado');
            $table->string('cliente');
            $table->foreignIdFor(TipoPago::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipocolectors');
    }
};
