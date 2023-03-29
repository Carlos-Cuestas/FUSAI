<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Agencia;
use App\Models\TipoPago;
use App\Models\tipoUsuario;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TipoUsuarioSeeder::class,
            AgenciaSeeder::class,
            UserSeeder::class,
            TipoPagoSeeder::class,
            TipoperfilSeeder::class,
            FormaPagoSeeder::class,
        ]);

        //si solo se deja uno como este, no usara el seeder,
        //solo el factory
        //User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
