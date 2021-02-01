<?php

namespace App\Models\V1\Seguridad;

use Illuminate\Database\Eloquent\Model;
use App\Models\V1\Catalogo\Departamento;
use Faker\Provider\sv_SE\Municipality;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Configuracion extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'configuration';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'logo',
        'departament_id',
        'municipality_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime:d/m/Y h:i:s a',
        'updated_at' => 'datetime:d/m/Y h:i:s a'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

    /**
     * Get the departments associated with the municipality.
     *
     * @return object
     */
    public function departament()
    {
        return $this->hasOne(Departamento::class, 'id', 'departament_id');
    }

    /**
     * Get the municipalities associated with the user.
     *
     * @return object
     */
    public function municipality()
    {
        return $this->hasOne(Municipality::class, 'id', 'municipality_id');
    }
}
