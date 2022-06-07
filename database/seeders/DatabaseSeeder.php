<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(2)->create();
        // \App\Models\Articulo::factory(1000)->create();
        // \App\Models\Categoria::factory(1)->create();
        \App\Models\Desarrollador::factory(2)->create();
        \App\Models\Empresa::factory(2)->create();
        \App\Models\Proyecto::factory(2)->create();
        \App\Models\Horario::factory(2)->create();
        \App\Models\Habilidad::factory(2)->create();
        \App\Models\Region::factory(2)->create();
        \App\Models\Provincia::factory(2)->create();
        \App\Models\Distrito::factory(2)->create();
    }
}
