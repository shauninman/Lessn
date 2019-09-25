<?php
/**
 * Define all constants.
 *
 * @since   2015-12-01
 * @version 2019-09-25
 * @package Lessn
 */

define('LESSN_VERSION', '1.2.1');

define('LESSN_ROOT', __DIR__); // added in 1.2.0

define('LESSN_DOMAIN', preg_replace('#^www\.#', '', $_SERVER['SERVER_NAME']));
define('LESSN_URL', str_replace('-/index.php', '', $_SERVER['REQUEST_SCHEME'].'://'.LESSN_DOMAIN.$_SERVER['PHP_SELF']));

define('COOKIE_NAME', DB_PREFIX.'auth');
define('COOKIE_VALUE', md5(USERNAME.PASSWORD.COOKIE_SALT));
define('COOKIE_DOMAIN', '.'.LESSN_DOMAIN);

if (!defined('API_SALT')) {
    define('API_SALT', 'L35sm4K35M0U7hSAP1');
} // added in 1.0.5
define('API_KEY', md5(USERNAME.PASSWORD.API_SALT));

define('NOW', (new DateTime())->getTimestamp());
define('YEAR', 365 * 24 * 60 * 60);
