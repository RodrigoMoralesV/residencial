<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Zonas_comun;
use App\Models\Residente;

class Reserva extends Model
{
    use HasFactory;

    public $fillable = ['zona_comun_id','fecha_reserva','hora_reserva','residente_id'];

    public function zonas_comun(){
        return $this->belongsTo(Zonas_comun::class, 'zona_comun_id');
    }

    public function residente(){
        return $this->belongsTo(Residente::class);
    }
}
