<?php

namespace Database\Seeders;

use App\Models\FormaPago;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormaPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $formapago = [
            'cheque','efectivo'
        ];

        FormaPago::factory(count($formapago))->sequence(fn ($sqn)=>[
            'nombre' => $formapago[$sqn->index],
        ])->create();
    }
}
