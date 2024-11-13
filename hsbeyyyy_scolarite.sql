-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 13 nov. 2024 à 23:00
-- Version du serveur : 10.5.25-MariaDB
-- Version de PHP : 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hsbeyyyy_scolarite`
--

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `IdClasse` int(11) NOT NULL,
  `NomClasse` varchar(60) NOT NULL,
  `Faculte` varchar(30) NOT NULL,
  `Capacite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`IdClasse`, `NomClasse`, `Faculte`, `Capacite`) VALUES
(5, 'Classe A', 'Sciences', 30),
(6, 'Classe B', 'Lettres', 25),
(7, 'Classe C', 'Mathématiques', 35),
(8, 'Classe D', 'Informatique', 40),
(9, 'Classe E', 'Physique', 20);

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id_cours` int(11) NOT NULL,
  `nom_cours` varchar(150) NOT NULL,
  `desc_cours` text NOT NULL,
  `id_prof` varchar(30) NOT NULL,
  `IdClasse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id_cours`, `nom_cours`, `desc_cours`, `id_prof`, `IdClasse`) VALUES
(7, 'Hl', 'Vsvs', 'P004', 6),
(56, 'EPS', 'Gros', 'P006', 6),
(64, 'maths', 'mathÃ©matiques', 'P006', 5),
(65, 'philosophie', 'Gros', 'P004', 9),
(135, 'PHP', 'PROG BASE', 'P002', 6);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `matricule` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `tel` int(11) NOT NULL,
  `ddn` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`matricule`, `nom`, `prenom`, `sexe`, `tel`, `ddn`) VALUES
('05', 'Ismael ', 'Adamou', 'H', 998646474, '2024-11-13'),
('1432', 'Boubou', 'Fait Wari', 'H', 98543213, '2024-10-28'),
('6', 'Ibrahim Ali ', 'Rahinatou ', 'F', 88842204, '2004-09-03'),
('E002', 'Martin', 'Sophie', 'H', 1234567891, '2000-07-14');

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE `professeur` (
  `id_prof` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` int(11) NOT NULL,
  `faculte` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`id_prof`, `nom`, `prenom`, `email`, `phone`, `faculte`) VALUES
