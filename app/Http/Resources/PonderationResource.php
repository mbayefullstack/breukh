<?php

namespace App\Http\Resources;

use App\Models\Classe;
use App\Models\Discipline;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PonderationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            // "classe"=>Classe::find($this->classe_id),
            "discipline"=>Discipline::find($this->discipline_id)
        ];
    }
}
