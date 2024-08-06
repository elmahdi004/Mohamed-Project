<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeclarationParticuliere extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function personnes(){
        return $this->hasMany(Personne::class,'declaration_particuliere_id');
    }
}
