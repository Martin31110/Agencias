<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viajes extends Model
{
    use HasFactory;
    protected $fillable = ['Destino','Cliente','Hotel','Fecha','numeroPersonas','Servicios','Estado'];


    public function tipo_viajes(){
        return $this->belongsToMany(tipo_viajes::class, 'viajes_tipo');
    }
}
