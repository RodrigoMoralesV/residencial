<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reserva;

class Zonas_comun extends Model
{
    use HasFactory;

    protected $table = "zonas_comunes";

    public $fillable = ['nombre'];

    public function reservas(){
        return $this->hasMany(Reserva::class);
    }
}
