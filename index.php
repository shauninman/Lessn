<?php

include('-/config.php');
include('-/SIDB423.php');
include('-/db.php');

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
header($_SERVER['SERVER_PROTOCOL'].' 404 Not Found');
header('Status:404');
die('404 Not Found');
