<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Discipline;
use App\Models\Ponderation;
use Illuminate\Http\Request;
use App\Http\Resources\ClasseResource;
use App\Http\Resources\PonderationResource;

class TeussController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    // public function getNotee($classes,$disciplines)
    // {
    //     $ponderation = Ponderation::where(["classe_id"=>$classes, "discipline_id"=>$disciplines])->first();

    //     // $disc = Note::where(["ponderation_id"=>$ponderation])->get();
    //     // dd($ponderation);

    //     return PonderationResource::make($ponderation); 

    //     // return ClasseResource::make($ponderation);

    //     // return $ponderation; 
        
    // }

    public function getNote($classes,$disciplines)
    {
        $ponderation = Ponderation::where(["classe_id"=>$classes, "discipline_id"=>$disciplines])->first()
            ->join("evaluations", "ponderation.evaluation_id", "=", "evaluations_id")
            ->join("notes", "ponderation.notes_id", "=", "note_id")
            ->koin()
        ;


    

        return PonderationResource::make($ponderation); 

        
        
    }

    



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
