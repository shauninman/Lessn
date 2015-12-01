<?php
// no need to edit this file, see config.php

//error_reporting(0);

// connect (and install if necessary)
$db = SIDB(DB_NAME, DB_USERNAME, DB_PASSWORD, DB_SERVER);
$db->query('CREATE TABLE IF NOT EXISTS `'.DB_PREFIX.'urls` ( '.
	'`id` int(11) unsigned NOT NULL auto_increment, '.
	'`url` text character set utf8 collate utf8_unicode_ci NOT NULL, '.
	'`checksum` int(10) unsigned NOT NULL, '.
	'PRIMARY KEY  (`id`), '.
	'KEY `checksum` (`checksum`) '.
	') ENGINE=MyISAM DEFAULT CHARSET=utf8;');
