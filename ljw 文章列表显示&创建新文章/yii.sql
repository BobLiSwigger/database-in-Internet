/*
 Navicat Premium Data Transfer

 Source Server         : MariaDB
 Source Server Type    : MariaDB
 Source Server Version : 100412
 Source Host           : localhost:3306
 Source Schema         : yii

 Target Server Type    : MariaDB
 Target Server Version : 100412
 File Encoding         : 65001

 Date: 27/05/2020 16:59:14
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment`  (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `c_user_id` int(11) NOT NULL,
  `text` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `c_time` timestamp(0) NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`c_id`) USING BTREE,
  INDEX `p_id`(`p_id`) USING BTREE,
  INDEX `c_user_id`(`c_user_id`) USING BTREE,
  CONSTRAINT `c_user_id` FOREIGN KEY (`c_user_id`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `p_id` FOREIGN KEY (`p_id`) REFERENCES `post` (`p_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of comment
-- ----------------------------

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration`  (
  `version` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `apply_time` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`version`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', 1589024266);
INSERT INTO `migration` VALUES ('m130524_201442_init', 1589024311);
INSERT INTO `migration` VALUES ('m190124_110200_add_verification_token_column_to_user_table', 1589024312);

-- ----------------------------
-- Table structure for post
-- ----------------------------
DROP TABLE IF EXISTS `post`;
CREATE TABLE `post`  (
  `p_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '',
  `user_id` int(11) NULL DEFAULT NULL,
  `tags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `p_time` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`p_id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '文章列表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of post
-- ----------------------------
INSERT INTO `post` VALUES (3, '测试2', '<p>啊哈哈哈哈哈哈啊哈哈哈哈哈</p>', 6, '测试', 1589882883);
INSERT INTO `post` VALUES (4, '测试2', '<p>啊哈哈哈哈哈哈啊哈哈哈哈哈</p>', 6, '测试', 1589882916);
INSERT INTO `post` VALUES (5, '新冠疫情', '<p>截至5月18日24时，据31个省（自治区、直辖市）和新疆生产建设兵团报告，现有确诊病例85例（其中重症病例10例），累计治愈出院病例78241例，累计死亡病例4634例，累计报告确诊病例82960例，现有疑似病例3例。新增无症状感染者17例（无境外输入）。</p><p>累计收到港澳台地区通报确诊病例1540例。其中，香港特别行政区1055例（出院1025例，死亡4例），澳门特别行政区45例（出院44例），台湾地区440例（出院398例，死亡7例）。</p><p><br/></p>', 6, '新冠', 1589883011);
INSERT INTO `post` VALUES (6, '新型冠状肺炎病毒百度百科', '<p><span style=\"color: rgb(0, 0, 0); text-decoration: none;\">新型冠状病毒肺炎<em>（Corona Virus Disease 2019，COVID-19）</em>，简称“新冠肺炎”，世界卫生组织命名为“2019冠状病毒病”<span class=\"sup--normal\" style=\"text-decoration: none; color: rgb(0, 0, 0); font-size: 10.5px; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em; margin-left: 2px; cursor: pointer; padding: 0px 2px;\">&nbsp;[1-2]</span></span><a class=\"sup-anchor\" style=\"position: relative; top: -50px; font-size: 0px; line-height: 0; color: rgb(0, 0, 0); text-decoration: none;\"><span style=\"color: rgb(0, 0, 0);\">&nbsp;</span></a><span style=\"color: rgb(0, 0, 0); text-decoration: none;\">&nbsp;，是指</span><a target=\"_blank\" href=\"https://baike.baidu.com/item/2019%E6%96%B0%E5%9E%8B%E5%86%A0%E7%8A%B6%E7%97%85%E6%AF%92/24267858\" style=\"color: rgb(0, 0, 0); text-decoration: none;\"><span style=\"color: rgb(0, 0, 0);\">2019新型冠状病毒</span></a><span style=\"color: rgb(0, 0, 0); text-decoration: none;\">感染导致的肺炎。2019年12月以来，湖北省武汉市部分医院陆续发现了多例有华南海鲜市场暴露史的</span><a target=\"_blank\" href=\"https://baike.baidu.com/item/%E4%B8%8D%E6%98%8E%E5%8E%9F%E5%9B%A0%E8%82%BA%E7%82%8E/4211489\" style=\"color: rgb(0, 0, 0); text-decoration: none;\"><span style=\"color: rgb(0, 0, 0);\">不明原因肺炎</span></a><span style=\"color: rgb(0, 0, 0); text-decoration: none;\">病例，现已证实为2019新型冠状病毒感染引起的急性</span><a target=\"_blank\" href=\"https://baike.baidu.com/item/%E5%91%BC%E5%90%B8%E9%81%93%E4%BC%A0%E6%9F%93%E7%97%85/333511\" style=\"color: rgb(0, 0, 0); text-decoration: none;\"><span style=\"color: rgb(0, 0, 0);\">呼吸道传染病</span></a><span style=\"color: rgb(0, 0, 0); text-decoration: none;\">。</span></p><p><span style=\"color: rgb(0, 0, 0); text-decoration: none;\">2020年2月11日，</span><a target=\"_blank\" href=\"https://baike.baidu.com/item/%E4%B8%96%E7%95%8C%E5%8D%AB%E7%94%9F%E7%BB%84%E7%BB%87/483426\" style=\"color: rgb(0, 0, 0); text-decoration: none;\"><span style=\"color: rgb(0, 0, 0);\">世界卫生组织</span></a><span style=\"color: rgb(0, 0, 0); text-decoration: none;\">总干事</span><a target=\"_blank\" href=\"https://baike.baidu.com/item/%E8%B0%AD%E5%BE%B7%E5%A1%9E/22091696\" style=\"color: rgb(0, 0, 0); text-decoration: none;\"><span style=\"color: rgb(0, 0, 0);\">谭德塞</span></a><span style=\"color: rgb(0, 0, 0); text-decoration: none;\">在瑞士</span><a target=\"_blank\" href=\"https://baike.baidu.com/item/%E6%97%A5%E5%86%85%E7%93%A6/705948\" style=\"color: rgb(0, 0, 0); text-decoration: none;\"><span style=\"color: rgb(0, 0, 0);\">日内瓦</span></a><span style=\"color: rgb(0, 0, 0); text-decoration: none;\">宣布，将</span><a target=\"_blank\" href=\"https://baike.baidu.com/item/%E6%96%B0%E5%9E%8B%E5%86%A0%E7%8A%B6%E7%97%85%E6%AF%92%E6%84%9F%E6%9F%93%E7%9A%84%E8%82%BA%E7%82%8E/24282048\" style=\"color: rgb(0, 0, 0); text-decoration: none;\"><span style=\"color: rgb(0, 0, 0);\">新型冠状病毒感染的肺炎</span></a><span style=\"color: rgb(0, 0, 0); text-decoration: none;\">命名为“COVID-19”</span><span style=\"color: rgb(0, 0, 0); text-decoration: none;\">&nbsp;。2020年2月21日，国家卫生健康委发布了关于修订新型冠状病毒肺炎英文命名事宜的通知，决定将“新型冠状病毒肺炎”英文名称修订为“COVID-19”，与世界卫生组织命名保持一致，中文名称保持不变。</span><span style=\"color: rgb(0, 0, 0); text-decoration: none;\">2020年3月4日，国家卫健委发布了《</span><a target=\"_blank\" href=\"https://baike.baidu.com/item/%E6%96%B0%E5%9E%8B%E5%86%A0%E7%8A%B6%E7%97%85%E6%AF%92%E8%82%BA%E7%82%8E%E8%AF%8A%E7%96%97%E6%96%B9%E6%A1%88%EF%BC%88%E8%AF%95%E8%A1%8C%E7%AC%AC%E4%B8%83%E7%89%88%EF%BC%89/24494103\" style=\"color: rgb(0, 0, 0); text-decoration: none;\"><span style=\"color: rgb(0, 0, 0);\">新型冠状病毒肺炎诊疗方案（试行第七版）</span></a><span style=\"color: rgb(0, 0, 0); text-decoration: none;\">》。</span></p><p><span style=\"color: rgb(0, 0, 0); text-decoration: none;\">当地时间2020年3月11日，世界卫生组织总干事</span><a target=\"_blank\" href=\"https://baike.baidu.com/item/%E8%B0%AD%E5%BE%B7%E5%A1%9E/22091696\" style=\"color: rgb(0, 0, 0); text-decoration: none;\"><span style=\"color: rgb(0, 0, 0);\">谭德塞</span></a><span style=\"color: rgb(0, 0, 0); text-decoration: none;\">宣布，根据评估，世卫组织认为当前新冠肺炎疫情可被称为全球大流行（pandemic）。</span></p><p><span style=\"color: rgb(0, 0, 0); text-decoration: none;\">为表达全国各族人民对抗击新冠肺炎疫情斗争牺牲烈士和逝世同胞的深切哀悼，国务院决定，2020年4月4日举行全国性哀悼活动。在此期间，全国和驻外使领馆下半旗志哀，全国停止公共娱乐活动。4月4日10时起，全国人民默哀3分钟，汽车、火车、舰船鸣笛，防空警报鸣响。</span></p><p><br/></p>', 6, '新冠', 1590569081);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE,
  UNIQUE INDEX `email`(`email`) USING BTREE,
  UNIQUE INDEX `password_reset_token`(`password_reset_token`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'hahhh', 'WFRGL1z_Tp-5uSYa3qUgTc3aVTVkFDID', '$2y$13$MLoKcYrM.QcrQRbs1bjbQucJosTL1YDP.WfwZ/2/zlXyNxh4hbI96', NULL, 'hahhh@123.com', 10, 1589196901, 1589196901, 'tqSj8w7qKzqrWWq7-9DYmy6jRuke6l3K_1589196901');
INSERT INTO `user` VALUES (2, 'admin', '6MIdSwlLFEZ0xpY6QbknItzt_TjV9aMi', '$2y$13$f3fRzXgkkhuaD.ehy8civeikSG6WQOnh0tnYbzW9Q528jCLI1QDYi', NULL, 'admin@qq.com', 10, 1589197114, 1589197114, 'E_Al0VyFrh9c3ozmMLm2o_R7mHuIXe26_1589197114');
INSERT INTO `user` VALUES (3, 'test', 'HzwEp24vb8vjTwfs7bsC-QN5zpBaXuFe', '$2y$13$0Eb1uh7Wb8h1EMGIaWgMWOrQhzv5vp6KHkOm9ed.ebEDNpbWIAOqO', NULL, '1111@163.com', 10, 1589197335, 1589197335, 'fOQcHFBibKbRrS1v7IpVw17Y5POw3-qH_1589197335');
INSERT INTO `user` VALUES (4, 'omg', '1h26YQ2XEKkWIaR4e3irATFIBPCIIxO9', '$2y$13$grQlcQO01Y069AQlmITKq.cOU4kwgfx7.q/Dt7N4zc7BKGe9MP8xu', NULL, '12345678@qq.com', 10, 1589197695, 1589197695, 'LfBPUlx9nPH6tExnSOt1hsvii0Ua7FCI_1589197695');
INSERT INTO `user` VALUES (5, 'qing', '3x6793Y8opyQmyrzgtC8sG3QJXoTEd-H', '$2y$13$dWE6wRgpGUaFLv3lYWSvTefEn4gJBTg1ZyFJCXQPBnxv7EAMUl8Su', NULL, '2973142895@qq.com', 10, 1589197967, 1589197967, 'DfFSIBbkDmlK1cF0MOYjbhZtSWN3Rvap_1589197967');
INSERT INTO `user` VALUES (6, 'balala', 'MxlikIiuRwdKmpkXA7s8i8_8TgO8AlyS', '$2y$13$ZCMqRl49FSo8vIa9jLPXZ.962v4mLQjpaA3kHrSN7GZ44tJZJiSdG', NULL, 'balala@163.com', 10, 1589701483, 1589701483, 'jxi4MBFIvQnLb_7SU0CQDMUcwDyYvawM_1589701483');

SET FOREIGN_KEY_CHECKS = 1;
