<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_viajes extends Model
{
    use HasFactory;
    protected $fillable = ['tipo_de_viaje'];


    public function Viajes(){
        return $this->belongsToMany(Viajes::class, 'viajes_tipo');
    }
}
