<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoViaje extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
    ];

    public function viajes(): HasMany
    {
        return $this->hasMany(Viaje::class, 'tipo_viaje_id');
    }
}
