<?php

use App\Models\Agencia;
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
        Schema::create('modulo_pagos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(TipoPago::class)->constrained();
            $table->foreignIdFor(Agencia::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modulo_pagos');
    }
};
