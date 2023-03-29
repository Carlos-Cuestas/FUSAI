<?php

namespace Database\Seeders;

use App\Models\Agencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estados = [
            'activo','inactivo'
        ];
        Agencia::factory(count($estados))->sequence(fn ($sqn)=>[
            'estado' => $estados[$sqn->index]
        ])->create();

        //sin son datos exactos y no cambiantes
        /*Agencia::factory(2)->sequence(fn ($sqn)=>[
            'estado' => ($estados=['activo','inactivo'])[($sqn->index)]
        ])->create();*/
    }
}
