<?php
/**
 * List all existing shortcut.
 *
 * @package Lessn
 * @version 2015-12-01
 */

require_once LESSN_ROOT . '/-/stubs/header.php';

require_once 'LessnListShortcut.php';

$list = new LessnListShortcut();
$list = $list->get_shortcuts();
?>
<h2>List of shortcuts</h2>
<ul>
	<?php
	foreach ( $list as $id => $url ) {
		$key  = (int) $url[ 'id' ];
		$length = 100;
		$link = htmlspecialchars( $url[ 'url' ] );
		if ( $length < strlen( $url[ 'url' ] ) ) {
			$link = substr( $link, 0, $length ) . '...';
		}

		?>
		<li>
			<span style="display:inline;"><?php echo $key; ?></span>
			<input type="text" id="url" value="<?php echo str_replace( 'index.php', base_convert($key, 10, 36), LESSN_URL ); ?>"
				onclick="this.focus();this.select();" readonly="readonly" />
			<a href="<?php echo $url[ 'url' ]; ?>"><?php echo $link; ?></a>
		</li>
		<?php
	}
	?>
</ul>
<?php
require_once LESSN_ROOT . '/-/stubs/footer.php';
