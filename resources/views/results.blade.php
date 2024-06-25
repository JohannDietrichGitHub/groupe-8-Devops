<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultats</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .score {
            width: 50px;
            text-align: center;
        }
        h2 {
            background-color: #f2f2f2;
            padding: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Résultats de l'entreprise : {{$title}} avec id {{$id}}</h1>

    @php
        function renderQuestionsTable($questions, $axeName, $id) {
            $previousGroupeId = null;
            echo '<h1>' . $axeName . '</h1>';
            echo '<table>';
            echo '<tr>';
            echo '<th>Items</th>';
            echo '<th>Questionnements</th>';
            echo '<th class="score">Score</th>';
            echo '</tr>';
            foreach ($questions as $question) {
                if ($question['groupe_id'] != $previousGroupeId) {
                    echo '<tr>';
                    echo '<td>' . \App\Models\Groupe::getGroupeNameById($question['groupe_id']) . '</td>';
                    $previousGroupeId = $question['groupe_id'];
                } else {
                    echo '<tr>';
                    echo '<td></td>';
                }
                echo '<td>' . $question['texte'] . '</td>';
                echo '<td class="score">' . \App\Models\Question::getScoreByQuestionIdAndEntrepriseId($question['id'], $id) . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        }

        function renderBilanTable($category, $id) {
            $groupes = \App\Models\Groupe::getGroupesByCategory($category);
            echo '<h1>Bilan ' . ucfirst($category) . ' :</h1>';
            echo '<table>';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Groupe</th>';
            echo '<th>Total Score</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            foreach ($groupes as $groupe) {
                echo '<tr>';
                echo '<td>' . $groupe->nom . '</td>';
                echo '<td>' . \App\Models\Groupe::getTotalScoreByGroupeIdAndEntrepriseId($groupe->id, $id) . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        }
    @endphp

    @php renderQuestionsTable($questionsComp, 'Axe compétences', $id); @endphp
    @php renderBilanTable('competence', $id); @endphp

    @php renderQuestionsTable($questionsReact, 'Axe réactivité', $id); @endphp
    @php renderBilanTable('reactivite', $id); @endphp

    @php renderQuestionsTable($questionsNum, 'Axe numérique', $id); @endphp
    @php renderBilanTable('numerique', $id); @endphp
</div>
</body>
</html>
