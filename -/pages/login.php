<?php
/**
 * Login page.
 *
 * @package Lessn
 * @version 2019-09-25
 */
include(LESSN_ROOT.'/stubs/header.php'); ?>
    <form method="post">
        <label for="username"><input type="text" name="username" placeholder="username" id="username" /></label>
        <label>
            <input type="password" name="password" placeholder="password" />
        </label>
        <button>Login</button>
    </form>
    <script>
        document.getElementById('username').focus();
    </script>
<?php include(LESSN_ROOT.'/stubs/footer.php');
