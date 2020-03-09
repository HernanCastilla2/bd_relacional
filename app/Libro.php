<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Libro extends Model
{
    protected $dates = ['fecha'] ;
    
    public function categoria(){ 
        return $this->belongsTo(Categoria::class); //Relación de uno a muchos Libro - Categoría
    }

    public function etiquetas(){
        return $this->belongsToMany(Etiqueta::class); //Relación muchos a muchos libro - Etiqueta
    }

    //Mensaje de prueba para Git
    
}
