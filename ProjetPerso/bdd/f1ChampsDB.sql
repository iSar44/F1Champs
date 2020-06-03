-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 02, 2020 at 12:45 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `CRUD`
--

-- --------------------------------------------------------

--
-- Table structure for table `f1Champs`
--

CREATE TABLE `f1Champs` (
  `idAnnee` int(11) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `paysOrigine` varchar(30) NOT NULL,
  `annee` int(4) NOT NULL,
  `constructeur` varchar(50) NOT NULL,
  `pneu` varchar(40) NOT NULL,
  `chassis` varchar(60) NOT NULL,
  `moteur` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f1Champs`
--

INSERT INTO `f1Champs` (`idAnnee`, `prenom`, `nom`, `paysOrigine`, `annee`, `constructeur`, `pneu`, `chassis`, `moteur`) VALUES
(1, 'Giuseppe', 'Farina', 'Italie', 1950, 'Alfa Romeo', 'Pirelli', 'Alfa Romeo 158', 'Alfa Romeo 158 L8 C'),
(2, 'Juan Manuel', 'Fangio', 'Argentine', 1951, 'Alfa Romeo', 'Pirelli', 'Alfa Romeo 159', 'Alfa Romeo 159 L8'),
(3, 'Alberto ', 'Ascari', 'Italie', 1952, 'Ferrari', 'Pirelli', 'Ferrari 500 F2', 'Ferrari Lampredi 2.0 L4'),
(4, 'Alberto', 'Ascari', 'Italie', 1953, 'Ferrari', 'Pirelli', 'Ferrari 500 F2', 'Ferrari Lampredi 2.0 L4'),
(5, 'Juan Manuel', 'Fangio', 'Argentine', 1954, 'Officine Alfieri Maserati / Daimler-Benz AG', 'Pirelli', 'Maserati 250F / Mercedes-Benz W196', 'Maserati 250F 2.5 L6 / Mercedes M196 2.5 L8'),
(6, 'Juan Manuel', 'Fangio', 'Argentine', 1955, 'Daimler-Benz AG', 'Continental', 'Mercedes-Benz W196', 'Mercedes M196 2.5 L8'),
(7, 'Juan Manuel', 'Fangio', 'Argentine', 1956, 'Ferrari', 'Englebert', 'Ferrari D50', 'Lancia DS50 2.5 V8'),
(8, 'Juan Manuel', 'Fangio', 'Argentine', 1957, 'Officine Alfieri Maserati', 'Pirelli', 'Maserati 250F Tipo 2', 'Maserati 250F 2.5 V12'),
(9, 'Mike', 'Hawthorn', 'Royaume-Uni', 1958, 'Ferrari', 'Englebert', 'Ferrari D246', 'Ferrari Dino 2.5 V6'),
(10, 'Jack', 'Brabham', 'Australie', 1959, 'Cooper Car Company', 'Dunlop', 'Cooper T51', 'Climax L4'),
(11, 'Jack', 'Brabham', 'Australie', 1960, 'Cooper Car Company', 'Dunlop', 'Cooper T51/T53', 'Climax L4'),
(12, 'Phil', 'Hill', 'Etats-Uni', 1961, 'Ferrari', 'Dunlop', 'Ferrari 156', 'Ferrari 1.5 V6 (Type 178)'),
(13, 'Graham', 'Hill', 'Royaume-Uni', 1962, 'British Racing Motors', 'Dunlop', 'BRM P57', 'BRM V8'),
(14, 'Jim', 'Clark', 'Royaume-Uni', 1963, 'Team Lotus', 'Dunlop', 'Lotus 25', 'Climax FWMV V8'),
(15, 'John', 'Surtees', 'Royaume-Uni', 1964, 'Ferrari', 'Dunlop', 'Ferrari 158', 'Ferrari 205B V8'),
(16, 'Jim', 'Clark', 'Royaume-Uni', 1965, 'Team Lotus', 'Dunlop', 'Lotus 25 / Lotus 33', 'Climax FWMV V8'),
(17, 'Jack', 'Brabham', 'Australie', 1966, 'Brabham Racing Organisation', 'Goodyear', 'BT19', 'Repco 620 3.0 V8 '),
(18, 'Denny', 'Hulme', 'Nouvelle-Zélande', 1967, 'Brabham Racing Organisation', 'Goodyear', 'BT20 / BT24', 'Repco 740 3.0 V8'),
(19, 'Graham', 'Hill', 'Royaume-Uni', 1968, 'Gold Leaf Team Lotus', 'Firestone', 'Lotus 49 / 49B', 'Ford-Cosworth DFV 3.0 V8'),
(20, 'Jackie', 'Stewart', 'Royaume-Uni', 1969, 'Matra International', 'Dunlop', 'MS80', 'Ford-Cosworth DFV 3.0 V8'),
(21, 'Jochen', 'Rindt', 'Autriche', 1970, 'Gold Leaf Team Lotus', 'Firestone', 'Lotus 49C / 72C', 'Ford-Cosworth DFV 3.0 V8'),
(22, 'Jackie', 'Stewart', 'Royaume-Uni', 1971, 'Elf Team Tyrrell', 'Goodyear', 'Tyrrell 001 / 002 / 003', 'Ford-Cosworth DFV 3.0 V8'),
(23, 'Emerson', 'Fittipaldi', 'Brésil', 1972, 'Gold Leaf Team Lotus', 'Firestone', 'Lotus 72D', 'Ford-Cosworth DFV 3.0 V8'),
(24, 'Jackie', 'Stewart', 'Royaume-Uni', 1973, 'Elf Team Tyrrell', 'Goodyear', 'Tyrrell 006 / 007', 'Ford-Cosworth DFV 3.0 V8'),
(25, 'Emerson', 'Fittipaldi', 'Brésil', 1974, 'Marlboro Team Texaco ', 'Goodyear', 'McLaren M23', 'Ford-Cosworth DFV 3.0 V8'),
(26, 'Niki', 'Lauda', 'Autriche', 1975, 'Ferrari', 'Goodyear', 'Ferrari 312 T', 'Ferrari 015 3.0 V12'),
(27, 'James', 'Hunt', 'Royaume-Uni', 1976, 'Marlboro Team McLaren', 'Goodyear', 'McLaren M23', 'Ford-Cosworth DFV 3.0 V8'),
(28, 'Niki', 'Lauda', 'Autriche', 1977, 'Ferrari', 'Goodyear', 'Ferrari 312 T2', 'Ferrari 015 3.0 V12'),
(29, 'Mario', 'Andretti', 'Etats-Uni', 1978, 'John Player Team Lotus', 'Goodyear', 'Lotus 78 / 79', 'Ford-Cosworth DFV 3.0 V8'),
(30, 'Jody', 'Scheckter', 'Afrique du Sud', 1979, 'Ferrari', 'Michelin', 'Ferrari 312 T3 / T4', 'Ferrari 015 3.0 V12'),
(31, 'Alan', 'Jones', 'Australie', 1980, 'Williams Grand Prix Engineering', 'Goodyear', 'FW07 / FW07B', 'Ford-Cosworth DFV 3.0 V8'),
(32, 'Nelson', 'Piquet', 'Brésil', 1981, 'Parmalat Racing Brabham', 'Goodyear / Michelin', 'BT49/C/D', 'Ford-Cosworth DFV 3.0 V8'),
(33, 'Keke', 'Rosberg', 'Finlande', 1982, 'TAG Williams Team', 'Goodyear', 'FW08', 'Ford-Cosworth DFV 3.0 V8'),
(34, 'Nelson', 'Piquet', 'Brésil', 1983, 'Fila Sport Brabham BMW', 'Michelin', 'BT52/B', 'BMW M12/13 Turbo 1.5 4L'),
(35, 'Niki', 'Lauda', 'Autriche', 1984, 'Marlboro McLaren International', 'Michelin', 'MP4/2', 'TAG-Porsche TTE PO1 1.5 V6 Turbo'),
(36, 'Alain', 'Prost', 'France', 1985, 'Marlboro McLaren International', 'Goodyear', 'MP4/2B', 'TAG-Porsche TTE PO1 1.5 V6 Turbo'),
(37, 'Alain', 'Prost', 'France', 1986, 'Marlboro McLaren International', 'Goodyear', 'MP4/2C', 'TAG-Porsche TTE PO1 1.5 V6 Turbo'),
(38, 'Nelson', 'Piquet', 'Brésil', 1987, 'Canon Williams Honda Team', 'Goodyear', 'FW11B', 'Honda RA167-E 1.5 V6 Turbo'),
(39, 'Ayrton', 'Senna', 'Brésil', 1988, 'McLaren-Honda', 'Goodyear', 'MP4/4', 'Honda RA168-E 1.5 V6 Turbo'),
(40, 'Alain', 'Prost', 'France', 1989, 'McLaren-Honda', 'Goodyear', 'MP4/5', 'Honda RA109-E 3.5 V10 NA'),
(41, 'Ayrton', 'Senna', 'Brésil', 1990, 'McLaren-Honda', 'Goodyear', 'MP4/5B', 'Honda RA100-E 3.5 V10 NA'),
(42, 'Ayrton', 'Senna', 'Brésil', 1991, 'McLaren-Honda', 'Goodyear', 'MP4/6', 'Honda RA121-E 3.5 V12 NA'),
(43, 'Nigel', 'Mansell', 'Royaume-Uni', 1992, 'Williams-Renault', 'Goodyear', 'FW14B', 'Renault RS4 3.5 V10 NA'),
(44, 'Alain', 'Prost', 'France', 1993, 'Williams-Renault', 'Goodyear', 'FW15C', 'Renault RS5 3.5 V10 NA'),
(45, 'Michael', 'Schumacher', 'Allemagne', 1994, 'Benetton-Ford', 'Goodyear', 'B194', 'Ford EC Zetec-R 3.5 V8 NA'),
(46, 'Michael', 'Schumacher', 'Allemagne', 1995, 'Benetton-Renault', 'Goodyear', 'B195', 'Renault RS7 3.0 V10 NA'),
(47, 'Damon', 'Hill', 'Royaume-Uni', 1996, 'Williams-Renault', 'Goodyear', 'FW18', 'Renault RS8 3.0 V10 NA'),
(48, 'Jacques', 'Villeneuve', 'Canada', 1997, 'Williams-Renault', 'Goodyear', 'FW19', 'Renault RS9 3.0 V10 NA'),
(49, 'Mika', 'Häkkinen', 'Finlande', 1998, 'McLaren-Mercedes', 'Bridgestone', 'MP4/13', 'Mercedes FO110G V10 NA'),
(50, 'Mika', 'Häkkinen', 'Finlande', 1999, 'McLaren-Mercedes', 'Bridgestone', 'MP4/14', 'Mercedes FO110H V10'),
(51, 'Michael', 'Schumacher', 'Allemagne', 2000, 'Ferrari', 'Bridgestone', 'F1-2000', 'Ferrari Tipo 049 3.0 V10 NA'),
(52, 'Michael', 'Schumacher', 'Allemagne', 2001, 'Ferrari', 'Bridgestone', 'F2001', 'Ferrari Tipo 050 3.0 V10 NA'),
(53, 'Michael', 'Schumacher', 'Allemagne', 2002, 'Ferrari', 'Bridgestone', 'F2002', 'Ferrari Tipo 051/B/C 3.0 V10 NA'),
(54, 'Michael', 'Schumacher', 'Allemagne', 2003, 'Ferrari', 'Bridgestone', 'F2003-GA', 'Ferrari Tipo 052 3.0 V10 NA'),
(55, 'Michael', 'Schumacher', 'Allemagne', 2004, 'Ferrari', 'Bridgestone', 'F2004', 'Ferrari Tipo 053 3.0 V10 NA'),
(56, 'Fernando', 'Alonso', 'Espagne', 2005, 'Renault', 'Michelin', 'R25', 'Renault RS25 3.0 V10 NA'),
(57, 'Fernando', 'Alonso', 'Espagne', 2006, 'Renault', 'Michelin', 'R26', 'Renault RS26 2.4 V8 NA'),
(58, 'Kimi', 'Raïkkönen', 'Finlande', 2007, 'Ferrari', 'Bridgestone', 'F2007', 'Ferrari 056 2.4 V8 NA'),
(59, 'Lewis', 'Hamilton', 'Royaume-Uni', 2008, 'McLaren-Mercedes', 'Bridgestone', 'MP4-23', 'Mercedes FO108V 2.4 V8 NA'),
(60, 'Jenson', 'Button', 'Royaume-Uni', 2009, 'Brawn-Mercedes', 'Bridgestone', 'BGP 001', 'Mercedes FO108W 2.4 V8 NA'),
(61, 'Sebastian', 'Vettel', 'Allemagne', 2010, 'Red Bull Renault', 'Bridgestone', 'RB6', 'Renault RS27-2010 2.4 V8 NA'),
(62, 'Sebastian', 'Vettel', 'Allemagne', 2011, 'Red Bull Renault', 'Pirelli', 'RB7', 'Renault RS27-2011 2.4 V8 NA w/ KERS'),
(63, 'Sebastian', 'Vettel', 'Allemagne', 2012, 'Red Bull Renault', 'Pirelli', 'RB8', 'Renault RS27-2012 2.4 V8 NA w/ KERS'),
(64, 'Sebastian', 'Vettel', 'Allemagne', 2013, 'Red Bull Renault', 'Pirelli', 'RB9', 'Renault RS27-2013 2.4 V8 NA w/ KERS'),
(65, 'Lewis', 'Hamilton', 'Royaume-Uni', 2014, 'Mercedes AMG Petronas F1 Team', 'Pirelli', 'W05', 'Mercedes PU106A Hybrid 1.6 V6 Turbo'),
(66, 'Lewis', 'Hamilton', 'Royaume-Uni', 2015, 'Mercedes AMG Petronas F1 Team', 'Pirelli', 'W06', 'Mercedes PU106B Hybrid 1.6 V6 Turbo'),
(67, 'Nico', 'Rosberg', 'Allemagne', 2016, 'Mercedes AMG Petronas F1 Team', 'Pirelli', 'W07', 'Mercedes PU106C Hybrid 1.6 V6 Turbo'),
(68, 'Lewis', 'Hamilton', 'Royaume-Uni', 2017, 'Mercedes AMG Petronas F1 Team', 'Pirelli', 'W08', 'Mercedes M08 EQ Power+ 1.6 V6 Turbo'),
(69, 'Lewis', 'Hamilton', 'Royaume-Uni', 2018, 'Mercedes AMG Petronas F1 Team', 'Pirelli', 'W09', 'Mercedes M09 EQ Power+ 1.6 V6 Turbo'),
(70, 'Lewis', 'Hamilton', 'Royaume-Uni', 2019, 'Mercedes AMG Petronas F1 Team', 'Pirelli', 'W10', 'Mercedes M10 EQ Power+ 1.6 V6 Turbo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `f1Champs`
--
ALTER TABLE `f1Champs`
  ADD PRIMARY KEY (`idAnnee`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `f1Champs`
--
ALTER TABLE `f1Champs`
  MODIFY `idAnnee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;