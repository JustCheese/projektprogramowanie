<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wypozyczenia extends Model
{
    public $timestamps = false;
    protected $table='wypozyczenie';
    protected $primaryKey = 'id_wypozyczenie';
}
