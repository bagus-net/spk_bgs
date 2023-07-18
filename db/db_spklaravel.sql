/*
 Navicat Premium Data Transfer

 Source Server         : bagus
 Source Server Type    : MySQL
 Source Server Version : 50742
 Source Host           : localhost:3306
 Source Schema         : db_spklaravel

 Target Server Type    : MySQL
 Target Server Version : 50742
 File Encoding         : 65001

 Date: 18/07/2023 14:42:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for alternatives
-- ----------------------------
DROP TABLE IF EXISTS `alternatives`;
CREATE TABLE `alternatives`  (
  `id_alternatif` int(10) NOT NULL AUTO_INCREMENT,
  `nama_alternatif` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_alternatif`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of alternatives
-- ----------------------------
INSERT INTO `alternatives` VALUES (4, 'PC Rakitan Home & School INTEL |P.G G6405| - | 8GB | 120gbSSD | 6 BLN');
INSERT INTO `alternatives` VALUES (5, 'PC Rakitan Home & School AMD | R3 3200G | - | 8GB |120gbSSD | 6 BLN');
INSERT INTO `alternatives` VALUES (6, 'PC Rakitan Admin & Office AMD | R3 3200G | - | 8GB |120gbSSD | 6 BLN');
INSERT INTO `alternatives` VALUES (7, 'PC Rakitan Medium AMD | R3 4350G | - | 8GB | 256gbSSD| 6 BLN');
INSERT INTO `alternatives` VALUES (8, 'PC Rakitan Enter Upstream AMD | R3 3200G | - | 8GB |256gbSSD | 6 BLN');
INSERT INTO `alternatives` VALUES (9, 'IMBA Legacy PC | i5-750 | GT 7302gb | 8GB | 120gbSSD | Multimedia Desktop | 6 BLN');
INSERT INTO `alternatives` VALUES (10, 'Mini PC Haswel Gen 4 | i3-4160 | - | 8GB | 512gbSSD | 6 BLN');
INSERT INTO `alternatives` VALUES (11, 'PC Gaming |P.G G6405| SSD 240Gb | Ram 8Gb | VGA 2GB DDR5 | 6 BLN');
INSERT INTO `alternatives` VALUES (12, 'Pc Rakitan Corei3 | i3-4130 | GT1030 | 8GB | 256gbSSD | 6 BLN');
INSERT INTO `alternatives` VALUES (13, 'PC GAMING RAKITAN OFFICE|i3-540|VGA 2GB|8GB|120GB | 6 BLN');

-- ----------------------------
-- Table structure for criterias
-- ----------------------------
DROP TABLE IF EXISTS `criterias`;
CREATE TABLE `criterias`  (
  `id_kriteria` int(10) NOT NULL AUTO_INCREMENT,
  `kode` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_kriteria` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `atribut` enum('1','2') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bobot` enum('1','2','3','4','5') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_kriteria`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of criterias
-- ----------------------------
INSERT INTO `criterias` VALUES (1, 'c1', 'processor', '1', '5');
INSERT INTO `criterias` VALUES (2, 'c2', 'Ram', '1', '3');
INSERT INTO `criterias` VALUES (3, 'c3', 'Harga', '2', '5');
INSERT INTO `criterias` VALUES (4, 'c4', 'Storage', '1', '3');
INSERT INTO `criterias` VALUES (5, 'c5', 'VGA', '1', '2');
INSERT INTO `criterias` VALUES (6, 'c6', 'Garansi', '1', '3');

-- ----------------------------
-- Table structure for hasils
-- ----------------------------
DROP TABLE IF EXISTS `hasils`;
CREATE TABLE `hasils`  (
  `id_hasil` int(11) NOT NULL AUTO_INCREMENT,
  `alternatif` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hasil` float NULL DEFAULT NULL,
  PRIMARY KEY (`id_hasil`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hasils
-- ----------------------------
INSERT INTO `hasils` VALUES (1, '4', 0.0966049);
INSERT INTO `hasils` VALUES (2, '5', 0.0993524);
INSERT INTO `hasils` VALUES (3, '6', 0.0993524);
INSERT INTO `hasils` VALUES (4, '7', 0.0844467);
INSERT INTO `hasils` VALUES (5, '8', 0.0844467);
INSERT INTO `hasils` VALUES (6, '9', 0.10726);
INSERT INTO `hasils` VALUES (7, '10', 0.116235);
INSERT INTO `hasils` VALUES (8, '11', 0.100408);
INSERT INTO `hasils` VALUES (9, '12', 0.0937611);
INSERT INTO `hasils` VALUES (10, '13', 0.118132);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE,
  INDEX `password_resets_token_index`(`token`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for relations
-- ----------------------------
DROP TABLE IF EXISTS `relations`;
CREATE TABLE `relations`  (
  `id_relasi` int(10) NOT NULL AUTO_INCREMENT,
  `alternatif` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kriteria` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nilai` float NOT NULL,
  PRIMARY KEY (`id_relasi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 131 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of relations
-- ----------------------------
INSERT INTO `relations` VALUES (51, '11', '1', 2);
INSERT INTO `relations` VALUES (52, '11', '2', 3);
INSERT INTO `relations` VALUES (53, '11', '3', 2);
INSERT INTO `relations` VALUES (54, '11', '4', 2);
INSERT INTO `relations` VALUES (55, '11', '5', 3);
INSERT INTO `relations` VALUES (56, '12', '1', 3);
INSERT INTO `relations` VALUES (57, '12', '2', 3);
INSERT INTO `relations` VALUES (58, '12', '3', 1);
INSERT INTO `relations` VALUES (59, '12', '4', 2);
INSERT INTO `relations` VALUES (60, '12', '5', 3);
INSERT INTO `relations` VALUES (61, '13', '1', 3);
INSERT INTO `relations` VALUES (62, '13', '2', 3);
INSERT INTO `relations` VALUES (63, '13', '3', 4);
INSERT INTO `relations` VALUES (64, '13', '4', 1);
INSERT INTO `relations` VALUES (65, '13', '5', 3);
INSERT INTO `relations` VALUES (66, '17', '1', 2);
INSERT INTO `relations` VALUES (67, '17', '2', 3);
INSERT INTO `relations` VALUES (68, '17', '3', 4);
INSERT INTO `relations` VALUES (69, '17', '4', 1);
INSERT INTO `relations` VALUES (70, '17', '5', 1);
INSERT INTO `relations` VALUES (71, '18', '1', 3);
INSERT INTO `relations` VALUES (72, '18', '2', 3);
INSERT INTO `relations` VALUES (73, '18', '3', 2);
INSERT INTO `relations` VALUES (74, '18', '4', 1);
INSERT INTO `relations` VALUES (75, '18', '5', 1);
INSERT INTO `relations` VALUES (76, '1', '1', 2);
INSERT INTO `relations` VALUES (77, '1', '2', 3);
INSERT INTO `relations` VALUES (78, '1', '3', 4);
INSERT INTO `relations` VALUES (79, '1', '4', 5);
INSERT INTO `relations` VALUES (80, '1', '5', 4);
INSERT INTO `relations` VALUES (81, '3', '1', 4);
INSERT INTO `relations` VALUES (82, '3', '2', 3);
INSERT INTO `relations` VALUES (83, '3', '3', 3);
INSERT INTO `relations` VALUES (84, '3', '4', 2);
INSERT INTO `relations` VALUES (85, '3', '5', 2);
INSERT INTO `relations` VALUES (86, '4', '1', 2);
INSERT INTO `relations` VALUES (87, '4', '2', 3);
INSERT INTO `relations` VALUES (88, '4', '3', 4);
INSERT INTO `relations` VALUES (89, '4', '4', 1);
INSERT INTO `relations` VALUES (90, '4', '5', 1);
INSERT INTO `relations` VALUES (91, '5', '1', 3);
INSERT INTO `relations` VALUES (92, '5', '2', 3);
INSERT INTO `relations` VALUES (93, '5', '3', 3);
INSERT INTO `relations` VALUES (94, '5', '4', 1);
INSERT INTO `relations` VALUES (95, '5', '5', 1);
INSERT INTO `relations` VALUES (96, '6', '1', 3);
INSERT INTO `relations` VALUES (97, '6', '2', 3);
INSERT INTO `relations` VALUES (98, '6', '3', 3);
INSERT INTO `relations` VALUES (99, '6', '4', 1);
INSERT INTO `relations` VALUES (100, '6', '5', 1);
INSERT INTO `relations` VALUES (101, '7', '1', 3);
INSERT INTO `relations` VALUES (102, '7', '2', 3);
INSERT INTO `relations` VALUES (103, '7', '3', 1);
INSERT INTO `relations` VALUES (104, '7', '4', 2);
INSERT INTO `relations` VALUES (105, '7', '5', 1);
INSERT INTO `relations` VALUES (106, '8', '1', 3);
INSERT INTO `relations` VALUES (107, '8', '2', 3);
INSERT INTO `relations` VALUES (108, '8', '3', 1);
INSERT INTO `relations` VALUES (109, '8', '4', 2);
INSERT INTO `relations` VALUES (110, '8', '5', 1);
INSERT INTO `relations` VALUES (111, '9', '1', 4);
INSERT INTO `relations` VALUES (112, '9', '2', 3);
INSERT INTO `relations` VALUES (113, '9', '3', 2);
INSERT INTO `relations` VALUES (114, '9', '4', 1);
INSERT INTO `relations` VALUES (115, '9', '5', 3);
INSERT INTO `relations` VALUES (116, '10', '1', 3);
INSERT INTO `relations` VALUES (117, '10', '2', 3);
INSERT INTO `relations` VALUES (118, '10', '3', 3);
INSERT INTO `relations` VALUES (119, '10', '4', 3);
INSERT INTO `relations` VALUES (120, '10', '5', 1);
INSERT INTO `relations` VALUES (121, '4', '6', 3);
INSERT INTO `relations` VALUES (122, '5', '6', 3);
INSERT INTO `relations` VALUES (123, '6', '6', 3);
INSERT INTO `relations` VALUES (124, '7', '6', 3);
INSERT INTO `relations` VALUES (125, '9', '6', 3);
INSERT INTO `relations` VALUES (126, '11', '6', 3);
INSERT INTO `relations` VALUES (127, '10', '6', 3);
INSERT INTO `relations` VALUES (128, '12', '6', 3);
INSERT INTO `relations` VALUES (129, '13', '6', 3);
INSERT INTO `relations` VALUES (130, '8', '6', 3);

-- ----------------------------
-- Table structure for results
-- ----------------------------
DROP TABLE IF EXISTS `results`;
CREATE TABLE `results`  (
  `id_result` int(10) NOT NULL AUTO_INCREMENT,
  `alternatif` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hasil` float NOT NULL,
  PRIMARY KEY (`id_result`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 65 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of results
-- ----------------------------
INSERT INTO `results` VALUES (55, '4', 0.520384);
INSERT INTO `results` VALUES (56, '5', 0.467545);
INSERT INTO `results` VALUES (57, '6', 0.467545);
INSERT INTO `results` VALUES (58, '7', 0.272589);
INSERT INTO `results` VALUES (59, '8', 0.272589);
INSERT INTO `results` VALUES (60, '9', 0.458697);
INSERT INTO `results` VALUES (61, '10', 0.627739);
INSERT INTO `results` VALUES (62, '11', 0.375228);
INSERT INTO `results` VALUES (63, '12', 0.33541);
INSERT INTO `results` VALUES (64, '13', 0.617689);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jabatan` enum('admin','kepala_bidang') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (3, 'bagus', 'bagussetyawan551@gmail.com', 'admin', '$2y$10$W7ViBUBAWZ1wTHr/0vIctuv5BpSYcpBIUsSeSad.lQhoMTdiT5iUW', 'zctuOXZZLtDJTM5f0OLdyPL787IhYPMLHXLhUEHvm9OOi9YEKfETHtHRr38i', '2023-06-05 10:42:27', '2023-06-27 13:43:46');
INSERT INTO `users` VALUES (4, 'user', 'user@gmail.com', 'admin', '$2y$10$dxkY41cJ8Xr6JzDY9TKEMO97.kerqctm91hru.Zv.IHO0zaDGYQIu', NULL, '2023-06-05 11:45:24', '2023-06-05 11:45:24');
INSERT INTO `users` VALUES (6, 'raka', 'raka@gmail.com', 'admin', '$2y$10$gvMpyqTnDvi/pYBlEnloUOwtWm2ivdIKuDQklnWLxPu1eLNAGWn1e', NULL, '2023-06-27 13:43:02', '2023-06-27 13:43:02');

SET FOREIGN_KEY_CHECKS = 1;
