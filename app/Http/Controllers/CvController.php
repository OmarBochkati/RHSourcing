<?php

namespace App\Http\Controllers;

use App\cv;
use Illuminate\Http\Request;
use App\Repositories\CvRepository;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $cvRepository;
    public function __construct(CvRepository $cvRepository)
    {

        $this->CvRepository = $cvRepository;
    }
    public function index()

    {

         return view('mon_cv');
    }
    public function validInscription(InscriptionRequest $request){
        $cv = new cv;
        $cv->fichier = $request->fichier;
        $cv->niveau = $request->niveau;
        $cv->experience = $request->experience;
        $cv->diplome = $request->diplome;
        $cv->save();
        return redirect("cv");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('mon_cv');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = array_merge($request->all());

        $this->CvRepository->store($inputs);


        return redirect()->route('cv.index')->with('info','l etudiant et cree');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function show(cv $cv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function edit(cv $cv)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cv $cv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function destroy(cv $cv)
    {
        //
    }
}
