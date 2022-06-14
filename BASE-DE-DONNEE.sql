-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 14 juin 2022 à 13:26
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `composition_projet`
--

CREATE TABLE `composition_projet` (
  `id_projet` int(11) NOT NULL,
  `id_language` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `composition_projet`
--

INSERT INTO `composition_projet` (`id_projet`, `id_language`) VALUES
(2, 1),
(4, 1),
(5, 1),
(7, 1),
(9, 1),
(10, 1),
(12, 1),
(5, 2),
(9, 2),
(12, 2),
(8, 3),
(12, 3),
(1, 4),
(3, 4),
(6, 4),
(11, 4);

-- --------------------------------------------------------

--
-- Structure de la table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `language`
--

INSERT INTO `language` (`id`, `nom`) VALUES
(1, 'php'),
(2, 'symfony'),
(3, 'angular'),
(4, 'autres');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `couverture` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `forindex` int(11) DEFAULT NULL,
  `content` longtext NOT NULL,
  `language_use` varchar(255) DEFAULT NULL,
  `git_lien` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `nom`, `date`, `pdf`, `image`, `couverture`, `categorie`, `forindex`, `content`, `language_use`, `git_lien`) VALUES
(1, 'Projet Karaté', '2021', 'pdf/projet_karate-2021.pdf', 'projet_karate-2021.png', 'projet_karate-2021.png', 'Scolaire', 0, '                        <p>Le projet karaté va permettre à la ligue De Lorraine de Karaté d\'organiser tout au long de l\'année des compétitions de «Kata» dans les différents clubs qui lui sont affiliés et de numériser l\'ensemble des informations pour une gestion plus simple et rapide. Cette application sera compatible avec Windows et reliée à une base de données.</p>\r\n                        <br />\r\n                        <h3>Ma mission</h3>\r\n                        <ul class=\"list-group\">\r\n                            <li class=\"list-item\">Inscription d\'un membre à une compétition</li>\r\n                            <li class=\"list-item\">La modification et la suppression d’une inscription d’un membre à une compétition à partir d’un formulaire</li>\r\n                            <li class=\"list-item\">Affichage des résultats d’une compétition donnée</li>\r\n                            <li class=\"list-item\">Affichage de la liste des jurys d\'une compétition</li>\r\n                            <li class=\"list-item\">Mise à jour de la note globale obtenue par chaque compétiteur</li>\r\n                        </ul>\r\n                        <br />\r\n                        <h3>Jeux d\'essais</h3>\r\n                        <div class=\"row\">\r\n                            <div class=\"class col-6\">\r\n                                <img src=\"./img/images/karate_1.png\" class=\"img-thumbnail\" alt>\r\n                            </div>\r\n                            <div class=\"class col-6\">\r\n                                <img src=\"./img/images/karate_2.png\" class=\"img-thumbnail\" alt>\r\n                            </div>\r\n\r\n                        </div>\r\n                        <br />\r\n                        <div class=\"alert alert-primary\" role=\"alert\">\r\n                            <p>Vous pouvez retrouver la documentation technique en cliquant sur l\'icon PDF.&nbsp;</p>\r\n                        </div>', 'VB.NET', NULL),
(2, 'Gestion des arbitres', '2021', 'pdf/projet_gestion_des_arbitres_2021.pdf', 'projet_gestion_des_arbitres_2021.png', 'projet_gestion_des_arbitres_2021.png', 'Scolaire', 0, '                        <p>Le responsable de la ligue de Basket-ball de Lorraine désire informatiser la gestion des arbitrages des matchs des différents week-ends. Ce site sera compatible avec tous les navigateurs et adaptable en fonction de la taille de l\'écran grâce a Bootstrap.  </p>                         <br />                         <h3>Ma mission</h3>                         <ul class=\"list-group\">                             <li class=\"list-item\">Permettre la création d\'un championnat</li>                             <li class=\"list-item\">La modification et la suppression d’un championnat</li>                             <li class=\"list-item\">Création d’un match et sa supression</li>                             <li class=\"list-item\">Permettre la modification des arbitres désignés pour prendre en main un match</li>                         </ul>                         <br />                         <h3>Jeux d\'essais</h3>                          <video controls width=\"100%\">                             <source width=\"480\" src=\"video/basketball.mp4\" type=\"video/mp4\">                             Sorry, your browser doesn\'t support embedded videos.                         </video>                         <br />                         <div class=\"alert alert-primary\" role=\"alert\">                             <p>Vous pouvez retrouver la documentation technique en cliquant sur l\'icon PDF.&nbsp;</p>                         </div>', 'PHP MVC', NULL),
(3, 'Messagerie Java', '2021', 'pdf/projet_messagerie_2021.pdf', 'projet_messagerie_java_2021.png', 'projet_messagerie_java_2021.png', 'Scolaire', 0, '                         <p>L\'entreprise IsTisNot souhaite développer une messagerie interne, celle-ci doit pouvoir utiliser une base de données MySQL. Le langage de programmation qui a été choisi est le langage Java. L\'objectif est de mettre en œuvre un connecteur permettant de directement agir avec le serveur de la base de données MySQL et ce grâce à l\'API JDBC.                          </p>                         <br />                         <h3>Ma mission</h3>                         <ul class=\"list-group\">                             <li class=\"list-item\">Permettre de voir les messages</li>                             <li class=\"list-item\">Permettre d\'envoyer un message</li>                             <li class=\"list-item\">Permettre de supprimer un message</li>                             <li class=\"list-item\">Permettre de répondre à un message</li>                         </ul>                         <br />                         <h3>Jeux d\'essais</h3>                         <div class=\"row\">                             <div class=\"col-6\">                                 <img src=\"img/images/messagerie_1.png\" alt=\"...\" class=\"img-thumbnail\">                             </div>                             <br />                             <div class=\"col-6\">                                 <img src=\"img/images/messagerie_2.png\" alt=\"...\" class=\"img-thumbnail\">                             </div>                         </div>                         <br />                         <img src=\"img/images/messagerie_3.png\" alt=\"...\" class=\"img-thumbnail\">                         <br />                         <br />                         <img src=\"img/images/messagerie_4.png\" alt=\"...\" class=\"img-thumbnail\">                         <br />                         <br />                         <div class=\"alert alert-primary\" role=\"alert\">                             <p>Vous pouvez retrouver la documentation technique en cliquant sur l\'icon PDF.&nbsp;</p>                         </div>', 'Java', NULL),
(4, 'Projet Anabase', '2022', 'pdf/projet_anabase_2021.pdf', 'projet_anabase_mvc_2022.png', 'projet_anabase_mvc_2022.png', 'Scolaire', 0, '                         <p>La maison des ligues de Lorraine organise en collaboration avec les autres régions françaises le congrès ANABASE. Ce site sera compatible avec tous les navigateurs et adaptable en fonction de la taille de l\'écran grâce a Bootstrap.</p>                         <br />                         <h3>Ma mission</h3>                         <ul class=\"list-group\">                             <li class=\"list-item\"> Permettre la création, la modification, la suppression d’un congressiste</li>                             <li class=\"list-item\">Obtenir la liste des congressistes</li>                             <li class=\"list-item\">L\'envoie d\'un mail automatiquement lors de l\'ajout d\'un congressiste</li>                             <li class=\"list-item\">Permettre de réaliser la liste des congressistes triée par ordre alphabétique</li>                         </ul>                         <br />                         <h3>Jeux d\'essais</h3>                          <video controls width=\"100%\">                             <source width=\"480\" src=\"video/anabase.mp4\" type=\"video/mp4\">                             Sorry, your browser doesn\'t support embedded videos.                         </video>                         <br />                         <div class=\"alert alert-primary\" role=\"alert\">                             <p>Vous pouvez retrouver la documentation technique en cliquant sur l\'icon PDF.&nbsp;</p>                         </div>', 'PHP MVC jQuery Ajax', NULL),
(5, 'Le P\'tit jardinier', '2022', 'pdf/projet_ptit_jardinier_2022.pdf', 'projet_le_ptit_jardinier_2022.png', 'projet_le_ptit_jardinier_2022.png', 'Scolaire', 0, '                         <p>Cet atelier professionnel a pour but de réaliser une application web, à l’aide du Framework PHP Symfony. Cette application reprend le contexte d’un site de jardinerie, qui doit permettre de pourvoir créer des devis avec un ou plusieurs taillages de haies dans le même devis. </p> <br />                         <h3>Ma mission</h3>                         <ul class=\"list-group\">                             <li class=\"list-item\">Gestion des devis : créer un devis : choix parmi différentes haies, saisi des dimensions : crée une facture avec le détail des prix.</li>                             <li class=\"list-item\">Gestion des haies et catégories : recherche/ajout/modification/suppression</li>                             <li class=\"list-item\">Gestion des clients : recherche/ajout/modification/suppression des clients</li>                         </ul> <br />                         <h3>Jeux d\'essais</h3> <video controls width=\"100%\">                             <source width=\"480\" src=\"video/ptitjardinier.mp4\" type=\"video/mp4\"> Sorry, your browser doesn\'t support embedded videos.                         </video> <br />                         <div class=\"alert alert-primary\" role=\"alert\">                             <p>Vous pouvez retrouver la documentation technique en cliquant sur l\'icon PDF.&nbsp;</p>                         </div>', 'Symfony PHP', NULL),
(6, 'Portes Ouvertes !', '2022', '', 'projet_android_studio_2022.png', 'projet_android_studio_2022.png', 'Scolaire', 1, ' <p>L\'école de commerce ComSupEco organise une journée portes-ouvertes une fois par an afin de faire découvrir l\'école et ses enseignements. <br /><br />  Une fois les portes ouvertes réalisées, le secrétariat envoie à chaque visiteur un dossier d\'inscription. <br /><br />  Pour cela le directeur veut développer une application exécutable sur smartphone capable de noter les informations sur les visiteurs le jour des portes-ouvertes.</p>                         <h3>Ma mission</h3>                         <ul class=\"list-group\">                             <li class=\"list-item\">Créer un nouveau visiteur</li>                             <li class=\"list-item\">Permettre la visualisation des visiteurs</li>                             <li class=\"list-item\">Créer un système de notation des visiteurs par le directeur</li>                             <li class=\"list-item\">Sytème de filtrage : spinner</li>                             <li class=\"list-item\">Permettre le contact du visiteur</li>                          </ul> <br />                         <h3>Jeux d\'essais</h3> <video controls width=\"40%\">                             <source width=\"480\" src=\"video/portesouvertes.mp4\" type=\"video/mp4\"> Sorry, your browser doesn\'t support embedded videos.                         </video> <br />', 'JAVA AndroidStudio', NULL),
(7, 'Club Photo', '2021', '', 'projet_club_photo_2021.png', 'projet_club_photo_2021.png', 'Scolaire', 1, '<p>Le site du Club Photo de Limoges.                             <br />                             On souhaite créer une interface d\'administration des photos du site. Le thème est un choix personnel : l\'art naif.                             <br /><br />                         <h3>Ma mission</h3>                         <ul class=\"list-group\">                             <li class=\"list-item\">Crée un site attractif</li>                             <li class=\"list-item\">Visualisation des oeuvres</li>                             <li class=\"list-item\">Permettre la visualisation d\'une oeuvre</li>                             <li class=\"list-item\">Ajout d\'une oeuvre</li>                          </ul> <br />                         <h3>Jeux d\'essais</h3> <video controls width=\"100%\">                             <source width=\"480\" src=\"video/clubdesamis.mp4\" type=\"video/mp4\"> Sorry, your browser doesn\'t support embedded videos.                         </video> <br />', 'PHP CSS SQL', NULL),
(8, 'Projet SBG', '2022', '', 'projet_sbg_2022.png', 'projet_sbg_2022.png', 'Scolaire', 0, '                        <p>                         L\'activité commerciale d\'un laboratoire pharmaceutique est principalement réalisée par les visiteurs médicaux. En effet, un médicament remboursé par la sécurité sociale n’est jamais vendu directement au consommateur mais prescrit au patient par son médecin. Toute communication publicitaire sur les médicaments remboursés est d\'ailleurs interdite par la loi. Il est donc important, pour l’industrie pharmaceutique, de promouvoir ses produits directement auprès des praticiens.                         </p>                          <br />                         <h3>Ma mission</h3>                         <ul class=\"list-group\">                             <li class=\"list-item\">Le routage, la gestion d’un menu, l’accès aux données, notion de service</li>                             <li class=\"list-item\">La gestion des médecins, notion de directive</li>                             <li class=\"list-item\">La gestion des rapports, ajout d\'un nouveau rapport</li>                          </ul> <br />', 'Angular API', NULL),
(9, 'Sadem Articles', '2022', 'pdf/stage_sadem_2022.pdf', 'stage_sadem_2022.png', 'stage_sadem_2022.png', 'Stage', 1, '<p>Sadem Group : Stage                             <br />                             Ce projet de stage a été réalisé en 8 semaines au sein du service de communication et                             informatique en qualité de stagiaire en développement web (début 2022). Il m\'a été chargé de                             rechercher et développer la meilleure option pour implanter un gestionnaire de contenu (headless                             CMS) au sein des applications e-commerces de l\'entreprise. <br /><br />                         <h3>Ma mission</h3>                         <ul class=\"list-group\">                             <li class=\"list-item\">Rechercher et développer la meilleure solution pour implanter un gestionnaire de contenu</li>                             <li class=\"list-item\">Mettre en place la solution : Wordpress</li>                             <li class=\"list-item\">Crée une application Symfony (back : admin et front : visiteur) pour récupérer les articles et les gérer</li>                             <li class=\"list-item\">Utiliser l\'api de Wordpress pour transférer les articles</li>                             <li class=\"list-item\">Crée une extension Wordpress afin de modifier la reponse API</li>                             <li class=\"list-item\">Crée un thème Wordpress Wordpress afin de modifier la reponse API</li>                           </ul> <br />                         <h3>Jeux d\'essais</h3> <video controls width=\"100%\">                             <source width=\"480\" src=\"video/sademgroup.mp4\" type=\"video/mp4\"> Sorry, your browser doesn\'t support embedded videos.                         </video> <br />                          <div class=\"alert alert-primary\" role=\"alert\">Vous pouvez retrouver la documentation technique en cliquant sur l\'icone PDF. </div>', 'Symfony Wordpress API', NULL),
(10, 'DeadAdele', '2021', 'pdf/stage_restaurant_2021.pdf', 'stage_restaurant_2021.png', 'stage_restaurant_2021.png', 'Stage', 1, '                         <p>DeadAdele : Stage                             <br />                             Ce projet de stage a été réalisé en 5 semaines au sein du lycée Jean Monnet à Limoges.                              Le but était de réaliser une application de gestion de la boutique des ventes à emporter.<br /><br />                         <h3>Ma mission</h3>                         <ul class=\"list-group\">                             <li class=\"list-item\">Crée une application de gestion de stock (DLC, quantité, prix, congélateur....)</li>                             <li class=\"list-item\">Crée un système de composition de plat (composition, quantité, contenant, prix...)</li>                             <li class=\"list-item\">Création d\'un client, modification, suppression</li>                             <li class=\"list-item\">Géré les bilans de vente periodique</li>                             <li class=\"list-item\">Crée une vente et une facture imprimable</li>                          </ul> <br />                         <h3>Jeux d\'essais</h3> <video controls width=\"100%\">                             <source width=\"480\" src=\"video/deadadele.mp4\" type=\"video/mp4\"> Sorry, your browser doesn\'t support embedded videos.                         </video> <br />                          <div class=\"alert alert-primary\" role=\"alert\">Vous pouvez retrouver la documentation technique en cliquant sur l\'icone PDF. </div>', 'PHP SQL MVC', NULL),
(11, 'La ruche connectée', '2019', 'pdf/projet_ruche_co.pptx', 'term_ruche_connectee.png', 'term_ruche_connectee.png', 'Scolaire', 1, '                        <p> Depuis quelques années, la population d\'abeilles est en très forte diminution, avec une disparition totale sur certaines zones. Ce phénomène porte le nom de « Syndrome d\'effondrement des colonies d\'abeilles » ou CCD (Colony Collapse Disorder) : subitement, les ruches se vident de leurs abeilles sans que l’on ne retrouve aucun cadavre à proximité. Ce syndrome est très préoccupant en raison de l\'importance écologique de l\'abeille en tant que pollinisatrice. <br /><br /> Les études en cours montrent que plusieurs causes sont responsables de cette disparition progressive : traitements pesticides, infections parasitaires, maladies, pollution, réduction de la ressource alimentaire (quantité et diversité des fleurs fournissant nectar et pollen) et des habitats, compétition avec des espèces invasives, changement climatique, multiplication des émissions électromagnétiques, nouveaux prédateurs... <br /> <br /> Les conséquences sont terribles, seules 25 % des cultures ne dépendent pas de l\'action des insectes pollinisateurs (les céréales par exemple). On estime à 153 milliards d\'euros par an l\'apport mondial de l\'action pollinisatrice des insectes. Nous sommes confrontés à la perspective d\'une perte économique de grande envergure, mais aussi d\'une perte écologique majeure, les insectes ne jouant pas dans les écosystèmes le seul rôle de porteurs de pollen mais s\'inscrivant dans de multiples chaînes d\'interactions utiles -sinon indispensables-aux divers maillons en présence. <br /> <br /> <img src=\"img/images/mcd_ruche_presentation.png\" class=\"rounded mx-auto d-block\" width=\"80%\" alt=\"...\"> <br /><br />                         <h3>Ma mission</h3>                         <ul class=\"list-group\">                             <li class=\"list-item\">Mesurer le poids de la ruche et dimensionner une alimentation solaire</li>                             <li class=\"list-item\">Mesurer la température et l’hygrométrie, localiser la ruche</li>                             <li class=\"list-item\">Communiquer les valeurs par SMS périodiquement et alerter par SMS en cas de défaut température ou défaut batterie</li>                         </ul> <br />                         <h3>Quelques images de la réalisation</h3>                         <div class=\"row\">                             <div class=\"col-12 my-3\"><img src=\"img/images/mcd_ruche_connecte_1.jpg\" class=\"img-thumbnail\" alt=\"...\"></div>                             <div class=\"col-6 my-3\"><img src=\"img/images/mcd_ruche_connecte_2.1.jpg\" class=\"img-thumbnail\" alt=\"...\"></div>                             <div class=\"col-6 my-3\"><img src=\"img/images/mcd_ruche_connecte_2.jpg\" class=\"img-thumbnail\" alt=\"...\"></div>                             <div class=\"col-3 my-3\"><img src=\"img/images/mcd_ruche_connecte_3.1.jpg\" class=\"img-thumbnail\" alt=\"...\"></div>                             <div class=\"col-4 my-3\"><img src=\"img/images/mcd_ruche_connecte_3.2.jpg\" class=\"img-thumbnail\" alt=\"...\"></div>                             <div class=\"col-4 my-3\"><img src=\"img/images/mcd_ruche_connecte_3.jpg\" class=\"img-thumbnail\" alt=\"...\"></div>                             <div class=\"col-4 my-3\"><img src=\"img/images/mcd_ruche_connecte_f.jpg\" class=\"img-thumbnail\" alt=\"...\"></div>                             <div class=\"col-7 my-3\"><img src=\"img/images/mcd_ruche_connecte_interco.png\" class=\"img-thumbnail\" alt=\"...\"></div>                         </div>                         <br />                         <div class=\"alert alert-success\" role=\"alert\">Nous avons participé et décroché le premier prix du développement durable à l\'olympiade des métiers.</div> <!-- ICI -->                         <br />                          <h3>Le PowerPoint</h3> <video controls width=\"100%\">                             <source width=\"480\" src=\"video/projet_ruche_co.mp4\" type=\"video/mp4\"> Sorry, your browser doesn\'t support embedded videos.                         </video> <br />                         <div class=\"alert alert-primary\" role=\"alert\">Vous pouvez retrouver le Powerpoint en cliquant sur l\'icone PDF. </div> <!-- ICI -->', 'Arduino, C', NULL),
(12, 'TeeLife', 'En cours...', '', 'projet_teelife.png', 'projet_teelife.png', 'Personnel', 1, '                         <p>                             TeeLife est un jeu de simulation de vie navigateur.<br />                             Dans TeeLife vous incarnez un personnage virtuel, ce personnage va devoir se débrouiller tout seul dans la vie. Il peut se nourrir, fonder une famille, passer des études, avoir un métier, faire de la politique ou du journalisme et même tomber dans l\'illégalité.                         </p>                          <br />                         <h3>Ma mission</h3>                         <ul class=\"list-group\">                             <li class=\"list-item\">Crée une API Symfony pouvant gérer des demandes</li>                             <li class=\"list-item\">Crée une application Angular : gestion d\'un personnage, de magasin, de rayon, de produit, de facture, et de paiement</li>                          </ul> <br />                         <div class=\"alert alert-danger\" role=\"alert\">Ce projet est en cours de réalisation, les fonctionnalités sont donc limitées !</div>                         <br />                          <h3>Jeux d\'essais</h3> <video controls width=\"100%\">                             <source width=\"480\" src=\"video/projet_teelife.mp4\" type=\"video/mp4\"> Sorry, your browser doesn\'t support embedded videos.                         </video> <br />', 'Angular Symfony\r\nJavascript', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `composition_projet`
--
ALTER TABLE `composition_projet`
  ADD PRIMARY KEY (`id_projet`,`id_language`),
  ADD KEY `id_language` (`id_language`);

--
-- Index pour la table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
