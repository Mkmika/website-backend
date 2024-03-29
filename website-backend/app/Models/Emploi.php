<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi extends Model
{
    use HasFactory;
    protected $fillable =[
        "titreEmploi",
        "categorieEmploi",
        "anneeExperience",
        "nomEntreprise",
        "remuneration",
        "adresse",
        "description"
    ];
}
