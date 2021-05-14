<?php

namespace App\Models;
use App\Experience;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsabilite extends Model
{
    use HasFactory;

    protected $table = 'responsabilites';

    protected $fillable = ['type'];

    public function experiences()
    {
        return $this->belongsToMany(Experience::class);
    }
}
