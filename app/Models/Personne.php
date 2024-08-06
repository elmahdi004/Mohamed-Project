<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function declaration(){
        return $this->belongsTo(DeclarationParticuliere::class,'declaration_particuliere_id');
    }
}
