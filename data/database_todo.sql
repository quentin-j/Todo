-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `todos`;
CREATE TABLE `todos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `task` text NOT NULL,
  `checked` tinyint(3) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `todos` (`id`, `title`, `task`, `checked`) VALUES
(1,	'todo 2',	'change status',	0),
(2,	'todo 3',	'detail a TODO',	0),
(3,	'todo 1',	'list my TODOs',	1),
(4,	'todo 4',	'add a new TODO',	0);
