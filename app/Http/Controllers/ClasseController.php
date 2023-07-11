<?php

namespace App\Http\Controllers;
use App\Models\Note;
use App\Models\Eleve;
use App\Models\Classe;
use App\Models\Discipline;
use App\Models\Inscription;
use App\Models\Ponderation;
use App\Models\ClasseSemestre;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreClasseRequest;
use App\Http\Requests\UpdateClasseRequest;
use Symfony\Component\HttpFoundation\Request;

class ClasseController extends Controller
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
    public function store(StoreClasseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

     public function getElevesByClasse($classeId)
    {
        $eleves = DB::table('eleves')
        ->join('inscriptions', 'eleves.id', '=', 'inscriptions.eleve_id')
        ->join('classes', 'inscriptions.classe_id', '=', 'classes.id')
        ->where('classes.id', $classeId)
        ->select('eleves.nom', 'eleves.prenom', 'eleves.date_born', 'eleves.lieu_born', 'eleves.sexe', 'eleves.profil')
        ->get();

        return $eleves;
    }

    public function addNotes(Request $request, $classeId, $discId, $evaId)
    {
        $notes = $request->all();
        $resultArray = [];
        $invalidNotes = [];

        foreach ($notes as $note) {
            $eleveId = $note['eleve_id'];
            $noteEleve = $note['note'];
            $result = $this->getInscriptionAndClasse($eleveId);
            $inscriptionId = $result->inscription_id;

            $ponderation = Ponderation::where('classe_id', $classeId)
                ->where('discipline_id', $discId)
                ->where('evaluation_id', $evaId)
                ->select('ponderations.id as id', 'ponderations.maxNotes as maxNotes')
                ->first();

            if ($ponderation) {
                $pond = $ponderation->id;
                $maxNote = $ponderation->maxNotes;

                $semestre = ClasseSemestre::where('classe_id', $classeId)
                                            ->select('classe_semestres.id as id')
                                            ->first();
                $semestreActif=$semestre->id;

                if ($noteEleve <= $maxNote) {
                    $resultArray[] = Note::create([
                        'valeur' => $noteEleve,
                        'inscription_id' => $inscriptionId,
                        'ponderation_id' => $pond,
                        'classe_semestre_id' => $semestreActif
                    ]);
                } else {
                    $invalidNotes[] = [
                        'eleve_id' => $eleveId,
                        'note' => $noteEleve,
                    ];
                }
            } else {
                return response()->json(['message' => 'Aucune pondération trouvée'], 404);
            }
        }

        if (!empty($invalidNotes)) {
            return response()->json([
                'message' => 'Certaines notes sont supérieures à la note maximale de l\'évaluation',
                'invalid_notes' => $invalidNotes,
            ], 400);
        }

        return response()->json(['notes' => $resultArray]);
    }

    public function getInscriptionAndClasse($eleveId)
    {
        $result = DB::table('eleves')
            ->join('inscriptions', 'eleves.id', '=', 'inscriptions.eleve_id')
            ->join('classes', 'inscriptions.classe_id', '=', 'classes.id')
            ->where('eleves.id', $eleveId)
            ->select('inscriptions.*', 'inscriptions.id as inscription_id', 'classes.id as classe_id', 'eleves.nom as nom', 'eleves.prenom as prenom')
            ->first();

        return $result;
    }

    public function show(Classe $classe)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classe $classe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClasseRequest $request, Classe $classe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classe $classe)
    {
        //
    }

    public function getNote(Classe $teuss)
    {
           $tab= Ponderation::where([
                "classe_id" => $teuss->id
        ])->get();
            $moustapha = [];
        // foreach ($tab as $ta) {
        //     $discipline = Discipline::where([
        //         "id" => $ta->discipline_id
        //     ])->get();
        //     array_push($moustapha, $discipline);
        // }
        // foreach($tab as $ta) {
        //     $inscription = Inscription::where([
        //         "id" => $ta->el
        //     ])->get();
        // }
           $tab = Inscription::where([
                "classe_id"=> $teuss->id
            ])->get();
            $tableau = [];
            foreach ($tab as $ta) {
                $classe = Eleve::where([
                    "id" => $ta->eleve_id
                ])->first();
                array_push($tableau, $classe);
            }
            return $tableau;
    }
}


