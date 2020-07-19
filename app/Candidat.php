<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Groupement;

class Candidat extends Model
{
    protected $fillable = ['photo_profil','date_nais','num_portable','email','adresse','genre','profession','description','salaire','id_user'];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function groupement()
    {
        return $this->hasMany('Groupement');
    }


}
