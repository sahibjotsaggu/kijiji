<?php
    $link = mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db("kijiji") or die(mysql_error());
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Books | Kijiji</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="script.js"></script>
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
                        echo "<li><a href='register.html'>Register</a></li>";
                    }
                ?>
            </ul>
        </header>
        <h1 id="title">Kijiji - Books</h1>
        <!--<div class="g-recaptcha" data-sitekey="6Ld0AgETAAAAAMt-lY3a6Nlo8gzOMvyWKHcF5_99"></div>-->
        <h3>Postings - <a href=create_post.php>Create a new post</a></h3>
        <div id="posts">
                <?php
                $all_posts = mysql_query("SELECT * FROM books_posts ORDER BY id DESC") or die(mysql_error());
                if (mysql_num_rows($all_posts) > 0) {
                    while ($p = mysql_fetch_array($all_posts)) {
                        echo "<div class='each_post' id='post" . $p['id'] . "'>\n";
                        echo "<div id=img><img width=100 height=100 src=images/" . $p['image'] . "></img></div>\n";
                        echo "<div id=post_title><a href=posts/" . $p['uni'] ."/index.php>" . $p['post_title'] . "</a></div>\n";
                        echo "<div id=post_desc>" . $p['post_desc'] . "</div>\n";
                        echo "<div id=post_price>$" . $p['post_price'] . "</div>\n";
                        echo "<div class='button" . $p['id'] . "' id='reply_button'>Send Message</div></div>\n";
                    }
                }
                else {
                    echo "There are currently no posts.";
                }
                ?>
        </div> <!-- end listings div -->
        <div id="send_message">
            <form action="send_message.php" method="post">
                <table border="0">
                    <?php
                        echo "<tr><td>Email:</td><td>";
                        if (isset($_COOKIE['user_email'])) {
                            echo $_COOKIE['user_email'] . "</td></tr>";
                            echo "<tr><td>Message:</td><td><textarea name='mess_txt' id='mess_txt'></textarea></td></tr>";
                            echo "<tr><td colspan='2'><div class='g-recaptcha' data-sitekey='6Ld0AgETAAAAAMt-lY3a6Nlo8gzOMvyWKHcF5_99'></div>";
                            echo "<tr><td colspan='2'><input type='submit' value='Send Message' /></td></tr>";
                        }
                        else {
                            echo "<a href='signin.php?redirect=books'>Sign In First</a></td></tr>";
                            echo "<tr><td>Message:</td><td><textarea id='mess_txt' disabled></textarea></td></tr>";
                        }
                    ?>
                </table>
            </form>
        </div><!-- end send_message div -->
    </body>
</html>
