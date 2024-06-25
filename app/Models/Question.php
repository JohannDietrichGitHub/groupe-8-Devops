<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['texte', 'groupe_id'];

    public function groupe()
    {
        return $this->belongsTo(Groupe::class);
    }

    public function reponses()
    {
        return $this->hasMany(Reponse::class);
    }
    public static function getScoreByQuestionIdAndEntrepriseId($questionId, $entrepriseId)
    {
        $reponse = Reponse::where('question_id', $questionId)
            ->where('entreprise_id', $entrepriseId)
            ->first();

        return $reponse->score;
    }
}

