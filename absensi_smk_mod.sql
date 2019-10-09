-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.40-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table absensi_smk_db.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID_USER` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_USER` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `USERNAME` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `PASSWORD` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `STATUS_USER` enum('A','T') COLLATE latin1_general_ci NOT NULL DEFAULT 'A',
  `LEVEL_USER` enum('ADMIN','BK','GURU') COLLATE latin1_general_ci NOT NULL DEFAULT 'BK',
  `ID_GURU` int(11) DEFAULT NULL,
  `LAST_LOGIN` datetime DEFAULT NULL,
  `LAST_LOGOUT` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_USER`),
  UNIQUE KEY `USERNAME` (`USERNAME`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Dumping data for table absensi_smk_db.users: ~0 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`ID_USER`, `NAMA_USER`, `USERNAME`, `PASSWORD`, `STATUS_USER`, `LEVEL_USER`, `ID_GURU`, `LAST_LOGIN`, `LAST_LOGOUT`) VALUES
	(1, 'ADMIN', 'ADMIN', '73acd9a5972130b75066c82595a1fae3', 'A', 'ADMIN', 1, '2019-10-08 22:20:20', '2019-10-07 11:42:55');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
