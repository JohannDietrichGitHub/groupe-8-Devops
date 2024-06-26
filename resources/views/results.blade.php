<!DOCTYPE html>
<html lang="fr">
@include('partials.head', ['title' => $title ?? 'Titre'])

@include('partials.header')
<body>
<div class="container">
    <h1>Résultats de l'entreprise : {{$title}} avec id {{$id}}</h1>

    @php
        function renderQuestionsTable($questions, $axeName, $id) {
            $previousGroupeId = null;
            echo '<h1>' . $axeName . '</h1>';
            echo '<table class="table table-striped">';
            echo '<thead>';
            echo '<tr>';
            echo '<th scope="col">Items</th>';
            echo '<th scope="col">Questionnements</th>';
            echo '<th scope="col" class="score">Score</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
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
            echo '</tbody>';
            echo '</table>';
        }
    @endphp

    @php
        function renderBilanTable($category, $id) {
            $groupes = \App\Models\Groupe::getGroupesByCategory($category);
            echo '<h1 class="mt-4">Bilan ' . ucfirst($category) . ' :</h1>';
            echo '<table class="table">';
            echo '<thead class="thead-dark">';
            echo '<tr>';
            echo '<th scope="col">Groupe</th>';
            echo '<th scope="col">Total Score</th>';
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
@include('partials.footer')
</html>
