<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academique extends Model
{
    use HasFactory;

    protected $table = 'academiques';

    protected $fillable = ['photo', 'titre', 'auteur', 'soustitre', 'texte', 'date_pub']
}
