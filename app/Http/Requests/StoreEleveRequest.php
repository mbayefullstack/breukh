<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEleveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'lieu_naissance' => 'required|string|max:255',
            'sexe' => 'required|in:masculin,feminin',
            'profil' => 'required|in:interne,externe'
            ];
    }

    public function messages()
    {
    return [
    'nom.required' => 'Le champ nom est requis.',
    'prenom.required' => 'Le champ prenom est requis.',
    'date_born.required' => 'Le champ date de naissance est requis.',
    'date_born.date' => 'Le champ date de naissance doit être une date valide.',
    'lieu_born.required' => 'Le champ lieu de naissance est requis.',
    'sexe.required' => 'Le champ sexe est requis.',
    'sexe.in' => 'Le champ sexe doit être soit masculin, soit feminin.',
    'profil.required' => 'Le champ profil est requis.',
    'profil.in' => 'Le champ profil doit être soit interne, soit externe.',
    ];
}
}

