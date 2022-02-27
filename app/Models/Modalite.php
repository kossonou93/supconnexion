<?php

namespace App\Models;
use App\Experience;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modalite extends Model
{
    use HasFactory;

    protected $table = 'modalites';

    protected $fillable = ['type_fr', 'type_en'];

    public function experiences()
    {
        return $this->belongsToMany(Experience::class);
    }
}
