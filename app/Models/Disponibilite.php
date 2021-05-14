<?php

namespace App\Models;
use App\Intervenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disponibilite extends Model
{
    use HasFactory;

    protected $table = 'disponibilites';

    protected $fillable = ['titre'];

    public function intervenants()
    {
        return $this->belongsToMany(Intervenant::class);
    }
}
