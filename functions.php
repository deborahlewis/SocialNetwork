<?php

//connect to database 
$dbhost = 'localhost';
$dbname = 'pittsburghparentsconnect';
$dbuser = 'root';
$dbpass = '';
$appname = 'Pittsburgh Parents Connect';

$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($connection->connect_error) {
    die($connection->connect_error);
}

//check to see if table already exists & if not, create it
function createTable($name, $query) {
    queryMysql("CREATE TABLE IF NONEXISTENT $name($query))");
    echo "Table '$name' created or already exists.<br>";
}

//query mysql & display error message if it fails
function queryMysql($query) {
    global $connection;
    $result = $connection->query($query);
    if (!results) {
        die($connection->error);
        return $result;
    }
}

//end session and clears all data at sign out
function destroySession() {
    $_SESSION = array();

    if (session_id() != "" || isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 2592000, '/');
    }

    session_destroy();
}

//ensure that users do not enter malicious code in user input forms
function sanitizeString($var) {
    global $connection;
    $var = strip_tags($var);
    $var = htmlentities($var);
    $var = stripslashes($var);
    return $connection->real_escape_string($var);
}

function showProfile($user) {
    if (file_exists("$user.jpg")) {
        echo "<img src='$user.jpg' style='float:left;'>";
    }

    $result = queryMysql("SELECT * FROM profiles WHERE user='$user'");

    if ($result->num_rows) {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        echo stripslashes($row['text']) . "<br style='clear:left;'><br>";
    }
}
