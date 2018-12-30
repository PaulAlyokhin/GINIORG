/*
 Navicat Premium Data Transfer

 Source Server         : www
 Source Server Type    : MySQL
 Source Server Version : 100135
 Source Host           : localhost:3306
 Source Schema         : gini

 Target Server Type    : MySQL
 Target Server Version : 100135
 File Encoding         : 65001

 Date: 30/12/2018 13:45:51
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for activity
-- ----------------------------
DROP TABLE IF EXISTS `activity`;
CREATE TABLE `activity`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `activity_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of activity
-- ----------------------------
INSERT INTO `activity` VALUES (1, 'Instruction/Teaching(30 IDU\'s maximum)', '2018-12-26 02:07:30.557000', NULL);
INSERT INTO `activity` VALUES (2, 'Continuing Education(40 IDU\'s maximum)', '2018-12-26 02:07:54.417000', NULL);

-- ----------------------------
-- Table structure for blog
-- ----------------------------
DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(255) NOT NULL DEFAULT 1,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `blog_media` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'standard',
  `video_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `what_for` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'News',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of blog
-- ----------------------------
INSERT INTO `blog` VALUES (3, 1, 'admin@gini.org', 'Blog testing', 'testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content testing content', 1, '2018-12-28 06:04:58.276800', '2018-12-27 23:34:58.000000', 'files/blog/3', 'standard', NULL, 'News');
INSERT INTO `blog` VALUES (8, 1, 'admin@gini.org', 'testing', 'Slideshow Blog\r\n\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.', 1, '2018-12-30 10:48:52.903000', '2018-12-30 04:17:30.000000', 'files/blog/8', 'slideshow', NULL, 'News');
INSERT INTO `blog` VALUES (9, 1, 'admin@gini.org', 'Slideshow Blog', 'lorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.', 1, '2018-12-30 10:50:00.468000', '2018-12-30 04:20:00.000000', 'files/blog/9', 'slideshow', NULL, 'News');
INSERT INTO `blog` VALUES (10, 1, 'admin@gini.org', 'Youtube Video Blog', 'Youtube Video Blog testing\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.', 1, '2018-12-30 04:21:28.000000', '2018-12-30 04:21:28.000000', NULL, 'youtube', 'https://www.youtube.com/watch?v=EU7PRmCpx-0&list=PLillGF-RfqbYhQsN5WMXy6VsDMKGadrJ-&index=1', 'News');
INSERT INTO `blog` VALUES (11, 1, 'admin@gini.org', 'Youtube Video Blog Testing', 'Youtube Video Blog Testing\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.', 1, '2018-12-30 04:22:07.000000', '2018-12-30 04:22:07.000000', NULL, 'youtube', 'https://www.youtube.com/watch?v=sLFNVXY0APk&index=3&list=PLillGF-RfqbYhQsN5WMXy6VsDMKGadrJ-', 'News');
INSERT INTO `blog` VALUES (12, 1, 'admin@gini.org', 'Vimeo Blog Testing', 'Vimeo Blog testing', 1, '2018-12-30 04:23:25.000000', '2018-12-30 04:23:25.000000', NULL, 'vimeo', 'https://vimeo.com/253693616', 'News');
INSERT INTO `blog` VALUES (13, 1, 'admin@gini.org', 'Vimeo Video Blog testing', 'lorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.', 1, '2018-12-30 04:24:38.000000', '2018-12-30 04:24:38.000000', NULL, 'vimeo', 'https://vimeo.com/184479653', 'News');
INSERT INTO `blog` VALUES (14, 1, 'admin@gini.org', 'Text Blog TEsting', 'lorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.', 1, '2018-12-30 04:25:01.000000', '2018-12-30 04:25:01.000000', NULL, 'text', NULL, 'News');
INSERT INTO `blog` VALUES (15, 1, 'admin@gini.org', 'Blog testing', 'lorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.', 1, '2018-12-30 04:25:13.000000', '2018-12-30 04:25:13.000000', NULL, 'text', NULL, 'News');
INSERT INTO `blog` VALUES (16, 1, 'admin@gini.org', 'Standard Blog testing', 'lorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.\r\nlorem ipsum dolor sit amet, at nonumy mentitum nominati vim. No vis iriure eligendi, qui no nulla ornatus dolorem.', 1, '2018-12-30 10:55:44.143000', '2018-12-30 04:25:44.000000', 'files/blog/16', 'standard', NULL, 'News');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category_slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (1, 'Obtaining GInI Certifications', 'obtaining', '2018-12-28 06:26:45.447800', NULL);
INSERT INTO `category` VALUES (2, 'Certificaton Exams', 'exam', '2018-12-28 06:26:54.846800', NULL);
INSERT INTO `category` VALUES (3, 'Application Audit', 'audit', '2018-12-28 06:27:03.791800', NULL);
INSERT INTO `category` VALUES (4, 'Maintaining GInI Certifications', 'maintaining', '2018-12-28 06:27:16.001800', NULL);
INSERT INTO `category` VALUES (5, 'Innovation Development Units-IDUS', 'idus', '2018-12-28 06:27:36.756800', NULL);
INSERT INTO `category` VALUES (6, 'Innovation Development System IDS for Online IDU Reporting', 'ids', '2018-12-28 06:28:04.069800', NULL);
INSERT INTO `category` VALUES (7, 'Certification Suspensions', 'suspensions', '2018-12-28 06:28:14.927800', NULL);

-- ----------------------------
-- Table structure for certificates
-- ----------------------------
DROP TABLE IF EXISTS `certificates`;
CREATE TABLE `certificates`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `certificate_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `acronym` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `validity` int(255) NOT NULL,
  `IDU` int(255) NULL DEFAULT 1,
  `IDU_num` int(11) NULL DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `page` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of certificates
-- ----------------------------
INSERT INTO `certificates` VALUES (1, 'Authorized Innovation Assessor', 'AInA®', '07', 1, 0, NULL, '2018-12-28 15:48:56.442600', NULL, 'AInA');
INSERT INTO `certificates` VALUES (2, 'Certified Chief Innovation Officer', 'CCInO®', '05', 2, 1, NULL, '2018-12-28 15:48:55.455600', '2018-12-24 20:38:58.000000', 'CCInO');
INSERT INTO `certificates` VALUES (3, 'Certified Design Thinking Professional', 'CDTP®', '02', 1, 1, NULL, '2018-12-28 15:48:54.901600', '2018-12-24 20:40:26.000000', 'CDTP');
INSERT INTO `certificates` VALUES (4, 'Certified Innovation Professional', 'CInP®', '01', 1, 1, NULL, '2018-12-28 15:48:54.079600', '2018-12-24 20:41:02.000000', 'CInP');
INSERT INTO `certificates` VALUES (5, 'Certified Innovation Strategist', 'CInS®', '04', 1, 1, NULL, '2018-12-28 15:48:53.586600', '2018-12-24 20:41:42.000000', 'CInS');
INSERT INTO `certificates` VALUES (6, 'Certified Innovation Organization', 'CInOrg®', '06', 2, 1, NULL, '2018-12-28 15:48:52.604600', '2018-12-24 20:42:22.000000', 'CInOrg');

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES (1, 1, 3, 'testing comment', '2018-12-30 05:32:32.000000', '2018-12-30 05:32:32.000000');

-- ----------------------------
-- Table structure for countries
-- ----------------------------
DROP TABLE IF EXISTS `countries`;
CREATE TABLE `countries`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` char(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `iso3` char(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `iso_numeric` int(10) UNSIGNED NULL DEFAULT NULL,
  `fips` char(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `asciiname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `capital` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `area` int(10) UNSIGNED NULL DEFAULT NULL,
  `population` int(10) UNSIGNED NULL DEFAULT NULL,
  `continent_code` char(4) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `tld` char(4) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `currency_code` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `postal_code_format` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `postal_code_regex` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `languages` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `neighbours` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `equivalent_fips_code` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `background_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `admin_type` enum('0','1','2') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `admin_field_active` tinyint(1) UNSIGNED NULL DEFAULT 0,
  `active` tinyint(1) NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `middle_east` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `code`(`code`) USING BTREE,
  INDEX `active`(`active`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 253 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of countries
-- ----------------------------
INSERT INTO `countries` VALUES (1, 'AD', 'AND', 20, 'AN', 'Andorra', 'Andorra', 'Andorra la Vella', 468, 84000, 'EU', '.ad', 'EUR', '376', 'AD###', '^(?:AD)*(d{3})$', 'ca', 'ES,FR', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (2, 'AE', 'ARE', 784, 'AE', 'al-Imārāt', 'United Arab Emirates', 'Abu Dhabi', 82880, 4975593, 'AS', '.ae', 'AED', '971', '', '', 'ar-AE,fa,en,hi,ur', 'SA,OM', '', NULL, '0', 0, 0, NULL, NULL, '1');
INSERT INTO `countries` VALUES (3, 'AF', 'AFG', 4, 'AF', 'Afġānistān', 'Afghanistan', 'Kabul', 647500, 29121286, 'AS', '.af', 'AFN', '93', '', '', 'fa-AF,ps,uz-AF,tk', 'TM,CN,IR,TJ,PK,UZ', '', NULL, '0', 0, 0, NULL, NULL, '1');
INSERT INTO `countries` VALUES (4, 'AG', 'ATG', 28, 'AC', 'Antigua and Barbuda', 'Antigua and Barbuda', 'St. John\'s', 443, 86754, 'NA', '.ag', 'XCD', '+1-268', '', '', 'en-AG', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (5, 'AI', 'AIA', 660, 'AV', 'Anguilla', 'Anguilla', 'The Valley', 102, 13254, 'NA', '.ai', 'XCD', '+1-264', '', '', 'en-AI', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (6, 'AL', 'ALB', 8, 'AL', 'Shqipëria', 'Albania', 'Tirana', 28748, 2986952, 'EU', '.al', 'ALL', '355', '', '', 'sq,el', 'MK,GR,ME,RS,XK', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (7, 'AM', 'ARM', 51, 'AM', 'Hayastan', 'Armenia', 'Yerevan', 29800, 2968000, 'AS', '.am', 'AMD', '374', '######', '^(d{6})$', 'hy', 'GE,IR,AZ,TR', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (8, 'AN', 'ANT', 530, 'NT', 'Netherlands Antilles', 'Netherlands Antilles', 'Willemstad', 960, 136197, 'NA', '.an', 'ANG', '599', '', '', 'nl-AN,en,es', 'GP', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (9, 'AO', 'AGO', 24, 'AO', 'Angola', 'Angola', 'Luanda', 1246700, 13068161, 'AF', '.ao', 'AOA', '244', '', '', 'pt-AO', 'CD,NA,ZM,CG', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (10, 'AQ', 'ATA', 10, 'AY', 'Antarctica', 'Antarctica', '', 14000000, 0, 'AN', '.aq', '', '', '', '', '', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (11, 'AR', 'ARG', 32, 'AR', 'Argentina', 'Argentina', 'Buenos Aires', 2766890, 41343201, 'SA', '.ar', 'ARS', '54', '@####@@@', '^([A-Z]d{4}[A-Z]{3})$', 'es-AR,en,it,de,fr,gn', 'CL,BO,UY,PY,BR', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (12, 'AS', 'ASM', 16, 'AQ', 'American Samoa', 'American Samoa', 'Pago Pago', 199, 57881, 'OC', '.as', 'USD', '+1-684', '', '', 'en-AS,sm,to', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (13, 'AT', 'AUT', 40, 'AU', 'Österreich', 'Austria', 'Vienna', 83858, 8205000, 'EU', '.at', 'EUR', '43', '####', '^(d{4})$', 'de-AT,hr,hu,sl', 'CH,DE,HU,SK,CZ,IT,SI,LI', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (14, 'AU', 'AUS', 36, 'AS', 'Australia', 'Australia', 'Canberra', 7686850, 21515754, 'OC', '.au', 'AUD', '61', '####', '^(d{4})$', 'en-AU', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (15, 'AW', 'ABW', 533, 'AA', 'Aruba', 'Aruba', 'Oranjestad', 193, 71566, 'NA', '.aw', 'AWG', '297', '', '', 'nl-AW,es,en', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (16, 'AX', 'ALA', 248, '', 'Aland Islands', 'Aland Islands', 'Mariehamn', 1580, 26711, 'EU', '.ax', 'EUR', '+358-18', '#####', '^(?:FI)*(d{5})$', 'sv-AX', '', 'FI', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (17, 'AZ', 'AZE', 31, 'AJ', 'Azərbaycan', 'Azerbaijan', 'Baku', 86600, 8303512, 'AS', '.az', 'AZN', '994', 'AZ ####', '^(?:AZ)*(d{4})$', 'az,ru,hy', 'GE,IR,AM,TR,RU', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (18, 'BA', 'BIH', 70, 'BK', 'Bosna i Hercegovina', 'Bosnia and Herzegovina', 'Sarajevo', 51129, 4590000, 'EU', '.ba', 'BAM', '387', '#####', '^(d{5})$', 'bs,hr-BA,sr-BA', 'HR,ME,RS', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (19, 'BB', 'BRB', 52, 'BB', 'Barbados', 'Barbados', 'Bridgetown', 431, 285653, 'NA', '.bb', 'BBD', '+1-246', 'BB#####', '^(?:BB)*(d{5})$', 'en-BB', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (20, 'BD', 'BGD', 50, 'BG', 'Bāṅlādēś', 'Bangladesh', 'Dhaka', 144000, 156118464, 'AS', '.bd', 'BDT', '880', '####', '^(d{4})$', 'bn-BD,en', 'MM,IN', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (21, 'BE', 'BEL', 56, 'BE', 'Belgique', 'Belgium', 'Brussels', 30510, 10403000, 'EU', '.be', 'EUR', '32', '####', '^(d{4})$', 'nl-BE,fr-BE,de-BE', 'DE,NL,LU,FR', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (22, 'BF', 'BFA', 854, 'UV', 'Burkina Faso', 'Burkina Faso', 'Ouagadougou', 274200, 16241811, 'AF', '.bf', 'XOF', '226', '', '', 'fr-BF', 'NE,BJ,GH,CI,TG,ML', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (23, 'BG', 'BGR', 100, 'BU', 'Bŭlgarija', 'Bulgaria', 'Sofia', 110910, 7148785, 'EU', '.bg', 'BGN', '359', '####', '^(d{4})$', 'bg,tr-BG,rom', 'MK,GR,RO,TR,RS', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (24, 'BH', 'BHR', 48, 'BA', 'al-Baḥrayn', 'Bahrain', 'Manama', 665, 738004, 'AS', '.bh', 'BHD', '973', '####|###', '^(d{3}d?)$', 'ar-BH,en,fa,ur', '', '', NULL, '0', 0, 0, NULL, NULL, '1');
INSERT INTO `countries` VALUES (25, 'BI', 'BDI', 108, 'BY', 'Burundi', 'Burundi', 'Bujumbura', 27830, 9863117, 'AF', '.bi', 'BIF', '257', '', '', 'fr-BI,rn', 'TZ,CD,RW', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (26, 'BJ', 'BEN', 204, 'BN', 'Bénin', 'Benin', 'Porto-Novo', 112620, 9056010, 'AF', '.bj', 'XOF', '+229', '', '', 'fr-BJ', 'NE,TG,BF,NG', '', NULL, '0', 0, 0, NULL, '2016-05-10 03:25:29', NULL);
INSERT INTO `countries` VALUES (27, 'BL', 'BLM', 652, 'TB', 'Saint Barthelemy', 'Saint Barthelemy', 'Gustavia', 21, 8450, 'NA', '.gp', 'EUR', '590', '### ###', '', 'fr', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (28, 'BM', 'BMU', 60, 'BD', 'Bermuda', 'Bermuda', 'Hamilton', 53, 65365, 'NA', '.bm', 'BMD', '+1-441', '@@ ##', '^([A-Z]{2}d{2})$', 'en-BM,pt', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (29, 'BN', 'BRN', 96, 'BX', 'Brunei Darussalam', 'Brunei', 'Bandar Seri Begawan', 5770, 395027, 'AS', '.bn', 'BND', '673', '@@####', '^([A-Z]{2}d{4})$', 'ms-BN,en-BN', 'MY', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (30, 'BO', 'BOL', 68, 'BL', 'Bolivia', 'Bolivia', 'Sucre', 1098580, 9947418, 'SA', '.bo', 'BOB', '591', '', '', 'es-BO,qu,ay', 'PE,CL,PY,BR,AR', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (31, 'BQ', 'BES', 535, '', 'Bonaire, Saint Eustatius and Saba ', 'Bonaire, Saint Eustatius and Saba ', '', 328, 18012, 'NA', '.bq', 'USD', '599', '', '', 'nl,pap,en', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (32, 'BR', 'BRA', 76, 'BR', 'Brasil', 'Brazil', 'Brasilia', 8511965, 201103330, 'SA', '.br', 'BRL', '55', '#####-###', '^(d{8})$', 'pt-BR,es,en,fr', 'SR,PE,BO,UY,GY,PY,GF,VE,CO,AR', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (33, 'BS', 'BHS', 44, 'BF', 'Bahamas', 'Bahamas', 'Nassau', 13940, 301790, 'NA', '.bs', 'BSD', '+1-242', '', '', 'en-BS', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (34, 'BT', 'BTN', 64, 'BT', 'Druk-yul', 'Bhutan', 'Thimphu', 47000, 699847, 'AS', '.bt', 'BTN', '975', '', '', 'dz', 'CN,IN', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (35, 'BV', 'BVT', 74, 'BV', 'Bouvet Island', 'Bouvet Island', '', 49, 0, 'AN', '.bv', 'NOK', '', '', '', '', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (36, 'BW', 'BWA', 72, 'BC', 'Botswana', 'Botswana', 'Gaborone', 600370, 2029307, 'AF', '.bw', 'BWP', '267', '', '', 'en-BW,tn-BW', 'ZW,ZA,NA', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (37, 'BY', 'BLR', 112, 'BO', 'Biełaruś', 'Belarus', 'Minsk', 207600, 9685000, 'EU', '.by', 'BYR', '375', '######', '^(d{6})$', 'be,ru', 'PL,LT,UA,RU,LV', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (38, 'BZ', 'BLZ', 84, 'BH', 'Belize', 'Belize', 'Belmopan', 22966, 314522, 'NA', '.bz', 'BZD', '501', '', '', 'en-BZ,es', 'GT,MX', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (39, 'CA', 'CAN', 124, 'CA', 'Canada', 'Canada', 'Ottawa', 9984670, 33679000, 'NA', '.ca', 'CAD', '1', '@#@ #@#', '^([ABCEGHJKLMNPRSTVXY]d[ABCEGHJKLMNPRSTVWXYZ]) ?(d[ABCEGHJKLMNPRSTVWXYZ]d)$ ', 'en-CA,fr-CA,iu', 'US', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (40, 'CC', 'CCK', 166, 'CK', 'Cocos Islands', 'Cocos Islands', 'West Island', 14, 628, 'AS', '.cc', 'AUD', '61', '', '', 'ms-CC,en', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (41, 'CD', 'COD', 180, 'CG', 'RDC', 'Democratic Republic of the Congo', 'Kinshasa', 2345410, 70916439, 'AF', '.cd', 'CDF', '243', '', '', 'fr-CD,ln,kg', 'TZ,CF,SS,RW,ZM,BI,UG,CG,AO', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (42, 'CF', 'CAF', 140, 'CT', 'Centrafrique', 'Central African Republic', 'Bangui', 622984, 4844927, 'AF', '.cf', 'XAF', '236', '', '', 'fr-CF,sg,ln,kg', 'TD,SD,CD,SS,CM,CG', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (43, 'CG', 'COG', 178, 'CF', 'Congo', 'Republic of the Congo', 'Brazzaville', 342000, 3039126, 'AF', '.cg', 'XAF', '242', '', '', 'fr-CG,kg,ln-CG', 'CF,GA,CD,CM,AO', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (44, 'CH', 'CHE', 756, 'SZ', 'Switzerland', 'Switzerland', 'Berne', 41290, 7581000, 'EU', '.ch', 'CHF', '41', '####', '^(d{4})$', 'de-CH,fr-CH,it-CH,rm', 'DE,IT,LI,FR,AT', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (45, 'CI', 'CIV', 384, 'IV', 'Côte d\'Ivoire', 'Ivory Coast', 'Yamoussoukro', 322460, 21058798, 'AF', '.ci', 'XOF', '225', '', '', 'fr-CI', 'LR,GH,GN,BF,ML', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (46, 'CK', 'COK', 184, 'CW', 'Cook Islands', 'Cook Islands', 'Avarua', 240, 21388, 'OC', '.ck', 'NZD', '682', '', '', 'en-CK,mi', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (47, 'CL', 'CHL', 152, 'CI', 'Chile', 'Chile', 'Santiago', 756950, 16746491, 'SA', '.cl', 'CLP', '56', '#######', '^(d{7})$', 'es-CL', 'PE,BO,AR', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (48, 'CM', 'CMR', 120, 'CM', 'Cameroun', 'Cameroon', 'Yaounde', 475440, 19294149, 'AF', '.cm', 'XAF', '237', '', '', 'fr-CM,en-CM', 'TD,CF,GA,GQ,CG,NG', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (49, 'CN', 'CHN', 156, 'CH', 'Zhōngguó', 'China', 'Beijing', 9596960, 1330044000, 'AS', '.cn', 'CNY', '86', '######', '^(d{6})$', 'zh-CN,yue,wuu,dta,ug,za', 'LA,BT,TJ,KZ,MN,AF,NP,MM,KG,PK,KP,RU,VN,IN', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (50, 'CO', 'COL', 170, 'CO', 'Colombia', 'Colombia', 'Bogota', 1138910, 47790000, 'SA', '.co', 'COP', '57', '', '', 'es-CO', 'EC,PE,PA,BR,VE', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (51, 'CR', 'CRI', 188, 'CS', 'Costa Rica', 'Costa Rica', 'San Jose', 51100, 4516220, 'NA', '.cr', 'CRC', '506', '####', '^(d{4})$', 'es-CR,en', 'PA,NI', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (52, 'CS', 'SCG', 891, 'YI', 'Serbia and Montenegro', 'Serbia and Montenegro', 'Belgrade', 102350, 10829175, 'EU', '.cs', 'RSD', '381', '#####', '^(d{5})$', 'cu,hu,sq,sr', 'AL,HU,MK,RO,HR,BA,BG', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (53, 'CU', 'CUB', 192, 'CU', 'Cuba', 'Cuba', 'Havana', 110860, 11423000, 'NA', '.cu', 'CUP', '53', 'CP #####', '^(?:CP)*(d{5})$', 'es-CU', 'US', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (54, 'CV', 'CPV', 132, 'CV', 'Cabo Verde', 'Cape Verde', 'Praia', 4033, 508659, 'AF', '.cv', 'CVE', '238', '####', '^(d{4})$', 'pt-CV', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (55, 'CW', 'CUW', 531, 'UC', 'Curacao', 'Curacao', ' Willemstad', 444, 141766, 'NA', '.cw', 'ANG', '599', '', '', 'nl,pap', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (56, 'CX', 'CXR', 162, 'KT', 'Christmas Island', 'Christmas Island', 'Flying Fish Cove', 135, 1500, 'AS', '.cx', 'AUD', '61', '####', '^(d{4})$', 'en,zh,ms-CC', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (57, 'CY', 'CYP', 196, 'CY', 'Kýpros (Kıbrıs)', 'Cyprus', 'Nicosia', 9250, 1102677, 'EU', '.cy', 'EUR', '357', '####', '^(d{4})$', 'el-CY,tr-CY,en', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (58, 'CZ', 'CZE', 203, 'EZ', 'Česko', 'Czech Republic', 'Prague', 78866, 10476000, 'EU', '.cz', 'CZK', '420', '### ##', '^(d{5})$', 'cs,sk', 'PL,DE,SK,AT', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (59, 'DE', 'DEU', 276, 'GM', 'Deutschland', 'Germany', 'Berlin', 357021, 81802257, 'EU', '.de', 'EUR', '49', '#####', '^(d{5})$', 'de', 'CH,PL,NL,DK,BE,CZ,LU,FR,AT', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (60, 'DJ', 'DJI', 262, 'DJ', 'Djibouti', 'Djibouti', 'Djibouti', 23000, 740528, 'AF', '.dj', 'DJF', '253', '', '', 'fr-DJ,ar,so-DJ,aa', 'ER,ET,SO', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (61, 'DK', 'DNK', 208, 'DA', 'Danmark', 'Denmark', 'Copenhagen', 43094, 5484000, 'EU', '.dk', 'DKK', '45', '####', '^(d{4})$', 'da-DK,en,fo,de-DK', 'DE', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (62, 'DM', 'DMA', 212, 'DO', 'Dominica', 'Dominica', 'Roseau', 754, 72813, 'NA', '.dm', 'XCD', '+1-767', '', '', 'en-DM', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (63, 'DO', 'DOM', 214, 'DR', 'República Dominicana', 'Dominican Republic', 'Santo Domingo', 48730, 9823821, 'NA', '.do', 'DOP', '+809/829/849', '#####', '^(d{5})$', 'es-DO', 'HT', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (64, 'DZ', 'DZA', 12, 'AG', 'Algérie', 'Algeria', 'Algiers', 2381740, 34586184, 'AF', '.dz', 'DZD', '213', '#####', '^(d{5})$', 'ar-DZ,fr', 'NE,EH,LY,MR,TN,MA,ML', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (65, 'EC', 'ECU', 218, 'EC', 'Ecuador', 'Ecuador', 'Quito', 283560, 14790608, 'SA', '.ec', 'USD', '593', '@####@', '^([a-zA-Z]d{4}[a-zA-Z])$', 'es-EC', 'PE,CO', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (66, 'EE', 'EST', 233, 'EN', 'Eesti', 'Estonia', 'Tallinn', 45226, 1291170, 'EU', '.ee', 'EUR', '372', '#####', '^(d{5})$', 'et,ru', 'RU,LV', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (67, 'EG', 'EGY', 818, 'EG', 'Egypt', 'Egypt', 'Cairo', 1001450, 80471869, 'AF', '.eg', 'EGP', '20', '#####', '^(d{5})$', 'ar-EG,en,fr', 'LY,SD,IL,PS', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (68, 'EH', 'ESH', 732, 'WI', 'aṣ-Ṣaḥrāwīyâ al-ʿArabīyâ', 'Western Sahara', 'El-Aaiun', 266000, 273008, 'AF', '.eh', 'MAD', '212', '', '', 'ar,mey', 'DZ,MR,MA', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (69, 'ER', 'ERI', 232, 'ER', 'Ertrā', 'Eritrea', 'Asmara', 121320, 5792984, 'AF', '.er', 'ERN', '291', '', '', 'aa-ER,ar,tig,kun,ti-ER', 'ET,SD,DJ', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (70, 'ES', 'ESP', 724, 'SP', 'España', 'Spain', 'Madrid', 504782, 46505963, 'EU', '.es', 'EUR', '34', '#####', '^(d{5})$', 'es-ES,ca,gl,eu,oc', 'AD,PT,GI,FR,MA', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (71, 'ET', 'ETH', 231, 'ET', 'Ityoṗya', 'Ethiopia', 'Addis Ababa', 1127127, 88013491, 'AF', '.et', 'ETB', '251', '####', '^(d{4})$', 'am,en-ET,om-ET,ti-ET,so-ET,sid', 'ER,KE,SD,SS,SO,DJ', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (72, 'FI', 'FIN', 246, 'FI', 'Suomi (Finland)', 'Finland', 'Helsinki', 337030, 5244000, 'EU', '.fi', 'EUR', '358', '#####', '^(?:FI)*(d{5})$', 'fi-FI,sv-FI,smn', 'NO,RU,SE', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (73, 'FJ', 'FJI', 242, 'FJ', 'Viti', 'Fiji', 'Suva', 18270, 875983, 'OC', '.fj', 'FJD', '679', '', '', 'en-FJ,fj', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (74, 'FK', 'FLK', 238, 'FK', 'Falkland Islands', 'Falkland Islands', 'Stanley', 12173, 2638, 'SA', '.fk', 'FKP', '500', '', '', 'en-FK', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (75, 'FM', 'FSM', 583, 'FM', 'Micronesia', 'Micronesia', 'Palikir', 702, 107708, 'OC', '.fm', 'USD', '691', '#####', '^(d{5})$', 'en-FM,chk,pon,yap,kos,uli,woe,nkr,kpg', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (76, 'FO', 'FRO', 234, 'FO', 'Føroyar', 'Faroe Islands', 'Torshavn', 1399, 48228, 'EU', '.fo', 'DKK', '298', 'FO-###', '^(?:FO)*(d{3})$', 'fo,da-FO', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (77, 'FR', 'FRA', 250, 'FR', 'France', 'France', 'Paris', 547030, 64768389, 'EU', '.fr', 'EUR', '33', '#####', '^(d{5})$', 'fr-FR,frp,br,co,ca,eu,oc', 'CH,DE,BE,LU,IT,AD,MC,ES', '', NULL, '0', 0, 1, NULL, '2018-10-14 15:02:06', NULL);
INSERT INTO `countries` VALUES (78, 'GA', 'GAB', 266, 'GB', 'Gabon', 'Gabon', 'Libreville', 267667, 1545255, 'AF', '.ga', 'XAF', '241', '', '', 'fr-GA', 'CM,GQ,CG', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (79, 'GD', 'GRD', 308, 'GJ', 'Grenada', 'Grenada', 'St. George\'s', 344, 107818, 'NA', '.gd', 'XCD', '+1-473', '', '', 'en-GD', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (80, 'GE', 'GEO', 268, 'GG', 'Sak\'art\'velo', 'Georgia', 'Tbilisi', 69700, 4630000, 'AS', '.ge', 'GEL', '995', '####', '^(d{4})$', 'ka,ru,hy,az', 'AM,AZ,TR,RU', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (81, 'GF', 'GUF', 254, 'FG', 'Guyane', 'French Guiana', 'Cayenne', 91000, 195506, 'SA', '.gf', 'EUR', '594', '#####', '^((97|98)3d{2})$', 'fr-GF', 'SR,BR', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (82, 'GG', 'GGY', 831, 'GK', 'Guernsey', 'Guernsey', 'St Peter Port', 78, 65228, 'EU', '.gg', 'GBP', '+44-1481', '@# #@@|@## #@@|@@# #@@|@@## #@@|@#@ #@@|@@#@ #@@|G', '^(([A-Z]d{2}[A-Z]{2})|([A-Z]d{3}[A-Z]{2})|([A-Z]{2}d{2}[A-Z]{2})|([A-Z]{2}d{3}[A-Z]{2})|([A-Z]d[A-Z]d[A-Z]{2})|([A-Z]{2}d[A-Z]d[A-Z]{2})|(GIR0AA))$', 'en,fr', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (83, 'GH', 'GHA', 288, 'GH', 'Ghana', 'Ghana', 'Accra', 239460, 24339838, 'AF', '.gh', 'GHS', '233', '', '', 'en-GH,ak,ee,tw', 'CI,TG,BF', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (84, 'GI', 'GIB', 292, 'GI', 'Gibraltar', 'Gibraltar', 'Gibraltar', 7, 27884, 'EU', '.gi', 'GIP', '350', '', '', 'en-GI,es,it,pt', 'ES', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (85, 'GL', 'GRL', 304, 'GL', 'Grønland', 'Greenland', 'Nuuk', 2166086, 56375, 'NA', '.gl', 'DKK', '299', '####', '^(d{4})$', 'kl,da-GL,en', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (86, 'GM', 'GMB', 270, 'GA', 'Gambia', 'Gambia', 'Banjul', 11300, 1593256, 'AF', '.gm', 'GMD', '220', '', '', 'en-GM,mnk,wof,wo,ff', 'SN', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (87, 'GN', 'GIN', 324, 'GV', 'Guinée', 'Guinea', 'Conakry', 245857, 10324025, 'AF', '.gn', 'GNF', '224', '', '', 'fr-GN', 'LR,SN,SL,CI,GW,ML', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (88, 'GP', 'GLP', 312, 'GP', 'Guadeloupe', 'Guadeloupe', 'Basse-Terre', 1780, 443000, 'NA', '.gp', 'EUR', '590', '#####', '^((97|98)d{3})$', 'fr-GP', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (89, 'GQ', 'GNQ', 226, 'EK', 'Guinée Equatoriale', 'Equatorial Guinea', 'Malabo', 28051, 1014999, 'AF', '.gq', 'XAF', '240', '', '', 'es-GQ,fr', 'GA,CM', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (90, 'GR', 'GRC', 300, 'GR', 'Elláda', 'Greece', 'Athens', 131940, 11000000, 'EU', '.gr', 'EUR', '30', '### ##', '^(d{5})$', 'el-GR,en,fr', 'AL,MK,TR,BG', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (91, 'GS', 'SGS', 239, 'SX', 'South Georgia and the South Sandwich Islands', 'South Georgia and the South Sandwich Islands', 'Grytviken', 3903, 30, 'AN', '.gs', 'GBP', '', '', '', 'en', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (92, 'GT', 'GTM', 320, 'GT', 'Guatemala', 'Guatemala', 'Guatemala City', 108890, 13550440, 'NA', '.gt', 'GTQ', '502', '#####', '^(d{5})$', 'es-GT', 'MX,HN,BZ,SV', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (93, 'GU', 'GUM', 316, 'GQ', 'Guam', 'Guam', 'Hagatna', 549, 159358, 'OC', '.gu', 'USD', '+1-671', '969##', '^(969d{2})$', 'en-GU,ch-GU', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (94, 'GW', 'GNB', 624, 'PU', 'Guiné-Bissau', 'Guinea-Bissau', 'Bissau', 36120, 1565126, 'AF', '.gw', 'XOF', '245', '####', '^(d{4})$', 'pt-GW,pov', 'SN,GN', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (95, 'GY', 'GUY', 328, 'GY', 'Guyana', 'Guyana', 'Georgetown', 214970, 748486, 'SA', '.gy', 'GYD', '592', '', '', 'en-GY', 'SR,BR,VE', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (96, 'HK', 'HKG', 344, 'HK', 'Hèunggóng', 'Hong Kong', 'Hong Kong', 1092, 6898686, 'AS', '.hk', 'HKD', '852', '', '', 'zh-HK,yue,zh,en', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (97, 'HM', 'HMD', 334, 'HM', 'Heard Island and McDonald Islands', 'Heard Island and McDonald Islands', '', 412, 0, 'AN', '.hm', 'AUD', ' ', '', '', '', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (98, 'HN', 'HND', 340, 'HO', 'Honduras', 'Honduras', 'Tegucigalpa', 112090, 7989415, 'NA', '.hn', 'HNL', '504', '@@####', '^([A-Z]{2}d{4})$', 'es-HN', 'GT,NI,SV', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (99, 'HR', 'HRV', 191, 'HR', 'Hrvatska', 'Croatia', 'Zagreb', 56542, 4491000, 'EU', '.hr', 'HRK', '385', '#####', '^(?:HR)*(d{5})$', 'hr-HR,sr', 'HU,SI,BA,ME,RS', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (100, 'HT', 'HTI', 332, 'HA', 'Haïti', 'Haiti', 'Port-au-Prince', 27750, 9648924, 'NA', '.ht', 'HTG', '509', 'HT####', '^(?:HT)*(d{4})$', 'ht,fr-HT', 'DO', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (101, 'HU', 'HUN', 348, 'HU', 'Magyarország', 'Hungary', 'Budapest', 93030, 9982000, 'EU', '.hu', 'HUF', '36', '####', '^(d{4})$', 'hu-HU', 'SK,SI,RO,UA,HR,AT,RS', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (102, 'ID', 'IDN', 360, 'ID', 'Indonesia', 'Indonesia', 'Jakarta', 1919440, 242968342, 'AS', '.id', 'IDR', '62', '#####', '^(d{5})$', 'id,en,nl,jv', 'PG,TL,MY', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (103, 'IE', 'IRL', 372, 'EI', 'Ireland', 'Ireland', 'Dublin', 70280, 4622917, 'EU', '.ie', 'EUR', '353', '', '', 'en-IE,ga-IE', 'GB', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (104, 'IL', 'ISR', 376, 'IS', 'Yiśrā\'ēl', 'Israel', 'Jerusalem', 20770, 7353985, 'AS', '.il', 'ILS', '972', '#####', '^(d{5})$', 'he,ar-IL,en-IL,', 'SY,JO,LB,EG,PS', '', NULL, '0', 0, 0, NULL, NULL, '');
INSERT INTO `countries` VALUES (105, 'IM', 'IMN', 833, 'IM', 'Isle of Man', 'Isle of Man', 'Douglas, Isle of Man', 572, 75049, 'EU', '.im', 'GBP', '+44-1624', '@# #@@|@## #@@|@@# #@@|@@## #@@|@#@ #@@|@@#@ #@@|G', '^(([A-Z]d{2}[A-Z]{2})|([A-Z]d{3}[A-Z]{2})|([A-Z]{2}d{2}[A-Z]{2})|([A-Z]{2}d{3}[A-Z]{2})|([A-Z]d[A-Z]d[A-Z]{2})|([A-Z]{2}d[A-Z]d[A-Z]{2})|(GIR0AA))$', 'en,gv', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (106, 'IN', 'IND', 356, 'IN', 'Bhārat', 'India', 'New Delhi', 3287590, 1173108018, 'AS', '.in', 'INR', '91', '######', '^(d{6})$', 'en-IN,hi,bn,te,mr,ta,ur,gu,kn,ml,or,pa,as,bh,sat,k', 'CN,NP,MM,BT,PK,BD', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (107, 'IO', 'IOT', 86, 'IO', 'British Indian Ocean Territory', 'British Indian Ocean Territory', 'Diego Garcia', 60, 4000, 'AS', '.io', 'USD', '246', '', '', 'en-IO', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (108, 'IQ', 'IRQ', 368, 'IZ', 'al-ʿIrāq', 'Iraq', 'Baghdad', 437072, 29671605, 'AS', '.iq', 'IQD', '964', '#####', '^(d{5})$', 'ar-IQ,ku,hy', 'SY,SA,IR,JO,TR,KW', '', NULL, '0', 0, 0, NULL, NULL, '1');
INSERT INTO `countries` VALUES (109, 'IR', 'IRN', 364, 'IR', 'Īrān', 'Iran', 'Tehran', 1648000, 76923300, 'AS', '.ir', 'IRR', '98', '##########', '^(d{10})$', 'fa-IR,ku', 'TM,AF,IQ,AM,PK,AZ,TR', '', NULL, '0', 0, 0, NULL, NULL, '1');
INSERT INTO `countries` VALUES (110, 'IS', 'ISL', 352, 'IC', 'Ísland', 'Iceland', 'Reykjavik', 103000, 308910, 'EU', '.is', 'ISK', '354', '###', '^(d{3})$', 'is,en,de,da,sv,no', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (111, 'IT', 'ITA', 380, 'IT', 'Italia', 'Italy', 'Rome', 301230, 60340328, 'EU', '.it', 'EUR', '39', '#####', '^(d{5})$', 'it-IT,en,de-IT,fr-IT,sc,ca,co,sl', 'CH,VA,SI,SM,FR,AT', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (112, 'JE', 'JEY', 832, 'JE', 'Jersey', 'Jersey', 'Saint Helier', 116, 90812, 'EU', '.je', 'GBP', '+44-1534', '@# #@@|@## #@@|@@# #@@|@@## #@@|@#@ #@@|@@#@ #@@|G', '^(([A-Z]d{2}[A-Z]{2})|([A-Z]d{3}[A-Z]{2})|([A-Z]{2}d{2}[A-Z]{2})|([A-Z]{2}d{3}[A-Z]{2})|([A-Z]d[A-Z]d[A-Z]{2})|([A-Z]{2}d[A-Z]d[A-Z]{2})|(GIR0AA))$', 'en,pt', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (113, 'JM', 'JAM', 388, 'JM', 'Jamaica', 'Jamaica', 'Kingston', 10991, 2847232, 'NA', '.jm', 'JMD', '+1-876', '', '', 'en-JM', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (114, 'JO', 'JOR', 400, 'JO', 'al-Urdun', 'Jordan', 'Amman', 92300, 6407085, 'AS', '.jo', 'JOD', '962', '#####', '^(d{5})$', 'ar-JO,en', 'SY,SA,IQ,IL,PS', '', NULL, '0', 0, 0, NULL, NULL, '1');
INSERT INTO `countries` VALUES (115, 'JP', 'JPN', 392, 'JA', 'Nihon', 'Japan', 'Tokyo', 377835, 127288000, 'AS', '.jp', 'JPY', '81', '###-####', '^(d{7})$', 'ja', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (116, 'KE', 'KEN', 404, 'KE', 'Kenya', 'Kenya', 'Nairobi', 582650, 40046566, 'AF', '.ke', 'KES', '254', '#####', '^(d{5})$', 'en-KE,sw-KE', 'ET,TZ,SS,SO,UG', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (117, 'KG', 'KGZ', 417, 'KG', 'Kyrgyzstan', 'Kyrgyzstan', 'Bishkek', 198500, 5508626, 'AS', '.kg', 'KGS', '996', '######', '^(d{6})$', 'ky,uz,ru', 'CN,TJ,UZ,KZ', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (118, 'KH', 'KHM', 116, 'CB', 'Kambucā', 'Cambodia', 'Phnom Penh', 181040, 14453680, 'AS', '.kh', 'KHR', '855', '#####', '^(d{5})$', 'km,fr,en', 'LA,TH,VN', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (119, 'KI', 'KIR', 296, 'KR', 'Kiribati', 'Kiribati', 'Tarawa', 811, 92533, 'OC', '.ki', 'AUD', '686', '', '', 'en-KI,gil', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (120, 'KM', 'COM', 174, 'CN', 'Comores', 'Comoros', 'Moroni', 2170, 773407, 'AF', '.km', 'KMF', '269', '', '', 'ar,fr-KM', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (121, 'KN', 'KNA', 659, 'SC', 'Saint Kitts and Nevis', 'Saint Kitts and Nevis', 'Basseterre', 261, 51134, 'NA', '.kn', 'XCD', '+1-869', '', '', 'en-KN', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (122, 'KP', 'PRK', 408, 'KN', 'Joseon', 'North Korea', 'Pyongyang', 120540, 22912177, 'AS', '.kp', 'KPW', '850', '###-###', '^(d{6})$', 'ko-KP', 'CN,KR,RU', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (123, 'KR', 'KOR', 410, 'KS', 'Hanguk', 'South Korea', 'Seoul', 98480, 48422644, 'AS', '.kr', 'KRW', '82', 'SEOUL ###-###', '^(?:SEOUL)*(d{6})$', 'ko-KR,en', 'KP', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (124, 'KW', 'KWT', 414, 'KU', 'al-Kuwayt', 'Kuwait', 'Kuwait City', 17820, 2789132, 'AS', '.kw', 'KWD', '965', '#####', '^(d{5})$', 'ar-KW,en', 'SA,IQ', '', NULL, '0', 0, 0, NULL, NULL, '1');
INSERT INTO `countries` VALUES (125, 'KY', 'CYM', 136, 'CJ', 'Cayman Islands', 'Cayman Islands', 'George Town', 262, 44270, 'NA', '.ky', 'KYD', '+1-345', '', '', 'en-KY', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (126, 'KZ', 'KAZ', 398, 'KZ', 'Ķazaķstan', 'Kazakhstan', 'Astana', 2717300, 15340000, 'AS', '.kz', 'KZT', '7', '######', '^(d{6})$', 'kk,ru', 'TM,CN,KG,UZ,RU', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (127, 'LA', 'LAO', 418, 'LA', 'Lāw', 'Laos', 'Vientiane', 236800, 6368162, 'AS', '.la', 'LAK', '856', '#####', '^(d{5})$', 'lo,fr,en', 'CN,MM,KH,TH,VN', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (128, 'LB', 'LBN', 422, 'LE', 'Lubnān', 'Lebanon', 'Beirut', 10400, 4125247, 'AS', '.lb', 'LBP', '961', '#### ####|####', '^(d{4}(d{4})?)$', 'ar-LB,fr-LB,en,hy', 'SY,IL', '', NULL, '0', 0, 0, NULL, NULL, '1');
INSERT INTO `countries` VALUES (129, 'LC', 'LCA', 662, 'ST', 'Saint Lucia', 'Saint Lucia', 'Castries', 616, 160922, 'NA', '.lc', 'XCD', '+1-758', '', '', 'en-LC', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (130, 'LI', 'LIE', 438, 'LS', 'Liechtenstein', 'Liechtenstein', 'Vaduz', 160, 35000, 'EU', '.li', 'CHF', '423', '####', '^(d{4})$', 'de-LI', 'CH,AT', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (131, 'LK', 'LKA', 144, 'CE', 'Šrī Laṁkā', 'Sri Lanka', 'Colombo', 65610, 21513990, 'AS', '.lk', 'LKR', '94', '#####', '^(d{5})$', 'si,ta,en', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (132, 'LR', 'LBR', 430, 'LI', 'Liberia', 'Liberia', 'Monrovia', 111370, 3685076, 'AF', '.lr', 'LRD', '231', '####', '^(d{4})$', 'en-LR', 'SL,CI,GN', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (133, 'LS', 'LSO', 426, 'LT', 'Lesotho', 'Lesotho', 'Maseru', 30355, 1919552, 'AF', '.ls', 'LSL', '266', '###', '^(d{3})$', 'en-LS,st,zu,xh', 'ZA', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (134, 'LT', 'LTU', 440, 'LH', 'Lietuva', 'Lithuania', 'Vilnius', 65200, 2944459, 'EU', '.lt', 'EUR', '370', 'LT-#####', '^(?:LT)*(d{5})$', 'lt,ru,pl', 'PL,BY,RU,LV', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (135, 'LU', 'LUX', 442, 'LU', 'Lëtzebuerg', 'Luxembourg', 'Luxembourg', 2586, 497538, 'EU', '.lu', 'EUR', '352', 'L-####', '^(d{4})$', 'lb,de-LU,fr-LU', 'DE,BE,FR', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (136, 'LV', 'LVA', 428, 'LG', 'Latvija', 'Latvia', 'Riga', 64589, 2217969, 'EU', '.lv', 'EUR', '371', 'LV-####', '^(?:LV)*(d{4})$', 'lv,ru,lt', 'LT,EE,BY,RU', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (137, 'LY', 'LBY', 434, 'LY', 'Lībiyā', 'Libya', 'Tripolis', 1759540, 6461454, 'AF', '.ly', 'LYD', '218', '', '', 'ar-LY,it,en', 'TD,NE,DZ,SD,TN,EG', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (138, 'MA', 'MAR', 504, 'MO', 'Maroc', 'Morocco', 'Rabat', 446550, 31627428, 'AF', '.ma', 'MAD', '212', '#####', '^(d{5})$', 'ar-MA,fr', 'DZ,EH,ES', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (139, 'MC', 'MCO', 492, 'MN', 'Monaco', 'Monaco', 'Monaco', 2, 32965, 'EU', '.mc', 'EUR', '377', '#####', '^(d{5})$', 'fr-MC,en,it', 'FR', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (140, 'MD', 'MDA', 498, 'MD', 'Moldova', 'Moldova', 'Chisinau', 33843, 4324000, 'EU', '.md', 'MDL', '373', 'MD-####', '^(?:MD)*(d{4})$', 'ro,ru,gag,tr', 'RO,UA', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (141, 'ME', 'MNE', 499, 'MJ', 'Crna Gora', 'Montenegro', 'Podgorica', 14026, 666730, 'EU', '.me', 'EUR', '382', '#####', '^(d{5})$', 'sr,hu,bs,sq,hr,rom', 'AL,HR,BA,RS,XK', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (142, 'MF', 'MAF', 663, 'RN', 'Saint Martin', 'Saint Martin', 'Marigot', 53, 35925, 'NA', '.gp', 'EUR', '590', '### ###', '', 'fr', 'SX', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (143, 'MG', 'MDG', 450, 'MA', 'Madagascar', 'Madagascar', 'Antananarivo', 587040, 21281844, 'AF', '.mg', 'MGA', '261', '###', '^(d{3})$', 'fr-MG,mg', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (144, 'MH', 'MHL', 584, 'RM', 'Marshall Islands', 'Marshall Islands', 'Majuro', 181, 65859, 'OC', '.mh', 'USD', '692', '', '', 'mh,en-MH', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (145, 'MK', 'MKD', 807, 'MK', 'Makedonija', 'Macedonia', 'Skopje', 25333, 2062294, 'EU', '.mk', 'MKD', '389', '####', '^(d{4})$', 'mk,sq,tr,rmm,sr', 'AL,GR,BG,RS,XK', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (146, 'ML', 'MLI', 466, 'ML', 'Mali', 'Mali', 'Bamako', 1240000, 13796354, 'AF', '.ml', 'XOF', '223', '', '', 'fr-ML,bm', 'SN,NE,DZ,CI,GN,MR,BF', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (147, 'MM', 'MMR', 104, 'BM', 'Mẏanmā', 'Myanmar', 'Nay Pyi Taw', 678500, 53414374, 'AS', '.mm', 'MMK', '95', '#####', '^(d{5})$', 'my', 'CN,LA,TH,BD,IN', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (148, 'MN', 'MNG', 496, 'MG', 'Mongol Uls', 'Mongolia', 'Ulan Bator', 1565000, 3086918, 'AS', '.mn', 'MNT', '976', '######', '^(d{6})$', 'mn,ru', 'CN,RU', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (149, 'MO', 'MAC', 446, 'MC', 'Ngoumún', 'Macao', 'Macao', 254, 449198, 'AS', '.mo', 'MOP', '853', '', '', 'zh,zh-MO,pt', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (150, 'MP', 'MNP', 580, 'CQ', 'Northern Mariana Islands', 'Northern Mariana Islands', 'Saipan', 477, 53883, 'OC', '.mp', 'USD', '+1-670', '', '', 'fil,tl,zh,ch-MP,en-MP', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (151, 'MQ', 'MTQ', 474, 'MB', 'Martinique', 'Martinique', 'Fort-de-France', 1100, 432900, 'NA', '.mq', 'EUR', '596', '#####', '^(d{5})$', 'fr-MQ', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (152, 'MR', 'MRT', 478, 'MR', 'Mauritanie', 'Mauritania', 'Nouakchott', 1030700, 3205060, 'AF', '.mr', 'MRO', '222', '', '', 'ar-MR,fuc,snk,fr,mey,wo', 'SN,DZ,EH,ML', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (153, 'MS', 'MSR', 500, 'MH', 'Montserrat', 'Montserrat', 'Plymouth', 102, 9341, 'NA', '.ms', 'XCD', '+1-664', '', '', 'en-MS', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (154, 'MT', 'MLT', 470, 'MT', 'Malta', 'Malta', 'Valletta', 316, 403000, 'EU', '.mt', 'EUR', '356', '@@@ ###|@@@ ##', '^([A-Z]{3}d{2}d?)$', 'mt,en-MT', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (155, 'MU', 'MUS', 480, 'MP', 'Mauritius', 'Mauritius', 'Port Louis', 2040, 1294104, 'AF', '.mu', 'MUR', '230', '', '', 'en-MU,bho,fr', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (156, 'MV', 'MDV', 462, 'MV', 'Dhivehi', 'Maldives', 'Male', 300, 395650, 'AS', '.mv', 'MVR', '960', '#####', '^(d{5})$', 'dv,en', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (157, 'MW', 'MWI', 454, 'MI', 'Malawi', 'Malawi', 'Lilongwe', 118480, 15447500, 'AF', '.mw', 'MWK', '265', '', '', 'ny,yao,tum,swk', 'TZ,MZ,ZM', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (158, 'MX', 'MEX', 484, 'MX', 'México', 'Mexico', 'Mexico City', 1972550, 112468855, 'NA', '.mx', 'MXN', '52', '#####', '^(d{5})$', 'es-MX', 'GT,US,BZ', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (159, 'MY', 'MYS', 458, 'MY', 'Malaysia', 'Malaysia', 'Kuala Lumpur', 329750, 28274729, 'AS', '.my', 'MYR', '60', '#####', '^(d{5})$', 'ms-MY,en,zh,ta,te,ml,pa,th', 'BN,TH,ID', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (160, 'MZ', 'MOZ', 508, 'MZ', 'Moçambique', 'Mozambique', 'Maputo', 801590, 22061451, 'AF', '.mz', 'MZN', '258', '####', '^(d{4})$', 'pt-MZ,vmw', 'ZW,TZ,SZ,ZA,ZM,MW', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (161, 'NA', 'NAM', 516, 'WA', 'Namibia', 'Namibia', 'Windhoek', 825418, 2128471, 'AF', '.na', 'NAD', '264', '', '', 'en-NA,af,de,hz,naq', 'ZA,BW,ZM,AO', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (162, 'NC', 'NCL', 540, 'NC', 'Nouvelle Calédonie', 'New Caledonia', 'Noumea', 19060, 216494, 'OC', '.nc', 'XPF', '687', '#####', '^(d{5})$', 'fr-NC', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (163, 'NE', 'NER', 562, 'NG', 'Niger', 'Niger', 'Niamey', 1267000, 15878271, 'AF', '.ne', 'XOF', '227', '####', '^(d{4})$', 'fr-NE,ha,kr,dje', 'TD,BJ,DZ,LY,BF,NG,ML', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (164, 'NF', 'NFK', 574, 'NF', 'Norfolk Island', 'Norfolk Island', 'Kingston', 35, 1828, 'OC', '.nf', 'AUD', '672', '####', '^(d{4})$', 'en-NF', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (165, 'NG', 'NGA', 566, 'NI', 'Nigeria', 'Nigeria', 'Abuja', 923768, 154000000, 'AF', '.ng', 'NGN', '234', '######', '^(d{6})$', 'en-NG,ha,yo,ig,ff', 'TD,NE,BJ,CM', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (166, 'NI', 'NIC', 558, 'NU', 'Nicaragua', 'Nicaragua', 'Managua', 129494, 5995928, 'NA', '.ni', 'NIO', '505', '###-###-#', '^(d{7})$', 'es-NI,en', 'CR,HN', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (167, 'NL', 'NLD', 528, 'NL', 'Nederland', 'Netherlands', 'Amsterdam', 41526, 16645000, 'EU', '.nl', 'EUR', '31', '#### @@', '^(d{4}[A-Z]{2})$', 'nl-NL,fy-NL', 'DE,BE', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (168, 'NO', 'NOR', 578, 'NO', 'Norge (Noreg)', 'Norway', 'Oslo', 324220, 5009150, 'EU', '.no', 'NOK', '47', '####', '^(d{4})$', 'no,nb,nn,se,fi', 'FI,RU,SE', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (169, 'NP', 'NPL', 524, 'NP', 'Nēpāl', 'Nepal', 'Kathmandu', 140800, 28951852, 'AS', '.np', 'NPR', '977', '#####', '^(d{5})$', 'ne,en', 'CN,IN', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (170, 'NR', 'NRU', 520, 'NR', 'Naoero', 'Nauru', 'Yaren', 21, 10065, 'OC', '.nr', 'AUD', '674', '', '', 'na,en-NR', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (171, 'NU', 'NIU', 570, 'NE', 'Niue', 'Niue', 'Alofi', 260, 2166, 'OC', '.nu', 'NZD', '683', '', '', 'niu,en-NU', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (172, 'NZ', 'NZL', 554, 'NZ', 'New Zealand', 'New Zealand', 'Wellington', 268680, 4252277, 'OC', '.nz', 'NZD', '64', '####', '^(d{4})$', 'en-NZ,mi', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (173, 'OM', 'OMN', 512, 'MU', 'ʿUmān', 'Oman', 'Muscat', 212460, 2967717, 'AS', '.om', 'OMR', '968', '###', '^(d{3})$', 'ar-OM,en,bal,ur', 'SA,YE,AE', '', NULL, '0', 0, 0, NULL, NULL, '1');
INSERT INTO `countries` VALUES (174, 'PA', 'PAN', 591, 'PM', 'Panamá', 'Panama', 'Panama City', 78200, 3410676, 'NA', '.pa', 'PAB', '507', '', '', 'es-PA,en', 'CR,CO', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (175, 'PE', 'PER', 604, 'PE', 'Perú', 'Peru', 'Lima', 1285220, 29907003, 'SA', '.pe', 'PEN', '51', '', '', 'es-PE,qu,ay', 'EC,CL,BO,BR,CO', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (176, 'PF', 'PYF', 258, 'FP', 'Polinésie Française', 'French Polynesia', 'Papeete', 4167, 270485, 'OC', '.pf', 'XPF', '689', '#####', '^((97|98)7d{2})$', 'fr-PF,ty', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (177, 'PG', 'PNG', 598, 'PP', 'Papua New Guinea', 'Papua New Guinea', 'Port Moresby', 462840, 6064515, 'OC', '.pg', 'PGK', '675', '###', '^(d{3})$', 'en-PG,ho,meu,tpi', 'ID', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (178, 'PH', 'PHL', 608, 'RP', 'Pilipinas', 'Philippines', 'Manila', 300000, 99900177, 'AS', '.ph', 'PHP', '63', '####', '^(d{4})$', 'tl,en-PH,fil', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (179, 'PK', 'PAK', 586, 'PK', 'Pākistān', 'Pakistan', 'Islamabad', 803940, 184404791, 'AS', '.pk', 'PKR', '92', '#####', '^(d{5})$', 'ur-PK,en-PK,pa,sd,ps,brh', 'CN,AF,IR,IN', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (180, 'PL', 'POL', 616, 'PL', 'Polska', 'Poland', 'Warsaw', 312685, 38500000, 'EU', '.pl', 'PLN', '48', '##-###', '^(d{5})$', 'pl', 'DE,LT,SK,CZ,BY,UA,RU', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (181, 'PM', 'SPM', 666, 'SB', 'Saint Pierre and Miquelon', 'Saint Pierre and Miquelon', 'Saint-Pierre', 242, 7012, 'NA', '.pm', 'EUR', '508', '#####', '^(97500)$', 'fr-PM', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (182, 'PN', 'PCN', 612, 'PC', 'Pitcairn', 'Pitcairn', 'Adamstown', 47, 46, 'OC', '.pn', 'NZD', '870', '', '', 'en-PN', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (183, 'PR', 'PRI', 630, 'RQ', 'Puerto Rico', 'Puerto Rico', 'San Juan', 9104, 3916632, 'NA', '.pr', 'USD', '+1-787/1-939', '#####-####', '^(d{9})$', 'en-PR,es-PR', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (184, 'PS', 'PSE', 275, 'WE', 'Filasṭīn', 'Palestinian Territory', 'East Jerusalem', 5970, 3800000, 'AS', '.ps', 'ILS', '970', '', '', 'ar-PS', 'JO,IL,EG', '', NULL, '0', 0, 0, NULL, NULL, '1');
INSERT INTO `countries` VALUES (185, 'PT', 'PRT', 620, 'PO', 'Portugal', 'Portugal', 'Lisbon', 92391, 10676000, 'EU', '.pt', 'EUR', '351', '####-###', '^(d{7})$', 'pt-PT,mwl', 'ES', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (186, 'PW', 'PLW', 585, 'PS', 'Palau', 'Palau', 'Melekeok', 458, 19907, 'OC', '.pw', 'USD', '680', '96940', '^(96940)$', 'pau,sov,en-PW,tox,ja,fil,zh', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (187, 'PY', 'PRY', 600, 'PA', 'Paraguay', 'Paraguay', 'Asuncion', 406750, 6375830, 'SA', '.py', 'PYG', '595', '####', '^(d{4})$', 'es-PY,gn', 'BO,BR,AR', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (188, 'QA', 'QAT', 634, 'QA', 'Qaṭar', 'Qatar', 'Doha', 11437, 840926, 'AS', '.qa', 'QAR', '974', '', '', 'ar-QA,en', 'SA', '', NULL, '0', 0, 0, NULL, NULL, '1');
INSERT INTO `countries` VALUES (189, 'RE', 'REU', 638, 'RE', 'Réunion', 'Reunion', 'Saint-Denis', 2517, 776948, 'AF', '.re', 'EUR', '262', '#####', '^((97|98)(4|7|8)d{2})$', 'fr-RE', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (190, 'RO', 'ROU', 642, 'RO', 'România', 'Romania', 'Bucharest', 237500, 21959278, 'EU', '.ro', 'RON', '40', '######', '^(d{6})$', 'ro,hu,rom', 'MD,HU,UA,BG,RS', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (191, 'RS', 'SRB', 688, 'RI', 'Srbija', 'Serbia', 'Belgrade', 88361, 7344847, 'EU', '.rs', 'RSD', '381', '######', '^(d{6})$', 'sr,hu,bs,rom', 'AL,HU,MK,RO,HR,BA,BG,ME,XK', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (192, 'RU', 'RUS', 643, 'RS', 'Rossija', 'Russia', 'Moscow', 17100000, 140702000, 'EU', '.ru', 'RUB', '7', '######', '^(d{6})$', 'ru,tt,xal,cau,ady,kv,ce,tyv,cv,udm,tut,mns,bua,myv', 'GE,CN,BY,UA,KZ,LV,PL,EE,LT,FI,MN,NO,AZ,KP', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (193, 'RW', 'RWA', 646, 'RW', 'Rwanda', 'Rwanda', 'Kigali', 26338, 11055976, 'AF', '.rw', 'RWF', '250', '', '', 'rw,en-RW,fr-RW,sw', 'TZ,CD,BI,UG', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (194, 'SA', 'SAU', 682, 'SA', 'as-Saʿūdīyâ', 'Saudi Arabia', 'Riyadh', 1960582, 25731776, 'AS', '.sa', 'SAR', '966', '#####', '^(d{5})$', 'ar-SA', 'QA,OM,IQ,YE,JO,AE,KW', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (195, 'SB', 'SLB', 90, 'BP', 'Solomon Islands', 'Solomon Islands', 'Honiara', 28450, 559198, 'OC', '.sb', 'SBD', '677', '', '', 'en-SB,tpi', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (196, 'SC', 'SYC', 690, 'SE', 'Seychelles', 'Seychelles', 'Victoria', 455, 88340, 'AF', '.sc', 'SCR', '248', '', '', 'en-SC,fr-SC', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (197, 'SD', 'SDN', 729, 'SU', 'Sudan', 'Sudan', 'Khartoum', 1861484, 35000000, 'AF', '.sd', 'SDG', '249', '#####', '^(d{5})$', 'ar-SD,en,fia', 'SS,TD,EG,ET,ER,LY,CF', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (198, 'SE', 'SWE', 752, 'SW', 'Sverige', 'Sweden', 'Stockholm', 449964, 9555893, 'EU', '.se', 'SEK', '46', '### ##', '^(?:SE)*(d{5})$', 'sv-SE,se,sma,fi-SE', 'NO,FI', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (199, 'SG', 'SGP', 702, 'SN', 'xīnjiāpō', 'Singapore', 'Singapur', 693, 4701069, 'AS', '.sg', 'SGD', '65', '######', '^(d{6})$', 'cmn,en-SG,ms-SG,ta-SG,zh-SG', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (200, 'SH', 'SHN', 654, 'SH', 'Saint Helena', 'Saint Helena', 'Jamestown', 410, 7460, 'AF', '.sh', 'SHP', '290', 'STHL 1ZZ', '^(STHL1ZZ)$', 'en-SH', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (201, 'SI', 'SVN', 705, 'SI', 'Slovenija', 'Slovenia', 'Ljubljana', 20273, 2007000, 'EU', '.si', 'EUR', '386', '####', '^(?:SI)*(d{4})$', 'sl,sh', 'HU,IT,HR,AT', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (202, 'SJ', 'SJM', 744, 'SV', 'Svalbard and Jan Mayen', 'Svalbard and Jan Mayen', 'Longyearbyen', 62049, 2550, 'EU', '.sj', 'NOK', '47', '', '', 'no,ru', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (203, 'SK', 'SVK', 703, 'LO', 'Slovensko', 'Slovakia', 'Bratislava', 48845, 5455000, 'EU', '.sk', 'EUR', '421', '### ##', '^(d{5})$', 'sk,hu', 'PL,HU,CZ,UA,AT', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (204, 'SL', 'SLE', 694, 'SL', 'Sierra Leone', 'Sierra Leone', 'Freetown', 71740, 5245695, 'AF', '.sl', 'SLL', '232', '', '', 'en-SL,men,tem', 'LR,GN', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (205, 'SM', 'SMR', 674, 'SM', 'San Marino', 'San Marino', 'San Marino', 61, 31477, 'EU', '.sm', 'EUR', '378', '4789#', '^(4789d)$', 'it-SM', 'IT', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (206, 'SN', 'SEN', 686, 'SG', 'Sénégal', 'Senegal', 'Dakar', 196190, 12323252, 'AF', '.sn', 'XOF', '221', '#####', '^(d{5})$', 'fr-SN,wo,fuc,mnk', 'GN,MR,GW,GM,ML', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (207, 'SO', 'SOM', 706, 'SO', 'Soomaaliya', 'Somalia', 'Mogadishu', 637657, 10112453, 'AF', '.so', 'SOS', '252', '@@  #####', '^([A-Z]{2}d{5})$', 'so-SO,ar-SO,it,en-SO', 'ET,KE,DJ', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (208, 'SR', 'SUR', 740, 'NS', 'Suriname', 'Suriname', 'Paramaribo', 163270, 492829, 'SA', '.sr', 'SRD', '597', '', '', 'nl-SR,en,srn,hns,jv', 'GY,BR,GF', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (209, 'SS', 'SSD', 728, 'OD', 'South Sudan', 'South Sudan', 'Juba', 644329, 8260490, 'AF', '', 'SSP', '211', '', '', 'en', 'CD,CF,ET,KE,SD,UG,', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (210, 'ST', 'STP', 678, 'TP', 'São Tomé e Príncipe', 'Sao Tome and Principe', 'Sao Tome', 1001, 175808, 'AF', '.st', 'STD', '239', '', '', 'pt-ST', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (211, 'SV', 'SLV', 222, 'ES', 'El Salvador', 'El Salvador', 'San Salvador', 21040, 6052064, 'NA', '.sv', 'USD', '503', 'CP ####', '^(?:CP)*(d{4})$', 'es-SV', 'GT,HN', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (212, 'SX', 'SXM', 534, 'NN', 'Sint Maarten', 'Sint Maarten', 'Philipsburg', 21, 37429, 'NA', '.sx', 'ANG', '599', '', '', 'nl,en', 'MF', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (213, 'SY', 'SYR', 760, 'SY', 'Sūrīyâ', 'Syria', 'Damascus', 185180, 22198110, 'AS', '.sy', 'SYP', '963', '', '', 'ar-SY,ku,hy,arc,fr,en', 'IQ,JO,IL,TR,LB', '', NULL, '0', 0, 0, NULL, NULL, '1');
INSERT INTO `countries` VALUES (214, 'SZ', 'SWZ', 748, 'WZ', 'Swaziland', 'Swaziland', 'Mbabane', 17363, 1354051, 'AF', '.sz', 'SZL', '268', '@###', '^([A-Z]d{3})$', 'en-SZ,ss-SZ', 'ZA,MZ', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (215, 'TC', 'TCA', 796, 'TK', 'Turks and Caicos Islands', 'Turks and Caicos Islands', 'Cockburn Town', 430, 20556, 'NA', '.tc', 'USD', '+1-649', 'TKCA 1ZZ', '^(TKCA 1ZZ)$', 'en-TC', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (216, 'TD', 'TCD', 148, 'CD', 'Tchad', 'Chad', 'N\'Djamena', 1284000, 10543464, 'AF', '.td', 'XAF', '235', '', '', 'fr-TD,ar-TD,sre', 'NE,LY,CF,SD,CM,NG', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (217, 'TF', 'ATF', 260, 'FS', 'French Southern Territories', 'French Southern Territories', 'Port-aux-Francais', 7829, 140, 'AN', '.tf', 'EUR', '', '', '', 'fr', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (218, 'TG', 'TGO', 768, 'TO', 'Togo', 'Togo', 'Lome', 56785, 6587239, 'AF', '.tg', 'XOF', '228', '', '', 'fr-TG,ee,hna,kbp,dag,ha', 'BJ,GH,BF', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (219, 'TH', 'THA', 764, 'TH', 'Prathēt tai', 'Thailand', 'Bangkok', 514000, 67089500, 'AS', '.th', 'THB', '66', '#####', '^(d{5})$', 'th,en', 'LA,MM,KH,MY', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (220, 'TJ', 'TJK', 762, 'TI', 'Tojikiston', 'Tajikistan', 'Dushanbe', 143100, 7487489, 'AS', '.tj', 'TJS', '992', '######', '^(d{6})$', 'tg,ru', 'CN,AF,KG,UZ', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (221, 'TK', 'TKL', 772, 'TL', 'Tokelau', 'Tokelau', '', 10, 1466, 'OC', '.tk', 'NZD', '690', '', '', 'tkl,en-TK', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (222, 'TL', 'TLS', 626, 'TT', 'Timór Lorosa\'e', 'East Timor', 'Dili', 15007, 1154625, 'OC', '.tl', 'USD', '670', '', '', 'tet,pt-TL,id,en', 'ID', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (223, 'TM', 'TKM', 795, 'TX', 'Turkmenistan', 'Turkmenistan', 'Ashgabat', 488100, 4940916, 'AS', '.tm', 'TMT', '993', '######', '^(d{6})$', 'tk,ru,uz', 'AF,IR,UZ,KZ', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (224, 'TN', 'TUN', 788, 'TS', 'Tunisie', 'Tunisia', 'Tunis', 163610, 10589025, 'AF', '.tn', 'TND', '216', '####', '^(d{4})$', 'ar-TN,fr', 'DZ,LY', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (225, 'TO', 'TON', 776, 'TN', 'Tonga', 'Tonga', 'Nuku\'alofa', 748, 122580, 'OC', '.to', 'TOP', '676', '', '', 'to,en-TO', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (226, 'TR', 'TUR', 792, 'TU', 'Türkiye', 'Turkey', 'Ankara', 780580, 77804122, 'AS', '.tr', 'TRY', '90', '#####', '^(d{5})$', 'tr-TR,ku,diq,az,av', 'SY,GE,IQ,IR,GR,AM,AZ,BG', '', 'app/logohttp://localhost:8888/public', '0', 0, 0, NULL, '2018-10-23 23:02:04', NULL);
INSERT INTO `countries` VALUES (227, 'TT', 'TTO', 780, 'TD', 'Trinidad and Tobago', 'Trinidad and Tobago', 'Port of Spain', 5128, 1228691, 'NA', '.tt', 'TTD', '+1-868', '', '', 'en-TT,hns,fr,es,zh', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (228, 'TV', 'TUV', 798, 'TV', 'Tuvalu', 'Tuvalu', 'Funafuti', 26, 10472, 'OC', '.tv', 'AUD', '688', '', '', 'tvl,en,sm,gil', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (229, 'TW', 'TWN', 158, 'TW', 'T\'ai2-wan1', 'Taiwan', 'Taipei', 35980, 22894384, 'AS', '.tw', 'TWD', '886', '#####', '^(d{5})$', 'zh-TW,zh,nan,hak', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (230, 'TZ', 'TZA', 834, 'TZ', 'Tanzania', 'Tanzania', 'Dodoma', 945087, 41892895, 'AF', '.tz', 'TZS', '255', '', '', 'sw-TZ,en,ar', 'MZ,KE,CD,RW,ZM,BI,UG,MW', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (231, 'UA', 'UKR', 804, 'UP', 'Ukrajina', 'Ukraine', 'Kiev', 603700, 45415596, 'EU', '.ua', 'UAH', '380', '#####', '^(d{5})$', 'uk,ru-UA,rom,pl,hu', 'PL,MD,HU,SK,BY,RO,RU', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (232, 'UG', 'UGA', 800, 'UG', 'Uganda', 'Uganda', 'Kampala', 236040, 33398682, 'AF', '.ug', 'UGX', '256', '', '', 'en-UG,lg,sw,ar', 'TZ,KE,SS,CD,RW', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (233, 'UK', 'GBR', 826, 'UK', 'United Kingdom', 'United Kingdom', 'London', 244820, 62348447, 'EU', '.uk', 'GBP', '44', '@# #@@|@## #@@|@@# #@@|@@## #@@|@#@ #@@|@@#@ #@@|G', '^(([A-Z]d{2}[A-Z]{2})|([A-Z]d{3}[A-Z]{2})|([A-Z]{2}d{2}[A-Z]{2})|([A-Z]{2}d{3}[A-Z]{2})|([A-Z]d[A-Z]d[A-Z]{2})|([A-Z]{2}d[A-Z]d[A-Z]{2})|(GIR0AA))$', 'en-GB,cy-GB,gd', 'IE', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (234, 'UM', 'UMI', 581, '', 'United States Minor Outlying Islands', 'United States Minor Outlying Islands', '', 0, 0, 'OC', '.um', 'USD', '1', '', '', 'en-UM', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (235, 'US', 'USA', 840, 'US', 'USA', 'United States', 'Washington', 9629091, 310232863, 'NA', '.us', 'USD', '1', '#####-####', '^d{5}(-d{4})?$', 'en-US,es-US,haw,fr', 'CA,MX,CU', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (236, 'UY', 'URY', 858, 'UY', 'Uruguay', 'Uruguay', 'Montevideo', 176220, 3477000, 'SA', '.uy', 'UYU', '598', '#####', '^(d{5})$', 'es-UY', 'BR,AR', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (237, 'UZ', 'UZB', 860, 'UZ', 'O\'zbekiston', 'Uzbekistan', 'Tashkent', 447400, 27865738, 'AS', '.uz', 'UZS', '998', '######', '^(d{6})$', 'uz,ru,tg', 'TM,AF,KG,TJ,KZ', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (238, 'VA', 'VAT', 336, 'VT', 'Vaticanum', 'Vatican', 'Vatican City', 0, 921, 'EU', '.va', 'EUR', '379', '#####', '^(d{5})$', 'la,it,fr', 'IT', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (239, 'VC', 'VCT', 670, 'VC', 'Saint Vincent and the Grenadines', 'Saint Vincent and the Grenadines', 'Kingstown', 389, 104217, 'NA', '.vc', 'XCD', '+1-784', '', '', 'en-VC,fr', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (240, 'VE', 'VEN', 862, 'VE', 'Venezuela', 'Venezuela', 'Caracas', 912050, 27223228, 'SA', '.ve', 'VEF', '58', '####', '^(d{4})$', 'es-VE', 'GY,BR,CO', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (241, 'VG', 'VGB', 92, 'VI', 'British Virgin Islands', 'British Virgin Islands', 'Road Town', 153, 21730, 'NA', '.vg', 'USD', '+1-284', '', '', 'en-VG', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (242, 'VI', 'VIR', 850, 'VQ', 'U.S. Virgin Islands', 'U.S. Virgin Islands', 'Charlotte Amalie', 352, 108708, 'NA', '.vi', 'USD', '+1-340', '#####-####', '^d{5}(-d{4})?$', 'en-VI', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (243, 'VN', 'VNM', 704, 'VM', 'Việt Nam', 'Vietnam', 'Hanoi', 329560, 89571130, 'AS', '.vn', 'VND', '84', '######', '^(d{6})$', 'vi,en,fr,zh,km', 'CN,LA,KH', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (244, 'VU', 'VUT', 548, 'NH', 'Vanuatu', 'Vanuatu', 'Port Vila', 12200, 221552, 'OC', '.vu', 'VUV', '678', '', '', 'bi,en-VU,fr-VU', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (245, 'WF', 'WLF', 876, 'WF', 'Wallis and Futuna', 'Wallis and Futuna', 'Mata Utu', 274, 16025, 'OC', '.wf', 'XPF', '681', '#####', '^(986d{2})$', 'wls,fud,fr-WF', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (246, 'WS', 'WSM', 882, 'WS', 'Samoa', 'Samoa', 'Apia', 2944, 192001, 'OC', '.ws', 'WST', '685', '', '', 'sm,en-WS', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (247, 'XK', 'XKX', 0, 'KV', 'Kosovo', 'Kosovo', 'Pristina', 10908, 1800000, 'EU', '', 'EUR', '', '', '', 'sq,sr', 'RS,AL,MK,ME', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (248, 'YE', 'YEM', 887, 'YM', 'al-Yaman', 'Yemen', 'Sanaa', 527970, 23495361, 'AS', '.ye', 'YER', '967', '', '', 'ar-YE', 'SA,OM', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (249, 'YT', 'MYT', 175, 'MF', 'Mayotte', 'Mayotte', 'Mamoudzou', 374, 159042, 'AF', '.yt', 'EUR', '262', '#####', '^(d{5})$', 'fr-YT', '', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (250, 'ZA', 'ZAF', 710, 'SF', 'South Africa', 'South Africa', 'Pretoria', 1219912, 49000000, 'AF', '.za', 'ZAR', '27', '####', '^(d{4})$', 'zu,xh,af,nso,en-ZA,tn,st,ts,ss,ve,nr', 'ZW,SZ,MZ,BW,NA,LS', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (251, 'ZM', 'ZMB', 894, 'ZA', 'Zambia', 'Zambia', 'Lusaka', 752614, 13460305, 'AF', '.zm', 'ZMW', '260', '#####', '^(d{5})$', 'en-ZM,bem,loz,lun,lue,ny,toi', 'ZW,TZ,MZ,CD,NA,MW,AO', '', NULL, '0', 0, 0, NULL, NULL, NULL);
INSERT INTO `countries` VALUES (252, 'ZW', 'ZWE', 716, 'ZI', 'Zimbabwe', 'Zimbabwe', 'Harare', 390580, 11651858, 'AF', '.zw', 'ZWL', '263', '', '', 'en-ZW,sn,nr,nd', 'ZA,MZ,BW,ZM', '', NULL, '0', 0, 0, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for education
-- ----------------------------
DROP TABLE IF EXISTS `education`;
CREATE TABLE `education`  (
  `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `degree_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `university_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `program_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `awarded_year` int(255) NULL DEFAULT NULL,
  `website` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `certificate` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `city_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `country_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of education
-- ----------------------------
INSERT INTO `education` VALUES (1, '1', 'High School', 'Oxford University', 'Software Engineering', 2018, 'www.testing.com', NULL, NULL, 'AD', '2018-12-27 21:10:00.000000', '2018-12-27 21:10:00.000000');

-- ----------------------------
-- Table structure for faq
-- ----------------------------
DROP TABLE IF EXISTS `faq`;
CREATE TABLE `faq`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` int(255) NOT NULL,
  `question` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `answer` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `visible` int(255) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of faq
-- ----------------------------
INSERT INTO `faq` VALUES (1, 2, 'How long does the audit process take?', 'The certification audit team processes audit materials within five to seven business days upon their arrival at GInI. Once GInI reviews and approves audit materials, GInI will send an email containing your exam scheduling instructions.', '2018-12-28 06:28:28.057800', '2018-12-26 03:20:59.000000', 1);
INSERT INTO `faq` VALUES (2, 2, 'What is the exam like?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptas labore ullam repellendus. Vel odio eveniet consequuntur culpa, eos alias repellat. Ea nihil dolorem excepturi consectetur eius, quaerat dolores illum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi aperiam facilis, nemo deleniti natus quisquam nobis, corrupti earum quis, voluptatibus doloremque nostrum nesciunt molestias ipsa. Maxime totam, recusandae aliquam vero.', '2018-12-28 06:29:09.262800', NULL, 1);
INSERT INTO `faq` VALUES (3, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptas labore ullam repellendus. Vel odio eveniet consequuntur culpa, eos alias repellat. Ea nihil dolorem excepturi consectetur eius, quaerat dolores illum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi aperiam facilis, nemo deleniti natus quisquam nobis, corrupti earum quis, voluptatibus doloremque nostrum nesciunt molestias ipsa. Maxime totam, recusandae aliquam vero.', '2018-12-28 06:30:03.146800', NULL, 1);
INSERT INTO `faq` VALUES (4, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptas labore ullam repellendus. Vel odio eveniet consequuntur culpa, eos alias repellat. Ea nihil dolorem excepturi consectetur eius, quaerat dolores illum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi aperiam facilis, nemo deleniti natus quisquam nobis, corrupti earum quis, voluptatibus doloremque nostrum nesciunt molestias ipsa. Maxime totam, recusandae aliquam vero.', '2018-12-28 06:30:03.628800', NULL, 1);
INSERT INTO `faq` VALUES (5, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptas labore ullam repellendus. Vel odio eveniet consequuntur culpa, eos alias repellat. Ea nihil dolorem excepturi consectetur eius, quaerat dolores illum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi aperiam facilis, nemo deleniti natus quisquam nobis, corrupti earum quis, voluptatibus doloremque nostrum nesciunt molestias ipsa. Maxime totam, recusandae aliquam vero.', '2018-12-28 06:30:04.009800', NULL, 1);
INSERT INTO `faq` VALUES (6, 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptas labore ullam repellendus. Vel odio eveniet consequuntur culpa, eos alias repellat. Ea nihil dolorem excepturi consectetur eius, quaerat dolores illum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi aperiam facilis, nemo deleniti natus quisquam nobis, corrupti earum quis, voluptatibus doloremque nostrum nesciunt molestias ipsa. Maxime totam, recusandae aliquam vero.', '2018-12-28 06:30:04.400800', NULL, 1);
INSERT INTO `faq` VALUES (7, 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptas labore ullam repellendus. Vel odio eveniet consequuntur culpa, eos alias repellat. Ea nihil dolorem excepturi consectetur eius, quaerat dolores illum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi aperiam facilis, nemo deleniti natus quisquam nobis, corrupti earum quis, voluptatibus doloremque nostrum nesciunt molestias ipsa. Maxime totam, recusandae aliquam vero.', '2018-12-28 06:30:04.822800', NULL, 1);
INSERT INTO `faq` VALUES (8, 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptas labore ullam repellendus. Vel odio eveniet consequuntur culpa, eos alias repellat. Ea nihil dolorem excepturi consectetur eius, quaerat dolores illum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi aperiam facilis, nemo deleniti natus quisquam nobis, corrupti earum quis, voluptatibus doloremque nostrum nesciunt molestias ipsa. Maxime totam, recusandae aliquam vero.', '2018-12-28 06:30:05.238800', NULL, 1);
INSERT INTO `faq` VALUES (9, 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptas labore ullam repellendus. Vel odio eveniet consequuntur culpa, eos alias repellat. Ea nihil dolorem excepturi consectetur eius, quaerat dolores illum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi aperiam facilis, nemo deleniti natus quisquam nobis, corrupti earum quis, voluptatibus doloremque nostrum nesciunt molestias ipsa. Maxime totam, recusandae aliquam vero.', '2018-12-28 06:30:05.641800', NULL, 1);
INSERT INTO `faq` VALUES (10, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptas labore ullam repellendus. Vel odio eveniet consequuntur culpa, eos alias repellat. Ea nihil dolorem excepturi consectetur eius, quaerat dolores illum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi aperiam facilis, nemo deleniti natus quisquam nobis, corrupti earum quis, voluptatibus doloremque nostrum nesciunt molestias ipsa. Maxime totam, recusandae aliquam vero.', '2018-12-28 06:30:06.025800', NULL, 1);
INSERT INTO `faq` VALUES (11, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptas labore ullam repellendus. Vel odio eveniet consequuntur culpa, eos alias repellat. Ea nihil dolorem excepturi consectetur eius, quaerat dolores illum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi aperiam facilis, nemo deleniti natus quisquam nobis, corrupti earum quis, voluptatibus doloremque nostrum nesciunt molestias ipsa. Maxime totam, recusandae aliquam vero.', '2018-12-28 06:30:06.407800', NULL, 1);
INSERT INTO `faq` VALUES (12, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptas labore ullam repellendus. Vel odio eveniet consequuntur culpa, eos alias repellat. Ea nihil dolorem excepturi consectetur eius, quaerat dolores illum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi aperiam facilis, nemo deleniti natus quisquam nobis, corrupti earum quis, voluptatibus doloremque nostrum nesciunt molestias ipsa. Maxime totam, recusandae aliquam vero.', '2018-12-28 06:30:06.795800', NULL, 1);
INSERT INTO `faq` VALUES (13, 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptas labore ullam repellendus. Vel odio eveniet consequuntur culpa, eos alias repellat. Ea nihil dolorem excepturi consectetur eius, quaerat dolores illum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi aperiam facilis, nemo deleniti natus quisquam nobis, corrupti earum quis, voluptatibus doloremque nostrum nesciunt molestias ipsa. Maxime totam, recusandae aliquam vero.', '2018-12-28 06:30:07.144800', NULL, 1);
INSERT INTO `faq` VALUES (14, 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptas labore ullam repellendus. Vel odio eveniet consequuntur culpa, eos alias repellat. Ea nihil dolorem excepturi consectetur eius, quaerat dolores illum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi aperiam facilis, nemo deleniti natus quisquam nobis, corrupti earum quis, voluptatibus doloremque nostrum nesciunt molestias ipsa. Maxime totam, recusandae aliquam vero.', '2018-12-28 06:30:07.577800', NULL, 1);
INSERT INTO `faq` VALUES (15, 6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptas labore ullam repellendus. Vel odio eveniet consequuntur culpa, eos alias repellat. Ea nihil dolorem excepturi consectetur eius, quaerat dolores illum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi aperiam facilis, nemo deleniti natus quisquam nobis, corrupti earum quis, voluptatibus doloremque nostrum nesciunt molestias ipsa. Maxime totam, recusandae aliquam vero.', '2018-12-28 06:30:08.016800', NULL, 1);
INSERT INTO `faq` VALUES (16, 6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptas labore ullam repellendus. Vel odio eveniet consequuntur culpa, eos alias repellat. Ea nihil dolorem excepturi consectetur eius, quaerat dolores illum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi aperiam facilis, nemo deleniti natus quisquam nobis, corrupti earum quis, voluptatibus doloremque nostrum nesciunt molestias ipsa. Maxime totam, recusandae aliquam vero.', '2018-12-28 06:30:09.298800', NULL, 1);
INSERT INTO `faq` VALUES (17, 6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '', '2018-12-28 06:29:57.558800', NULL, 1);
INSERT INTO `faq` VALUES (18, 7, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '', '2018-12-28 06:29:57.975800', NULL, 1);
INSERT INTO `faq` VALUES (19, 7, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '', '2018-12-28 06:29:58.376800', NULL, 1);
INSERT INTO `faq` VALUES (20, 7, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '', '2018-12-28 06:29:58.873800', NULL, 1);

-- ----------------------------
-- Table structure for idu_applications
-- ----------------------------
DROP TABLE IF EXISTS `idu_applications`;
CREATE TABLE `idu_applications`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `certificate_type` int(11) NOT NULL,
  `activity_type` int(255) NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `start_date` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `end_date` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `audience` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `document` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `IDUs_claimed` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `status` int(255) NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of idu_applications
-- ----------------------------
INSERT INTO `idu_applications` VALUES (1, 2, 3, 1, 'Presentation', 'Stuff', '12/12/2018', '12/15/2018', NULL, NULL, '300', '2018-12-26 02:46:42.450000', '2018-12-25 20:15:53.000000', 1);

-- ----------------------------
-- Table structure for masterbookids
-- ----------------------------
DROP TABLE IF EXISTS `masterbookids`;
CREATE TABLE `masterbookids`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `masterbook_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of masterbookids
-- ----------------------------
INSERT INTO `masterbookids` VALUES (1, 4, 'QJVV4X6KG6O54Z', '2018-12-25 22:50:06.000000', '2018-12-25 22:50:06.000000');

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES (1, 0, 'Testing page', 'testingapge', 'testing content', '2018-12-25 22:11:47.000000', '2018-12-25 22:11:47.000000');
INSERT INTO `pages` VALUES (2, 0, 'Blog testing', 'testingbpage', 'asdfasdfasd', '2018-12-26 04:53:49.771000', '2018-12-25 22:23:49.000000');

-- ----------------------------
-- Table structure for profile
-- ----------------------------
DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `company_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` int(11) NULL DEFAULT NULL,
  `town` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `state` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `postcode` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `address1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `address2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `state` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES (1, 'Professional', 'professional', '2018-12-23 10:46:22.781000', NULL, 'danger');
INSERT INTO `role` VALUES (2, 'Organizer', 'organizer', '2018-12-23 10:46:26.624000', NULL, 'primary');
INSERT INTO `role` VALUES (3, 'AInP', 'provider', '2018-12-25 02:33:06.682000', NULL, 'accent');
INSERT INTO `role` VALUES (4, 'Administrator', 'administrator', '2018-12-23 10:46:32.111000', NULL, 'warning');
INSERT INTO `role` VALUES (5, 'GInI Endorsement', 'giniendorsement', '2018-12-25 02:35:42.109000', NULL, 'info');
INSERT INTO `role` VALUES (6, 'Incubator', 'incubator', '2018-12-25 02:35:45.696000', NULL, 'secondary');
INSERT INTO `role` VALUES (7, 'Accelerator', 'accelerator', '2018-12-25 02:36:15.316000', NULL, 'success');
INSERT INTO `role` VALUES (8, 'Innovation Program', 'innovationprogram', '2018-12-25 02:36:21.369000', NULL, 'metal');

-- ----------------------------
-- Table structure for seo
-- ----------------------------
DROP TABLE IF EXISTS `seo`;
CREATE TABLE `seo`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for status
-- ----------------------------
DROP TABLE IF EXISTS `status`;
CREATE TABLE `status`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `status_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `class` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of status
-- ----------------------------
INSERT INTO `status` VALUES (1, 'Pending', 'pending', '2018-12-23 10:46:01.991000', NULL, 'm-badge--brand');
INSERT INTO `status` VALUES (2, 'Verified', 'verified', '2018-12-23 10:46:03.334000', NULL, 'm-badge--success');

-- ----------------------------
-- Table structure for user_certificates
-- ----------------------------
DROP TABLE IF EXISTS `user_certificates`;
CREATE TABLE `user_certificates`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_type` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `membership_id` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `certificate_type` int(255) NOT NULL,
  `issue_date` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `expiry_date` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `status` int(255) NULL DEFAULT 1,
  `certificate_number` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_certificates
-- ----------------------------
INSERT INTO `user_certificates` VALUES (1, '1', 2, 'asdfasdfa', 2, '12/25/2018', '12/31/2019', '2018-12-24 21:31:34.000000', '2018-12-24 21:31:34.000000', 1, 'AEDC00000520181225');

-- ----------------------------
-- Table structure for user_credential_app
-- ----------------------------
DROP TABLE IF EXISTS `user_credential_app`;
CREATE TABLE `user_credential_app`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `course_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `course_date` varchar(0) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `country_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `trainer_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `AInP_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `AInP_licence` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birth_year` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birth_mon` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birth_day` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `linkedin` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `google` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `role` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '1',
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `remember_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `cert_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `phone1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `country_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `mobile` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `postalcode` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `handbook_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `company_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `city_id` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `state_id` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `profile_pic` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `passport` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `provider` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `provider_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'administrator', 'Administrator', 'Semin', 'Gavriel', '', '', '', 'admin@gini.org', 'Mr', NULL, NULL, NULL, NULL, '4', '$2y$10$lmp7WWeE/0a0s/p7Y7dbneyJPqII4CZh8pEG1QtdXpraDA4CWKiEC', 'I1w94GBitDgxPyLuiJ6hZO6FyjLrVkaOSaQiGMRD37tAYHXlbV5o8EmsmGPa', '2018-12-30 12:12:48.328000', '2018-12-27 21:31:43.000000', '2', 'Alexander Gavriel', 'asdfasdfasdfasdf', NULL, '1231231231', 'AD', NULL, '23123123', NULL, NULL, 'adsfasdf12312312', 'Galaxy Group', 'AL', 'AL', 'files/profile/1/profile_pic', 'files/profile/1/passport', NULL, NULL);
INSERT INTO `users` VALUES (2, 'testinguser', 'testing user', '', '', '', '', '', 'testing@gini.org', 'Mr.', NULL, NULL, NULL, NULL, '1', '$2y$10$lmp7WWeE/0a0s/p7Y7dbneyJPqII4CZh8pEG1QtdXpraDA4CWKiEC', NULL, '2018-12-27 09:44:35.044200', NULL, '1', 'Paul Saldano', '', NULL, NULL, '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL);
INSERT INTO `users` VALUES (3, 'testing', '', '', '', '', '', '', 'currentuser@gini.org', '', NULL, NULL, NULL, NULL, '1', '$2y$10$pq6dkTGgnoeuZkZX1R5r9elvSQn4S1G3L7bZJJcEcdWjjz9lzZ0fe', '7168HAgYjS7rCYgDVjTR1oN1fxcRCn0z4i3VqGcTfrrue51tMvoCu4pgZmpz', '2018-12-26 05:02:23.898000', '2018-12-22 22:01:22.000000', '1', 'Paul Saldano', '', NULL, NULL, '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL);
INSERT INTO `users` VALUES (4, 'testing', '', '', '', '', '', '', 'currentuser@gini.org', '', NULL, NULL, NULL, NULL, '1', '$2y$10$wol96KNdnt6uGXha9b87M.K/dnz5NX8uw.sANxOUlqLLK7WHMrt8C', NULL, '2018-12-26 05:02:21.759000', '2018-12-22 22:02:31.000000', '1', 'testing', '', NULL, NULL, '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, '', '', NULL, NULL);
INSERT INTO `users` VALUES (5, 'Paul', 'Paul', 'S.', 'Saldano', '1975', '8', '9', 'paul@example.com', 'Paul', NULL, NULL, NULL, NULL, '1', NULL, NULL, '2018-12-25 09:59:23.064000', '2018-12-24 22:21:49.000000', '1', 'Paul Saldano', 'asdfasdfasdfasdf', NULL, '1231231231', 'CH', NULL, '23123123', NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL);

-- ----------------------------
-- Table structure for working_exp
-- ----------------------------
DROP TABLE IF EXISTS `working_exp`;
CREATE TABLE `working_exp`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `position` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `start_date` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `end_date` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `industry_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `responsibilities` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `organization_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `organization_website` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `address_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `country_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city_id` int(11) NULL DEFAULT NULL,
  `zipcode` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `manager_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `manager_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `manager_phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of working_exp
-- ----------------------------
INSERT INTO `working_exp` VALUES (1, 1, 'testing', '12/12/2018', '12/15/2018', 'Agriculture, Mining & Construction', 'software', 'testing group', 'www.testing.com', NULL, NULL, 'AD', NULL, NULL, NULL, NULL, NULL, '2018-12-27 21:20:05.000000', '2018-12-27 21:20:05.000000');

SET FOREIGN_KEY_CHECKS = 1;
