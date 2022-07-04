<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo_Trabajador extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    protected $table = 'cargo_trabajador';
    public $timestamps = false;
}