('P002', 'Omar', 'Draken', 'marie.martin@example.com', 1234567891, 'FST'),
('P0021', 'Martin', 'Sophie', 'sophie.martin@example.com', 2147483647, 'Lettres'),
('P0031', 'Moreau', 'Luc', 'luc.moreau@example.com', 2147483647, 'Informatique'),
('P004', 'Omar', 'Draken', 'elise.petit@example.com', 1234567893, 'CHARIA'),
('P0041', 'Petit', 'Marie', 'marie.petit@example.com', 2147483647, 'Médecine'),
('P0051', 'Durand', 'Paul', 'paul.durand@example.com', 2147483647, 'Mathématiques'),
('P006', 'Moustapha', 'Seydou', 'camille.gauthier@example.com', 1234567895, 'FESA'),
('P0061', 'Lefevre', 'Julie', 'julie.lefevre@example.com', 2147483647, 'Physique'),
('P0071', 'Roux', 'Marc', 'marc.roux@example.com', 2147483647, 'Chimie'),
('P008', 'Dupont', 'Jean', 'jean.dupont@example.com', 1234567890, 'Sciences'),
('P0081', 'Faure', 'Emma', 'emma.faure@example.com', 2147483647, 'Droit'),
('P0091', 'Blanc', 'Pierre', 'pierre.blanc@example.com', 2147483647, 'Informatique'),
('P0101', 'Garnier', 'Lucie', 'lucie.garnier@example.com', 1234509876, 'Mathématiques'),
('P0111', 'Morin', 'Nathalie', 'nathalie.morin@example.com', 2147483647, 'Médecine'),
('P0121', 'Perrin', 'Alexandre', 'alexandre.perrin@example.com', 2147483647, 'Sciences'),
('P0131', 'Renaud', 'Isabelle', 'isabelle.renaud@example.com', 2147483647, 'Chimie'),
('P0141', 'Clement', 'Jacques', 'jacques.clement@example.com', 2147483647, 'Lettres'),
('P0151', 'Gauthier', 'Elise', 'elise.gauthier@example.com', 2147483647, 'Droit'),
('P0161', 'Dumont', 'Julien', 'julien.dumont@example.com', 2147483647, 'Sciences'),
('P0171', 'Gonzalez', 'Sonia', 'sonia.gonzalez@example.com', 2147483647, 'Informatique'),
('P0181', 'Lucas', 'Tom', 'tom.lucas@example.com', 2147483647, 'Physique'),
('P0191', 'Brun', 'Claire', 'claire.brun@example.com', 1234098765, 'Mathématiques'),
('P0201', 'Marchand', 'Laura', 'laura.marchand@example.com', 2147483647, 'Médecine'),
('P0211', 'Lemoine', 'Pauline', 'pauline.lemoine@example.com', 2147483647, 'Sciences'),
('P0221', 'Aubert', 'Fabien', 'fabien.aubert@example.com', 2147483647, 'Lettres'),
('P0231', 'Muller', 'Chloe', 'chloe.muller@example.com', 2147483647, 'Chimie'),
('P0241', 'Bernard', 'Antoine', 'antoine.bernard@example.com', 2147483647, 'Droit'),
('P0251', 'Roy', 'Valerie', 'valerie.roy@example.com', 2147483647, 'Informatique');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `email`, `password`, `nom`) VALUES
(13, 'midoukarima69@gmail.com', '$2y$10$7Q/A2/rtujrAB0rZLuAPfOwnrVebqLKht0MifejTiEEl/1xMR0i4S', 'karima'),
(11, 'rahinatou@gmail.com', '$2y$10$DL8JVLMxJxyldxu9lwe6H.GfJL1MHq.uoyfi/XUAkwCvHqF7XBO.u', 'Ibrahim Ali imane'),
(10, 'ayinatouprogrammeuse2.0@gmail.com', '$2y$10$PkacCYyOfHSMiK9IfBiUweWiGeRe6r.US9PiIDWPTNf.K6GrR4/TC', 'Ibrahim Ali Rahinatou '),
(5, 'moustapha@qwiper.com', '$2y$10$U6rQc7W9slZyupyfIRjyieGnGNvrHwBXMxy0Phiz.FsNo8UAz9p5i', 'kennedy'),
(9, 'ibrahimalirahinatoub7@gmail.com', '$2y$10$htFSiVsK5.Q69JEdgAjfKucrqMgbomJeNHXTbFO2ZjuDUEzsOg4VO', 'Ibrahim Ali Rahinatou '),
(17, 'limane.amadoui@gmail.com', '$2y$10$VazAUiLOyYfXlBeWVkaWjuT0vj8NVZMkm4TYQUc1N3aKz0sdbNFjC', 'Limane'),
(12, 'karimamaiko0@gmail.com', '$2y$10$5S7wiiqOVKpE4DA6uf/X0eKaSyszWPlXwC/AfjkttzyyvU3BnVKvC', 'karima'),
(18, 'mahamadoumarouhamadouf05@gmail.com', '$2y$10$n1tChIAZdUFUYYU0Fb1LxuFFyreNHfAHMwpkzRl586SrZrZEiNe9q', 'Marouf');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`IdClasse`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id_cours`),
  ADD KEY `id_prof` (`id_prof`),
  ADD KEY `IdClasse` (`IdClasse`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`matricule`);

--
-- Index pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`id_prof`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `classe`
--
ALTER TABLE `classe`
  MODIFY `IdClasse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id_cours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`IdClasse`) REFERENCES `classe` (`IdClasse`),
  ADD CONSTRAINT `cours_ibfk_2` FOREIGN KEY (`id_prof`) REFERENCES `professeur` (`id_prof`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
