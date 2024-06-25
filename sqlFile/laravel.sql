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
-- Structure de la table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'competence', NULL, NULL),
(2, 'reactivite', NULL, NULL),
(3, 'numerique', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

DROP TABLE IF EXISTS `entreprises`;
CREATE TABLE IF NOT EXISTS `entreprises` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `entreprises`
--

INSERT INTO `entreprises` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Oxianet', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `groupes`
--

DROP TABLE IF EXISTS `groupes`;
CREATE TABLE IF NOT EXISTS `groupes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `groupes_categorie_id_foreign` (`categorie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Structure de la table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_25_075053_create_entreprises_table', 2),
(5, '2024_06_25_075221_create_categories_table', 2),
(6, '2024_06_25_075331_create_groupes_table', 2),
(7, '2024_06_25_075409_create_questions_table', 2),
(8, '2024_06_25_075458_create_reponses_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `texte` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `groupe_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `questions_groupe_id_foreign` (`groupe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Structure de la table `reponses`
--

DROP TABLE IF EXISTS `reponses`;
CREATE TABLE IF NOT EXISTS `reponses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `entreprise_id` bigint UNSIGNED NOT NULL,
  `question_id` bigint UNSIGNED NOT NULL,
  `score` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reponses_entreprise_id_foreign` (`entreprise_id`),
  KEY `reponses_question_id_foreign` (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('cAf87CEEHkyByNcz9UflnqKvfPpvEqjEXjRiFsTE', NULL, '172.18.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWnNIczNCbG9FTXpTNnR6RGpoMjZpYzRIZVE2UDRlckpva1dER2xNYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODA4MSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1719301610),
('yNLNaXbsz5qeat6r9ycI25vCRU22EdvaCjYG0JzS', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid2h5UG5Td010a3NvaWc3WUx6a3BIQW9YUmNtR3dxSW1rMWZMdHhlSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZXN1bHRzLzEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1719306548);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `groupes`
--
ALTER TABLE `groupes`
  ADD CONSTRAINT `groupes_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_groupe_id_foreign` FOREIGN KEY (`groupe_id`) REFERENCES `groupes` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD CONSTRAINT `reponses_entreprise_id_foreign` FOREIGN KEY (`entreprise_id`) REFERENCES `entreprises` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reponses_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
