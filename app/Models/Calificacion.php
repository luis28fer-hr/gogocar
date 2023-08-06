<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Calificacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'viaje_id',
        'usuario_califica_id',
        'puntuacion',
        'comentarios',
    ];

    public function viaje(): BelongsTo
    {
        return $this->belongsTo(Viaje::class, 'viaje_id');
    }

    public function usuarioCalifica(): BelongsTo
    {
        return $this->belongsTo(User::class, 'usuario_califica_id');
    }
}
