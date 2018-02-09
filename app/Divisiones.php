<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisiones extends Model
{
    //
    protected $table = "divisiones";
    protected $fillable = ["dividendo", "divisor", "resultado"];
}
