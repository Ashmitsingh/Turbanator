<?php
// mysqli_report(MYSQLI_REPORT_ALL);
session_start();
$error='';
if (isset($_POST['submit'])) 
{
    if (empty($_POST['form-username']) || empty($_POST['form-password'])) 
        {
            $error = "Username or Password is invalid";
        }
    else
        {
            $username=$_POST['form-username'];
            $Pass = MD5($_POST['form-password']);
			 
$connection = mysqli_connect("localhost", "develqg3_phpproj","GiL3^LJSRkTF");


 $username = stripslashes($username);
$Pass = stripslashes($Pass);
 $username = mysqli_real_escape_string($connection, $username);
$Pass = mysqli_real_escape_string($connection, $Pass);

$db = mysqli_select_db($connection, "develqg3_phpproject");

        $user_select_query = "SELECT username FROM userregistration WHERE username='$username' AND password='$Pass'";
        $result = mysqli_query($connection, $user_select_query);
        $rows=mysqli_num_rows($result);
        
        
        if($rows > 0)
        {
            $_SESSION['login_user'] = $username; 
			 header("Location: http://phpproject.developeriam.com/pages/order.php"); 
  
            exit; 
        }
    else{
        $error= "Email or Password Incorrect"; 
        echo "<script>location.href = 'login.html'</script>";
        }
   mysqli_close($connection); //connection closed you fool
}
}
?>
