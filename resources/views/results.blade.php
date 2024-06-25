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
<table>
    <tr>
        <th>Items</th>
        <th>Questionnements</th>
        <th class="score">Score</th>
    </tr>
    <tr>
        <td rowspan="6">Excellence Technique/Communauté de pratiques</td>
        <td>Formations pour Apprendre à apprendre, changement de paradigme, "être à la page" (au-delà des compétences "justes" nécessaires)</td>
        <td class="score">0</td>
    </tr>
    <tr>
        <td>Le co-développement (outil d'intelligence collective) existe-t-il dans l'entreprise ?</td>
        <td class="score">1</td>
    </tr>
    <tr>
        <td>Les collaborateurs sont-ils amenés à partager leurs compétences et sous quelles formes ?</td>
        <td class="score">2</td>
    </tr>
    <tr>
        <td>Le mentoring (fonctionnement en binôme) existe-t-il pour assurer le transfert de compétences ?</td>
        <td class="score">2</td>
    </tr>
    <tr>
        <td>Les managers sont-ils aussi formateurs sur certains sujet pour l'entreprise entière ?</td>
        <td class="score">0</td>
    </tr>
    <tr>
        <td>L'entreprise favorise-t-elle l'excellence technique ? (Principe 9 du Manifeste Agile)</td>
        <td class="score">0</td>
    </tr>
    <tr>
        <td rowspan="2">Faire agile</td>
        <td>Déployez vous les pratiques du "Faire Agile", c'est-à-dire une ou plusieurs des "méthodes" agiles ?</td>
        <td class="score">2</td>
    </tr>
    <tr>
        <td>Votre entreprise promeut-elle un "état d'esprit agile" ?</td>
        <td class="score">0</td>
    </tr>
    <tr>
        <td>Gestion humaine des compétences</td>
        <td>Votre entreprise gère-t-elle humainement les compétences ?</td>
        <td class="score">1</td>
    </tr>
</table>

<h1>Axe réactivité</h1>
<table>
    <tr>
        <th>Items</th>
        <th>Questionnements</th>
        <th class="score">Score</th>
    </tr>
    <tr>
        <td rowspan="3">Vélocité de réponse</td>
        <td>Valeur supérieure utilisable livrée plus tôt (Fonction principale utilisable dès les premières versions)</td>
        <td class="score">1</td>
    </tr>
    <tr>
        <td>Réactivité face aux impératifs prépondérants</td>
        <td class="score">2</td>
    </tr>
    <tr>
        <td>Mesure de la vélocité de l'équipe (indicateur de suivi du travail d'une équipe de conception)</td>
        <td class="score">1</td>
    </tr>
    <tr>
        <td rowspan="4">Environnements souples</td>
        <td>Les installations techniques et de gestion sont modernes (TIC/ERP/CRM)</td>
        <td class="score">0</td>
    </tr>
    <tr>
        <td>Les équipes sont en capacité d'autonomiser une partie de leurs tâches</td>
        <td class="score">2</td>
    </tr>
    <tr>
        <td>Les équipes s’inscrivent dans un cadre Agile Lean</td>
        <td class="score">0</td>
    </tr>
    <tr>
        <td>Les mécanismes de livraison et de synchronisation sont matures</td>
        <td class="score">1</td>
    </tr>
    <tr>
        <td rowspan="3">Défi environnemental</td>
        <td>Les innovations produit tiennent compte de l'urgence climatique</td>
        <td class="score">0</td>
    </tr>
    <tr>
        <td>Les processus internes sont remis en cause pour diminuer leur impact environnemental</td>
        <td class="score">0</td>
    </tr>
    <tr>
        <td>Les parties prenantes sont sélectionnées en fonction de leur éthique vis-à-vis du développement durable</td>
        <td class="score">0</td>
    </tr>
    <tr>
        <td>Veille et benchmark</td>
        <td>Veille stratégique</td>
        <td class="score">1</td>
    </tr>
