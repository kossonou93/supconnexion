<?php

namespace App\Models;
use App\Intervenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    use HasFactory;

    protected $table = 'interventions';

    protected $fillable = ['type_fr', 'type_en'];

    public function intervenants()
    {
        return $this->belongsToMany(Intervenant::class);
    }


}
