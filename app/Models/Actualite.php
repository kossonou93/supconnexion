<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    use HasFactory;

    protected $table = 'actualites';

    protected $fillable = ['photo', 'titre_fr', 'titre_en', 'auteur', 'soustitre_fr', 'soustitre_en', 'texte_fr', 'texte_en', 'date_pub'];
}
