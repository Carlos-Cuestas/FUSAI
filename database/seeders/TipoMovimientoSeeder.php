<?php

namespace Database\Seeders;

use App\Models\TipoMovimiento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoMovimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipomov = [
            'ingreso','egreso'
        ];

        TipoMovimiento::factory(count($tipomov))->sequence(fn ($sqn)=>[
            'nombre' => $tipomov[$sqn->index],
        ])->create();
    }
}
