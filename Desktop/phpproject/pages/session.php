<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
//$connection = mysqli_connect("localhost", "develqg3_phpproj", "GiL3^LJSRkTF");
// Selecting Database
//$db = mysqli_select_db("develqg3_phpproject", $connection);
session_start();// Starting Session
// Storing Session
//$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
//$ses_sql=mysqli_query("select username from userregistration where username='$user_check'", $connection);
//$row = mysqli_fetch_assoc($ses_sql);

$login_session =$_SESSION['login_user'];
if(!isset($login_session) && empty($login_user)){
mysqli_close($connection); // Closing Connection
header('Location: login.html'); // Redirecting To Home Page
}
?>