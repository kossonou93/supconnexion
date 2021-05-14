<?php

namespace App\Models;
use App\Intervenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langue extends Model
{
    use HasFactory;

    protected $table = 'langues';

    protected $fillable = ['name'];

    public function intervenants()
    {
        return $this->belongsToMany(Intervenant::class);
    }
}
