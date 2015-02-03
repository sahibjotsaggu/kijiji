<!DOCTYPE html>
<html>
    <head>
        <title>Kijiji</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <header>
            <ul>
                <?php
                    if (isset($_COOKIE['user_email'])) {
                        echo "<li><a href='logout.php'>Logout " . $_COOKIE['user_email'] . "</a></li>";
                    }
                    else {
                        echo "<li><a href='signin.php'>Sign In</a></li>";
                    }
                ?>
                <li><a href="register.html">Register</a></li>
            </ul>
        </header>
        <h1 id="title">Kijiji</h1>
        <h3>Listing(s)</h3>
        <div id="listings">
            <ul>
                <li><a href="books.php">Books</a></li>
            </ul>
        </div> <!-- end listings div -->
    </body>
</html>
