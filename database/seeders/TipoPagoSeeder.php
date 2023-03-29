<?php

namespace Database\Seeders;

use App\Models\TipoPago;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipopago = [
            'servicios','creditos propios','pago de remeses','tarjetas de credito','bono a creditos terceros'
        ];

        TipoPago::factory(count($tipopago))->sequence(fn ($sqn)=>[
            'nombre' => $tipopago[$sqn->index],
        ])->create();
    }
}
