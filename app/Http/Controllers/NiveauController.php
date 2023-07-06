<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNiveauRequest;
use App\Http\Requests\UpdateNiveauRequest;
use App\Http\Resources\NiveauResource;
use App\Models\Niveau;
use App\Models\Classe;
use App\Traits\JoinQueryParams;

use Illuminate\Http\Request;

class NiveauController extends Controller
{
    use JoinQueryParams;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $this->test();
        $params = request()->query("join");
        if($params == null || !in_array($params, $this->jointurePossible()))
        {

          return Niveau::all();
        }
        else
        {
            // $reponse = Niveau::with($params)->get();
            $niveau  = new Niveau();
            // $reponse = Niveau::all();
            $reponse = $niveau->load($params)->get();
            return NiveauResource::collection($reponse);
        }
        //pour afficher tous les niveaux


    }
    public function getClasseById(Niveau $id)
    {
        // $niveau = Niveau::find($id);
        // dd($niveau);
        return $id->load("Classes");
    }

    public function jointurePossible()
    {
        return ["classes"];
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
    public function store(StoreNiveauRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Niveau $niveau)
    {
        $class = Classe::find($niveau);
        return $class->classes;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Niveau $niveau)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNiveauRequest $request, Niveau $niveau)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Niveau $niveau)
    {
        //
    }
}


