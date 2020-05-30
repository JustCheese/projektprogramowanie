<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table='filmy';
    protected $primaryKey = 'id_film';
}
