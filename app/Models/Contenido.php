<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Contenido extends Model
{
    use HasFactory;

     protected $fillable = [
        'titulo',
        'resumen',
        'texto',
        'portada',
        
        'link',
        'archivo',
        'id_subcategoria',
        'id_nivel',  
        'id_formato',  
        'id_etiqueta',  
        'id_autor',       
        'id_contribuyente', 
        'id_licencia',    
        
    ];
}
