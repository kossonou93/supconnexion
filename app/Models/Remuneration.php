<?php

namespace App\Models;
use App\Intervenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remuneration extends Model
{
    use HasFactory;

    protected $table = 'remunerations';

    protected $fillable = ['type'];

    public function intervenants()
    {
        return $this->belongsToMany(Intervenant::class);
    }
}
