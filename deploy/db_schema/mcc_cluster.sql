-- MySQL Back Up

CREATE TABLE `cat_users` (
 `user_id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(200) NOT NULL,
 `nickname` varchar(200) DEFAULT NULL,
 `roles` int(8) NOT NULL DEFAULT '0',
 `created_at` datetime DEFAULT NULL,
 `password` varchar(500) NOT NULL,
 `email` varchar(200) DEFAULT NULL,
 `qq` varchar(200) DEFAULT NULL,
 `ip` varchar(200) DEFAULT NULL,
 PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

CREATE TABLE `cat_favorites` (
 `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
 `title` varchar(300) DEFAULT NULL COMMENT 'title',
 `url` text,
 `type_id` int(11) NOT NULL DEFAULT '0' COMMENT '分类',
 `icon_url` text,
 `status` int(11) NOT NULL DEFAULT '0' COMMENT '推荐字段',
 `created_at` datetime NOT NULL,
 `user_id` int(11) DEFAULT NULL,
 PRIMARY KEY (`id`),
 KEY `type_id` (`type_id`),
 KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=434 DEFAULT CHARSET=utf8;

CREATE TABLE `cat_favorites_type` (
 `type_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '类型id',
 `name` varchar(200) NOT NULL COMMENT '类型名称',
 `level` int(11) NOT NULL COMMENT '层级，LV',
 `created_at` datetime DEFAULT NULL,
 `user_id` int(11) DEFAULT NULL,
 PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- cyw 2012-12-07
CREATE TABLE `cat_timeline_nav` (
 `year`  int(11) NOT NULL COMMENT '年份',
 `month` int(11) NOT NULL COMMENT '月份',
 `type`  int(2)  NOT NULL DEFAULT '0' COMMENT '类型(备用)',
 `user_id` int(11) DEFAULT NULL,
 `created_at` datetime DEFAULT NULL,
 PRIMARY KEY (`year`, `month`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COMMENT 'timeline导航表';

CREATE TABLE `cat_timeline_topic` (
 `topic_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '话题id',
 `subject`  varchar(200) CHARACTER SET utf8 DEFAULT NULL COMMENT '标题',
 `content`  text CHARACTER SET utf8 DEFAULT NULL COMMENT '内容',
 `category` int(2)  NOT NULL DEFAULT '0' COMMENT '分类，图片|话题|文字|',
 `type`  int(2)  NOT NULL DEFAULT '0' COMMENT '生活|工作',
 `user_id` int(11) DEFAULT NULL,
 `created_at` datetime DEFAULT NULL,
 `updated_at` datetime DEFAULT NULL,
 PRIMARY KEY (`topic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COMMENT 'timeline内容表';

ALTER TABLE `cat_users` ADD `birth_date` date DEFAULT NULL COMMENT '生日' AFTER `ip` ;
