<?php include('stubs/header.php'); ?>
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
<?php include('stubs/footer.php');
