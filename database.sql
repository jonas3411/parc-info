create database test;

use test;

CREATE TABLE `parc` (
  `id` int(15) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,  
  `user` varchar(100) NOT NULL,
  `serie` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `modele` varchar(100) NOT NULL,
  `composants` varchar(100) NOT NULL,
  `os` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);