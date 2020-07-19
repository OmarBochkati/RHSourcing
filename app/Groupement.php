<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use APP\Candidat;

class Groupement extends Model
{
    protected $fillable = ['nom_groupe','id_createur','id_membre'];
    public $timestamps = true;
    public function candidat()
    {
        $this->hasMany('Candidat');
    }

}
