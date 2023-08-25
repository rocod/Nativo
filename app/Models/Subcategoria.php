<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Eje;

class Subcategoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'id_eje'       
        
    ];


    public function eje(){

        return $this->belongsTo(Eje::class,  'id_eje', 'id');
    }
}
