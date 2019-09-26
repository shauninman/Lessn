<?php
/**
 * List all existing shortcut.
 *
 * @package Lessn
 * @version 2019-09-25
 */

use Lessn\LessnListShortcut\LessnListShortcut;

require_once(LESSN_ROOT.'/stubs/header.php');
require_once(LESSN_ROOT.'/LessnListShortcut.php');

$list = new LessnListShortcut();
$list = $list->getShortcuts();
?>
    <h2>List of shortcuts <a href="<?php echo str_replace('index.php', '-/', LESSN_URL) ?>">... or, new one.</a></h2>
    <ul>
        <?php
        $length = 100;
        foreach ($list as $id => $url) {
            $key = (string) $url['id'];
            $link = htmlspecialchars($url['url']);
            if ($length < strlen($url['url'])) {
                $link = substr($link, 0, $length).'...';
            }

            ?>
            <li>
                <span style="display:inline;"><?php echo $key; ?></span>
                <label for="url">
                    <input type="text"
                        id="url"
                        value="<?php echo str_replace('index.php', base_convert($key, 10, 36), LESSN_URL); ?>"
                        onclick="this.focus();this.select();" readonly="readonly" />
                </label>
                <a href="<?php echo $url['url']; ?>"><?php echo $link; ?></a>
            </li>
            <?php
        }
        ?>
    </ul>
<?php
require_once(LESSN_ROOT.'/stubs/footer.php');
