<?php
session_start();

if(isset($_SESSION['login_user'])){
    session_destroy();
    unset($_SESSION['login_user']);
    echo "<script>alert(\"successfully logged out !\")</script>";
    echo "<script>location.href = 'login.html'</script>";
}
else{
    echo "<script>location.href = 'login.html'</script>";
}
?>