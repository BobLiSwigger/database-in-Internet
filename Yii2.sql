-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        10.4.12-MariaDB - mariadb.org binary distribution
-- 服务器OS:                        Win64
-- HeidiSQL 版本:                  10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for yii2
CREATE DATABASE IF NOT EXISTS `yii2` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `yii2`;

-- Dumping structure for table yii2.migration
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii2.migration: ~3 rows (大约)
DELETE FROM `migration`;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` (`version`, `apply_time`) VALUES
	('m000000_000000_base', 1587731518),
	('m130524_201442_init', 1587731536),
	('m190124_110200_add_verification_token_column_to_user_table', 1587731536);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;

-- Dumping structure for table yii2.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table yii2.user: ~2 rows (大约)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
	(1, 'admin', '5x87_d9zQ2fPNvtBar4fnRQDtUQjHaLT', '$2y$13$OglFm09U8KiYupouw/KmcenCAp2BkU.849dqEl0vuZA47MZdO8/J6', NULL, 'BobLi_Swigger@outlook.com', 10, 1587732625, 1587732625, '9ATKa9Al6tQFC49VHoGcjk4rwkILUq_U_1587732625'),
	(2, 'test001', 'rKzIg4VHqzBTkMUVT9ukIIVBFj5lc7hd', '$2y$13$vcmlH4mtBOpiVGCLViy73.Bf9C3RfM8sFCLpQllEjk6jNxByRKnza', NULL, 'test001@test.com', 10, 1587733011, 1587733011, 'W33CPh-SLyMMWW-4tsExD9BlQQE2HpyV_1587733011');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
CREATE USER 'Yii2admin'@'%' IDENTIFIED by '123456';
GRANT ALL on Yii2.* to 'Yii2admin'@'%';
FLUSH PRIVILEGES;
