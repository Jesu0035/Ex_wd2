<?php

ini_set('display_errors', 1);

require_once __DIR__ . '/../_.php';
$db = connectToDatabase();

$url_base = "http://localhost/exam_wd/views/";
$url_base2 = "http://localhost/exam_wd/views/user/";
$url_base3 = "http://localhost/exam_wd/partner/";
$url_base4 = "http://localhost/exam_wd/admin/";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <!-- Additional head elements go here -->
</head>

<body>
    <header>
        <!-- Header content goes here -->

        <h1> Logo</h1>
        <nav>
            <ul>
                <li><a href="<?php echo $url_base; ?>index.php">Home</a></li>
                <li><a href="<?php echo $url_base2; ?>user_profile.php">User</a></li>
                <li><a href="<?php echo $url_base3; ?>partner_profile.php">Partner</a></li>
                <li><a href="<?php echo $url_base; ?>signup.php">Sign up</a></li>
                <li><a href="<?php echo $url_base; ?>login.php">Login</a></li>
                <li><a href="<?php echo $url_base4; ?>admin_profile.php">Admins</a></li>
            </ul>
        </nav>


    </header>