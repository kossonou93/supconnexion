<?php

namespace App;
use App\Ecole;
use App\Intervenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use HasFactory;

    protected $table = 'disciplines';

    protected $fillable = ['name'];

    public function ecoles()
    {

        return $this->belongsToMany(Ecole::class);
    }

    public function intervenants()
    {

        return $this->belongsToMany(Intervenant::class);
    }
}
