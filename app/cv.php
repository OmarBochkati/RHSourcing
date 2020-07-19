<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cv extends Model
{
    protected $fillable = ['fichier','niveau','experience','diplome'];
    public $timestamps = true;
}
