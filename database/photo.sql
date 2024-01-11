-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table photo.abouts: ~0 rows (approximately)
INSERT INTO `abouts` (`id`, `name`, `note1`, `note2`, `created_at`, `updated_at`) VALUES
	(1, 'We\'ve retouched', '3,738,282 Photos', 'For corporate & individual clients in over 50 countries', '2023-11-14 19:05:09', '2023-11-14 20:28:59');

-- Dumping data for table photo.admins: ~0 rows (approximately)
INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin@admin.com', NULL, 1, '$2y$10$UzH8iHm935U5gEGEIysZd.dCYU/0UF/20l3p4T3u93KpLKyqZFYw.', 'vu4qKKZkIhhFzW6PYFpf8zRKxnyDP0xrjc8ZoVERPLhi3YwkTzmchQPTGlML', '2023-11-14 19:04:27', '2023-11-14 19:04:27');

-- Dumping data for table photo.advantages: ~8 rows (approximately)
INSERT INTO `advantages` (`id`, `note`, `status`, `created_at`, `updated_at`) VALUES
	(4, 'Color correction', 1, '2023-11-26 23:06:19', '2023-11-26 23:06:19'),
	(5, 'Correct color balance', 1, '2023-11-26 23:06:46', '2023-11-26 23:06:46'),
	(6, 'Whitening teeth', 1, '2023-11-26 23:07:15', '2023-11-26 23:07:15'),
	(7, 'Remove all impurities', 1, '2023-11-26 23:07:43', '2023-11-26 23:07:43'),
	(8, 'Fix blurry photo', 1, '2023-11-26 23:08:21', '2023-11-26 23:08:21'),
	(9, 'HDR retouch', 1, '2023-11-26 23:08:48', '2023-11-26 23:08:48'),
	(10, 'Photo album', 1, '2023-11-26 23:09:14', '2023-11-26 23:09:14'),
	(11, 'Photo flyer', 1, '2023-11-26 23:09:38', '2023-11-26 23:09:38');

-- Dumping data for table photo.blogs: ~2 rows (approximately)
INSERT INTO `blogs` (`id`, `section_id`, `name`, `notes`, `status`, `created_at`, `updated_at`) VALUES
	(1, 2, 'Tre O\'Connell', 'A accusamus exercitationem doloribus fugiat vero doloremque. Dolorum accusantium sit est laboriosam natus. Eligendi sed ut sed earum.', 1, '2023-11-14 19:04:28', '2023-11-14 19:04:28'),
	(2, 2, 'Ms. Mozelle Moen III', 'Deserunt quia natus ducimus laudantium sit sunt quibusdam. Aut praesentium voluptas qui exercitationem libero. Exercitationem ut ea sed id rem. Reprehenderit alias corporis corporis nesciunt.', 1, '2023-11-14 19:04:28', '2023-11-14 19:04:28');

-- Dumping data for table photo.buttons: ~6 rows (approximately)
INSERT INTO `buttons` (`id`, `name`, `type`, `status`, `typePaymernts`, `created_at`, `updated_at`, `url`) VALUES
	(1, 'Try it', 'header', 1, NULL, '2023-11-17 10:52:12', '2023-11-17 10:52:12', NULL),
	(2, 'Get Quote', 'header', 1, NULL, '2023-11-17 10:52:49', '2023-11-17 10:52:49', NULL),
	(3, 'Get Quote', 'service', 1, NULL, '2023-11-17 10:54:25', '2023-11-17 10:54:25', NULL),
	(5, 'PayPal', 'payment', 0, 'paypal', '2023-11-17 10:55:24', '2023-11-19 10:10:19', NULL),
	(8, 'try it', 'service', 1, NULL, '2023-11-18 10:49:22', '2023-11-18 11:08:36', 'www.w3schools.com'),
	(9, '2Checkout', 'payment', 1, 'checkout', '2023-11-18 10:50:13', '2023-11-18 10:50:13', NULL);

-- Dumping data for table photo.comments: ~0 rows (approximately)
INSERT INTO `comments` (`id`, `title`, `body`, `email`, `status`, `created_at`, `updated_at`) VALUES
	(2, 'Deserunt obcaecati e', 'Main Gallery note Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere voluptatibus consequuntur iusto excepturi? Ab qui dolorem consequuntur, sint vitae nam dignissimos, praesentium magnam maiores consectetur nesciunt! Perferendis consequuntur atque suscipit.', 'momoleboq@mailinator.com', 1, '2023-11-14 20:26:14', '2023-11-14 20:26:14');

