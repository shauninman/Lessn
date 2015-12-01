<?php
/**
 * List all existing shortcut.
 *
 * @package Lessn
 * @version 2015-12-01
 */

require_once LESSN_ROOT . '/config.php';

/**
 * Class LessnListShortcut
 */
class LessnListShortcut {

	/**
	 * @var $db
	 */
	private $db;

	/**
	 * LessnListShortcut constructor.
	 */
	public function __construct() {

		$this->db = SIDB( DB_NAME, DB_USERNAME, DB_PASSWORD, DB_SERVER );
		if ( ! $this->db->is_connected ) {
			die( 'Could not connect. ' . $this->db->error );
		}
	}

	/**
	 * Get shortcuts, use a ID value for only one item.
	 *
	 * @param bool   $id    ID if shortcut.
	 *
	 * @param string $order Order of the result.
	 *
	 * @return array $result ID, URL of one or all shortcut.
	 */
	public function get_shortcuts( $id = FALSE, $order = 'DESC' ) {

		$sql = ' ORDER BY `id` ' . $order;
		if ( FALSE !== $id ) {
			$sql = ' WHERE id=' . (int) $id . ' LIMIT 1';
		}

		$sql    = 'SELECT id, url FROM `' . DB_PREFIX . 'urls`' . $sql;
		$query  = $this->db->query( $sql );
		$result = $this->db->rows();

		return $result;
	}
}
