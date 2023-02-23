<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Auto extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table ='autos';

    protected $fillable = [
        'usuario_id',
        'placa',
        'marca',
        'modelo',
        'capacidad',
        'no_seguro',
        'verificado',
        'activo'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}
