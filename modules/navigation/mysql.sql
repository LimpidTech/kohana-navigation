DROP TABLE IF EXISTS `navleaves`;

CREATE TABLE `navleaves` (

  `id`          int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id`   int(11) unsigned DEFAULT NULL,

  `label`       varchar(32) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `title`       varchar(128) DEFAULT NULL,
  `target`      varchar(16) DEFAULT NULL,

  PRIMARY KEY (`id`),
  KEY `idx_navleaf_parent` (`parent_id`)

) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

DROP TABLE IF EXISTS `navtrees`;

CREATE TABLE `navtrees` (

	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`name` varchar(32) NOT NULL,
	`access_key` varchar(32) NOT NULL,

	PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

DROP TABLE IF EXISTS `navmap`;

CREATE TABLE `navmap` (

	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`navtree_id` int(11) unsigned NOT NULL,
	`navleaf_id` int(11) unsigned NOT NULL,

	PRIMARY KEY (`id`),
	UNIQUE KEY `idx_navtree_leaf` (`navtree_id`,`navleaf_id`)

) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

