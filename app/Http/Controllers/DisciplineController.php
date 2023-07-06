<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDisciplineRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateDisciplineRequest;
use App\Models\Discipline;

class DisciplineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $disciplines = Discipline::all();
        return $disciplines;
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
        $libelle = $request->input('libelle');
        $code = substr($libelle, 0, 3);

        $discipline = Discipline::create([
            'libelle' => $libelle,
            'code' => $code,
        ]);

        return $discipline;
    }

    /**
     * Display the specified resource.
     */
    public function show(Discipline $discipline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Discipline $discipline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDisciplineRequest $request, Discipline $discipline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Discipline $discipline)
    {
        //
    }
}
