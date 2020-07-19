<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messagerie extends Model
{
    public $fillable = [ 'email','message'];
}
