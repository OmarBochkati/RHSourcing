<?php

namespace App\Http\Controllers;

use App\Candidat;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Repositories\CandidatRepository;
use App\Http\Requests\CandidatRequest;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $candidatRepository;

    protected $nbrPerPage = 4;

    public function __construct(CandidatRepository $candidatRepository)
    {
        $this->middleware('auth', ['except' => 'index']);
        $this->middleware('admin', ['only' => 'destroy']);

        $this->candidatRepository = $candidatRepository;
    }

    public function index()
    {
        $candidats = $this->candidatRepository->getPaginate($this->nbrPerPage);
        $links = $candidats->setPath('')->render();

        $candidats = Candidat::oldest('email')->paginate(5);
        return view('candidat_liste', compact('candidats','links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function create()
    {
        return view('create_profil',compact('create_profil'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $inputs = array_merge($request->all(), ['id_user' => $request->user()->id]);

        $this->candidatRepository->store($inputs);


        return redirect()->route('candidats.index')->with('info','l etudiant et cree');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Candidat $candidat)
    {
        return view('show_profil', compact('candidat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidat $candidat)
    {
        return view('edit_profil', compact('candidat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CandidatRequest $candidatRequest, Candidat $candidat)
    {
        $candidat->update($candidatRequest->all());
        return redirect()->route('candidats.index')->with('info', 'L account a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidat $candidat)
    {
        $candidat->delete();

        return back()->with('info', 'l account a bien été mis dans la corbeille.');
    }
    public function forceDestroy($id)
    {
        Candidat::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'L account a bien été supprimé définitivement dans la base de données.');
    }
    public function restore($id)
    {
        Candidat::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'L account a bien été restauré.');}
}