-- Dumping data for table photo.couples: ~0 rows (approximately)
INSERT INTO `couples` (`id`, `name`, `note`, `created_at`, `updated_at`) VALUES
	(1, 'Couple Photo Gallery', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere voluptatibus consequuntur iusto excepturi? Ab qui dolorem consequuntur, sint vitae nam dignissimos, praesentium magnam maiores consectetur nesciunt! Perferendis consequuntur atque suscipit.', '2023-11-14 20:17:47', '2023-11-14 20:17:47');

-- Dumping data for table photo.examples: ~4 rows (approximately)
INSERT INTO `examples` (`id`, `name`, `type`, `created_at`, `updated_at`) VALUES
	(1, 'Photo Retouch', 'photo_retouch', '2023-11-27 17:17:58', '2023-11-27 17:17:58'),
	(2, 'Photo Album', 'photo_album', '2023-11-27 17:45:17', '2023-11-27 17:45:17'),
	(3, 'Photo Frame', 'photo_frame', '2023-11-27 17:48:36', '2023-11-27 17:48:36'),
	(4, 'Photo Flyer', 'photo_flyer', '2023-11-27 17:51:58', '2023-11-27 17:51:58');

-- Dumping data for table photo.example_images: ~107 rows (approximately)
INSERT INTO `example_images` (`id`, `example_id`, `photo`, `created_at`, `updated_at`) VALUES
	(1, 1, 'aKHp3sdVTo2pPYXfDAz6Lt64tv75miWoxBOsDZQm.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(2, 1, 'lTSILbkDQp7HjVnJzyBs05QAS7LbMj8EYu0IcMIQ.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(3, 1, 'xKZKtEcxCT7FvTmAzDIiFNoxAXJO21SXvv790KLA.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(4, 1, 'I73VQX1NAREECOHkxrLP1rPDEupmfPqqDLKkdz38.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(5, 1, '36DiwGp9m44lxPezIcdY4Yaff8YEcSH6KkSfte5k.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(6, 1, 'KU5u046Tvzp6rw0Cgm8P4T1CZbV3MExvgmimxJcG.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(7, 1, 'LDvbekonJE4qPXhIqM3NWwDBzaF7lQzLh7n8ACnB.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(8, 1, 'nkMvjF5gSocBQ3yDCjRax6thNcjc8W5A3grQTxYi.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(9, 1, 'SXs0fXw7WM038TE6vRRmyzxOaNvY5jRteWWqmvFv.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(10, 1, 'LPQdFnexZ9cfcs1pWNdxaLFHEZfXZtI3F8O0iW1P.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(11, 1, 'dJ8LnQ97Un73HbGPj8vOzTaaFD0PCxClMJbMOXLK.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(12, 1, 'ooTVFfr1Am9PLHvwDH8NlpDhFXBwHdcZ0IdD1ayT.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(13, 1, 'DThjnP194EKPJJvjepIwIdeRZBVeicQdPxGta19S.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(14, 1, 'BZZORsdk9FdwQBecDxBIjRD93QC4uZxILazdYRRV.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(15, 1, 'BJKd7yQNiqv3uBnPaKtkGLtOzid5hXO6AdEh0kay.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(16, 1, '1KCssBhonkxOp57a6WHEgdipa7NqG3ZMZYxKnRDM.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(17, 1, 'Fz31S2YYVlrQofKciR8rXiEvfuAEex9BTt1fHLM4.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(18, 1, '96b8pIbJvwW4cvzxUHg18ef3lu9cqVX1nYb3fjGv.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(19, 1, 'ovgMMNFDyQJJ2fvnX1Mtvw2bEVQN903h6PSGhJwB.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(20, 1, 'Y5TaNufIehbKly2Pe4cgtUoTnygKy8JFxKONnuTt.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(21, 1, 'xkVHXens0XOkYruQJnbgfGRBy9QoAMb4SIInh96r.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(22, 1, '8EHZWJcjTvkByn6mQeW5bGaFO2eOKieHXcTtp4QI.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(23, 1, 'MAuEV2nSm9P9gKnnC3wGN123NkgLhpPICiaBOa4w.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(24, 1, 'uWgxO71QgUPA9fHDjla4APJLcyVvrKjIMIY2SEQ6.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(25, 1, '60gkDpFrt8dfGdHD9Sn3Nor8eR3eEX6FhvUBI5BT.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(26, 1, 'SjRCyrkrPywJfLTAH5N0Ps0DjWmMmaLt6NyKXWDj.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(27, 1, 'uw4FEDUGhZjeaGjLMTrQ9HbSGC788Jg18Ord1Wnu.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(28, 1, 'wErrFVjgLEjt92ArnD7TafG88m0KuUrclIXQUpdq.jpg', '2023-11-27 17:25:52', '2023-11-27 17:25:52'),
	(29, 2, 'lrhrJuwU40piXlJBuqG0coW9KpwlNvq68O8ZUrCH.jpg', '2023-11-27 17:46:18', '2023-11-27 17:46:18'),
	(30, 2, 'a4FtLCQDwhg5vJeUVebjqAbmooHx7PZsoPTYwgIM.jpg', '2023-11-27 17:46:18', '2023-11-27 17:46:18'),
	(31, 2, 'eTDa4LXOaJ7F7YAbfwABqEL0gnHouS5uOrCxuRo0.jpg', '2023-11-27 17:46:18', '2023-11-27 17:46:18'),
	(32, 2, 'qkwZhvixdIHYaXubppA22THIJCNQl6S0zlmnEZHZ.jpg', '2023-11-27 17:46:18', '2023-11-27 17:46:18'),
	(33, 2, 'N0gOdRjl1qsA7RPlE3SyL2xJ5qghuBGo6UizYSU8.jpg', '2023-11-27 17:46:18', '2023-11-27 17:46:18'),
	(34, 2, 'K0EBxxSQEyCZMCWM3IEJNB5hNLGxC1XdKfg8876e.jpg', '2023-11-27 17:46:18', '2023-11-27 17:46:18'),
	(35, 2, 'GqnOlzswT4ktJuaOplfsNBn2Q94w4U8fq4zUepqc.jpg', '2023-11-27 17:46:18', '2023-11-27 17:46:18'),
	(36, 2, 'FBTgILrxMCdT9k9I8z3An2sCIjNkJxbfa14ZCE5f.jpg', '2023-11-27 17:46:18', '2023-11-27 17:46:18'),
	(37, 2, 'BYvfslSOISGOzsiFgEWL6LEbRPWyG5eh8nGqdCew.jpg', '2023-11-27 17:46:18', '2023-11-27 17:46:18'),
	(38, 2, 'sK0xXbqMMVflH43QJbTJ3G71KLjRqJX9cgrsfagv.jpg', '2023-11-27 17:46:19', '2023-11-27 17:46:19'),
	(39, 2, 'OHXC6Q708zkUja0DCQP5FfFjZtZaHFOR39nwsp9V.jpg', '2023-11-27 17:46:19', '2023-11-27 17:46:19'),
	(40, 2, 'gbqKZSBkbWGwmTPGLfjJjW9CoWIah03L8ZPP7FIZ.jpg', '2023-11-27 17:46:19', '2023-11-27 17:46:19'),
	(41, 3, 'ZjDhUQ8HCdsttBKZIAa5b7GJf7gj5cZVf3glKGhP.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(42, 3, '56SJGV6LL5dvHsFOOulGEJRS7CDCpOPOmhiYzzfM.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(43, 3, 'I39wz5VDe8eaC1LORi1x1oY0jht4Y6nhYCdBeGrD.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(44, 3, 'gLH2x8rEz9zqLBX4DaE0AqD18vkkxwwC5IAcO3ii.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(45, 3, '25rs7X3UD1fWdoOR8QCUzj1ZrrkrYArOvjq3Mloo.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(46, 3, 'L1CvNhIOQxUQjv1EqnYkqjZqKUYKHnoVtu6WM5Fv.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(47, 3, 'HOB0taxsIQIBBPN1PriqzairCBh2uokOpD2N67rH.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(48, 3, 'H3o42N0jIXBFj8xqmHkZ9rHlG1bWklq4lDO3jU2A.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(49, 3, '05Bt601RZtqdYwnM5heXhUBWvjofiwKhevzWPzgK.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(50, 3, 'AjsidDOPNplYFSJTWCowZjOdK8Vdi0Pkd3Te0AqW.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(51, 3, 'xI7LfUXo14WOhV90v2rcrOSXSBbKykj8Rf3VEhtc.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(52, 3, 'UXTmx845IfWXkGsYbRxNYbwRT89ys812VP7egXEU.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(53, 3, 'HyJrCMzc87XNCQNv8m7JbXyLXgtaFwuECEzJIQUJ.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(54, 3, 'MIuW7Dk1kRQKYw8JzRn56nKELJW119bBGd2BpWdq.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(55, 3, '48sEMuXMWZh65wOjXhVOGeQCTKgkDnsk9U7WxkLL.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(56, 3, 'RfmBUQWQFWEWyrqp99ZbSGVExuZbw15xuIhpgmqn.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(57, 3, 'rwli7olfNSjB6WeE91jWbVkZupCGCxBoxLMQqTiS.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(58, 3, 'K4rjScFIMz3rDQngV5A3q8x0aJvklW38Zj0SaFeA.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(59, 3, 'vdM4mT0CC2swjMUm7OxI3IAMzBnFnCzomsrHMyBl.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(60, 3, 'JtDHmd1E9FgaKX2P8Ux9wxjGFPDm3Vs1Q3B2bvjE.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(61, 3, 'N9h5E2lEVj6SnA6hNZvewatSk2bp4Kv4uOSmDxL5.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(62, 3, '3uIuDfs862tML66UZ2OYJXSjavwx8TD9po3D9qyY.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(63, 3, 'Z9VQfkLefsEpg6Eer2prOLetxNw4tro9fav8lVM3.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(64, 3, 'gQnuy3ypur56FF3F3qaDShlenV9iHB0AfC55IK5X.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(65, 3, 'n8US444wxqdHssCkSW2jDayPOcUpxIVq4Zpl0PKr.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(66, 3, 'b1oRGOIaqNqNryDCVG3d0pC3O9Zt6U02FYrybyZO.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(67, 3, 'TF0GCZIzdlu0oYD43YkxAojCSaHnfZk00akTSW9K.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(68, 3, 'PqWz520j9M80AKWIgjIp0f8Xrw0KLvpVeQtshMBs.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(69, 3, '19oGQYhYHYizcGy449mUzqruWPm8xHaL35Xdu74P.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(70, 3, '2Lx4o9kNyq2bT9Syq4aVwLnzgWheuizsoUOhui9X.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(71, 3, '8TBppMo5OUh69abpJMeeK5gdVPZLFVRNgxoF7Ljg.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(72, 3, 't44kYGVzmNFNcNflF4v5ufpvJ6rTX3LbWsEE4fXT.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(73, 3, 'ZVVGosgIUJY7NnOoKoV5UJVtkCkzintcY6owQcm6.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(74, 3, 'W1FF2C42npm7BgSQxIqcxVEyufe12yGx06lCFEZK.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(75, 3, '3TUwqTcEIhykz4qact0Mcnt2Nyi7RatA8wOFFwbS.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(76, 3, 'zed8DYM9y5k4PH7N0UD6aVl0WvVXipRBt1aiEoli.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(77, 3, 'u3YypolwWGF6ELquBqAnodXJW1rSasiQYdNVrVQF.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(78, 3, 'PU54abkvFHVGyzNuuKh1LPBrHDRqymeHXVFS50P2.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(79, 3, 'ugTUE3i9GlV8E8nZXuyWlR9dK3zoDR6W7IY25LcD.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(80, 3, 'H2HDbirvbHqZDUhLYuzupVu67Ntis2bGjbeM1V5I.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(81, 3, 'cU7n1rTps859qJsjmZXY8aq3RRiwjR15xiIXMZEB.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(82, 3, 'hp4EutDjB03KjoEnF8n1HsVCpdjBqDxj0QUeR7H7.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(83, 3, 'Z7pLEh9TC0oZF7We3KN8yW5iJ1g0Nrvxf2Cn2xCD.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(84, 3, 'vAgPLR02RWDYIjUFi5V8SevbTr8nG8gULy9oT3FZ.jpg', '2023-11-27 17:49:13', '2023-11-27 17:49:13'),
	(85, 4, 'Ir8pi1ftVjCmxKHlrCRcB0Gs9rNpaGNmQPyyEESb.jpg', '2023-11-27 17:53:03', '2023-11-27 17:53:03'),
	(86, 4, 'hOwQBdB3Z1oNzWP1pMKi0xAF31gjrFH4sJ9DnNsQ.jpg', '2023-11-27 17:53:03', '2023-11-27 17:53:03'),
	(87, 4, 'Rn4TrxAPBlFyRU2o0RevWqMP6eZWIt6KnMMBdotb.jpg', '2023-11-27 17:53:03', '2023-11-27 17:53:03'),
	(88, 4, '0r41l55sbPxxtWcLi30YLnD6AG8j10ZzB93gqX5l.jpg', '2023-11-27 17:53:03', '2023-11-27 17:53:03'),
	(89, 4, 'wg9typTqiNAnwRjS1ck6yW7gPc8oFmXQgF3cdJt3.jpg', '2023-11-27 17:53:03', '2023-11-27 17:53:03'),
	(90, 4, '375IJR5FqchdKUl6MQe8IMbyyfQrMsfWAIpWkQ7R.jpg', '2023-11-27 17:53:03', '2023-11-27 17:53:03'),
	(91, 4, 'mkp5MVEcdu8LbedN1FLYdWb6wrmyNkWileXi97Y2.jpg', '2023-11-27 17:53:03', '2023-11-27 17:53:03'),
	(92, 4, 'EA4xtf6nT3UEYHH4JR635PY77tbOsKpq3v3VCxep.jpg', '2023-11-27 17:53:03', '2023-11-27 17:53:03'),
	(93, 4, 'oe4qkjzvhAiWiE95RwQXGlGnvcuHcymbRWU8KZiA.jpg', '2023-11-27 17:53:03', '2023-11-27 17:53:03'),
	(94, 4, 'gfyNAmH8BZGKE6SR0oU6MuVG1bkpLePw9qq7gerR.jpg', '2023-11-27 17:53:03', '2023-11-27 17:53:03'),
	(95, 4, 'M8c5PV3RoYjerBVULZrcpSZo0F97S4t0OAYa1t8Y.jpg', '2023-11-27 17:53:03', '2023-11-27 17:53:03'),
	(96, 4, 'ODlhiA7BWPQT1dBCT7Xb30D6uMFNYw2eecChgNGS.jpg', '2023-11-27 17:53:03', '2023-11-27 17:53:03'),
	(97, 4, '9BSd2xRhPJG58nQ2e5Mx5ff8ZAbQiRSg0jn8bwTY.jpg', '2023-11-27 17:53:03', '2023-11-27 17:53:03'),
	(98, 4, '6uVK9MSnW8kcj76ItUtMDKfxTTaq2yyvUdMb6NLu.jpg', '2023-11-27 17:53:03', '2023-11-27 17:53:03'),
	(99, 4, 'G1GTAGEislwKBRmNRs5Vnr5NmgWIi2IDgLb4jKM3.jpg', '2023-11-27 17:53:03', '2023-11-27 17:53:03'),
	(100, 4, 'UkRkNbUAuy2rpvv8Eym14hajzS5i3uQy6UI82voz.jpg', '2023-11-27 17:53:03', '2023-11-27 17:53:03'),
	(101, 4, 'UuGHsN5ux90VYMsub7qiKeu6CN2sKSn9yc8Hei5c.jpg', '2023-11-27 17:53:03', '2023-11-27 17:53:03'),
	(102, 4, 'vdcNPhDO6Wf4awBdJfhNGiTrNpHo9ym8PKlc1w2p.jpg', '2023-11-27 17:53:03', '2023-11-27 17:53:03'),
	(103, 4, 'tlHtpsdt0JOyG0A9HWnMW5PGZW7HLFWXDnvNNrJG.jpg', '2023-11-27 17:53:03', '2023-11-27 17:53:03'),
	(104, 4, 'UNTaYA9yOXPVhvSPAU2tbyiU8nvbOVAQF9HBs1m6.jpg', '2023-11-27 17:53:03', '2023-11-27 17:53:03'),
	(105, 4, '3aaTcJbD5V5vO2qt6QoqChyFLDIF4SPjey7s6tT0.jpg', '2023-11-27 17:53:03', '2023-11-27 17:53:03'),
	(106, 4, '4ML35rCi7zxmdoPlfQbWWNhWc8500RUCITW1axrE.jpg', '2023-11-27 17:53:03', '2023-11-27 17:53:03'),
	(107, 4, 'SzMjmNlyp7hpNhXDDuwbBDScfce8NF1wPk4isGY6.jpg', '2023-11-27 17:53:03', '2023-11-27 17:53:03');

-- Dumping data for table photo.failed_jobs: ~0 rows (approximately)

-- Dumping data for table photo.faqs: ~0 rows (approximately)
INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
	(2, 'How does the photo retouching and photo restoration ordering process work?', 'Simply click here and follow the instructions.', '2023-11-28 11:54:31', '2023-11-28 11:54:31'),
	(3, 'Lost internet connection during the uploading process what shall I do?', 'Simply go to the order page and upload your photos once again.', '2023-11-28 11:54:51', '2023-11-28 11:54:51'),
	(4, 'I am not sure which service packet I should choose for my photos?', 'Do not choose and we will assess your photos and estimate the costs.', '2023-11-28 11:55:16', '2023-11-28 11:55:16'),
	(5, 'What can I do if I am unhappy with your work?', 'Request free revision through contacting us and tell us additional instructions or explanations.', '2023-11-28 11:55:39', '2023-11-28 11:55:39'),
	(6, 'How do I receive your work?', 'When we finish the work, will send you an email with download link.', '2023-11-28 11:56:03', '2023-11-28 11:56:03');

-- Dumping data for table photo.features: ~0 rows (approximately)
INSERT INTO `features` (`id`, `name`, `note1`, `note2`, `note3`, `created_at`, `updated_at`) VALUES
	(1, 'Featured in:', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident tenetur voluptatibus placeat, ab ea nulla magni. Sed ratione harum debitis adipisci maiores hic similique totam?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident tenetur voluptatibus placeat, ab ea nulla magni. Sed ratione harum debitis adipisci maiores hic similique totam?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident tenetur voluptatibus placeat, ab ea nulla magni. Sed ratione harum debitis adipisci maiores hic similique totam?', '2023-11-14 20:18:30', '2023-11-14 20:18:30');

-- Dumping data for table photo.free_orders: ~22 rows (approximately)
INSERT INTO `free_orders` (`id`, `order_service_id`, `slug`, `type`, `show`, `created_at`, `updated_at`, `name`, `email`, `phone`, `website`, `note1`, `note2`, `note3`, `note4`, `note5`) VALUES
	(23, '["1"]', '9683053', NULL, 0, '2023-11-18 19:15:55', '2023-11-18 19:16:29', 'Kibo Burton', 'lyvit@mailinator.com', NULL, 'https://www.miwucuhypeqyv.biz', NULL, NULL, NULL, NULL, NULL),
	(24, NULL, '1201387', NULL, 0, '2023-11-19 10:16:03', '2023-11-19 10:16:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(25, NULL, '2743564', NULL, 0, '2023-11-19 10:24:19', '2023-11-19 10:24:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(26, NULL, '7779429', NULL, 0, '2023-11-21 09:50:46', '2023-11-21 09:50:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(27, NULL, '6618745', NULL, 0, '2023-11-21 09:50:53', '2023-11-21 09:50:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(28, NULL, '4371018', NULL, 0, '2023-11-21 10:24:28', '2023-11-21 10:24:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(29, NULL, '2648977', NULL, 0, '2023-11-21 10:47:51', '2023-11-21 10:47:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(30, NULL, '3900824', NULL, 0, '2023-11-21 12:24:43', '2023-11-21 12:24:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(31, NULL, '5688970', NULL, 0, '2023-11-22 19:54:49', '2023-11-22 19:54:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(32, NULL, '7439779', NULL, 0, '2023-11-22 21:44:29', '2023-11-22 21:44:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(33, NULL, '7615503', NULL, 0, '2023-11-23 19:40:07', '2023-11-23 19:40:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(34, NULL, '4526095', NULL, 0, '2023-11-24 12:01:40', '2023-11-24 12:01:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(35, NULL, '2879012', NULL, 0, '2023-11-24 11:02:45', '2023-11-24 11:02:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(36, NULL, '8606998', NULL, 0, '2023-11-24 11:04:01', '2023-11-24 11:04:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(37, NULL, '4900770', NULL, 0, '2023-11-24 11:39:52', '2023-11-24 11:39:59', 'Sacha Greer', 'qucosuxixa@mailinator.com', NULL, 'https://www.doqovyrimewy.biz', NULL, NULL, NULL, NULL, NULL),
	(38, NULL, '8783405', NULL, 0, '2023-11-24 11:43:05', '2023-11-24 11:43:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(39, NULL, '6891354', NULL, 0, '2023-11-24 11:43:34', '2023-11-24 11:43:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(40, NULL, '3381179', NULL, 0, '2023-11-24 11:43:39', '2023-11-24 11:43:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(41, NULL, '4798327', NULL, 0, '2023-11-24 11:45:32', '2023-11-24 11:45:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(42, NULL, '7652262', NULL, 0, '2023-11-24 11:46:48', '2023-11-24 11:46:54', 'Brynne Woodard', 'jeru@mailinator.com', NULL, 'https://www.pamycubohype.com.au', NULL, NULL, NULL, NULL, NULL),
	(43, NULL, '5606007', NULL, 0, '2023-11-24 11:48:02', '2023-11-24 11:48:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(44, NULL, '1568269', NULL, 0, '2023-11-24 12:41:41', '2023-11-24 12:41:46', 'Kennan Luna', 'mari@mailinator.com', NULL, 'https://www.nuje.ca', NULL, NULL, NULL, NULL, NULL);

-- Dumping data for table photo.free_order_details: ~0 rows (approximately)
INSERT INTO `free_order_details` (`id`, `free_order_id`, `order_service_id`, `price_offer`, `photo_count`, `total`, `order_status`, `created_at`, `updated_at`) VALUES
	(4, 23, '1', NULL, 1, 50.00, 0, '2023-11-18 19:16:53', '2023-11-18 19:16:53');

-- Dumping data for table photo.free_order_service_notes: ~0 rows (approximately)

-- Dumping data for table photo.free_service_images: ~2 rows (approximately)
INSERT INTO `free_service_images` (`id`, `free_order_id`, `order_service_id`, `image_path`, `type`, `created_at`, `updated_at`) VALUES
	(8, 23, 1, 'Kibo Burton_lyvit@mailinator.com/9683053/Basic/Basic_cuV2WQrU9DStqL0c3J9fVO9vaa5Ynr16XVwqkByD.jpg', 'main', '2023-11-18 19:16:53', '2023-11-18 19:16:53'),
	(9, 23, 1, 'Kibo Burton_lyvit@mailinator.com/9683053/Basic/Basic_reference_EQtfylSjDIhf22OehI1DKeHLz8ejceVG4ScKIgVl.jpg', 'referance', '2023-11-18 19:16:53', '2023-11-18 19:16:53');

-- Dumping data for table photo.galleries: ~0 rows (approximately)
INSERT INTO `galleries` (`id`, `name`, `note`) VALUES
	(1, 'Main Gallery', 'Main Gallery note Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere voluptatibus consequuntur iusto excepturi? Ab qui dolorem consequuntur, sint vitae nam dignissimos, praesentium magnam maiores consectetur nesciunt! Perferendis consequuntur atque suscipit.');

-- Dumping data for table photo.gallery_images: ~12 rows (approximately)
INSERT INTO `gallery_images` (`id`, `gallery_id`, `photo`, `created_at`, `updated_at`) VALUES
	(1, 1, '0DCO1DkeHeCZMeuHVF8FkGVv0OsSDpD2LXGh7ABj.jpg', '2023-11-14 20:24:25', '2023-11-14 20:24:25'),
	(2, 1, 'pJ71IzRkvYk3Y1R6zaUCm1seIA9kXpcHfP9MsPHT.jpg', '2023-11-14 20:24:25', '2023-11-14 20:24:25'),
	(3, 1, 'ATC13kJLO4gfGMVJVNzFw1PasVsg3aiqicv2JVa8.jpg', '2023-11-14 20:24:25', '2023-11-14 20:24:25'),
	(4, 1, '8fu5Hxd2xiuMkDZmHcovKjx4B9KRpovbhKjfdnZj.jpg', '2023-11-14 20:24:25', '2023-11-14 20:24:25'),
	(5, 1, '5PVAvUERWEspvniYaSsIT1Kz3WQKgpcCo3cfai1Y.jpg', '2023-11-14 20:24:25', '2023-11-14 20:24:25'),
	(6, 1, 'hyuhXrSCgdIi2McdSew1ln481lS83CqVevwUGE7v.jpg', '2023-11-14 20:24:25', '2023-11-14 20:24:25'),
	(7, 1, 'd57Fv5zNqROCm06aCdAymhp2Hy02HwhJ9mx1WEiT.jpg', '2023-11-14 20:24:25', '2023-11-14 20:24:25'),
	(8, 1, 'Z9szJ57aXReZCs5IGW7HwLJ5dxoSfHxAJZsaZn5c.jpg', '2023-11-14 20:24:25', '2023-11-14 20:24:25'),
	(9, 1, 'YgEOFMJ6ItTOISdvenwFEKT845EXTxHskEU78aMH.jpg', '2023-11-14 20:24:25', '2023-11-14 20:24:25'),
	(10, 1, 'AyWxOryniQoedubC0GLrs4mrNIaCeLcU7B8e1VXx.jpg', '2023-11-14 20:24:25', '2023-11-14 20:24:25'),
	(11, 1, 'KWHeqADqh4oWdRHnWSxxraOj0r5Z69yfw2FcwMxA.jpg', '2023-11-14 20:24:25', '2023-11-14 20:24:25'),
	(12, 1, '7eqScfBn7fmkzKiz3fTbm9pHjsVqQwsze3T1J8YH.jpg', '2023-11-14 20:24:25', '2023-11-14 20:24:25');

-- Dumping data for table photo.homes: ~0 rows (approximately)
INSERT INTO `homes` (`id`, `title`, `description`, `home_compression_title`, `home_compression_description`, `service_title`, `service_title_colored`, `service_gallery_description`, `note1`, `note2`, `note3`, `note4`, `created_at`, `updated_at`) VALUES
	(1, 'PROFESSIONAL', 'Photo retouching & Editing services', NULL, NULL, 'Service Title', 'Slug Color', 'Service Gallery Description', 'Turnaround time 24 hours', 'All photos format are accepted', 'Unltimited free revisions provider', 'First photo will be retouched for free', '2023-11-19 09:32:22', '2023-11-19 09:39:19');

-- Dumping data for table photo.icons: ~5 rows (approximately)
INSERT INTO `icons` (`id`, `name`, `notes`, `status`, `created_at`, `updated_at`) VALUES
	(1, '1 service in photo editing industry', NULL, 1, '2023-11-19 09:49:04', '2023-11-19 09:49:04'),
	(2, 'Follow your unique photography style', NULL, 1, '2023-11-19 09:49:56', '2023-11-19 09:49:56'),
	(3, 'we garderd 100% security', NULL, 1, '2023-11-19 09:50:29', '2023-11-19 09:50:29'),
	(4, 'fast 24 hour turnaround', NULL, 1, '2023-11-19 09:51:06', '2023-11-19 09:51:06'),
	(5, 'easy to use', NULL, 1, '2023-11-19 09:52:57', '2023-11-19 09:52:57');

-- Dumping data for table photo.images: ~40 rows (approximately)
INSERT INTO `images` (`id`, `filename`, `type`, `imageable_type`, `imageable_id`, `created_at`, `updated_at`) VALUES
	(5, 'slide-1700000095.jpg', 'main', 'App\\Models\\Slide', 3, '2023-11-14 20:14:55', '2023-11-14 20:14:55'),
	(6, 'partner-1700000398.png', 'main', 'App\\Models\\Partner', 1, '2023-11-14 20:19:58', '2023-11-14 20:19:58'),
	(7, 'partner-1700000407.png', 'main', 'App\\Models\\Partner', 2, '2023-11-14 20:20:07', '2023-11-14 20:20:07'),
	(8, 'partner-1700000416.png', 'main', 'App\\Models\\Partner', 3, '2023-11-14 20:20:16', '2023-11-14 20:20:16'),
	(9, 'partner-1700000427.png', 'main', 'App\\Models\\Partner', 4, '2023-11-14 20:20:27', '2023-11-14 20:20:27'),
	(10, 'partner-1700000441.png', 'main', 'App\\Models\\Partner', 5, '2023-11-14 20:20:41', '2023-11-14 20:20:41'),
	(11, 'partner-1700000452.png', 'main', 'App\\Models\\Partner', 6, '2023-11-14 20:20:52', '2023-11-14 20:20:52'),
	(12, 'partner-1700000464.png', 'main', 'App\\Models\\Partner', 7, '2023-11-14 20:21:04', '2023-11-14 20:21:04'),
	(13, 'slide-1700000747.jpg', 'main', 'App\\Models\\Slide', 2, '2023-11-14 20:25:47', '2023-11-14 20:25:47'),
	(14, 'about-1700000898.png', 'main', 'App\\Models\\About', 1, '2023-11-14 20:28:18', '2023-11-14 20:28:18'),
	(15, 'service-1700001449.jpg', 'main', 'App\\Models\\Service', 1, '2023-11-14 20:37:29', '2023-11-14 20:37:29'),
	(16, 'service-1700001468.jpg', 'main', 'App\\Models\\Service', 2, '2023-11-14 20:37:48', '2023-11-14 20:37:48'),
	(17, 'service-1700001484.jpg', 'main', 'App\\Models\\Service', 3, '2023-11-14 20:38:04', '2023-11-14 20:38:04'),
	(18, 'service-1700001498.jpg', 'main', 'App\\Models\\Service', 4, '2023-11-14 20:38:18', '2023-11-14 20:38:18'),
	(19, 'service-1700001520.jpg', 'main', 'App\\Models\\Service', 5, '2023-11-14 20:38:40', '2023-11-14 20:38:40'),
	(20, 'service-1700001534.jpg', 'main', 'App\\Models\\Service', 6, '2023-11-14 20:38:54', '2023-11-14 20:38:54'),
	(21, 'service-1700001587.jpg', 'main', 'App\\Models\\Service', 8, '2023-11-14 20:39:47', '2023-11-14 20:39:47'),
	(22, 'service-1700001604.jpg', 'main', 'App\\Models\\Service', 7, '2023-11-14 20:40:04', '2023-11-14 20:40:04'),
	(23, 'slider-1700001695.jpg', 'main', 'App\\Models\\Slider', 1, '2023-11-14 20:41:35', '2023-11-14 20:41:35'),
	(24, 'slider-1700001717.jpg', 'main', 'App\\Models\\Slider', 2, '2023-11-14 20:41:57', '2023-11-14 20:41:57'),
	(25, 'retouchservice-1700002946.jpg', 'main', 'App\\Models\\RetouchService', 1, '2023-11-14 21:02:26', '2023-11-14 21:02:26'),
	(26, 'retouchservice-1700002960.jpg', 'main', 'App\\Models\\RetouchService', 2, '2023-11-14 21:02:40', '2023-11-14 21:02:40'),
	(27, 'retouchservice-1700002975.jpg', 'main', 'App\\Models\\RetouchService', 3, '2023-11-14 21:02:55', '2023-11-14 21:02:55'),
	(29, 'home_banner-5xg_1700386758.jpg', 'home_banner', 'App\\Models\\Home', 1, '2023-11-19 09:39:19', '2023-11-19 09:39:19'),
	(30, 'icon-1700387344.png', 'main', 'App\\Models\\Icon', 1, '2023-11-19 09:49:04', '2023-11-19 09:49:04'),
	(31, 'icon-1700387396.png', 'main', 'App\\Models\\Icon', 2, '2023-11-19 09:49:56', '2023-11-19 09:49:56'),
	(32, 'icon-1700387429.png', 'main', 'App\\Models\\Icon', 3, '2023-11-19 09:50:30', '2023-11-19 09:50:30'),
	(33, 'icon-1700387466.png', 'main', 'App\\Models\\Icon', 4, '2023-11-19 09:51:06', '2023-11-19 09:51:06'),
	(34, 'icon-1700387577.png', 'main', 'App\\Models\\Icon', 5, '2023-11-19 09:52:57', '2023-11-19 09:52:57'),
	(36, 'price-1701047458.jpg', 'main', 'App\\Models\\Price', 4, '2023-11-26 23:10:58', '2023-11-26 23:10:58'),
	(37, 'example-1701112678.jpg', 'main', 'App\\Models\\Example', 1, '2023-11-27 17:17:58', '2023-11-27 17:17:58'),
	(38, 'example-1701114317.jpg', 'main', 'App\\Models\\Example', 2, '2023-11-27 17:45:17', '2023-11-27 17:45:17'),
	(39, 'example-1701114516.jpg', 'main', 'App\\Models\\Example', 3, '2023-11-27 17:48:36', '2023-11-27 17:48:36'),
	(40, 'example-1701114718.jpg', 'main', 'App\\Models\\Example', 4, '2023-11-27 17:51:59', '2023-11-27 17:51:59'),
	(41, 'tour-1701165382.jpg', 'main', 'App\\Models\\Tour', 10, '2023-11-28 07:56:22', '2023-11-28 07:56:22'),
	(42, 'tour-1701167631.jpg', 'main', 'App\\Models\\Tour', 11, '2023-11-28 08:33:51', '2023-11-28 08:33:51'),
	(43, 'tour-1701168038.jpg', 'main', 'App\\Models\\Tour', 12, '2023-11-28 08:40:38', '2023-11-28 08:40:38'),
	(44, 'tour-1701168110.jpg', 'main', 'App\\Models\\Tour', 13, '2023-11-28 08:41:50', '2023-11-28 08:41:50'),
	(45, 'tour-1701168137.jpg', 'main', 'App\\Models\\Tour', 14, '2023-11-28 08:42:17', '2023-11-28 08:42:17'),
	(46, 'tour-1701168166.jpg', 'main', 'App\\Models\\Tour', 15, '2023-11-28 08:42:46', '2023-11-28 08:42:46'),
	(47, 'tour-1701181865.jpg', 'main', 'App\\Models\\Tour', 17, '2023-11-28 12:31:06', '2023-11-28 12:31:06');

-- Dumping data for table photo.img_extensions: ~3 rows (approximately)
INSERT INTO `img_extensions` (`id`, `ext`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'jpg', 'JPEG Image', '2023-11-14 19:04:29', '2023-11-14 19:04:29'),
	(2, 'png', 'PNG Image', '2023-11-14 19:04:29', '2023-11-14 19:04:29'),
	(3, 'txt', 'فءف', '2023-11-14 22:47:32', '2023-11-14 22:47:32');

-- Dumping data for table photo.migrations: ~46 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_09_10_073647_create_admins_table', 1),
	(6, '2023_09_11_111501_create_settings_table', 1),
	(7, '2023_09_11_111515_create_sliders_table', 1),
	(8, '2023_09_11_111535_create_sections_table', 1),
	(9, '2023_09_11_111542_create_blogs_table', 1),
	(10, '2023_09_11_111556_create_services_table', 1),
	(11, '2023_09_11_111607_create_packages_table', 1),
	(12, '2023_09_13_082427_create_homes_table', 1),
	(13, '2023_09_17_111839_create_icons_table', 1),
	(14, '2023_09_17_211257_create_abouts_table', 1),
	(15, '2023_09_19_090602_create_galleries_table', 1),
	(16, '2023_09_19_132023_create_partners_table', 1),
	(17, '2023_09_20_121226_create_images_table', 1),
	(18, '2023_10_03_104839_create_retouch_services_table', 1),
	(19, '2023_10_03_114732_create_retouches_table', 1),
	(20, '2023_10_03_175406_create_order_services_table', 1),
	(21, '2023_10_04_130621_create_orders_table', 1),
	(22, '2023_10_04_194830_add_status_to_orders_table', 1),
	(23, '2023_10_06_195210_create_order_details_table', 1),
	(24, '2023_10_06_195803_create_order_service_times_table', 1),
	(25, '2023_10_06_195804_create_order_service_note_table', 1),
	(26, '2023_10_06_200604_create_service_image_table', 1),
	(27, '2023_11_03_151627_create_img_extensions_table', 1),
	(28, '2023_11_05_104610_create_gallery_images_table', 1),
	(30, '2023_11_14_145808_create_couples_table', 1),
	(31, '2023_11_14_151327_create_features_table', 1),
	(32, '2023_11_14_203037_create_comments_table', 1),
	(33, '2023_11_14_211146_create_slides_table', 2),
	(35, '2023_11_14_142735_create_buttons_table', 3),
	(36, '2023_11_18_121447_add_columns_table', 4),
	(42, '2023_11_18_160715_create_free_orders_table', 5),
	(43, '2023_11_18_160728_create_free_order_details_table', 5),
	(44, '2023_11_18_162915_create_free_service_images_table', 5),
	(46, '2023_11_18_182853_add_columns_to_free_orders_table', 6),
	(50, '2023_11_18_204653_create_free_order_service_notes_table', 7),
	(51, '2023_11_26_215543_create_advantages_table', 8),
	(52, '2023_11_26_215550_create_prices_table', 8),
	(53, '2023_11_26_215622_create_price_advantages_table', 8),
	(54, '2023_11_27_085310_create_examples_table', 9),
	(55, '2023_11_27_085542_create_example_images_table', 9),
	(56, '2023_11_27_214158_create_tours_table', 10),
	(58, '2023_11_27_234925_add_order_to_tours_table', 11),
	(59, '2023_11_28_132857_create_faqs_table', 12);

-- Dumping data for table photo.orders: ~26 rows (approximately)
INSERT INTO `orders` (`id`, `user_id`, `retouch_id`, `order_service_id`, `slug`, `created_at`, `updated_at`, `type`, `show`) VALUES
	(1, 1, 2, NULL, '2622328', '2023-11-14 22:00:14', '2023-11-14 22:00:14', 'waiting', 0),
	(2, 1, 2, '["1"]', '6862478', '2023-11-14 22:16:22', '2023-11-14 22:16:26', 'waiting', 0),
	(3, 1, 2, '["1"]', '8373993', '2023-11-14 22:18:41', '2023-11-14 22:18:45', 'completed', 0),
	(4, 1, 2, '["1"]', '3467715', '2023-11-14 22:47:43', '2023-11-14 22:47:48', 'waiting', 0),
	(5, 1, 2, '["1"]', '7327171', '2023-11-17 10:21:58', '2023-11-17 10:56:29', 'waiting', 0),
	(6, 1, 2, '["1"]', '9835881', '2023-11-17 11:29:11', '2023-11-17 11:29:29', 'waiting', 0),
	(7, 1, 2, '["1"]', '6030254', '2023-11-17 14:52:33', '2023-11-17 14:52:38', 'waiting', 0),
	(8, 1, 2, NULL, '5672153', '2023-11-19 12:35:13', '2023-11-19 12:35:13', 'waiting', 0),
	(9, 1, 2, NULL, '5163575', '2023-11-24 11:12:56', '2023-11-24 11:12:56', 'waiting', 0),
	(10, 1, 2, NULL, '8777463', '2023-11-24 11:16:21', '2023-11-24 11:16:21', 'waiting', 0),
	(11, 1, 2, NULL, '2133286', '2023-11-24 11:19:19', '2023-11-24 11:19:19', 'waiting', 0),
	(12, 1, 2, NULL, '1939145', '2023-11-24 11:20:18', '2023-11-24 11:20:18', 'waiting', 0),
	(13, 1, 2, NULL, '6873836', '2023-11-24 11:21:04', '2023-11-24 11:21:04', 'waiting', 0),
	(14, 1, 2, NULL, '5445248', '2023-11-24 11:21:31', '2023-11-24 11:21:31', 'waiting', 0),
	(15, 1, 2, NULL, '7028379', '2023-11-24 11:23:37', '2023-11-24 11:23:37', 'waiting', 0),
	(16, 1, 2, NULL, '9293175', '2023-11-24 11:23:48', '2023-11-24 11:23:48', 'waiting', 0),
	(17, 1, 2, NULL, '9923879', '2023-11-24 11:23:49', '2023-11-24 11:23:49', 'waiting', 0),
	(18, 1, 2, NULL, '9067840', '2023-11-24 11:24:43', '2023-11-24 11:24:43', 'waiting', 0),
	(19, 1, 2, NULL, '7585715', '2023-11-24 11:27:13', '2023-11-24 11:27:13', 'waiting', 0),
	(20, 1, 2, NULL, '8429414', '2023-11-24 11:29:07', '2023-11-24 11:29:07', 'waiting', 0),
	(21, 1, 2, NULL, '5991884', '2023-11-24 11:30:05', '2023-11-24 11:30:05', 'waiting', 0),
	(22, 1, 2, NULL, '2681881', '2023-11-24 11:36:49', '2023-11-24 11:36:49', 'waiting', 0),
	(23, 1, 2, NULL, '3332681', '2023-11-24 11:38:47', '2023-11-24 11:38:47', 'waiting', 0),
	(24, 1, 2, NULL, '9743054', '2023-11-24 11:39:30', '2023-11-24 11:39:30', 'waiting', 0),
	(25, 1, 2, NULL, '7073662', '2023-11-24 12:42:29', '2023-11-24 12:42:29', 'waiting', 0),
	(26, 1, 2, NULL, '9277123', '2023-11-24 12:42:39', '2023-11-24 12:42:39', 'waiting', 0);

-- Dumping data for table photo.order_details: ~4 rows (approximately)
INSERT INTO `order_details` (`id`, `order_id`, `order_service_id`, `price_offer`, `photo_count`, `total`, `order_status`, `created_at`, `updated_at`) VALUES
	(1, 2, '1', 1, 1, 50.00, 0, '2023-11-14 22:16:57', '2023-11-14 22:16:57'),
	(2, 3, '1', 1, 1, 60.00, 1, '2023-11-14 22:19:07', '2023-11-14 22:19:26'),
	(3, 4, '1', 2, 1, 65.00, 0, '2023-11-14 22:48:24', '2023-11-14 22:48:24'),
	(4, 5, '1', 1, 1, 60.00, 0, '2023-11-17 11:28:07', '2023-11-17 11:28:07');

-- Dumping data for table photo.order_services: ~2 rows (approximately)
INSERT INTO `order_services` (`id`, `name`, `price`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Basic', '50', 1, '2023-11-14 21:01:39', '2023-11-14 21:01:39'),
	(2, 'Advanced', '100', 1, '2023-11-14 21:01:55', '2023-11-14 21:01:55');

-- Dumping data for table photo.order_service_note: ~4 rows (approximately)
INSERT INTO `order_service_note` (`id`, `order_id`, `order_service_id`, `order_service_time_id`, `notes`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, 1, 'zzzzzz', '2023-11-14 22:16:57', '2023-11-14 22:16:57'),
	(2, 3, 1, 1, 'aaaaaaaa', '2023-11-14 22:19:07', '2023-11-14 22:19:07'),
	(3, 4, 1, 2, 'aaaaaaaa', '2023-11-14 22:48:24', '2023-11-14 22:48:24'),
	(4, 5, 1, 1, 'qqqqqqqqqqq', '2023-11-17 11:28:07', '2023-11-17 11:28:07');

-- Dumping data for table photo.order_service_times: ~3 rows (approximately)
INSERT INTO `order_service_times` (`id`, `name`, `notes`, `status`, `price`, `created_at`, `updated_at`) VALUES
	(1, 'Time 1 $10', 'Notes for Time 1', 1, 10, NULL, NULL),
	(2, 'Time 2', 'Notes for Time 2', 1, 15, NULL, NULL),
	(3, 'Time 3', 'Notes for Time 3', 1, 20, NULL, NULL);

-- Dumping data for table photo.packages: ~2 rows (approximately)
INSERT INTO `packages` (`id`, `service_id`, `name`, `notes`, `status`, `created_at`, `updated_at`) VALUES
	(1, 2, 'Derick Rogahn', 'Et qui aut in. Voluptatem dolores dolores minima ut sapiente sit cum voluptatem. Nam dolorem voluptatem omnis.', 0, '2023-11-14 19:04:29', '2023-11-14 19:04:29'),
	(2, 1, 'Mr. Darius Pouros', 'Odio facilis quis minima. Dicta aut id aut sit. Architecto odio et assumenda distinctio beatae.', 1, '2023-11-14 19:04:29', '2023-11-14 19:04:29');

-- Dumping data for table photo.partners: ~7 rows (approximately)
INSERT INTO `partners` (`id`, `status`, `created_at`, `updated_at`) VALUES
	(1, 1, '2023-11-14 20:19:58', '2023-11-14 20:19:58'),
	(2, 1, '2023-11-14 20:20:07', '2023-11-14 20:20:07'),
	(3, 1, '2023-11-14 20:20:16', '2023-11-14 20:20:16'),
	(4, 1, '2023-11-14 20:20:27', '2023-11-14 20:20:27'),
	(5, 1, '2023-11-14 20:20:41', '2023-11-14 20:20:41'),
	(6, 1, '2023-11-14 20:20:52', '2023-11-14 20:20:52'),
	(7, 1, '2023-11-14 20:21:04', '2023-11-14 20:21:04');

-- Dumping data for table photo.password_reset_tokens: ~0 rows (approximately)

-- Dumping data for table photo.personal_access_tokens: ~0 rows (approximately)

-- Dumping data for table photo.prices: ~4 rows (approximately)
INSERT INTO `prices` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
	(4, 'Simple Retouch', 1, '2023-11-26 23:10:58', '2023-11-26 23:10:58'),
	(5, 'Basic Retouch', 1, '2023-11-26 23:11:57', '2023-11-26 23:11:57'),
	(6, 'Medium Retouch', 1, '2023-11-26 23:12:39', '2023-11-26 23:12:39'),
	(7, 'Advanced Retouch', 1, '2023-11-26 23:13:09', '2023-11-26 23:13:09');

-- Dumping data for table photo.price_advantages: ~17 rows (approximately)
INSERT INTO `price_advantages` (`id`, `price_id`, `advantage_id`, `created_at`, `updated_at`) VALUES
	(5, 4, 4, NULL, NULL),
	(6, 4, 5, NULL, NULL),
	(7, 5, 4, NULL, NULL),
	(8, 5, 5, NULL, NULL),
	(9, 5, 6, NULL, NULL),
	(10, 6, 4, NULL, NULL),
	(11, 6, 5, NULL, NULL),
	(12, 6, 6, NULL, NULL),
	(13, 6, 7, NULL, NULL),
	(14, 7, 4, NULL, NULL),
	(15, 7, 5, NULL, NULL),
	(16, 7, 6, NULL, NULL),
	(17, 7, 7, NULL, NULL),
	(18, 7, 8, NULL, NULL),
	(19, 7, 9, NULL, NULL),
	(20, 7, 10, NULL, NULL),
	(21, 7, 11, NULL, NULL);

-- Dumping data for table photo.retouches: ~0 rows (approximately)
INSERT INTO `retouches` (`id`, `user_id`, `retouch_service_id`, `retouching_note`, `created_at`, `updated_at`) VALUES
	(2, 1, 3, 'czczxczxc', '2023-11-14 21:34:05', '2023-11-19 12:35:12');

-- Dumping data for table photo.retouch_services: ~3 rows (approximately)
INSERT INTO `retouch_services` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Slight', 1, '2023-11-14 21:02:26', '2023-11-14 21:02:26'),
	(2, 'Med', 1, '2023-11-14 21:02:40', '2023-11-14 21:02:40'),
	(3, 'Heavy', 1, '2023-11-14 21:02:55', '2023-11-14 21:02:55');

-- Dumping data for table photo.sections: ~2 rows (approximately)
INSERT INTO `sections` (`id`, `name`, `notes`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Dennis Quitzon', 'Illum fuga non laboriosam officiis. Laudantium ut dolorem est mollitia in ut aut.', 1, '2023-11-14 19:04:28', '2023-11-14 19:04:28'),
	(2, 'Rosa Kessler', 'Aut rerum sed harum accusantium corporis et sed. Similique harum accusamus sint rerum mollitia.', 1, '2023-11-14 19:04:28', '2023-11-14 19:04:28');

-- Dumping data for table photo.services: ~8 rows (approximately)
INSERT INTO `services` (`id`, `name`, `price`, `notes`, `status`, `created_at`, `updated_at`, `url`) VALUES
	(1, 'Hayley Jacobi I', '57', 'Laborum voluptas accusantium qui nihil assumenda. Impedit quia aliquam repellendus et distinctio ipsam. Excepturi numquam dolores asperiores tempora impedit asperiores.', 1, '2023-11-14 19:04:29', '2023-11-14 19:04:29', ''),
	(2, 'Mack Grant III', '32', 'Animi eius dolorum aut minima asperiores quaerat. Explicabo omnis dicta at alias excepturi consequuntur. Distinctio doloribus animi officia deleniti. Eum cum quasi nihil nemo velit consequuntur aperiam.', 1, '2023-11-14 19:04:29', '2023-11-14 19:04:29', NULL),
	(3, 'Brando Carroll MD', '51', 'Incidunt et ab rem nihil et aliquid. Assumenda voluptas dolores consequatur culpa reprehenderit id. Qui autem sed placeat. Ut vitae architecto consequuntur omnis qui.', 1, '2023-11-14 19:04:29', '2023-11-14 19:04:29', NULL),
	(4, 'Dr. Joanie Orn Sr.', '12', 'Pariatur eveniet quae fugiat. Veniam repellendus error tempora aliquid deleniti ea aut. Id hic officiis suscipit quibusdam sapiente. Asperiores nihil voluptatem cumque temporibus.', 1, '2023-11-14 19:04:29', '2023-11-14 19:04:29', NULL),
	(5, 'Jeanie Senger', '14', 'Dolor nesciunt consequuntur tempore sint repellendus. Nihil soluta eligendi sed ut nemo. Earum dolores id iste tempora laboriosam soluta necessitatibus. Dolores distinctio distinctio et consectetur nam provident omnis.', 1, '2023-11-14 19:04:29', '2023-11-14 19:04:29', NULL),
	(6, 'Kaleigh Mann MD', '26', 'Eveniet itaque maxime consequatur. Perferendis natus commodi porro eos voluptas. Velit eaque qui minima quibusdam. Consequatur suscipit earum ut aperiam aut et suscipit. Itaque quos maiores dignissimos est rerum quia porro.', 1, '2023-11-14 19:04:29', '2023-11-14 19:04:29', NULL),
	(7, 'Napol', '39', 'Blanditiis autem ad vitae voluptas nesciunt. Nam incidunt deserunt magni aliquam et. Eum omnis veniam et fugit vitae magni. Pariatur ipsa dolorum reiciendis consequatur repellendus iusto ut id.', 1, '2023-11-14 19:04:29', '2023-11-14 20:40:58', NULL),
	(8, 'Mr. Joh', '34', 'Nesciunt rerum debitis magni aut. Sed qui dolorum omnis aspernatur et ut. Est rerum nisi est error quo earum. Debitis vel sunt minus impedit nesciunt laudantium dolores.', 1, '2023-11-14 19:04:29', '2023-11-14 20:40:38', NULL);

-- Dumping data for table photo.service_image: ~4 rows (approximately)
INSERT INTO `service_image` (`id`, `order_id`, `order_service_id`, `image_path`, `type`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, 'Normal User/6862478/Basic/Basic_yASvxDLGTOlZdmnHzjWrmKlvKVOZinFcKZ9AtHTA.png', 'main', '2023-11-14 22:16:57', '2023-11-14 22:16:57'),
	(2, 3, 1, 'Normal User/8373993/Basic/Basic_C695JAZZSr9tuioOBRawnb6PSEzxewGpFHYm0EEw.png', 'main', '2023-11-14 22:19:07', '2023-11-14 22:19:07'),
	(3, 4, 1, 'Normal User/3467715/Basic/Basic_1z2czF8NM3SYdVQ6ZhB8pBxXgajTaaQl9kSoVm9I.txt', 'main', '2023-11-14 22:48:24', '2023-11-14 22:48:24'),
	(4, 5, 1, 'Normal User/7327171/Basic/Basic_RthSUlfuBjCzIdIhxWCI1Gu5RTxFDek4ghmOrsQX.jpg', 'main', '2023-11-17 11:28:07', '2023-11-17 11:28:07');

-- Dumping data for table photo.settings: ~0 rows (approximately)
INSERT INTO `settings` (`id`, `name`, `phone`, `whatsapp`, `email`, `facebook`, `twitter`, `instagram`, `notes`, `notes1`, `notes2`, `notes3`, `notes4`, `notes5`, `notes6`, `notes7`, `created_at`, `updated_at`) VALUES
	(1, 'Gerald Wilkinson', '1-586-531-8361', '+1 (424) 888-0848', 'hane.gunnar@hotmail.com', 'http://www.predovic.com/qui-corporis-officia-ullam-est-autem-voluptas.html', 'http://www.hoeger.com/tenetur-voluptas-sunt-labore-laborum-modi-est', 'http://mraz.org/laudantium-unde-qui-est-mollitia-ratione-ipsum-cum', 'Nihil hic saepe velit optio temporibus. Maxime atque accusamus officiis aut sed voluptas ut. Voluptatem error adipisci et nam.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-14 19:04:27', '2023-11-14 19:04:27');

-- Dumping data for table photo.sliders: ~2 rows (approximately)
INSERT INTO `sliders` (`id`, `name`, `notes`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Aisha Krajcik', 'Id nisi repellat sapiente nesciunt. Voluptas distinctio est enim sit et quo blanditiis neque. Sint eligendi possimus quis est quaerat qui.', 1, '2023-11-14 19:04:28', '2023-11-14 20:42:22'),
	(2, 'Adrienne Hand', 'Consectetur aut ullam adipisci neque non. Earum aliquid consequuntur autem voluptas ab est earum. Quaerat animi explicabo quis aut. Sint et sit repellendus natus nulla.', 1, '2023-11-14 19:04:28', '2023-11-14 20:41:57');

-- Dumping data for table photo.slides: ~2 rows (approximately)
INSERT INTO `slides` (`id`, `name`, `notes`, `status`, `created_at`, `updated_at`, `url`, `note1`, `note2`, `note3`, `note4`, `note5`) VALUES
	(2, 'slide', 'Main Gallery note Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere voluptatibus consequuntur iusto excepturi? Ab qui dolorem consequuntur, sint vitae nam dignissimos, praesentium magnam maiores consectetur nesciunt! Perferendis consequuntur atque suscipit.', 1, '2023-11-14 20:09:25', '2023-11-14 20:27:05', NULL, NULL, NULL, NULL, NULL, NULL),
	(3, 'slide2', 'slide2 note', 1, '2023-11-14 20:14:55', '2023-11-14 20:14:55', NULL, NULL, NULL, NULL, NULL, NULL);

-- Dumping data for table photo.tours: ~4 rows (approximately)
INSERT INTO `tours` (`id`, `name`, `type`, `link`, `created_at`, `updated_at`, `order`) VALUES
	(13, 'Step 1: Click order page and enter required data', 'image', NULL, '2023-11-28 08:41:50', '2023-11-28 08:41:50', '1'),
	(14, 'Step 2: Add your files then copy & paste url link', 'image', NULL, '2023-11-28 08:42:17', '2023-11-28 08:42:17', '2'),
	(15, 'Step 3: Select link & cilck transfer & wait uploading', 'image', NULL, '2023-11-28 08:42:46', '2023-11-28 08:42:46', '3'),
	(16, 'Video tour how to make an order', 'video', 'https://www.youtube.com/watch?v=YwyPW2x2lUw&t=4s', '2023-11-28 08:44:44', '2023-11-28 08:44:44', '4');

-- Dumping data for table photo.users: ~3 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `type`, `status`, `email_verified_at`, `password`, `phone`, `remember_token`, `created_at`, `updated_at`, `website`) VALUES
	(1, 'Normal User', 'user@app.com', 'user', 1, NULL, '$2y$10$AVL7zhlFow31.erEJfe73Ofz.OBCDhHbdsInNREBaKqmTsfCAyuDa', NULL, NULL, '2023-11-14 19:04:26', '2023-11-14 19:04:26', NULL),
	(2, 'General User', 'general@app.com', 'general', 1, NULL, '$2y$10$P3g9hgJY.NU31tJKwMStdOVu8hF2yK5DTcRdjGIZMJcdxDS1Yhpi2', NULL, NULL, '2023-11-14 19:04:26', '2023-11-14 19:04:26', NULL),
	(3, 'xxxxxxxxx', 'x@x.com', 'user', 1, NULL, '$2y$10$lWdrKEzt.gf98WP9lu0veOH0BQnUnQU8GooEIlvHUlv8yA1nO3k7y', NULL, NULL, '2023-11-18 12:09:39', '2023-11-18 12:15:07', 'aaaaaa.com');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
