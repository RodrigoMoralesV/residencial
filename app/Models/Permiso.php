<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vivienda;

class Permiso extends Model
{
    use HasFactory;

    public $fillable = ['vivienda_id','nombre_visitante','documento_visitante'];

    public function vivienda(){
        return $this->belongsTo(Vivienda::class);
    }
}
