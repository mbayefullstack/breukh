<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEleveRequest;
use App\Http\Requests\UpdateEleveRequest;
use Illuminate\Http\Request;
use App\Models\Eleve;
use App\Models\Annee;
use App\Models\Inscription;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEleveRequest $request)
    {
        DB::beginTransaction();

        $validatedData = $request->validated();

        $profil = $request->input('profil');
        $numero = null;

        if ($profil == 'interne') {
            $numero = Eleve::getNumeroEleve();
        }

        $dateNaissance = Carbon::createFromFormat('Y-m-d', $validatedData['date_born']);

        $dateLimite = Carbon::now()->subYears(5);
        if ($dateNaissance->lessThan($dateLimite)) {

            $eleve = Eleve::create([
                "nom" => $validatedData['nom'],
                "prenom" => $validatedData['prenom'],
                "date_born" => $validatedData['date_born'],
                "lieu_born" => $validatedData['lieu_born'],
                "sexe" => $validatedData['sexe'],
                "profil" => $validatedData['profil'],
                "numero" => $numero
            ]);

            $annee = Annee::where('statut', 1)->first();

 $inscription = Inscription::create([
                "eleves_id" => $eleve->id,
                "niveau_id" => $request->input('niveau'),
                "classe_id" => $request->input('classe'),
                "annee_id" => $annee->id,
                "date_inscription" => Carbon::now()
            ]);

            DB::commit();

            return $inscription;
        } else {
            DB::rollBack();
            return response()->json(['message' => 'La date de naissance doit être antérieure de 5 ans à la date courante.'], 400);
        }
    }

    public function exclure(Request $request)
    {
        $elevesARenvoyer = $request->input('les_ids');
        Eleve::whereIn('id', $elevesARenvoyer)->update(['etat' => 0]);
        return $elevesARenvoyer;
    }

    /**
     * Display the specified resource.
     */
    public function show(Eleve $eleve)
    {
        //
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

