<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vivienda;

class Bloque extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','estado'];

    public function viviendas(){
        return $this->hasMany(Vivienda::class);
    }
}
