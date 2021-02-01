<?php

namespace Database\Factories\V1\Seguridad;

use App\Models\V1\Seguridad\Rol;
use App\Models\V1\Seguridad\Usuario;
use App\Models\V1\Seguridad\UsuarioRol;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioRolFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsuarioRol::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => Usuario::all()->random()->id,
            'rol_id' => Rol::all()->random()->id
        ];
    }
}
