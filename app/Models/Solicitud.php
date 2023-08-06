<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Solicitud extends Model
{
    use HasFactory;

    protected $fillable = [
        'estatus_solicitud_id',
        'user_id',
        'viaje_id',
        'fecha_solicitado',
        'ubicacion',
        'comentarios'
    ];

    public function estatusSolicitud(): BelongsTo
    {
        return $this->belongsTo(EstatusSolicitud::class, 'estatus_solicitud_id');
    }

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function viaje(): BelongsTo
    {
        return $this->belongsTo(Viaje::class, 'viaje_id');
    }
}
