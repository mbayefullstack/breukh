<?php

namespace App\Http\Controllers;

use App\Models\Annee;
use App\Models\Eleve;
use App\Models\Classe;
use App\Models\Niveau;
use App\Models\Ponderation;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function test($classe, $discipline)
    {
        $ponderation = Ponderation::where([
            "discipline_id" =>$discipline,
            "classe_id" =>$classe
        ]);
        return $ponderation;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
