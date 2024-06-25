<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'categorie_id'];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public static function getGroupeNameById($id)
    {
        $groupe = Groupe::find($id);
        return $groupe->nom;
    }
}

