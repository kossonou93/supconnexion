<?php

namespace App\Models;
use App\Intervenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeExperience extends Model
{
    use HasFactory;

    protected $table = 'type_experiences';

    protected $fillable = ['type_fr', 'type_en'];

    public function intervenants()
    {
        return $this->belongsToMany(Intervenant::class);
    }
}
