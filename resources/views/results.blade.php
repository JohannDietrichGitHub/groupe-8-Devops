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

<h1>Résultats de l'entreprise : {{$title}} avec id {{$id}}</h1>
<h1>Axe compétences</h1>
<!-- Boucle pour afficher les questions -->
<table>
    <tr>
        <th>Items</th>
        <th>Questionnements</th>
        <th class="score">Score</th>
    </tr>
    @php $previousGroupeId = null; @endphp
    @foreach ($questionsComp as $index => $question)
        @if ($question['groupe_id'] != $previousGroupeId)
            <tr>
                <td>{{ \App\Models\Groupe::getGroupeNameById($question['groupe_id'])}}</td>
            @php $previousGroupeId = $question['groupe_id']; @endphp
        @else
            <tr>
                <td></td>
                @endif
                <td>{{ $question['texte'] }}</td>
                <td class="score">{{ \App\Models\Question::getScoreByQuestionIdAndEntrepriseId($question['id'], $id) }}</td>
            </tr>
            @endforeach
</table>

<h1>Axe réactivité</h1>
<table>
    <tr>
        <th>Items</th>
        <th>Questionnements</th>
        <th class="score">Score</th>
    </tr>
    @php $previousGroupeId = null; @endphp
    @foreach ($questionsReact as $index => $question)
        @if ($question['groupe_id'] != $previousGroupeId)
            <tr>
                <td>{{ \App\Models\Groupe::getGroupeNameById($question['groupe_id'])}}</td>
            @php $previousGroupeId = $question['groupe_id']; @endphp
        @else
            <tr>
                <td></td>
                @endif
                <td>{{ $question['texte'] }}</td>
                <td class="score">{{ \App\Models\Question::getScoreByQuestionIdAndEntrepriseId($question['id'], $id) }}</td>
            </tr>
            @endforeach
</table>

<h1>Axe numérique</h1>
<table>
    <tr>
        <th>Items</th>
        <th>Questionnements</th>
        <th class="score">Score</th>
    </tr>
    @php $previousGroupeId = null; @endphp
    @foreach ($questionsNum as $index => $question)
        @if ($question['groupe_id'] != $previousGroupeId)
            <tr>
                <td>{{ \App\Models\Groupe::getGroupeNameById($question['groupe_id'])}}</td>
            @php $previousGroupeId = $question['groupe_id']; @endphp
        @else
            <tr>
                <td></td>
                @endif
                <td>{{ $question['texte'] }}</td>
                <td class="score">{{ \App\Models\Question::getScoreByQuestionIdAndEntrepriseId($question['id'], $id) }}</td>
            </tr>
            @endforeach
</table>
</body>
</html>
