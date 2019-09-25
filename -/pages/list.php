<?php
/**
 * List all existing shortcut.
 *
 * @package Lessn
 * @version 2015-12-01
 */

require_once(LESSN_ROOT.'/stubs/header.php');
require_once(__DIR__.'LessnListShortcut.php');

$list = new LessnListShortcut();
$list = $list->get_shortcuts();
?>
    <h2>List of shortcuts <a href="<?php echo str_replace('index.php', '-/', LESSN_URL) ?>">... or, new one.</a></h2>
    <ul>
        <?php
        $length = 100;
        foreach ($list as $id => $url) {
            $key = (int) $url['id'];
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
                </label>
                onclick="this.focus();this.select();" readonly="readonly" />
                <a href="<?php echo $url['url']; ?>"><?php echo $link; ?></a>
            </li>
            <?php
        }
        ?>
    </ul>
<?php
require_once(LESSN_ROOT.'/stubs/footer.php');
