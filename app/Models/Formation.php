<?php

namespace App\Models;
use App\Intervenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $table = 'type_formations';

    protected $fillable = ['type'];

    public function intervenants()
    {
        return $this->belongsToMany(Intervenant::class);
    }
}
