<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EstatusSolicitud extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
    ];

    public function solicitudes(): HasMany
    {
        return $this->hasMany(Solicitud::class, 'estatus_solicitud_id');
    }
}