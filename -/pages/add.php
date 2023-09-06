<?php
/**
 * Add a shortcut page.
 *
 * @package Lessn
 * @version 2019-09-25
 */
require_once(LESSN_ROOT.'/stubs/header.php'); ?>
    <form method="get">
        <label for="url"><input type="text" id="url" name="url" placeholder="url" /></label>
        <button>Lessn</button>

        <p>Grab the <a
                title="Lessn a link"
                href="javascript:location.href='<?php echo LESSN_URL; ?>-/?url='+encodeURIComponent(location.href);"
                onclick="alert('Drag this bookmarklet onto your browser bar.');return false;">
                Lessn
            </a> or <a
                title="Lessn and tweet the Lessn'd link"
                href="javascript:location.href='<?php echo LESSN_URL; ?>-/?tweet&amp;url='+encodeURIComponent(location.href);"
                onclick="alert('Drag this bookmarklet onto your browser bar.');return false;">
                Tweetn
            </a> bookmarklet.
            <span>API key: <code><?php echo API_KEY; ?></code></span>
        </p>
    </form>
    <script>
        document.getElementById('url').focus();
    </script>
<?php require_once(LESSN_ROOT.'/stubs/footer.php');
