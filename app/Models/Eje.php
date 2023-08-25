<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Subcategoria;

class Eje extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
               
    ];


     public function subcategorias(){

    	return $this->hasMany(Subcategoria::class,  'id_eje', 'id');
    }
}
