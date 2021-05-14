<?php

namespace App;
use App\Discipline;
use App\Models\Formation;
use App\Models\Horaire;
use App\Models\Langue;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Ecole extends Authenticatable
{
    use Notifiable;

    protected $guard = 'ecole';

    protected $fillable = [
        'name', 'email', 'email_verified_at', 'password', 'address', 'phone', 'contact', 'ville_id', 'pays_id', 'about'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function disciplines()
    {
        return $this->belongsToMany(Discipline::class,'ecole_disciplines','ecole_id','discipline_id')->withTimestamps();
    }

    public function langues()
    {
        return $this->belongsToMany(Langue::class,'ecole_langues','ecole_id','langue_id')->withTimestamps();
    }

    public function formations()
    {
        return $this->belongsToMany(Formation::class,'ecole_formations','ecole_id','formation_id')->withTimestamps();
    }

    public function horaires()
    {
        return $this->belongsToMany(Horaire::class,'ecole_horaires','ecole_id','horaire_id')->withTimestamps();
    }

   
}
