-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 24 Juin 2014 à 08:16
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `projetweb`
--
CREATE DATABASE IF NOT EXISTS `projetweb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projetweb`;

-- --------------------------------------------------------

--
-- Structure de la table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `IDADDRESS` int(11) NOT NULL AUTO_INCREMENT,
  `IDADDRESSTYPE` int(11) NOT NULL,
  `NAME` longtext,
  `ADDRESS` longtext,
  `ZIPCODE` int(11) DEFAULT NULL,
  `CITY` longtext,
  PRIMARY KEY (`IDADDRESS`),
  KEY `FK_ADDRESS_USETO_ADDRESST` (`IDADDRESSTYPE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `address`
--

INSERT INTO `address` (`IDADDRESS`, `IDADDRESSTYPE`, `NAME`, `ADDRESS`, `ZIPCODE`, `CITY`) VALUES
(1, 1, 'home', '10 british avenue', 33580, 'London'),
(2, 2, 'professional', '75 wall street', 30308, 'Georgia'),
(3, 2, 'home', '99 kings highway', 19903, 'Florida'),
(4, 1, 'professional', '59 state house station', 48913, 'Texas');

-- --------------------------------------------------------

--
-- Structure de la table `addresstype`
--

CREATE TABLE IF NOT EXISTS `addresstype` (
  `IDADDRESSTYPE` int(11) NOT NULL AUTO_INCREMENT,
  `ADDRESSTYPE` longtext,
  PRIMARY KEY (`IDADDRESSTYPE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `addresstype`
--

INSERT INTO `addresstype` (`IDADDRESSTYPE`, `ADDRESSTYPE`) VALUES
(1, 'Invoice'),
(2, 'delivery');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDTVA` varchar(10) NOT NULL,
  `IDKINDARTICLE` int(11) NOT NULL,
  `IDSTATEARTICLE` int(11) NOT NULL,
  `REFERENCE` longtext,
  `NAME` longtext,
  `PRICEHT` double DEFAULT NULL,
  `DESCRIBE` longtext,
  `STOCK` int(11) DEFAULT NULL,
  `REALISEDATE` date DEFAULT NULL,
  `ARTIST_REALISATOR` longtext,
  `RECORDLABEL_STUDIO` longtext,
  `THRESHOLD` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_ARTICLE_AVALAIBLE_STATEART` (`IDSTATEARTICLE`),
  KEY `FK_ARTICLE_SORT_KINDARTI` (`IDKINDARTICLE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`ID`, `IDTVA`, `IDKINDARTICLE`, `IDSTATEARTICLE`, `REFERENCE`, `NAME`, `PRICEHT`, `DESCRIBE`, `STOCK`, `REALISEDATE`, `ARTIST_REALISATOR`, `RECORDLABEL_STUDIO`, `THRESHOLD`) VALUES
(1, '1', 1, 2, '123abc', 'Ghost stories', 5, 'Ghost Stories is the 6 th studio album by English group who sees them return to a more streamlined look compared to their previous album the very pop.', 6, '2014-05-05', 'Coldplay', 'Concombre', 3),
(2, '1', 1, 1, '456aze', 'Girl', 22, 'Just like the title says, Pharrell chose to talk about girls in his album! A 15-second teaser is available on his Instagram. "Happy", the single from the soundtrack of the film "Moi moche et mechant 2" became the essential moment of the tube, the single is now number 1 in 12 countries and was number one at least once in 175 countries.', 1, '2014-05-12', 'Pharrell Wiliams', 'carotte', 3),
(3, '1', 1, 2, '154fsf', 'Hotel California', 7, 'TYGA is back with a new album "Hotel California", a year after the release of his first album "Careless World" which won a great success across the Atlantic. He is back with this new album for several singles which have already been sent.', 10, '2013-04-15', 'Tyga', 'Traw', 3),
(4, '1', 2, 3, '265cds', 'Eyjafjallajökull (Le volcan)', 10, 'For world travelers, the eruption of the Icelandic volcano Eyjafjallajökull is a blow. Alain and Valérie is a disaster. As to arrive on time in the small town of Greece where married their daughter, the couple divorced, which is dedicated to each other a boundless hatred, will be led by force things to hit the road together.', 15, '0000-00-00', 'Dany Boon', 'souris', 3);

-- --------------------------------------------------------

--
-- Structure de la table `autorization`
--

CREATE TABLE IF NOT EXISTS `autorization` (
  `IDAUTORIZATION` int(11) NOT NULL AUTO_INCREMENT,
  `AUTORIZATION` longtext,
  PRIMARY KEY (`IDAUTORIZATION`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `autorization`
--

INSERT INTO `autorization` (`IDAUTORIZATION`, `AUTORIZATION`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Structure de la table `become`
--

CREATE TABLE IF NOT EXISTS `become` (
  `ID` int(11) NOT NULL,
  `IDORDER` int(11) NOT NULL,
  `QUANTITY` int(11) DEFAULT NULL,
  `PRICEHT` double DEFAULT NULL,
  `TVA` double DEFAULT NULL,
  PRIMARY KEY (`ID`,`IDORDER`),
  KEY `FK_BECOME_BECOME2_ORDER` (`IDORDER`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `become`
--

INSERT INTO `become` (`ID`, `IDORDER`, `QUANTITY`, `PRICEHT`, `TVA`) VALUES
(1, 1, 1, 5, 0.196),
(2, 2, 1, 22, 0.196),
(3, 3, 1, 7, 0.196);

-- --------------------------------------------------------

--
-- Structure de la table `have`
--

CREATE TABLE IF NOT EXISTS `have` (
  `IDMEMBER` int(11) NOT NULL,
  `IDADRESS` int(11) NOT NULL,
  PRIMARY KEY (`IDMEMBER`,`IDADRESS`),
  KEY `FK_HAVE_HAVE2_ADDRESS` (`IDADRESS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `have`
--

INSERT INTO `have` (`IDMEMBER`, `IDADRESS`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `kindarticle`
--

CREATE TABLE IF NOT EXISTS `kindarticle` (
  `IDKINDARTICLE` int(11) NOT NULL AUTO_INCREMENT,
  `KINDS` longtext,
  PRIMARY KEY (`IDKINDARTICLE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `kindarticle`
--

INSERT INTO `kindarticle` (`IDKINDARTICLE`, `KINDS`) VALUES
(1, 'Cd'),
(2, 'Dvd');

-- --------------------------------------------------------

--
-- Structure de la table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `IDMEMBER` int(11) NOT NULL AUTO_INCREMENT,
  `IDAUTORIZATION` int(11) NOT NULL DEFAULT '2',
  `LASTNAME` longtext,
  `FIRSTNAME` longtext,
  `PASSWORD` longtext,
  `EMAIL` longtext,
  `BIRTHDAY` date DEFAULT NULL,
  PRIMARY KEY (`IDMEMBER`),
  KEY `FK_MEMBER_ABILITIES_AUTORIZA` (`IDAUTORIZATION`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `member`
--

INSERT INTO `member` (`IDMEMBER`, `IDAUTORIZATION`, `LASTNAME`, `FIRSTNAME`, `PASSWORD`, `EMAIL`, `BIRTHDAY`) VALUES
(1, 1, 'Boon', 'Mathieu', 'cesiexia', 'mathieu.boon@yahoo.fr', '1985-05-18'),
(2, 2, 'Toto', 'Titi', 'informatique', 'toto.titi@yahoo.fr', '1975-12-20'),
(3, 2, 'tata', 'pauline', 'cours1', 'pauline.tata@yahoo.fr', '1995-12-25'),
(4, 1, 'voiture', 'manu', 'blanquefort', 'manu.voiture@yahoo.fr', '1989-01-07'),
(17, 2, 'foufou', 'gerome', 'coucou', 'nana@hein.ko', '2014-06-24');

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `IDORDER` int(11) NOT NULL AUTO_INCREMENT,
  `IDADRESS` int(11) NOT NULL,
  `IDSTATE` int(11) NOT NULL,
  `IDMEMBER` int(11) NOT NULL,
  `ADD_IDADRESS` int(11) NOT NULL,
  `DATE` datetime DEFAULT NULL,
  PRIMARY KEY (`IDORDER`),
  KEY `FK_ORDER_IS_STATE` (`IDSTATE`),
  KEY `FK_ORDER_MAKE_MEMBER` (`IDMEMBER`),
  KEY `FK_ORDER_SENTTO1_ADDRESS` (`ADD_IDADRESS`),
  KEY `FK_ORDER_SENTTO2_ADDRESS` (`IDADRESS`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `order`
--

INSERT INTO `order` (`IDORDER`, `IDADRESS`, `IDSTATE`, `IDMEMBER`, `ADD_IDADRESS`, `DATE`) VALUES
(1, 1, 1, 1, 2, '2013-05-18 00:00:00'),
(2, 2, 2, 2, 4, '2010-10-10 00:00:00'),
(3, 3, 3, 3, 1, '2014-01-01 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `IDSTATE` int(11) NOT NULL AUTO_INCREMENT,
  `STATE` longtext,
  PRIMARY KEY (`IDSTATE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `state`
--

INSERT INTO `state` (`IDSTATE`, `STATE`) VALUES
(1, 'In preparation'),
(2, 'Ready'),
(3, 'Sent');

-- --------------------------------------------------------

--
-- Structure de la table `statearticle`
--

CREATE TABLE IF NOT EXISTS `statearticle` (
  `IDSTATEARTICLE` int(11) NOT NULL AUTO_INCREMENT,
  `STATEARTICLE` longtext,
  PRIMARY KEY (`IDSTATEARTICLE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `statearticle`
--

INSERT INTO `statearticle` (`IDSTATEARTICLE`, `STATEARTICLE`) VALUES
(1, 'New'),
(2, 'Available'),
(3, 'Out of stock');

-- --------------------------------------------------------

--
-- Structure de la table `tva`
--

CREATE TABLE IF NOT EXISTS `tva` (
  `IDTVA` int(11) NOT NULL AUTO_INCREMENT,
  `VALUE` double NOT NULL,
  PRIMARY KEY (`IDTVA`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `tva`
--

INSERT INTO `tva` (`IDTVA`, `VALUE`) VALUES
(1, 0.196);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `FK_ADDRESS_USETO_ADDRESST` FOREIGN KEY (`IDADDRESSTYPE`) REFERENCES `addresstype` (`IDADDRESSTYPE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_ARTICLE_AVALAIBLE_STATEART` FOREIGN KEY (`IDSTATEARTICLE`) REFERENCES `statearticle` (`IDSTATEARTICLE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_ARTICLE_SORT_KINDARTI` FOREIGN KEY (`IDKINDARTICLE`) REFERENCES `kindarticle` (`IDKINDARTICLE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `become`
--
ALTER TABLE `become`
  ADD CONSTRAINT `FK_BECOME_BECOME2_ORDER` FOREIGN KEY (`IDORDER`) REFERENCES `order` (`IDORDER`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_BECOME_BECOME_ARTICLE` FOREIGN KEY (`ID`) REFERENCES `article` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `have`
--
ALTER TABLE `have`
  ADD CONSTRAINT `FK_HAVE_HAVE2_ADDRESS` FOREIGN KEY (`IDADRESS`) REFERENCES `address` (`IDADDRESS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_HAVE_HAVE_MEMBER` FOREIGN KEY (`IDMEMBER`) REFERENCES `member` (`IDMEMBER`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `FK_MEMBER_ABILITIES_AUTORIZA` FOREIGN KEY (`IDAUTORIZATION`) REFERENCES `autorization` (`IDAUTORIZATION`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_ORDER_IS_STATE` FOREIGN KEY (`IDSTATE`) REFERENCES `state` (`IDSTATE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_ORDER_MAKE_MEMBER` FOREIGN KEY (`IDMEMBER`) REFERENCES `member` (`IDMEMBER`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_ORDER_SENTTO1_ADDRESS` FOREIGN KEY (`ADD_IDADRESS`) REFERENCES `address` (`IDADDRESS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_ORDER_SENTTO2_ADDRESS` FOREIGN KEY (`IDADRESS`) REFERENCES `address` (`IDADDRESS`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
