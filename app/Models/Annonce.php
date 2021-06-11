<?php

namespace App\Models;
use App\Models\Langue;
use App\Models\Intervention;
use App\Discipline;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $table = 'annonces';

    protected $fillable = ['intitule', 'description', 'date_limite','ecole_id', 'image', 'dossier', 'adresse'];

    public function disciplines()
    {
        return $this->belongsToMany(Discipline::class,'annonce_disciplines','annonce_id','discipline_id')->withTimestamps();
    }

    public function langues()
    {
        return $this->belongsToMany(Langue::class,'annonce_langues','annonce_id','langue_id')->withTimestamps();
    }
    public function interventions()
    {
        return $this->belongsToMany(Intervention::class,'annonce_interventions','annonce_id','intervention_id')->withTimestamps();
    }

}
