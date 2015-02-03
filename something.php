<?php
    $link = mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db("kijiji") or die(mysql_error());
    echo "worked.";
    echo basename(getcwd());
    $posttitle = mysql_fetch_array(mysql_query("SELECT post_title FROM books_posts WHERE uni = basename(getcwd())"));
    echo $posttitle['post_title'];

?>

<!DOCTYPE html>
<html>
    <head>
        <title> | Kijiji</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src='https://www.google.com/recaptcha/api.js'></script>
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
        <h1 id="title">Kijiji - Books</h1>
        <!--<div class="g-recaptcha" data-sitekey="6Ld0AgETAAAAAMt-lY3a6Nlo8gzOMvyWKHcF5_99"></div>-->
        <h3>Postings - <a href=create_post.php>Create a new post</a></h3>
        <div id="posts">
            <ul>
                <?php
                $all_posts = mysql_query("SELECT * FROM books_posts ORDER BY id DESC") or die(mysql_error());
                if (mysql_num_rows($all_posts) > 0) {
                    while ($p = mysql_fetch_array($all_posts)) {
                        echo "<li><div id=img><img width=100 height=100 src=images/" . $p['image'] . "></img></div>";
                        echo "<div id=post_title><a href=posts/" . $p['uni'] ."/index.html>" . $p['post_title'] . "</a></div>";
                        echo "<div id=post_desc>" . $p['post_desc'] . "</div>";
                        echo "<div id=post_price>$" . $p['post_price'] . "</div></li>";

                    }
                }
                else {
                    echo "There are currently no posts.";
                }
                ?>
            </ul>
        </div> <!-- end listings div -->
    </body>
</html>
