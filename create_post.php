<?php
    $link = mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db("kijiji") or die(mysql_error());
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Create Post | Kijiji</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
        <header>
            <ul>
                <?php
                    if (isset($_COOKIE['user_email'])) {
                        echo "<li><a href='logout.php'>Logout</a></li>";
                    }
                    else {
                        echo "<li><a href='signin.html'>Sign In</a></li>";
                        header("Location: ./signin.php?redirect=books");
                    }
                ?>
                <li><a href="register.html">Register</a></li>
            </ul>
        </header>
        <h1 id="title">Kijiji - Books</h1>
        <!--<div class="g-recaptcha" data-sitekey="6Ld0AgETAAAAAMt-lY3a6Nlo8gzOMvyWKHcF5_99"></div>-->
        <h3>Create a new listing</h3>
        <div id="new_post_form">
            <form action="new_post.php" method="post" enctype="multipart/form-data">
                <table border="1">
                    <tr><td>Title</td><td><input type="text" name="title" /></td></tr>
                    <tr><td>Description</td><td><textarea name="description"></textarea></td></tr>
                    <tr><td>Price</td><td><input type="text" name="price" /></td></tr>
                    <tr><td>Image</td><td><input type="file" name="fileToUpload" id="fileToUpload"></td></tr>
                    <tr><td colspan="2"><input type="submit" value="Create Post" /></td></tr>
                </table>
            </form>

        </div> <!-- end listings div -->
    </body>
</html>
