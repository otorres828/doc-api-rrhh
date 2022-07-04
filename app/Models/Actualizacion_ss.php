<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualizacion_ss extends Model
{
    use HasFactory;
    protected $table = 'actualizacion_ss';
    protected $guarded =['id'];
    public $timestamps = false;
}
