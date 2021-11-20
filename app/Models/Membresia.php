<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membresia extends Model
{
    protected $fillable = ['id_user','fecha_expedicion','fecha_expiracion'];
    use HasFactory;
}
