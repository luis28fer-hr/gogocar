<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Viaje extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_ofrece_id',
        'auto_id',
        'tipo_viaje_id',
        'descripcion',
        'punto_salida',
        'hora_salida',
        'hora_salida_2',
        'punto_llegada',
        'hora_llegada',
        'asientos_disponibles',
        'activo'
    ];

    public function usuarioOfrece(): BelongsTo
    {
        return $this->belongsTo(User::class, 'usuario_ofrece_id');
    }

    public function auto(): BelongsTo
    {
        return $this->belongsTo(Auto::class, 'auto_id');
    }

    public function tipoViaje(): BelongsTo
    {
        return $this->belongsTo(TipoViaje::class, 'tipo_viaje_id');
    }

    public function calificaciones(): HasMany
    {
        return $this->hasMany(Calificacion::class, 'calificacion_id');
    }

    public function solicitudes(): HasMany
    {
        return $this->hasMany(Solicitud::class, 'viaje_id');
    }

    public function viajeHorarios(): HasMany
    {
        return $this->hasMany(ViajeHorario::class, 'viaje_id');
    }
}
