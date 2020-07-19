<?php

namespace App\Repositories;

use App\CV;

class CvRepository
{

    protected $cv;

    public function __construct(cv $cv)
    {
        $this->cv = $cv;
    }

    public function getPaginate($n)
    {
      //
    }

    public function store($inputs)
    {
        $this->cv->create($inputs);
    }

    public function destroy($id)
    {
        $this->cv->findOrFail($id)->delete();
    }

}