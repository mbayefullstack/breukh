<?php

namespace App\Http\Resources;

use App\Models\Classe;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClasseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
           "classe"=>Classe::find($this->classe_id),
        ];














        // return [
        //     "id" => $this->id,
        //     "libelle_classe" => $this->libelle_classe,
        // ];
    }
}
