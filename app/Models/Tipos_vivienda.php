<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipos_vivienda extends Model
{
    use HasFactory;

    public $fillable = ['nombre'];
}
