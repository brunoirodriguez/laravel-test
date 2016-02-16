<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = "movies";
    /*Se a nossa primarykey e diferente de id, entao especificamos o nome ex:*/
    //protected $primaryKey = "nome_do_campo";
}
