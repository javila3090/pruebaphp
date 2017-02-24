<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'tipoEmpresa';
    protected $fillable = ['nombre'];
    protected $guarded = ['id'];
}
