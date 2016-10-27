<?php

namespace proyect;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillabel = ['nombre', 'descripcion', 'precio', 'cantidad'];
}
