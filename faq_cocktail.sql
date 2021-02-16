-- phpMyAdmin SQL Dump
-- version OVH
-- https://www.phpmyadmin.net/
--
-- Hôte : bandedvbdc2020.mysql.db
-- Généré le :  mar. 16 fév. 2021 à 12:49
-- Version du serveur :  5.6.50-log
-- Version de PHP :  7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bandedvbdc2020`
--

-- --------------------------------------------------------

--
-- Structure de la table `faq_cocktail`
--

CREATE TABLE `faq_cocktail` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `response` text NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `faq_cocktail`
--

INSERT INTO `faq_cocktail` (`id`, `question`, `response`, `position`) VALUES
(1, 'Où nous trouver ?', 'Nous livrons dans toute la France en 24 à 48h.', 1),
(2, 'Sous quelles formes les cocktails sont-ils livrés ?', 'Les cocktails sont disponibles en bouteilles.\r\n\r\nIl existe trois formats de bouteilles:\r\n- 20cl pour un cocktail individuel\r\n- 50cl pour servir 5 cocktails\r\n- 70cl pour servir 7 cocktails', 2),
(3, 'La qualités des cocktails n\'est-elle pas altérée par la mise en bouteilles ?', 'Non, nos barmen préparent les cocktails de la même manière qu’au service au bar. L’ensemble des cocktails sont préparés le jour même.\r\nIl est inutile de shaker de nouveau les cocktails à leur réception, ils sont prêts à déguster.', 3),
(4, 'Quelle est la DLC (date limite de consommation) de vos cocktails ?', 'Tous nos cocktails ont une DLC de 48h.\r\nNous vous conseillons de les consommer dans les 24h pour une expérience optimale.', 4),
(5, 'Les bouteilles sont-elles consignées?', 'Les bouteilles de 20cl et 70 cl sont de qualité supérieure et donc consignée.\r\nUne date de reprise sera fixée avec votre contact Nighthawks au moment de l’organisation de votre événement.', 5),
(6, 'Comment puis-je personnaliser les bouteilles individuelles ?', 'Pour personnaliser les étiquettes des bouteilles, il faut envoyer votre fichier (texte ou logo vectorisé) dans un délais de 8 jours ouvrés avant la date de l’événement.\r\nPour plus d’informations, veuillez nous envoyer un e-mail à l’adresse contact@fdg.com', 6),
(7, 'Comment les cocktails sont-ils livrés ?', 'Les cocktails sont livrés en vélo-cargo ou en camion réfrigéré en fonction de la quantité de cocktails commandés.', 7),
(8, 'Les cocktails sont-ils livrés avec les glaçons ?', 'Oui, les cocktails sont toujours livrés avec les glaçons et les garnishs (décorations à déposer sur le verre).', 8),
(9, 'Puis-je commander de la verrerie avec mes cocktails ?', 'Oui, bien sûr !\r\nPour commander de la verrerie, vous devrez vous orienter vers nos offres all- inclusive.\r\nElles comprennent:\r\n- Les cocktails\r\n- Le service\r\n- La verrerie\r\n- Le dressage de votre bar événementiel\r\n- La livraison et la reprise\r\nEn fonction de vos besoins, vous serez dirigés vers notre “petite formule” ou notre “ grande formule”.', 9),
(10, 'Combien de cocktails minimum puis-je commander ?', 'La commande minimale est de 20 cocktails pour une livraison simple “petite formule”.\r\nLa commande minimale est de 50 cocktails pour la “grande formule – all inclusive”.', 10),
(11, 'Proposez-vous une offre barmen ?', 'Oui. Cette offre dépend du nombre d’invités et de la plage horaire désirée, veuillez nous contacter à l’adresse contact@nighthawks.fr', 11),
(12, 'Le bar mobile est-il compris dans l’offre ?', 'Non, il n’est pas compris dans l’offre.\r\nLe concept permet d’installer votre bar éphémère au sein des éléments fournis par le client.\r\nNous proposons cependant un bar vintage à la location.', 12),
(13, 'Combien de temps à l’avance, les cocktails sont-ils préparés ?', 'Les cocktails sont préparés 2 à 3h avant le début de l’événement.', 13),
(14, 'Proposez-vous des cocktails sans alcool ?', 'Oui, cela s’appelle des mocktails.\r\nVous trouverez leur carte sur le site, lors de la création d’un devis.\r\nÀ la différence d’un smoothie, composé uniquement de jus de fruits, les mocktails sont préparés également avec des sirops, thés ou infusion.', 14);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `faq_cocktail`
--
ALTER TABLE `faq_cocktail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `faq_cocktail`
--
ALTER TABLE `faq_cocktail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
