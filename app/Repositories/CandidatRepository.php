<?php

namespace App\Repositories;

use App\Candidat;

class CandidatRepository
{

protected $candidat;

public function __construct(Candidat $candidat)
{
$this->candidat = $candidat;
}

public function getPaginate($n)
{
return $this->candidat->with('user')
->orderBy('candidats.created_at', 'desc')
->paginate($n);
}

public function store($inputs)
{
$this->candidat->create($inputs);
}

public function destroy($id)
{
$this->candidat->findOrFail($id)->delete();
}

}