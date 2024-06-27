<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Entreprise;
use App\Models\Groupe;
use App\Models\Question;
use App\Models\Reponse;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function index()
    {
        //
    }
    public function getEntreprisesInfoInJson()
    {
        $entreprises = Entreprise::all();
        return response()->json($entreprises);
    }
    public function getEntreprisesStatsInJson($id_entreprise)
    {
        // Récupère l'entreprise par son identifiant
        $entreprise = Entreprise::find($id_entreprise);

        // Tableau pour stocker la structure hiérarchique des données
        $result = [
            'entreprise' => $entreprise->nom,
            'categories' => []
        ];

        // Récupère toutes les catégories
        $categories = Categorie::all();

        foreach ($categories as $categorie) {
            // Structure de base pour une catégorie
            $categorieData = [
                'categorie_name' => $categorie->nom,
                'groupes' => []
            ];

            // Récupère tous les groupes liés à cette catégorie
            $groupes = Groupe::where('categorie_id', $categorie->id)->get();

            foreach ($groupes as $groupe) {
                // Structure de base pour un groupe
                $groupeData = [
                    'groupe_name' => $groupe->nom,
                    'questions' => []
                ];

                // Récupère toutes les questions du groupe
                $questions = Question::where('groupe_id', $groupe->id)->get();

                foreach ($questions as $question) {
                    // Récupère la réponse à la question pour l'entreprise donnée
                    $reponse = Reponse::where('question_id', $question->id)
                        ->where('entreprise_id', $id_entreprise)
                        ->first();

                    // Structure de base pour une question et sa réponse
                    $questionData = [
                        'question_text' => $question->texte,
                        'score' => $reponse ? $reponse->score : null
                    ];

                    // Ajoute la question au groupe
                    $groupeData['questions'][] = $questionData;
                }

                // Ajoute le groupe à la catégorie
                $categorieData['groupes'][] = $groupeData;
            }

            // Ajoute la catégorie au résultat final
            $result['categories'][] = $categorieData;
        }

        // Retourne la structure hiérarchique en JSON
        return response()->json($result, 200, [], JSON_PRETTY_PRINT);
    }

}
