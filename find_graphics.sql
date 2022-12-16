-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1:3306
-- Genereringstid: 15. 12 2022 kl. 08:05:28
-- Serverversion: 5.7.36
-- PHP-version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `find_graphics`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `mmdkunde`
--

DROP TABLE IF EXISTS `mmdkunde`;
CREATE TABLE IF NOT EXISTS `mmdkunde` (
  `mmdKundeId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mmdKundeNavn` varchar(100) COLLATE utf16_danish_ci NOT NULL,
  `mmdKundeEfternavn` varchar(100) COLLATE utf16_danish_ci NOT NULL,
  `mmdKundeEmail` varchar(100) COLLATE utf16_danish_ci DEFAULT NULL,
  `mmdKundePassword` varchar(100) COLLATE utf16_danish_ci DEFAULT NULL,
  `mmdKundeCVR` varchar(100) COLLATE utf16_danish_ci DEFAULT NULL,
  `mmdKundeTitel` varchar(100) COLLATE utf16_danish_ci DEFAULT NULL,
  `mmdKundeTLF` varchar(100) COLLATE utf16_danish_ci DEFAULT NULL,
  `mmdKundeBevis` varchar(100) COLLATE utf16_danish_ci DEFAULT NULL,
  `mmdKundeProfilPic` varchar(100) CHARACTER SET utf8 COLLATE utf8_danish_ci DEFAULT NULL,
  `mmdKundeVideo` varchar(100) COLLATE utf16_danish_ci DEFAULT NULL,
  `mmdKundeTag1` varchar(100) COLLATE utf16_danish_ci DEFAULT NULL,
  `mmdKundeTag2` varchar(100) COLLATE utf16_danish_ci DEFAULT NULL,
  `mmdKundeTag3` varchar(100) COLLATE utf16_danish_ci DEFAULT NULL,
  `mmdKundeBio` text COLLATE utf16_danish_ci,
  PRIMARY KEY (`mmdKundeId`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf16 COLLATE=utf16_danish_ci;

--
-- Data dump for tabellen `mmdkunde`
--

INSERT INTO `mmdkunde` (`mmdKundeId`, `mmdKundeNavn`, `mmdKundeEfternavn`, `mmdKundeEmail`, `mmdKundePassword`, `mmdKundeCVR`, `mmdKundeTitel`, `mmdKundeTLF`, `mmdKundeBevis`, `mmdKundeProfilPic`, `mmdKundeVideo`, `mmdKundeTag1`, `mmdKundeTag2`, `mmdKundeTag3`, `mmdKundeBio`) VALUES
(17, 'T.', 'Magnum', 'magnum_pi@gmail.com', 'peepeee56765', '57896565', 'Webudvikler', '43 56 78 90', 'Ff8KPgKXgBIocvM.jpg', 'magnum_pi.jpg', 'Im From A R I Z O N A.mp4', 'Fotograf', 'Front-End', 'Back-End', '<p>Thomas Sullivan Magnum IV&nbsp;is a former U.S. Navy SEAL and now licensed Private Investigator. He also works for Robin Masters as a live-in security consultant.</p>'),
(16, 'Sid', 'Goojwin', 'Sid@gmail.com', '4576464hgg', '45454545', 'Logo Designer', '34 45 46 51', '200.gif', 'IMG_0355.jpg', 'By the way youre gay.mp4', 'Designer', 'Logo', 'SoMe', '<p>Sid er multimediedesigner og har et stort speciale indenfor logodesign. Han har gennem flere år, arbejdet meget med design og organisering af projekter.</p>'),
(15, 'Christian', '', 'chr@gmail.com', '5939220440', '10203040', 'Animator', '23 43 23 34', 'crying.jpg', 'IMG_0334.jpg', 'Hell\'s Kitchen I thought cold water was supposed to boil faster than hot water.mp4', 'Animation', 'Motion Design', 'Teamleader', '<p>Hej, jeg er Christian, dejligt at møde dig!\r\n\r\nJeg er studerende på Zealand som Multimediedesigner. Jeg er en designer som elsker at bringe humor og hårdt arbejde ind i mine projekter, og finder sjældent ikke nogen opgaven for stor.</p>'),
(19, 'Lionel', 'Messi', 'messi@gmail.com', 'goat1234', '23432343', 'Animator', '45 54 45 54', 'Ff8KPgKXgBIocvM.jpg', 'MessiGoat.jpg', 'Im From A R I Z O N A.mp4', 'Animation', 'Front-End', 'SoMe', '<p>Lionel Andrés Messi (født d. 24. juni 1987) er en argentinsk professionel fodboldspiller, som spiller for Ligue 1-klubben Paris Saint-Germain og Argentinas landshold.</p>'),
(18, 'Sigurd', 'Dam', 'Damsigurd@hotmail.com', '34443343434', '10203040', 'Webudvikler', '27 21 10 52', 'FWqXnKwWAAUx96f.jpg', 'sigurd2-3.jpg', 'By the way youre gay.mp4', 'Webudvikler', 'Front-End', 'Back-End', '<p>Jeg hedder Sigurd Arnsdorf Dam og er 21 år gammel. Til dagligt er jeg i gang med at uddanne mig som Multimediedesigner i Nykøbing F. Jeg har tidligere gået på HTX i Vordingborg og blev student i 2020.\r\n\r\nJeg har har altid været meget begejstret for teknologi og udviklingen i verdenen. </p>'),
(24, 'Arnold', 'S.', 'arnie@gmail.com', '34344rretf', '10899843', 'Logo Designer', '27 21 10 52', '4a84il.png', '1436320725509.jpg', 'James May says cheese..mp4', 'Designer', 'Front-End', 'SoMe', '<p>Arnold Alois Schwarzenegger er en &oslash;strigskf&oslash;dt amerikansk republikansk politiker, samt tidligere bodybuilder og skuespiller, der opn&aring;ede verdensber&oslash;mmelse som hovedrolleindehaver i en r&aelig;kke Hollywood-actionfilm, blandt andre Terminator, Commando og Total Recall. Arnold har vundet den meget prestigefulde Mr.Olympia.</p>'),
(20, 'Cristiano', 'R.', 'siuuu@gmail.com', 'jfjjpoefpefj', '3489439', 'SoMe Ansvarlig', '54 89 09 68', 'Ff8KPgKXgBIocvM.jpg', 'Siuuu.jpg', 'By the way youre gay.mp4', 'Animation', 'Motion Design', 'Teamleader', '<p>Cristiano Ronaldo dos Santos Aveiro er en portugisisk fodboldspiller, der i &oslash;jeblikket er klubl&oslash;s, samtidig med han spiller for det portugisiske fodboldlandshold. Han er indehaver af rekorden, som mest scorende fodboldspiller nogensinde.</p>'),
(21, 'Steve', 'McQueen', 'Steve@gmail.com', '348437ddg', '45454545', 'Fotograf', '43 35 23 52', 'Batman Profil.PNG', 'stevemcqueen.jpg', 'By the way youre gay.mp4', 'Animation', 'Motion Design', 'SoMe', '<p>Steve McQueen var en Oscar-nomineret amerikansk filmskuespiller. Hans \"antihelt\"-attitude gjorde ham til en af de mest popul&aelig;re og h&oslash;jst betalte skuespillere i 1960\'erne og 1970\'erne.</p>'),
(22, 'Roger', 'Moore', '007@gmail.com', '0073643hfe', '45454545', 'Animator', '45 54 45 54', 'Ff8KPgKXgBIocvM.jpg', 'rogermoore.jpg', 'By the way youre gay.mp4', 'Webudvikler', 'Front-End', 'Back-End', '<p>Sir Roger George Moore var en engelsk skuespiller, mest kendt for sine roller som britisk action helte: f&oslash;rst som Simon Templar i tv-serien Helgenen 1962 &ndash; 1969, s&aring; i De uheldige helte fra 1971, hvor han spillede sammen med Tony Curtis, og siden i rollen som James Bond i &aring;rene 1973 &ndash; 1985.</p>'),
(23, 'Harrison', 'Ford', 'harrisonford@gmail.com', '', '12345412', 'Fotograf', '23 43 23 34', 'crying.jpg', 'harrison.jpeg', 'Im From A R I Z O N A.mp4', 'Animation', 'Motion Design', 'SoMe', '<p>Harrison Ford er en amerikansk skuespiller. Ford slog igennem 1977 i rollen som Han Solo i Star Wars. Det virkelige store gennembrud kom dog som Indiana Jones i Jagten p&aring; den forsvundne skat, 1981. Han arbejdede f&oslash;rst som snedker og kom ved at bygge kulisser i kontakt med Hollywood.</p>'),
(25, 'Al', 'Pacino', 'alpacino@gmail.com', '34eijfeoi3', '57896565', 'Programmør', '45 54 45 54', 'fetchimage.jpg', 'alpacino.webp', 'uL5nHZ1gI5ILx4B6.mp4', 'Front-End', 'Motion Design', 'Back-End', '<p>Alfredo James \"Al\" Pacino er en amerikansk film- og teaterskuespiller. Han er bedst kendt for sin rolle som Michael Corleone i de tre Godfather-film, samt for filmene En sk&aelig;v eftermiddag, Scarface, Fanget af fortiden, Serpico og Heat.</p>'),
(26, 'Clint', 'Eastwood', 'clinteastwood@gmail.com', '3uih3f8f38f', '10899843', 'SoMe Ansvarlig', '43 56 78 90', 'Ff8KPgKXgBIocvM.jpg', 'clint eastwood.webp', 'Meanwhile... SpongeBob Time Card 90.mp4', 'Designer', 'Motion Design', 'SoMe', '<p>Clint Eastwood, f. 31.5.1930, amerikansk skuespiller og instruktør. Clint Eastwood er via små biroller og bl.a. tv-serien Rawhide (1959-66) blevet en stor stjerne i barske actionfilm, samtidig med at han har opnået en position som et af amerikansk films mest respekterede navne.</p>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
