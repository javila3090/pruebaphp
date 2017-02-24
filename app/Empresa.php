<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Hash;
use App\Pais;
use App\Tipo;

class Empresa extends Model
{
    protected $table = 'empresas';
    protected $fillable = ['nombre', 'estado', 'ciudad', 'email', 'password', 'descripcion','id_tipo','id_pais'];
    protected $guarded = ['id'];
    
    public function setPasswordAttribute($password)
    {
        if ( ! empty ($password))
        {
            $this->attributes['password'] = Hash::make($password);
        }
    }
    
    public function nombreTipo()
    {
	$tipoEmpresa = Tipo::find($this->id_tipo);
                    
	return $tipoEmpresa->nombre;
    }
    
    public function nombrePais()
    {
	$nombrePais = Pais::find($this->id_pais);
                    
	return $nombrePais->nombre;
    }
    
}
