-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 20 mars 2019 à 13:40
-- Version du serveur :  8.0.15
-- Version de PHP :  7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `trombino`
--

-- --------------------------------------------------------

--
-- Structure de la table `wilder`
--

CREATE TABLE `wilder` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `cursus` varchar(100) NOT NULL,
  `github` varchar(255) NOT NULL,
  `presentation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `wilder`
--

INSERT INTO `wilder` (`id`, `firstname`, `lastname`, `birthday`, `email`, `cursus`, `github`, `presentation`) VALUES
(1, 'Bertrand', 'Seguinotte', '1985-01-01', 'b.seguinotte@hotmail.fr', 'JS', 'B3b3r', ''),
(2, 'Geoffrey', 'Bedle', '1988-01-01', 'geoffrey.bedle@gmail.com', 'PHP', 'jef933', ''),
(3, 'Malika', 'Celadon', '1982-01-01', 'poupimali@gmail.com', 'PHP', 'Poupimali', ''),
(4, 'Chris', 'Fradet', '1993-01-01', 'chris.fradet.fac@gmail.com', 'JS', 'Masta2000', ''),
(5, 'Christian', 'Hinge', '1989-01-01', 'christian.hinge@gmail.com', 'JS', 'DanishDude', ''),
(6, 'Martin', 'Peubey', '1995-01-01', 'martin.peubey@gmail.com', 'JS', 'martinioluis', ''),
(7, 'Olivier', 'Bouzaid', '1999-01-01', 'nerdgbx@gmail.com', 'PHP', 'saltyfoxy', ''),
(8, 'Julie', 'Charlemagne', '1995-01-01', 'julie.charlemagne@live.fr', 'JS', 'AoMirai', ''),
(9, 'Martin', 'Hamon', '1996-01-01', 'martinh@outlook.fr', 'JS', 'martinh12', ''),
(10, 'Nicolas', 'Hosteins', '1978-01-01', 'n.hosteins@gmail.com', 'JS', 'Nicoho', ''),
(11, 'Elneris', 'Dang', '1989-11-05', 'elneris.dang@gmail.com', 'PHP', 'elneris', 'Moi c\'est Elnéris, j\'ai 29 ans, d\'origine vietnamienne et je suis en pleine reconversion pro comme vous avez pu le constater !\r\n<br><br>\r\nMais avant, petit retour en arrière :\r\n\r\nJ\'ai fais des études en électrotechnique et reçu mon bac en 2009. Suite à celà, je n\'ai malheureusement pas pu continuer mes études comme je l\'aurai souhaiter. Cependant, aujourd\'hui, je suis bien content d\'avoir suivi ce bac qui me permettre d\'avoir un peu plus de facilité en Algo :p\r\n\r\nPendant l\'année de mon bac, je travaillais déjà en parallèle dans la restauration rapide : Mcdo !\r\n\r\nAprès quelque mois, je suis passé formateur et j\'ai continuez d\'y travailler pendant 2 ans\r\nAustralie\r\n\r\nAprès 2 ans et demi de restauration, j\'ai décidé de partir vivre l\'aventure un an en 2011 en Working Holiday Visa ( plus d\'info \"ici\" ). J\'ai pu vivre une expérience extraordinaire alliant rencontre, découverte et amélioration de mon anglais. J\'ai eu l\'occasion de faire du \"Fruits Picking\", l\'équivalent de nos vendanges, si je vous dis plus de 11 000 euro en 3 mois et demi, me croirez vous ? Eh bien oui, moi même je n\'y croyais pas, mais cela ma permit de vivre mon rêve sans me soucier des finances.\r\n\r\nJ\'en ai bien sur profiter pour faire un tour en Asie, continent de mes origines. J\'ai donc eu la chance de visiter :\r\n\r\n    Singapour\r\n    Bali\r\n    Kuala Lumpur\r\n\r\nRetour en France\r\n\r\nA mon retour en France, ne sachant pas quoi faire,je suis retourné à mcdo. Entre temps j\'ai commencé à faire des vidéos sur Youtube de mes gameplays de jeux vidéo ( lien de ma chaine dans le footer ), et monter ma propre team dans le mode \"ZOMBIES\" de Call of Duty Black Ops. C\'est à ce moment que j\'ai décidé de m\'intéréssé à la création de site internet. Alors a ce moment là, en 2014, je n\'y connaissais absolument rien, c\'est pourquoi nous sommes passé par un cms, vous pouvez voir mon ancien site en cliquant ici, voici une petite vidéo présentation : Vidéo\r\nReconversion\r\n\r\nCoté boulot, j\'ai continue dans la restauration ( japonais , burger king ) jusqu\'en octobre 2018 ou, à 29 ans, je décide de stopper completement apres presque 10 années dans la restauration.\r\n\r\nMon choix c\'est vite tourné vers le déveleppement web, grâce à des connaissances, et ma \"petite\" expèrience de 2014. Je tombe alors sur la Wild Code School qui propose alors une formation intensif de 5 mois au métier de developpeur web et mobile, et sans hésitez je candidate.\r\n\r\nQuelques mois plus tard, me voici au portes de la formation et une nouvelle page de ma vie débute\r\n'),
(12, 'Guillaume', 'Loup', '1987-01-01', 'guillaume.loup@live.fr', 'JS', 'GuillaumeLoup', ''),
(13, 'Florent', 'Duval', '1985-01-01', 'florent3300047@gmail.com', 'PHP', 'Florent330', ''),
(14, 'Jim', 'Achour', '1985-01-01', 'jimmyachour@hotmail.fr', 'PHP', 'jimmyachour', ''),
(15, 'Maxime', 'Vasseur', '1994-01-01', 'maxime.vasseur.79@hotmail.fr', 'PHP', 'Zertexx', ''),
(16, 'Fred', 'Tabbal', '1966-01-01', 'frederic.tabbal@gmail.com', 'JS', 'Freddecarcans', ''),
(17, 'Jan', 'Pesque', '1974-01-01', 'jaspes@orange.fr', 'JS', 'devJanCode', ''),
(18, 'Philippe', 'Bousselier', '1985-01-01', 'bousselier@free.fr', 'JS', 'bahamut21', ''),
(19, 'Yannick', 'Decombes', '1967-01-01', 'yanlechaka@sfr.fr', 'PHP', 'Yannick6633', ''),
(20, 'Flavien', 'Chappe', '1983-01-01', 'charly220v@hotmail.com', 'JS', 'Zorbal33', ''),
(21, 'Adeline', 'Dubosc', '1987-01-01', 'adeline.dubosc@hotmail.fr', 'PHP', 'AdelineDb', ''),
(22, 'Juliette', 'Bousseau', '1995-01-01', 'jul.bousseau@gmail.com', 'PHP', 'Jutmzg', ''),
(23, 'Quentin', 'Jost', '1996-01-01', 'quentinjost@hotmail.com', 'PHP', 'JostQ', ''),
(24, 'Marin', 'Cuville', '1998-01-01', 'mcuville@gmail.com', 'JS', 'Spliit', ''),
(25, 'Arnaud', 'Auzou', '1986-01-01', 'arnaud.auzoudm@gmail.com', 'PHP', 'ArnaudAM', ''),
(26, 'Charlene', 'Marvu', '1994-01-01', 'charlene.mvu@hotmail.fr', 'PHP', 'ChaMvu', ''),
(27, 'Pascal', 'Encinas', '1987-01-01', 'krionari@gmail.com', 'PHP', 'Krionari', ''),
(28, 'Alex', 'Dogoum', '1984-01-01', 'lexhoo@yahoo.fr', 'JS', 'Lexhoo', ''),
(29, 'Anthony', 'Desorbais', '1989-01-01', 'desorbais.anthony@gmail.com', 'JS', 'Anto2441', ''),
(30, 'Audrey', 'Brethome', '1991-01-01', 'audrey.brethome@gmail.com', 'JS', 'zoiaa', ''),
(31, 'Laure', 'Fraysse', '1988-01-01', 'laure.fraysse@gmail.com', 'PHP', 'laurefrs', ''),
(32, 'Araïk', 'Madaryan', '1999-01-01', 'araik.myan@gmail.com', 'JS', 'amyan98', ''),
(33, 'Mathias', 'Tujague', '1980-01-01', 'mathiastujague@gmail.com', 'JS', 'Math80', ''),
(34, 'Pascal', 'Monge', '1960-01-01', 'oenos@free.fr', 'PHP', 'oenos2', ''),
(35, 'Xavier', 'Crochet', '1979-01-01', 'x.crochet@gmail.com', 'PHP', 'GitXavier', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `wilder`
--
ALTER TABLE `wilder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `wilder`
--
ALTER TABLE `wilder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
