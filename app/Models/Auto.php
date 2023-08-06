<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Auto extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'placa',
        'marca_id',
        'marca',
        'modelo_id',
        'modelo',
        'capacidad',
        'no_seguro',
        'foto',
        'verificado',
        'activo'
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function viajes(): HasMany
    {
        return $this->hasMany(Viaje::class, 'auto_id');
    }
}
