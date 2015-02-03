<?php
    /*$email = $_POST['email'] . "@snaek.com"; // check if the email is already in use
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2']; // check if the two passwords match*/

    $email = $_POST['log_email'];
    $pass = $_POST['log_pass'];


    $link = mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db("kijiji") or die(mysql_error());

    // 2. check email and password to see if they match
    $email_list = mysql_query("SELECT * FROM users WHERE email = '$email'") or die(mysql_error());

    $correct_pass = 0;
    while ($emails = mysql_fetch_array($email_list)) {
        if ($emails['password'] == $pass) {
            $correct_pass = 1;
            break;
        }
    }

    if ($correct_pass == 1) {
        $inOneHour = 60 * 60 * 1 + time();
        setcookie('user_email', $email, $inOneHour);
        if (isset($_GET['redirect'])) {
            header("Location: ./books.php");

        }
        else {
            header("Location: ./index.php");
        }
    }

/*
    // 2. email in use?
    $email_list = mysql_query("SELECT email FROM basic_user_info") or die(mysql_error());
    $email_in_use = false;
    while ($emails = mysql_fetch_array($email_list)) {
        if ($emails['email'] == $email) {
            $email_in_use = true;
            break;
        }
    }

    if ($email_in_use) {
        header("Location: ./index.php?err=1");
    }

    // 3. passwords same?
    if ($pass1 != $pass2) {
        header("Location: ./index.php?err=2");
    }

    // 4. Encrypt password
    $encrypted_pass = create_hash($pass1);*/

    // 5. insert into database
    /*mysql_query("INSERT INTO basic_user_info (first_name, last_name, email, password) VALUES('$first_name', '$last_name', '$email', '$encrypted_pass')") or die(mysql_error());

    // 6. go to homepage
    header("Location: ./index.html");*/
?>
