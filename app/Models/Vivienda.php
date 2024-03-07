<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bloque;
use App\Models\Paquete;
use App\Models\Permiso;
use App\Models\Residente;

class Vivienda extends Model
{
    use HasFactory;

    protected $fillable = ['nomenclatura','bloque_id','estado','telefono'];

    public function bloque(){
        return $this->belongsTo(Bloque::class);
    }

    public function paquetes(){
        return $this->hasMany(Paquete::class);
    }

    public function permisos(){
        return $this->hasMany(Permiso::class);
    }

    public function residentes(){
        return $this->hasMany(Residente::class);
    }
}
