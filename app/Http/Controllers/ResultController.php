<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Entreprise;
use App\Models\Groupe;
use App\Models\Question;
use App\Models\Reponse;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function show($id)
    {
        // Réupérer le titre de l'entreprise
        $entreprise = Entreprise::find($id);
        $nom = $entreprise->nom;

        $groupesComp = Groupe::getGroupesByCategory('competence');
        $questionsGroupeComp = $this->getQuestionsByGroup($groupesComp);

        $groupesReact = Groupe::getGroupesByCategory('reactivite');
        $questionsGroupeReact = $this->getQuestionsByGroup($groupesReact);

        $groupesNum = Groupe::getGroupesByCategory('numerique');
        $questionsGroupeNum = $this->getQuestionsByGroup($groupesNum);

        return view('results', ['titre' => 'Résultats', 'id' => $id, 'title' => $nom, 'questionsComp' => $questionsGroupeComp, 'questionsReact' => $questionsGroupeReact, 'questionsNum' => $questionsGroupeNum]);
    }

    private function getQuestionsByGroup($groupesComp)
    {
        $questions = [];

        // Boucle à travers chaque groupe
        foreach ($groupesComp as $groupe) {
            // Récupérer les questions pour ce groupe avec tous les détails nécessaires
            $questionsDuGroupe = Question::where('groupe_id', $groupe->id)->get();

            // Ajouter les questions au tableau $questions
            foreach ($questionsDuGroupe as $question) {
                $questions[] = [
                    'id' => $question->id,
                    'texte' => $question->texte,
                    'groupe_id' => $question->groupe_id,
                    'created_at' => $question->created_at,
                    'updated_at' => $question->updated_at,
                ];
            }
        }

        return $questions;
    }
}
