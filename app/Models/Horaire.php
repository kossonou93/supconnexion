<?php

namespace App\Models;
use App\Intervenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horaire extends Model
{
    use HasFactory;

    protected $table = 'horaires';

    protected $fillable = ['titre_fr', 'titre_en'];

    public function intervenants()
    {
        return $this->belongsToMany(Intervenant::class);
    }
}
