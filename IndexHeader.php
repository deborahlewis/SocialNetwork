<head>
        <meta charset="utf-8">
        <link rel="icon" href="https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwjTr8CsluXRAhUL04MKHWzGDt0QjRwIBw&url=https%3A%2F%2Fdisqus.com%2Fhome%2Fdiscussion%2Fpwnthesatqa%2Fpwn_the_sat_qa_freedom_of_action_and_expression_are_at_the%2F&psig=AFQjCNHMVE6fFJVAZ8b-lcxFMojIFolb_w&ust=1485704402267682" type="image/jpg" sizes="16x16">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="BootstrapStyle.css">
       
    </head>


<?php // Example 26-2: header.php
  session_start();

  echo "<!DOCTYPE html>\n<html><head>";

  require_once 'functions.php';

  $userstr = ' (Guest)';

  if (isset($_SESSION['user']))
  {
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = " ($user)";
  }
  else $loggedin = FALSE;

  echo "<title>$appname$userstr</title><link rel='stylesheet' " .
       "href='styles.css' type='text/css'>"                     .
       "</head><body><center><canvas id='logo' width='624' "    .
       "height='96'>$appname</canvas></center>"             .
       "<div class='appname'>$appname$userstr</div>"            .
       "<script src='javascript.js'></script>";

  if ($loggedin)
  {
    echo "<br ><ul class='menu'>" .
         "<li><a href='members.php?view=$user'>Home</a></li>" .
         "<li><a href='members.php'>Members</a></li>"         .
         "<li><a href='friends.php'>Friends</a></li>"         .
         "<li><a href='messages.php'>Messages</a></li>"       .
         "<li><a href='profile.php'>Edit Profile</a></li>"    .
         "<li><a href='logout.php'>Log out</a></li></ul><br>";
  }
  else
  {
    echo ("<br><ul class='menu'>" .
          "<li><a href='index.php'>Home</a></li>"                .
          "<li><a href='signup.php'>Sign up</a></li>"            .
          "<li><a href='login.php'>Log in</a></li></ul><br>"     .
          "<span class='info'>&#8658; You must be logged in to " .
          "view this page.</span><br><br>");
  }
?>
