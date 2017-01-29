 <!--Navbar Start-->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">      
                    <a class="navbar-brand" href="/socialnetwork">Social Network</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="http://localhost/SocialNetwork/About.php">About <span class="sr-only">(current)</span></a></li>
                        <li><a href="http://localhost/SocialNetwork/Blog.php">Blog</a></li>    
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!--Navbar End-->


<div class = "jumbotron">
    <h1>Pittsburgh Parents Connect</h1>
    <p><a class = "btn btn-primary btn-lg" href = "http://localhost/PittsburghParentsConnect/Signup.php" role = "button">Register</a>
        <a class = "btn btn-primary btn-lg" href = "http://localhost/PittsburghParentsConnect/Login.php" role = "button">Sign In</a></p>
</div>            
<?php
require_once 'IndexHeader.php';




echo "<br><span class='main'>Welcome to $appname,";



if ($loggedin) {
    echo " $user, you are logged in.";
} else {
    echo ' please sign up and/or log in to join in.';
}
?>

</span><br><br>
</body>
</html>
