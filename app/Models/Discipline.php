<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ponderation;

class Discipline extends Model
{
    use HasFactory;

    protected $hidden = [
        "created_at",
        "updated_at",

    ];
    protected $fillable = [
        'libelle',
        'code'
    ];
    public function ponderation()
    {
        return $this->hasMany(Ponderation::class);
    }

}
