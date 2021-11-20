<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renta extends Model
{
    protected $fillable = ['email_user','nombre','fecha_registro','fecha_devolucion','fecha_entrega'];
    use HasFactory;
    
}
