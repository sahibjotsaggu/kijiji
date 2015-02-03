<?php
    echo "<script>alert('hey!');</script>";

    $link = mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db("kijiji") or die(mysql_error());
    $response = $_POST['g-recaptcha-response'];
    $message = $_POST['mess_txt'];
    if ($response == "" || $message == "") {
        echo "Hey! Common, I'm tired, don't do this to me. <a href='javascript:window.history.back();'>Go back</a> and fill in the message and pass the reCAPTCHA!";
    }
    else {
        mysql_query("INSERT INTO user_posts (from_user) VALUES('$_COOKIE[user_email]')") or die(mysql_error());
        echo "Message sent!! <a href='index.php'>Go home</a>";
    }
?>
