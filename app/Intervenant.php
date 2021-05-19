<?php

namespace App;
use App\Discipline;
use App\Intervenant;
use App\Models\Contrat;
use App\Models\Diplome;
use App\Models\Disponibilite;
use App\Models\Duree;
use App\Models\Formation;
use App\Models\Experience;
use App\Models\Intervention;
use App\Models\Langue;
use App\Models\Remuneration;
use App\Models\TypeExperience;
use App\Models\Horaire;
use App\Models\VerifyUser;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Intervenant extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $guard = 'intervenant';

    protected $fillable = [
        'name', 'email', 'email_verified_at', 'password', 'ville_id', 'phone', 'contact', 'commune_id', 'last_name', 'birth_day', 'fonction', 'sexe', 'photo', 'cv', 'linkdin', 'motivation', 'competence', 'experience_id', 'token', 'google_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    //protected $casts = [
    //    'email_verified_at' => 'datetime',
    //];

    public function disciplines()
    {
        return $this->belongsToMany(Discipline::class,'intervenant_disciplines','intervenant_id','discipline_id')->withTimestamps();
    }

    public function langues()
    {
        return $this->belongsToMany(Langue::class,'intervenant_langues','intervenant_id','langue_id')->withTimestamps();
    }

    public function typeexperiences()
    {
        return $this->belongsToMany(TypeExperience::class,'intervenant_type_experiences','intervenant_id','experience_id')->withTimestamps();
    }

    public function remunerations()
    {
        return $this->belongsToMany(Remuneration::class,'intervenant_remunerations','intervenant_id','remuneration_id')->withTimestamps();
    }

    public function formations()
    {
        return $this->belongsToMany(Formation::class,'intervenant_formations','intervenant_id','formation_id')->withTimestamps();
    }

    public function disponibilites()
    {
        return $this->belongsToMany(Disponibilite::class,'intervenant_dispos','intervenant_id','dispo_id')->withTimestamps();
    }

    public function horaires()
    {
        return $this->belongsToMany(Horaire::class,'intervenant_horaires','intervenant_id','horaire_id')->withTimestamps();
    }

    public function durees()
    {
        return $this->belongsToMany(Duree::class,'intervenant_durees','intervenant_id','duree_id')->withTimestamps();
    }

    public function interventions()
    {
        return $this->belongsToMany(Intervention::class,'intervenant_interventions','intervenant_id','intervention_id')->withTimestamps();
    }
    
    public function contrats()
    {
        return $this->belongsToMany(Contrat::class,'intervenant_contrats','intervenant_id','contrat_id')->withTimestamps();
    }

    public function experiences()
    {
        return $this->belongsToMany(Experience::class,'intervenant_experiences','intervenant_id','experience_id')->withTimestamps();
    }

    public function verifyUsers()
    {
        return $this->hasOne(VerifyUser::class);
    }

}
