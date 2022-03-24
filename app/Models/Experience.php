<?php

namespace App\Models;
use App\Intervenant;
use App\Models\Modalite;
use App\Models\Responsabilite;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $table = 'experiences';

    protected $fillable = ['intitule', 'etablissement', 'debut', 'fin', 'description', 'type_intervention', 'heure_intervention', 'niveau_participant', 'nombre_participant', 'support_intervention', 'autre', 'intervenant_id'];

    
    public function modalites()
    {
        return $this->belongsToMany(Modalite::class,'experience_modalites','experience_id','modalite_id')->withTimestamps();
    }

    public function interventions()
    {
        return $this->belongsToMany(Intervention::class,'experience_interventions','experience_id','intervention_id')->withTimestamps();
    }

    public function responsabilites()
    {
        return $this->belongsToMany(Responsabilite::class,'experience_respos','experience_id','respo_id')->withTimestamps();
    }
}
