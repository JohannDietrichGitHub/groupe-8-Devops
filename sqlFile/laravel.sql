-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 25 juin 2024 à 09:42
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `laravel`
--




-- --------------------------------------------------------

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'competence', NULL, NULL),
(2, 'reactivite', NULL, NULL),
(3, 'numerique', NULL, NULL);

-- --------------------------------------------------------

--
-- Déchargement des données de la table `entreprises`
--

INSERT INTO `entreprises` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Oxianet', NULL, NULL);

-- --------------------------------------------------------

--
-- Déchargement des données de la table `groupes`
--

INSERT INTO `groupes` (`id`, `nom`, `categorie_id`, `created_at`, `updated_at`) VALUES
(1, 'Excellence Technique/Communauté de pratiques	', 1, NULL, NULL),
(2, 'Faire agile	', 1, NULL, NULL),
(3, 'Gestion humaine des compétences	', 1, NULL, NULL),
(4, 'Vélocité de réponse	', 2, NULL, NULL),
(5, 'Environnements souples	', 2, NULL, NULL),
(6, 'Défi environnemental	', 2, NULL, NULL),
(7, 'Veille et benchmark	', 2, NULL, NULL),
(8, 'Business model	', 3, NULL, NULL),
(9, 'Relation client	', 3, NULL, NULL),
(10, 'Management	', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `texte`, `groupe_id`, `created_at`, `updated_at`) VALUES
(1, 'Formations pour Apprendre à apprendre, changement de paradigme, \"être à la page\" (au-delà des compétences \"justes\" nécessaires)	', 1, NULL, NULL),
(2, 'Le co-développement (outil d\'intelligence collective) existe-t-il dans l\'entreprise ?	', 1, NULL, NULL),
(3, 'Les collaborateurs sont-ils amenés à partager leurs compétences et sous quelles formes ?	', 1, NULL, NULL),
(4, 'Le mentoring (fonctionnement en binôme) existe-t-il pour assurer le transfert de compétences ?	', 1, NULL, NULL),
(5, 'Les managers sont-ils aussi formateurs sur certains sujet pour l\'entreprise entière ?	', 1, NULL, NULL),
(6, 'L\'entreprise favorise-t-elle l\'excellence technique ? (Principe 9 du Manifeste Agile)	', 1, NULL, NULL),
(7, 'Déployez vous les pratiques du \"Faire Agile\", c\'est-à-dire une ou plusieurs des \"méthodes\" agiles ?	', 2, NULL, NULL),
(8, 'Votre entreprise promeut-elle un \"état d\'esprit agile\" ?	', 2, NULL, NULL),
(9, 'Votre entreprise gère-t-elle humainement les compétences ?	', 3, NULL, NULL),
(10, 'Valeur supérieure utilisable livrée plus tôt (Fonction principale utilisable dès les premières versions)	', 4, NULL, NULL),
(11, 'Réactivité face aux impératifs prépondérants	', 4, NULL, NULL),
(12, 'Mesure de la vélocité de l\'équipe (indicateur de suivi du travail d\'une équipe de conception)	', 4, NULL, NULL),
(13, 'Les installations techniques et de gestion sont modernes (TIC/ERP/CRM)	', 5, NULL, NULL),
(14, 'Les équipes sont en capacité d\'autonomiser une partie de leurs tâches	', 5, NULL, NULL),
(15, 'Les équipes s’inscrivent dans un cadre Agile Lean	', 5, NULL, NULL),
(16, 'Les mécanismes de livraison et de synchronisation sont matures	', 5, NULL, NULL),
(17, 'Les innovations produit tiennent compte de l\'urgence climatique	', 6, NULL, NULL),
(18, 'Les processus internes sont remis en cause pour diminuer leur impact environnemental	', 6, NULL, NULL),
(19, 'Les parties prenantes sont sélectionnées en fonction de leur éthique vis-à-vis du développement durable	', 6, NULL, NULL),
(20, 'Veille stratégique	', 7, NULL, NULL),
(21, 'Votre entreprise dégage t-elle une part de CA par des produits ou services en ligne	', 8, NULL, NULL),
(22, 'La mise en place d’outils numériques a-t-elle permis d\'optimiser les coûts, les délais et la qualité ?	', 8, NULL, NULL),
(23, 'Comment les outils sont-ils intégrés dans les process de l’entreprise ?	', 8, NULL, NULL),
(24, 'Comment partagez-vous les données numériques avec les parties prenantes (clients, fournisseurs,…) ?	', 8, NULL, NULL),
(25, 'Mesurez-vous les impacts du numérique sur votre entreprise ?	', 8, NULL, NULL),
(26, 'Quel est l’impact du numérique sur la démarche RSE de l’entreprise ?	', 8, NULL, NULL),
(27, 'Existe-t-il des freins (stratégiques, financiers,…) à l’investissement dans les outils numériques ?	', 8, NULL, NULL),
(28, 'L’entreprise dispose-t-elle : d’un site internet, d’un compte LinkedIn, d’une page Facebook, d’un compte Twitter,... ?	', 9, NULL, NULL),
(29, 'Comment utilisez-vous le numérique dans la relation client ? (nouveau modèle de vente, nouveau modèle d’échanges avec les clients, communauté, story, chat,...)	', 9, NULL, NULL),
(30, 'L’entreprise dispose-t-elle d’un community manager ?	', 9, NULL, NULL),
(31, 'Certains de vos collaborateurs sont-ils actifs sur les réseaux sociaux au nom de l’entreprise ?	', 9, NULL, NULL),
(32, 'Comment mesurez-vous et exploitez-vous les données issues du site de votre entreprise ?	', 9, NULL, NULL),
(33, 'Avez-vous observé chez vos concurrents des pratiques innovantes ?	', 9, NULL, NULL),
(34, 'Vos collaborateurs sont-ils équipés de nouveaux équipements numériques de travail (PC portable, tablette, smartphone,…) ?	', 10, NULL, NULL),
(35, 'L’arrivée des outils digitaux a-t-elle eu un impact sur les pratiques et la culture de l’entreprise ?	', 10, NULL, NULL),
(36, 'Comment vous êtes-vous approprié et comment avez-vous accompagné ces évolutions?	', 10, NULL, NULL),
(37, 'Les nouvelles possibilités technologiques ont-elles fait évoluer le modèle d’organisation de l’entreprise et/ou votre management, vers plus de collaboration avec des acteurs internes ou externes ?	', 10, NULL, NULL),
(38, 'Mobilisez-vous des outils de veille et mettez-vous en œuvre des modalités de curation et de partage de l’information ?	', 10, NULL, NULL),
(39, 'Les fonctionnalités des outils sont-elles augmentées par la pratique de vos collaborateurs ?	', 10, NULL, NULL),
(40, 'Comment accompagnez-vous vos collaborateurs dans la transition numérique ?	', 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Déchargement des données de la table `reponses`
--

INSERT INTO `reponses` (`id`, `entreprise_id`, `question_id`, `score`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, NULL, NULL),
(2, 1, 2, 1, NULL, NULL),
(3, 1, 3, 1, NULL, NULL),
(4, 1, 4, 2, NULL, NULL),
(5, 1, 5, 1, NULL, NULL),
(6, 1, 6, 1, NULL, NULL),
(7, 1, 7, 2, NULL, NULL),
(8, 1, 8, 1, NULL, NULL),
(9, 1, 9, 0, NULL, NULL),
(10, 1, 10, 0, NULL, NULL),
(11, 1, 11, 1, NULL, NULL),
(12, 1, 12, 0, NULL, NULL),
(13, 1, 13, 2, NULL, NULL),
(14, 1, 14, 1, NULL, NULL),
(15, 1, 15, 1, NULL, NULL),
(16, 1, 16, 0, NULL, NULL),
(17, 1, 17, 0, NULL, NULL),
(18, 1, 18, 0, NULL, NULL),
(19, 1, 19, 1, NULL, NULL),
(20, 1, 20, 2, NULL, NULL),
(21, 1, 21, 1, NULL, NULL),
(22, 1, 22, 0, NULL, NULL),
(23, 1, 23, 1, NULL, NULL),
(24, 1, 24, 0, NULL, NULL),
(25, 1, 25, 1, NULL, NULL),
(26, 1, 26, 0, NULL, NULL),
(27, 1, 27, 0, NULL, NULL),
(28, 1, 28, 0, NULL, NULL),
(29, 1, 29, 2, NULL, NULL),
(30, 1, 30, 0, NULL, NULL),
(31, 1, 31, 0, NULL, NULL),
(32, 1, 32, 0, NULL, NULL),
(33, 1, 33, 2, NULL, NULL),
(34, 1, 34, 1, NULL, NULL),
(35, 1, 35, 1, NULL, NULL),
(36, 1, 36, 2, NULL, NULL),
(37, 1, 37, 0, NULL, NULL),
(38, 1, 38, 1, NULL, NULL),
(39, 1, 39, 2, NULL, NULL),
(40, 1, 40, 1, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
