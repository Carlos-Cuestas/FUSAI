<?php

namespace Database\Seeders;

use App\Models\tipoUsuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nombres = [
            'admin','operativo','jefe'
        ];

        
        Tipousuario::factory(count($nombres))->sequence(fn ($sqn)=>[
            'nombre' => $nombres[$sqn->index]
        ])->create();
    }
}
