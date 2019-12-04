<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cronometragem extends Model
{
    protected $table = 'cronometragem';
    public $timestamps =false;//nao usa os campos de tempo do laravel
}
