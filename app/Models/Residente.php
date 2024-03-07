<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vivienda;
use App\Models\Reserva;

class Residente extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','movil','vivienda_id'];

    public function vivienda(){
        return $this->belongsTo(Vivienda::class);
    }

    public function reserva(){
        return $this->belongsTo(Reserva::class);
    }
}
