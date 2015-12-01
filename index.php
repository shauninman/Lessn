<?php

include('-/config.php');
include('-/SIDB423.php');
include('-/db.php');

define('LESSN_VERSION',	'1.1.1');

define( 'LESSN_ROOT', __DIR__ );
define('LESSN_DOMAIN', 	preg_replace('#^www\.#', '', $_SERVER['SERVER_NAME']));
define('LESSN_URL', 	str_replace('-/index.php', '', 'http://'.LESSN_DOMAIN.$_SERVER['PHP_SELF']));

define('COOKIE_NAME', 	DB_PREFIX.'auth');
define('COOKIE_VALUE',	md5(USERNAME.PASSWORD.COOKIE_SALT));
define('COOKIE_DOMAIN', '.'.LESSN_DOMAIN);

// redirect
if (isset($_GET['token']))
{
	@list($token, $ext) = explode('.', $_GET['token'], 2);
	if ($db->query('SELECT * FROM `'.DB_PREFIX.'urls` WHERE id='.base_convert($token, 36, 10).' LIMIT 1')) {
		if ($rows = $db->rows()) {
			$row = $rows[0];

			header($_SERVER['SERVER_PROTOCOL'].' 301 Moved Permanently');
			header('Location:'.stripslashes($row['url']));
			exit();
		}
	}
}

// no redirect
require_once './-/pages/list.php';
