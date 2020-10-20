<?php

$db = mysqli_connect('localhost','develqg3_phpproj','GiL3^LJSRkTF','develqg3_phpproject') or die("Unable to connect");

//register users

$username = mysqli_real_escape_string($db, $_POST['form-username']);
$firstname = mysqli_real_escape_string($db, $_POST['form-first-name']);
$lastname = mysqli_real_escape_string($db, $_POST['form-last-name']);
$Pass = mysqli_real_escape_string($db, $_POST['form-password']);
$CPass = mysqli_real_escape_string($db, $_POST['form-cpassword']);

//handling errors
$errors = array(); 
//check if user already exists
$user_select_query = "select * from userregistration where username = '$username' limit 1";
$result = mysqli_query($db, $user_select_query);
$user = mysqli_fetch_assoc($result);

if($user){
    if($user['username'] === $username){array_push($errors,"Username Already taken");}
}
if(count($errors) == 0){
    $password = md5($Pass);
    mysqli_query($db,"INSERT INTO userregistration(username,firstname,lastname,password) VALUES('$username','$firstname','$lastname','$password')");
    
    $msg = '<h1>Congrats ! registered successfully</h1>';
    $msg .= '<p><a href="http://phpproject.developeriam.com/pages/login.html">Click here to login</a> | <a href="http://phpproject.developeriam.com">Click here to go back to home</a></p>';
    echo $msg;
    
}
else{
    $msg = '<h1>Sorry ! registration failed</h1>';
    $msg .= '<p>Something went wrong. Please try again</p>';
     $msg .= '<p><a href="http://phpproject.developeriam.com/pages/registration.html">Click here to try again</a> | <a href="http://phpproject.developeriam.com">Click here to go back to home</a></p>';
     echo $msg;
}
?>
