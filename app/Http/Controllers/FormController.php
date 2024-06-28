<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }
    // Validation des données
    public function handleForm(Request $request)
    {
        $validatedData = $request->validate([
            'entreprise' => 'required|string|max:255',
            'q1' => 'required|in:0,1,2',
            'q2' => 'required|in:0,1,2',
            'q3' => 'required|in:0,1,2',
            'q4' => 'required|in:0,1,2',
            'q5' => 'required|in:0,1,2',
            'q6' => 'required|in:0,1,2',
            'q7' => 'required|in:0,1,2',
            'q8' => 'required|in:0,1,2',
            'q9' => 'required|in:0,1,2',
            'q10' => 'required|in:0,1,2',
            'q11' => 'required|in:0,1,2',
            'q12' => 'required|in:0,1,2',
            'q13' => 'required|in:0,1,2',
            'q14' => 'required|in:0,1,2',
            'q15' => 'required|in:0,1,2',
            'q16' => 'required|in:0,1,2',
            'q17' => 'required|in:0,1,2',
            'q18' => 'required|in:0,1,2',
            'q19' => 'required|in:0,1,2',
            'q20' => 'required|in:0,1,2',
            'q21' => 'required|in:0,1,2',
            'q22' => 'required|in:0,1,2',
            'q23' => 'required|in:0,1,2',
            'q24' => 'required|in:0,1,2',
            'q25' => 'required|in:0,1,2',
            'q26' => 'required|in:0,1,2',
            'q27' => 'required|in:0,1,2',
            'q28' => 'required|in:0,1,2',
            'q29' => 'required|in:0,1,2',
            'q30' => 'required|in:0,1,2',
            'q31' => 'required|in:0,1,2',
            'q32' => 'required|in:0,1,2',
            'q33' => 'required|in:0,1,2',
            'q34' => 'required|in:0,1,2',
            'q35' => 'required|in:0,1,2',
            'q36' => 'required|in:0,1,2',
            'q37' => 'required|in:0,1,2',
            'q38' => 'required|in:0,1,2',
            'q39' => 'required|in:0,1,2',
            'q40' => 'required|in:0,1,2',
        ]);
        //check if the entreprise already exists
        $entreprise = DB::table('entreprises')->where('nom', $validatedData['entreprise'])->first();
        if ($entreprise) {
            return redirect()->route('form.show')->with('error', 'Cette entreprise a déjà soumis le formulaire.');
        }
        DB::table('entreprises')->insert([
            'nom' => $validatedData['entreprise']
        ]);
        //récupère l'id de l'entreprise qui vient d'etre insérée
        $entreprise_id = DB::table('entreprises')->where('nom', $validatedData['entreprise'])->first()->id;

        $responses = [];
        for ($i = 1; $i <= 40; $i++) {
            $responses[] = [
                'question_id' => $i,
                'score' => $validatedData['q'.$i],
                'entreprise_id' => $entreprise_id,
            ];
        }

        DB::table('reponses')->insert($responses);

        return redirect()->route('form.show')->with('success', 'Formulaire soumis avec succès.');
    }
}
