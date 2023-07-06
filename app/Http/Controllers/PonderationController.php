<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePonderationRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatePonderationRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Ponderation;
use App\Models\Discipline;
use App\Models\Evaluation;

class PonderationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $discipline = Discipline::create([
            'libelle' => $request->input('disc'),
        ]);

        $ponderation = Ponderation::create([
            'maxNotes' => $request->input('note_maximale'),
            'classe_id' => $request->input('classe_id'),
            'discipline_id' => $discipline->id,
            'evaluation_id' => $request->input('evaluation_id')
        ]);

        return $ponderation;
    }

    /**
     * Display the specified resource.
     */
    public function show($classeId)
    {
        $ponderations = Ponderation::where('classe_id', $classeId)
            ->join('classes', 'ponderations.classe_id', '=', 'classes.id')
            ->join('evaluations', 'ponderations.evaluation_id', '=', 'evaluations.id')
            ->join('disciplines', 'ponderations.discipline_id', '=', 'disciplines.id')
            ->select('ponderations.*', 'disciplines.libelle as libelle_disc', 'evaluations.libelle as libelle_eva', 'ponderations.maxNotes as maxNote')
            ->get();

        $result = [];

        foreach ($ponderations as $ponderation) {
            $result[] = [
                'discipline' => $ponderation->libelle_disc,
                'evaluation' => $ponderation->libelle_eva,
                'maxNote' => $ponderation->maxNote,
            ];
        }

        return $result;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ponderation $ponderation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePonderationRequest $request, Ponderation $ponderation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ponderation $ponderation)
    {
        //
    }
}
