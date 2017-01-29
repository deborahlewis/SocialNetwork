<head>
        <meta charset="utf-8">
        <link rel="icon" href="https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwjTr8CsluXRAhUL04MKHWzGDt0QjRwIBw&url=https%3A%2F%2Fdisqus.com%2Fhome%2Fdiscussion%2Fpwnthesatqa%2Fpwn_the_sat_qa_freedom_of_action_and_expression_are_at_the%2F&psig=AFQjCNHMVE6fFJVAZ8b-lcxFMojIFolb_w&ust=1485704402267682" type="image/jpg" sizes="16x16">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="BootstrapStyle.css">
       
    </head>
    
    <!--Navbar Start-->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">      
                    <a class="navbar-brand" href="/PittsburghParentsConnect">Pittsburgh Parents Connect</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="http://localhost/PittsburghParentsConnect/Signup.php">Register <span class="sr-only">(current)</span></a></li>
                        <li><a href="http://localhost/PittsburghParentsConnect/Login.php">Log In</a></li>    
                        <li><a href="http://localhost/PittsburghParentsConnect/About.php">About</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!--Navbar End-->

<?php

session_start();


echo "<!DOCTYPE html>\n<html><head>";

include 'functions.php';


$userstr = ' (Guest)';

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr = " ($user)";
} else {
    $loggedin = FALSE;
}

echo "<title>$appname$userstr</title><link rel='stylesheet' " .
 "href='styles.css' type='text/css'>" .
 "</head><body><center><canvas id='logo' width='624' " .
 "height='96'>$appname</canvas></center>" .
 "<div class='appname'>$appname$userstr</div>" .
 "<script src='javascript.js'></script>";

if ($loggedin) {
    echo "<br ><ul class='menu'>" .
    "<li><a href='members.php?view=$user'>Home</a></li>" .
    "<li><a href='members.php'>Members</a></li>" .
    "<li><a href='friends.php'>Friends</a></li>" .
    "<li><a href='messages.php'>Messages</a></li>" .
    "<li><a href='profile.php'>Edit Profile</a></li>" .
    "<li><a href='logout.php'>Log out</a></li></ul><br>";
} else {
    echo ("<br><ul class='menu'>" .
    "<li><a href='index.php'>Home</a></li>" .
    "<li><a href='signup.php'>Sign up</a></li>" .
    "<li><a href='login.php'>Log in</a></li></ul><br>" .
    "<span class='info'>&#8658; You must be logged in to " .
    "view this page.</span><br><br>");
}
