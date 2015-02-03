
<!DOCTYPE html>
<html>
    <head>
        <title>Sign In | Kijiji</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
        <header>
            <ul>
                <li><a href="signin.html">Sign In</a></li>
                <li><a href="register.html">Register</a></li>
            </ul>
        </header>
        <h1 id="title">Kijiji - Sign In</h1>
        <!--<div class="g-recaptcha" data-sitekey="6Ld0AgETAAAAAMt-lY3a6Nlo8gzOMvyWKHcF5_99"></div>-->
        <?php
        if (isset($_GET['redirect'])) {
            echo "<form action='signup.php?redirect=books' method='post'>";
        }
        else {
            echo "<form action='signup.php' method='post'>";
        }
        ?>
            <table border="0">
                <tr><td>Email:</td><td><input type="email" name="log_email" /></td></tr>
                <tr><td>Password:</td><td><input type="password" name="log_pass" /></td></tr>
                <tr><td colspan="2"><input type="submit" value="Sign In"></td></tr>
            </table>
        </form>
    </body>
</html>
