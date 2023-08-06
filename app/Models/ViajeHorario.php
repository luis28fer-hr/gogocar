<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ViajeHorario extends Model
{
    use HasFactory;

    protected $fillable = [
        'viaje_id',
        'dia_semana',
        'hora_salida',
        'hora_llegada'
    ];

    public function viaje(): BelongsTo
    {
        return $this->belongsTo(Viaje::class, 'viaje_id');
    }
}
