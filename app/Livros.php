<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    protected $fillable = ['titulo', 'autor', 'ano_publicacao', 'genero'];
}
