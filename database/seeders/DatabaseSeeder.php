<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\V1\Seguridad\Rol;
use App\Models\V1\Seguridad\Usuario;
use App\Models\V1\Catalogo\Municipio;
use App\Models\V1\Catalogo\Departamento;
use App\Models\V1\Seguridad\UsuarioRol;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Departamento::factory(24)->create();
        Municipio::factory(350)->create();
        Usuario::factory(100)->create();
        Rol::factory(5)->create();
        UsuarioRol::factory(500)->create();
    }
}