</table>

<h1>Axe numérique</h1>
<table>
    <tr>
        <th>Items</th>
        <th>Questionnements</th>
        <th class="score">Score</th>
    </tr>
    <tr>
        <td rowspan="7">Business model</td>
        <td>Votre entreprise dégage t-elle une part de CA par des produits ou services en ligne</td>
        <td class="score">2</td>
    </tr>
    <tr>
        <td>La mise en place d’outils numériques a-t-elle permis d'optimiser les coûts, les délais et la qualité ?</td>
        <td class="score">0</td>
    </tr>
    <tr>
        <td>Comment les outils sont-ils intégrés dans les process de l’entreprise ?</td>
        <td class="score">0</td>
    </tr>
    <tr>
        <td>Comment partagez-vous les données numériques avec les parties prenantes (clients, fournisseurs,…) ?</td>
        <td class="score">0</td>
    </tr>
    <tr>
        <td>Mesurez-vous les impacts du numérique sur votre entreprise ?</td>
        <td class="score">1</td>
    </tr>
    <tr>
        <td>Quel est l’impact du numérique sur la démarche RSE de l’entreprise ?</td>
        <td class="score">0</td>
    </tr>
    <tr>
        <td>Existe-t-il des freins (stratégiques, financiers,…) à l’investissement dans les outils numériques ?</td>
        <td class="score">1</td>
    </tr>
    <tr>
        <td rowspan="6">Relation client</td>
        <td>L’entreprise dispose-t-elle : d’un site internet, d’un compte LinkedIn, d’une page Facebook, d’un compte Twitter,... ?</td>
        <td class="score">1</td>
    </tr>
    <tr>
        <td>Comment utilisez-vous le numérique dans la relation client ? (nouveau modèle de vente, nouveau modèle d’échanges avec les clients, communauté, story, chat,...)</td>
        <td class="score">1</td>
    </tr>
    <tr>
        <td>L’entreprise dispose-t-elle d’un community manager ?</td>
        <td class="score">2</td>
    </tr>
    <tr>
        <td>Certains de vos collaborateurs sont-ils actifs sur les réseaux sociaux au nom de l’entreprise ?</td>
        <td class="score">1</td>
    </tr>
    <tr>
        <td>Comment mesurez-vous et exploitez-vous les données issues du site de votre entreprise ?</td>
        <td class="score">2</td>
    </tr>
    <tr>
        <td>Avez-vous observé chez vos concurrents des pratiques innovantes ?</td>
        <td class="score">1</td>
    </tr>
    <tr>
        <td rowspan="7">Management</td>
        <td>Vos collaborateurs sont-ils équipés de nouveaux équipements numériques de travail (PC portable, tablette, smartphone,…) ?</td>
        <td class="score">1</td>
    </tr>
    <tr>
        <td>L’arrivée des outils digitaux a-t-elle eu un impact sur les pratiques et la culture de l’entreprise ?</td>
        <td class="score">1</td>
    </tr>
    <tr>
        <td>Comment vous êtes-vous approprié et comment avez-vous accompagné ces évolutions?</td>
        <td class="score">1</td>
    </tr>
    <tr>
        <td>Les nouvelles possibilités technologiques ont-elles fait évoluer le modèle d’organisation de l’entreprise et/ou votre management, vers plus de collaboration avec des acteurs internes ou externes ?</td>
        <td class="score">0</td>
    </tr>
    <tr>
        <td>Mobilisez-vous des outils de veille et mettez-vous en œuvre des modalités de curation et de partage de l’information ?</td>
        <td class="score">0</td>
    </tr>
    <tr>
        <td>Les fonctionnalités des outils sont-elles augmentées par la pratique de vos collaborateurs ?</td>
        <td class="score">0</td>
    </tr>
    <tr>
        <td>Comment accompagnez-vous vos collaborateurs dans la transition numérique ?</td>
        <td class="score">0</td>
    </tr>
</table>
</body>
</html>
