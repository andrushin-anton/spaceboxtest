-- Server version: 5.5.37-log
-- PHP Version: 5.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spaceboxtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `is_in_place` smallint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `is_in_place`) VALUES
(1, 'Maud Zemlak', 1),
(2, 'Audie Yundt Sr.', 1),
(3, 'Jerrell Dickens Sr.', 0),
(4, 'Robert Kub', 1),
(5, 'Eladio Flatley', 0),
(6, 'Dr. Sheldon Maggio', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers_groups`
--

DROP TABLE IF EXISTS `customers_groups`;
CREATE TABLE IF NOT EXISTS `customers_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `customers_groups`
--

INSERT INTO `customers_groups` (`id`, `customer_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 2, 3),
(5, 3, 3),
(6, 3, 4),
(7, 4, 4),
(8, 4, 5),
(9, 5, 5),
(10, 5, 6),
(11, 6, 6),
(12, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customers_skills`
--

DROP TABLE IF EXISTS `customers_skills`;
CREATE TABLE IF NOT EXISTS `customers_skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`),
  KEY `skill_id` (`skill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `customers_skills`
--

INSERT INTO `customers_skills` (`id`, `customer_id`, `skill_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 4),
(6, 2, 5),
(7, 2, 5),
(8, 2, 6),
(9, 3, 7),
(10, 3, 8),
(11, 3, 9),
(12, 4, 10),
(13, 4, 11),
(14, 4, 4),
(15, 5, 12),
(16, 5, 13),
(17, 5, 14),
(18, 5, 5),
(19, 6, 3),
(20, 6, 5),
(21, 6, 10),
(22, 6, 8);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'API'),
(2, 'Administration'),
(3, 'Databases'),
(4, 'Security'),
(5, 'Design'),
(6, 'Programing');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`) VALUES
(1, 'Adobe Photoshop'),
(2, 'Graphic design'),
(3, 'Html5'),
(4, 'CCS3'),
(5, 'PHP'),
(6, 'Python'),
(7, 'NodeJs'),
(8, 'ASP.NET MVC'),
(9, 'MySQL'),
(10, 'PostgreSQL'),
(11, 'Administrative suppurt'),
(12, 'bash'),
(13, 'Amazon Services'),
(14, 'Microsoft Azure');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers_groups`
--
ALTER TABLE `customers_groups`
  ADD CONSTRAINT `customers_groups_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `customers_groups_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customers_skills`
--
ALTER TABLE `customers_skills`
  ADD CONSTRAINT `customers_skills_ibfk_2` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `customers_skills_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
