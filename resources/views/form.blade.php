<!DOCTYPE html>
<html lang="fr">
@include('partials.head', ['title' => $title ?? 'Titre'])

@include('partials.header')
<body>
<h1>Formulaire</h1>
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('form.handle') }}" method="POST">
    @csrf
    <fieldset>
        <legend>Nom de l'entreprise</legend>
        <label for="entreprise">Nom</label>
        <input type="text" id="entreprise" name="entreprise">

        <legend>Excellence Technique/Communauté de pratiques</legend>

        <label for="q1">Formations pour Apprendre à apprendre, changement de paradigme, "être à la page" :</label><br>
        <input type="radio" id="q1_0" name="q1" value="0">
        <label for="q1_0">Non existantes</label><br>
        <input type="radio" id="q1_1" name="q1" value="1">
        <label for="q1_1">Partielles</label><br>
        <input type="radio" id="q1_2" name="q1" value="2">
        <label for="q1_2">Forte promotion</label><br><br>

        <label for="q2">Le co-développement (outil d'intelligence collective) :</label><br>
        <input type="radio" id="q2_0" name="q2" value="0">
        <label for="q2_0">Non existant</label><br>
        <input type="radio" id="q2_1" name="q2" value="1">
        <label for="q2_1">Occasionnel</label><br>
        <input type="radio" id="q2_2" name="q2" value="2">
        <label for="q2_2">Régulier</label><br><br>

        <label for="q3">Partage des compétences par les collaborateurs :</label><br>
        <input type="radio" id="q3_0" name="q3" value="0">
        <label for="q3_0">Rare</label><br>
        <input type="radio" id="q3_1" name="q3" value="1">
        <label for="q3_1">Occasionnel</label><br>
        <input type="radio" id="q3_2" name="q3" value="2">
        <label for="q3_2">Fréquent</label><br><br>

        <label for="q4">Existence du mentoring (fonctionnement en binôme) :</label><br>
        <input type="radio" id="q4_0" name="q4" value="0">
        <label for="q4_0">Non existant</label><br>
        <input type="radio" id="q4_1" name="q4" value="1">
        <label for="q4_1">Occasionnel</label><br>
        <input type="radio" id="q4_2" name="q4" value="2">
        <label for="q4_2">Régulier</label><br><br>

        <label for="q5">Les managers sont-ils formateurs sur certains sujets pour l'entreprise entière :</label><br>
        <input type="radio" id="q5_0" name="q5" value="0">
        <label for="q5_0">Jamais</label><br>
        <input type="radio" id="q5_1" name="q5" value="1">
        <label for="q5_1">Occasionnellement</label><br>
        <input type="radio" id="q5_2" name="q5" value="2">
        <label for="q5_2">Régulièrement</label><br><br>

        <label for="q6">L'entreprise favorise-t-elle l'excellence technique (Principe 9 du Manifeste Agile) :</label><br>
        <input type="radio" id="q6_0" name="q6" value="0">
        <label for="q6_0">Pas du tout</label><br>
        <input type="radio" id="q6_1" name="q6" value="1">
        <label for="q6_1">Partiellement</label><br>
        <input type="radio" id="q6_2" name="q6" value="2">
        <label for="q6_2">Beaucoup</label><br><br>
    </fieldset>

    <fieldset>
        <legend>Faire agile</legend>

        <label for="q7">Déploiement des pratiques "Faire Agile" :</label><br>
        <input type="radio" id="q7_0" name="q7" value="0">
        <label for="q7_0">Non</label><br>
        <input type="radio" id="q7_1" name="q7" value="1">
        <label for="q7_1">Partiellement</label><br>
        <input type="radio" id="q7_2" name="q7" value="2">
        <label for="q7_2">Oui</label><br><br>

        <label for="q8">Promotion d'un "état d'esprit agile" :</label><br>
        <input type="radio" id="q8_0" name="q8" value="0">
        <label for="q8_0">Non</label><br>
        <input type="radio" id="q8_1" name="q8" value="1">
        <label for="q8_1">Partiellement</label><br>
        <input type="radio" id="q8_2" name="q8" value="2">
        <label for="q8_2">Oui</label><br><br>
    </fieldset>

    <fieldset>
        <legend>Gestion humaine des compétences</legend>

        <label for="q9">Gestion humaine des compétences :</label><br>
        <input type="radio" id="q9_0" name="q9" value="0">
        <label for="q9_0">Non</label><br>
        <input type="radio" id="q9_1" name="q9" value="1">
        <label for="q9_1">Partiellement</label><br>
        <input type="radio" id="q9_2" name="q9" value="2">
        <label for="q9_2">Oui</label><br><br>
    </fieldset>
    <fieldset>
        <legend>Vélocité de réponse</legend>

        <label for="q10">Valeur supérieure utilisable livrée plus tôt :</label><br>
        <input type="radio" id="q10_0" name="q10" value="0">
        <label for="q10_0">Non</label><br>
        <input type="radio" id="q10_1" name="q10" value="1">
        <label for="q10_1">Partiellement</label><br>
        <input type="radio" id="q10_2" name="q10" value="2">
        <label for="q10_2">Oui</label><br><br>

        <label for="q11">Réactivité face aux impératifs prépondérants :</label><br>
        <input type="radio" id="q11_0" name="q11" value="0">
        <label for="q11_0">Faible</label><br>
        <input type="radio" id="q11_1" name="q11" value="1">
        <label for="q11_1">Moyenne</label><br>
        <input type="radio" id="q11_2" name="q11" value="2">
        <label for="q11_2">Élevée</label><br><br>

        <label for="q12">Mesure de la vélocité de l'équipe :</label><br>
        <input type="radio" id="q12_0" name="q12" value="0">
        <label for="q12_0">Non mesurée</label><br>
        <input type="radio" id="q12_1" name="q12" value="1">
        <label for="q12_1">Partiellement mesurée</label><br>
        <input type="radio" id="q12_2" name="q12" value="2">
        <label for="q12_2">Mesurée et suivie</label><br><br>
    </fieldset>

    <fieldset>
        <legend>Environnements souples</legend>

        <label for="q13">Installations techniques et de gestion modernes (TIC/ERP/CRM) :</label><br>
        <input type="radio" id="q13_0" name="q13" value="0">
        <label for="q13_0">Non</label><br>
        <input type="radio" id="q13_1" name="q13" value="1">
        <label for="q13_1">Partiellement</label><br>
        <input type="radio" id="q13_2" name="q13" value="2">
        <label for="q13_2">Oui</label><br><br>

        <label for="q14">Capacité d'autonomisation des équipes :</label><br>
        <input type="radio" id="q14_0" name="q14" value="0">
        <label for="q14_0">Faible</label><br>
        <input type="radio" id="q14_1" name="q14" value="1">
        <label for="q14_1">Moyenne</label><br>
        <input type="radio" id="q14_2" name="q14" value="2">
        <label for="q14_2">Élevée</label><br><br>

        <label for="q15">Cadre Agile Lean :</label><br>
        <input type="radio" id="q15_0" name="q15" value="0">
        <label for="q15_0">Non</label><br>
        <input type="radio" id="q15_1" name="q15" value="1">
        <label for="q15_1">Partiellement</label><br>
        <input type="radio" id="q15_2" name="q15" value="2">
        <label for="q15_2">Oui</label><br><br>

        <label for="q16">Mécanismes de livraison et de synchronisation matures :</label><br>
        <input type="radio" id="q16_0" name="q16" value="0">
        <label for="q16_0">Non</label><br>
        <input type="radio" id="q16_1" name="q16" value="1">
        <label for="q16_1">Partiellement</label><br>
        <input type="radio" id="q16_2" name="q16" value="2">
        <label for="q16_2">Oui</label><br><br>
    </fieldset>

    <fieldset>
        <legend>Défi environnemental</legend>

        <label for="q17">Innovations produit tenant compte de l'urgence climatique :</label><br>
        <input type="radio" id="q17_0" name="q17" value="0">
        <label for="q17_0">Non</label><br>
        <input type="radio" id="q17_1" name="q17" value="1">
        <label for="q17_1">Partiellement</label><br>
        <input type="radio" id="q17_2" name="q17" value="2">
        <label for="q17_2">Oui</label><br><br>

        <label for="q18">Processus internes pour diminuer l'impact environnemental :</label><br>
        <input type="radio" id="q18_0" name="q18" value="0">
        <label for="q18_0">Non</label><br>
        <input type="radio" id="q18_1" name="q18" value="1">
        <label for="q18_1">Partiellement</label><br>
        <input type="radio" id="q18_2" name="q18" value="2">
        <label for="q18_2">Oui</label><br><br>

        <label for="q19">Sélection des parties prenantes en fonction de leur éthique vis-à-vis du développement durable :</label><br>
        <input type="radio" id="q19_0" name="q19" value="0">
        <label for="q19_0">Non</label><br>
        <input type="radio" id="q19_1" name="q19" value="1">
        <label for="q19_1">Partiellement</label><br>
        <input type="radio" id="q19_2" name="q19" value="2">
        <label for="q19_2">Oui</label><br><br>
    </fieldset>

    <fieldset>
        <legend>Veille et benchmark</legend>

        <label for="q20">Veille stratégique :</label><br>
        <input type="radio" id="q20_0" name="q20" value="0">
        <label for="q20_0">Faible</label><br>
        <input type="radio" id="q20_1" name="q20" value="1">
        <label for="q20_1">Moyenne</label><br>
        <input type="radio" id="q20_2" name="q20" value="2">
        <label for="q20_2">Élevée</label><br><br>
    </fieldset>

    <fieldset>
        <legend>Business model</legend>

        <label for="q21">Part du CA par des produits ou services en ligne :</label><br>
        <input type="radio" id="q21_0" name="q21" value="0">
        <label for="q21_0">Aucune</label><br>
        <input type="radio" id="q21_1" name="q21" value="1">
        <label for="q21_1">Partielle</label><br>
        <input type="radio" id="q21_2" name="q21" value="2">
        <label for="q21_2">Significative</label><br><br>

        <label for="q22">Outils numériques pour optimiser coûts, délais, qualité :</label><br>
        <input type="radio" id="q22_0" name="q22" value="0">
        <label for="q22_0">Non</label><br>
        <input type="radio" id="q22_1" name="q22" value="1">
        <label for="q22_1">Partiellement</label><br>
        <input type="radio" id="q22_2" name="q22" value="2">
        <label for="q22_2">Oui</label><br><br>
        <label for="q23">Intégration des outils numériques dans les process de l’entreprise :</label><br>
        <input type="radio" id="q23_0" name="q23" value="0">
        <label for="q23_0">Non intégrée</label><br>
        <input type="radio" id="q23_1" name="q23" value="1">
        <label for="q23_1">Partiellement intégrée</label><br>
        <input type="radio" id="q23_2" name="q23" value="2">
        <label for="q23_2">Entièrement intégrée</label><br><br>

        <label for="q24">Partage des données numériques avec les parties prenantes :</label><br>
        <input type="radio" id="q24_0" name="q24" value="0">
        <label for="q24_0">Non partagées</label><br>
        <input type="radio" id="q24_1" name="q24" value="1">
        <label for="q24_1">Partiellement partagées</label><br>
        <input type="radio" id="q24_2" name="q24" value="2">
        <label for="q24_2">Entièrement partagées</label><br><br>

        <label for="q25">Mesure des impacts du numérique sur l’entreprise :</label><br>
        <input type="radio" id="q25_0" name="q25" value="0">
        <label for="q25_0">Non mesurés</label><br>
        <input type="radio" id="q25_1" name="q25" value="1">
        <label for="q25_1">Partiellement mesurés</label><br>
        <input type="radio" id="q25_2" name="q25" value="2">
        <label for="q25_2">Entièrement mesurés</label><br><br>

        <label for="q26">Impact du numérique sur la démarche RSE de l’entreprise :</label><br>
        <input type="radio" id="q26_0" name="q26" value="0">
        <label for="q26_0">Faible</label><br>
        <input type="radio" id="q26_1" name="q26" value="1">
        <label for="q26_1">Moyen</label><br>
        <input type="radio" id="q26_2" name="q26" value="2">
        <label for="q26_2">Élevé</label><br><br>

        <label for="q27">Freins à l’investissement dans les outils numériques :</label><br>
        <input type="radio" id="q27_0" name="q27" value="0">
        <label for="q27_0">Importants</label><br>
        <input type="radio" id="q27_1" name="q27" value="1">
        <label for="q27_1">Modérés</label><br>
        <input type="radio" id="q27_2" name="q27" value="2">
        <label for="q27_2">Minimes</label><br><br>
    </fieldset>

    <fieldset>
        <legend>Relation client</legend>

        <label for="q28">Présence sur les plateformes numériques (site, LinkedIn, Facebook, Twitter,...) :</label><br>
        <input type="radio" id="q28_0" name="q28" value="0">
        <label for="q28_0">Non présente</label><br>
        <input type="radio" id="q28_1" name="q28" value="1">
        <label for="q28_1">Partiellement présente</label><br>
        <input type="radio" id="q28_2" name="q28" value="2">
        <label for="q28_2">Présente sur plusieurs plateformes</label><br><br>

        <label for="q29">Utilisation du numérique dans la relation client :</label><br>
        <input type="radio" id="q29_0" name="q29" value="0">
        <label for="q29_0">Faible</label><br>
        <input type="radio" id="q29_1" name="q29" value="1">
        <label for="q29_1">Moyenne</label><br>
        <input type="radio" id="q29_2" name="q29" value="2">
        <label for="q29_2">Élevée</label><br><br>

        <label for="q30">Présence d'un community manager :</label><br>
        <input type="radio" id="q30_0" name="q30" value="0">
        <label for="q30_0">Non</label><br>
        <input type="radio" id="q30_1" name="q30" value="1">
        <label for="q30_1">Partiellement</label><br>
        <input type="radio" id="q30_2" name="q30" value="2">
        <label for="q30_2">Oui</label><br><br>

        <label for="q31">Collaborateurs actifs sur les réseaux sociaux au nom de l’entreprise :</label><br>
        <input type="radio" id="q31_0" name="q31" value="0">
        <label for="q31_0">Non</label><br>
        <input type="radio" id="q31_1" name="q31" value="1">
        <label for="q31_1">Partiellement</label><br>
        <input type="radio" id="q31_2" name="q31" value="2">
        <label for="q31_2">Oui</label><br><br>

        <label for="q32">Mesure et exploitation des données issues du site :</label><br>
        <input type="radio" id="q32_0" name="q32" value="0">
        <label for="q32_0">Non mesurées</label><br>
        <input type="radio" id="q32_1" name="q32" value="1">
        <label for="q32_1">Partiellement mesurées</label><br>
        <input type="radio" id="q32_2" name="q32" value="2">
        <label for="q32_2">Entièrement mesurées</label><br><br>

        <label for="q33">Observation de pratiques innovantes chez vos concurrents :</label><br>
        <input type="radio" id="q33_0" name="q33" value="0">
        <label for="q33_0">Rarement</label><br>
        <input type="radio" id="q33_1" name="q33" value="1">
        <label for="q33_1">Occasionnellement</label><br>
        <input type="radio" id="q33_2" name="q33" value="2">
        <label for="q33_2">Fréquemment</label><br><br>
    </fieldset>

    <fieldset>
        <legend>Management</legend>

        <label for="q34">Équipement des collaborateurs en nouveaux équipements numériques :</label><br>
        <input type="radio" id="q34_0" name="q34" value="0">
        <label for="q34_0">Non</label><br>
        <input type="radio" id="q34_1" name="q34" value="1">
        <label for="q34_1">Partiellement</label><br>
        <input type="radio" id="q34_2" name="q34" value="2">
        <label for="q34_2">Oui</label><br><br>

        <label for="q35">Impact des outils digitaux sur les pratiques et la culture de l’entreprise :</label><br>
        <input type="radio" id="q35_0" name="q35" value="0">
        <label for="q35_0">Faible</label><br>
        <input type="radio" id="q35_1" name="q35" value="1">
        <label for="q35_1">Moyen</label><br>
        <input type="radio" id="q35_2" name="q35" value="2">
        <label for="q35_2">Élevé</label><br><br>

        <label for="q36">Appropriation et accompagnement des évolutions technologiques :</label><br>
        <input type="radio" id="q36_0" name="q36" value="0">
        <label for="q36_0">Faible</label><br>
        <input type="radio" id="q36_1" name="q36" value="1">
        <label for="q36_1">Moyen</label><br>
        <input type="radio" id="q36_2" name="q36" value="2">
        <label for="q36_2">Élevé</label><br><br>

        <label for="q37">Évolution du modèle d’organisation et du management avec les outils numériques :</label><br>
        <input type="radio" id="q37_0" name="q37" value="0">
        <label for="q37_0">Faible</label><br>
        <input type="radio" id="q37_1" name="q37" value="1">
        <label for="q37_1">Moyenne</label><br>
        <input type="radio" id="q37_2" name="q37" value="2">
        <label for="q37_2">Élevée</label><br><br>

        <label for="q38">Utilisation d'outils de veille et modalités de partage d'information :</label><br>
        <input type="radio" id="q38_0" name="q38" value="0">
        <label for="q38_0">Non utilisés</label><br>
        <input type="radio" id="q38_1" name="q38" value="1">
        <label for="q38_1">Partiellement utilisés</label><br>
        <input type="radio" id="q38_2" name="q38" value="2">
        <label for="q38_2">Entièrement utilisés</label><br><br>

        <label for="q39">Augmentation des fonctionnalités des outils par la pratique des collaborateurs :</label><br>
        <input type="radio" id="q39_0" name="q39" value="0">
        <label for="q39_0">Faible</label><br>
        <input type="radio" id="q39_1" name="q39" value="1">
        <label for="q39_1">Moyenne</label><br>
        <input type="radio" id="q39_2" name="q39" value="2">
        <label for="q39_2">Élevée</label><br><br>

        <label for="q40">Accompagnement des collaborateurs dans la transition numérique :</label><br>
        <input type="radio" id="q40_0" name="q40" value="0">
        <label for="q40_0">Faible</label><br>
        <input type="radio" id="q40_1" name="q40" value="1">
        <label for="q40_1">Moyen</label><br>
        <input type="radio" id="q40_2" name="q40" value="2">
        <label for="q40_2">Élevé</label><br><br>
    </fieldset>
    <button type="submit">Submit</button>
</form>

</body>
@include('partials.footer')
