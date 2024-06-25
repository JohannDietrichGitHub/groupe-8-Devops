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
    public static function getGroupesByCategory($categorieNom)
    {
        $categorie = Categorie::where('nom', $categorieNom)->first();
        $categorieId = $categorie->id;

        $groupes = Groupe::where('categorie_id', $categorieId)->get();

        return $groupes;
    }
    public static function getTotalScoreByGroupeIdAndEntrepriseId($groupeId, $entrepriseId)
    {
        $questions = Question::where('groupe_id', $groupeId)->get();
        $totalScore = 0;

        foreach ($questions as $question) {
            $reponse = Reponse::where('question_id', $question->id)
                ->where('entreprise_id', $entrepriseId)
                ->first();

            $totalScore += $reponse->score;
        }

        return $totalScore;
    }
}

