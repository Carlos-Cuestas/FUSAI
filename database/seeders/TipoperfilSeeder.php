<?php

namespace Database\Seeders;

use App\Models\Tipoperfil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoperfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipoperfil = [
            'operador','cliente'
        ];

        Tipoperfil::factory(count($tipoperfil))->sequence(fn ($sqn)=>[
            'nombre' => $tipoperfil[$sqn->index],
        ])->create();
    }
}
