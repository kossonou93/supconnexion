<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    use HasFactory;

    protected $table = 'carousels';

    protected $fillable = ['photo', 'titre', 'soustitre', 'texte'];

    //public function visits() {
    ////    return visits($this);
    //}
}
