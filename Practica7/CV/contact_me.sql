CREATE TABLE IF NOT EXISTS `contact_me` (
`id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Msubject` varchar(255) NOT NULL,
  `tmessage` varchar(255) NOT NULL,

  PRIMARY KEY(`id`)
);