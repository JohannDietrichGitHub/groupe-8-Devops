<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('questions')->insert([
            ['id' => 1, 'texte' => 'Formations pour Apprendre à apprendre, changement de paradigme, "être à la page" (au-delà des compétences "justes" nécessaires)', 'groupe_id' => 1, 'created_at' => null, 'updated_at' => null],
            ['id' => 2, 'texte' => 'Le co-développement (outil d\'intelligence collective) existe-t-il dans l\'entreprise ?', 'groupe_id' => 1, 'created_at' => null, 'updated_at' => null],
            ['id' => 3, 'texte' => 'Les collaborateurs sont-ils amenés à partager leurs compétences et sous quelles formes ?', 'groupe_id' => 1, 'created_at' => null, 'updated_at' => null],
            ['id' => 4, 'texte' => 'Le mentoring (fonctionnement en binôme) existe-t-il pour assurer le transfert de compétences ?', 'groupe_id' => 1, 'created_at' => null, 'updated_at' => null],
            ['id' => 5, 'texte' => 'Les managers sont-ils aussi formateurs sur certains sujet pour l\'entreprise entière ?', 'groupe_id' => 1, 'created_at' => null, 'updated_at' => null],
            ['id' => 6, 'texte' => 'L\'entreprise favorise-t-elle l\'excellence technique ? (Principe 9 du Manifeste Agile)', 'groupe_id' => 1, 'created_at' => null, 'updated_at' => null],
            ['id' => 7, 'texte' => 'Déployez vous les pratiques du "Faire Agile", c\'est-à-dire une ou plusieurs des "méthodes" agiles ?', 'groupe_id' => 2, 'created_at' => null, 'updated_at' => null],
            ['id' => 8, 'texte' => 'Votre entreprise promeut-elle un "état d\'esprit agile" ?', 'groupe_id' => 2, 'created_at' => null, 'updated_at' => null],
            ['id' => 9, 'texte' => 'Votre entreprise gère-t-elle humainement les compétences ?', 'groupe_id' => 3, 'created_at' => null, 'updated_at' => null],
            ['id' => 10, 'texte' => 'Valeur supérieure utilisable livrée plus tôt (Fonction principale utilisable dès les premières versions)', 'groupe_id' => 4, 'created_at' => null, 'updated_at' => null],
            ['id' => 11, 'texte' => 'Réactivité face aux impératifs prépondérants', 'groupe_id' => 4, 'created_at' => null, 'updated_at' => null],
            ['id' => 12, 'texte' => 'Mesure de la vélocité de l\'équipe (indicateur de suivi du travail d\'une équipe de conception)', 'groupe_id' => 4, 'created_at' => null, 'updated_at' => null],
            ['id' => 13, 'texte' => 'Les installations techniques et de gestion sont modernes (TIC/ERP/CRM)', 'groupe_id' => 5, 'created_at' => null, 'updated_at' => null],
            ['id' => 14, 'texte' => 'Les équipes sont en capacité d\'autonomiser une partie de leurs tâches', 'groupe_id' => 5, 'created_at' => null, 'updated_at' => null],
            ['id' => 15, 'texte' => 'Les équipes s’inscrivent dans un cadre Agile Lean', 'groupe_id' => 5, 'created_at' => null, 'updated_at' => null],
            ['id' => 16, 'texte' => 'Les mécanismes de livraison et de synchronisation sont matures', 'groupe_id' => 5, 'created_at' => null, 'updated_at' => null],
            ['id' => 17, 'texte' => 'Les innovations produit tiennent compte de l\'urgence climatique', 'groupe_id' => 6, 'created_at' => null, 'updated_at' => null],
            ['id' => 18, 'texte' => 'Les processus internes sont remis en cause pour diminuer leur impact environnemental', 'groupe_id' => 6, 'created_at' => null, 'updated_at' => null],
            ['id' => 19, 'texte' => 'Les parties prenantes sont sélectionnées en fonction de leur éthique vis-à-vis du développement durable', 'groupe_id' => 6, 'created_at' => null, 'updated_at' => null],
            ['id' => 20, 'texte' => 'Veille stratégique', 'groupe_id' => 7, 'created_at' => null, 'updated_at' => null],
            ['id' => 21, 'texte' => 'Votre entreprise dégage-t-elle une part de CA par des produits ou services en ligne', 'groupe_id' => 8, 'created_at' => null, 'updated_at' => null],
            ['id' => 22, 'texte' => 'La mise en place d’outils numériques a-t-elle permis d\'optimiser les coûts, les délais et la qualité ?', 'groupe_id' => 8, 'created_at' => null, 'updated_at' => null],
            ['id' => 23, 'texte' => 'Comment les outils sont-ils intégrés dans les process de l’entreprise ?', 'groupe_id' => 8, 'created_at' => null, 'updated_at' => null],
            ['id' => 24, 'texte' => 'Comment partagez-vous les données numériques avec les parties prenantes (clients, fournisseurs,...) ?', 'groupe_id' => 8, 'created_at' => null, 'updated_at' => null],
            ['id' => 25, 'texte' => 'Mesurez-vous les impacts du numérique sur votre entreprise ?', 'groupe_id' => 8, 'created_at' => null, 'updated_at' => null],
            ['id' => 26, 'texte' => 'Quel est l’impact du numérique sur la démarche RSE de l’entreprise ?', 'groupe_id' => 8, 'created_at' => null, 'updated_at' => null],
            ['id' => 27, 'texte' => 'Existe-t-il des freins (stratégiques, financiers,...) à l’investissement dans les outils numériques ?', 'groupe_id' => 8, 'created_at' => null, 'updated_at' => null],
            ['id' => 28, 'texte' => 'L’entreprise dispose-t-elle : d’un site internet, d’un compte LinkedIn, d’une page Facebook, d’un compte Twitter,... ?', 'groupe_id' => 9, 'created_at' => null, 'updated_at' => null],
            ['id' => 29, 'texte' => 'Comment utilisez-vous le numérique dans la relation client ? (nouveau modèle de vente, nouveau modèle d’échanges avec les clients, communauté, story, chat,...)', 'groupe_id' => 9, 'created_at' => null, 'updated_at' => null],
            ['id' => 30, 'texte' => 'L’entreprise dispose-t-elle d’un community manager ?', 'groupe_id' => 9, 'created_at' => null, 'updated_at' => null],
            ['id' => 31, 'texte' => 'Certains de vos collaborateurs sont-ils actifs sur les réseaux sociaux au nom de l’entreprise ?', 'groupe_id' => 9, 'created_at' => null, 'updated_at' => null],
            ['id' => 32, 'texte' => 'Comment mesurez-vous et exploitez-vous les données issues du site de votre entreprise ?', 'groupe_id' => 9, 'created_at' => null, 'updated_at' => null],
            ['id' => 33, 'texte' => 'Avez-vous observé chez vos concurrents des pratiques innovantes ?', 'groupe_id' => 9, 'created_at' => null, 'updated_at' => null],
            ['id' => 34, 'texte' => 'Vos collaborateurs sont-ils équipés de nouveaux équipements numériques de travail (PC portable, tablette, smartphone,...) ?', 'groupe_id' => 10, 'created_at' => null, 'updated_at' => null],
            ['id' => 35, 'texte' => 'L’arrivée des outils digitaux a-t-elle eu un impact sur les pratiques et la culture de l’entreprise ?', 'groupe_id' => 10, 'created_at' => null, 'updated_at' => null],
            ['id' => 36, 'texte' => 'Comment vous êtes-vous approprié et comment avez-vous accompagné ces évolutions?', 'groupe_id' => 10, 'created_at' => null, 'updated_at' => null],
            ['id' => 37, 'texte' => 'Les nouvelles possibilités technologiques ont-elles fait évoluer le modèle d’organisation de l’entreprise et/ou votre management, vers plus de collaboration avec des acteurs internes ou externes ?', 'groupe_id' => 10, 'created_at' => null, 'updated_at' => null],
            ['id' => 38, 'texte' => 'Mobilisez-vous des outils de veille et mettez-vous en œuvre des modalités de curation et de partage de l’information ?', 'groupe_id' => 10, 'created_at' => null, 'updated_at' => null],
            ['id' => 39, 'texte' => 'Les fonctionnalités des outils sont-elles augmentées par la pratique de vos collaborateurs ?', 'groupe_id' => 10, 'created_at' => null, 'updated_at' => null],
            ['id' => 40, 'texte' => 'Comment accompagnez-vous vos collaborateurs dans la transition numérique ?', 'groupe_id' => 10, 'created_at' => null, 'updated_at' => null],
        ]);
    }
}
