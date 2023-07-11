<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Annee;
use App\Models\Eleve;
use App\Models\Classe;
use App\Models\Ponderation;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\NoteResource;
use App\Http\Requests\StoreEleveRequest;
use App\Http\Requests\UpdateEleveRequest;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEleveRequest $request)
    {
   

    /* 
    "prenom" : moustapha,
    "nom" : mbaye,
    "datedenaissance" : 2000-01-13
    "lieudeniassance" : dakar,
    "sexe" : masculin,
    "profil" : 1
    "classe" : 2
    
    */
    
   
    }
    

    public function lookNote($classes, $disciplines)
    {
       $test = Ponderation::where(["classe_id"=>$classes,"discipline_id" => $disciplines])->first();
        dd($test->notes());
        
    }
   

    /**
     * Display the specified resource.
     */
    public function show(Eleve $eleve)
    {
        //
    }


    public function afficheNote($classes,$disciplines)
    {
        $ponderation = Ponderation::where(["discipline_id"=>$disciplines, "classe_id"=>$classes])->first()->id;
        // dd($ponderation);
        $note = Note::where('ponderation_id',$ponderation)->get();
        return NoteResource::collection($note);
    }






















    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Eleve $eleve)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEleveRequest $request, Eleve $eleve)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eleve $eleve)
    {
        //
    }
}

