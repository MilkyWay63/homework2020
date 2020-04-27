-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.10-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table fullstack.employees: 12 rows
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` (`ID`, `ename`, `surname`, `salary`) VALUES
	(1, 'Arnas', 'Sausis', 200),
	(2, 'Tomas', 'Vasaris', 300),
	(3, 'Vytaytas', 'Kovas', 320),
	(4, 'Algis', 'Balandis', 280),
	(5, 'Inga', 'Gegužė', 350),
	(6, 'Jonas', 'Birželis', 380),
	(7, 'Saulė', 'Liepa', 420),
	(8, 'Evanas', 'Rugpjūtis', 390),
	(9, 'Rytis', 'Rugsėjis', 500),
	(10, 'Vienas', 'Antras', 500),
	(11, 'Antanas', 'Smetona', 700),
	(43, 'Romas', 'Antras', 600);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
