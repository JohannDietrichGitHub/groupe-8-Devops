<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\Reponse;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function show($id)
    {
        // Récupérer le titre de l'entreprise
        $entreprise = Entreprise::find($id);
        $nom = $entreprise->nom;
        return view('results', ['id' => $id, 'title' => $nom]);
    }

}
