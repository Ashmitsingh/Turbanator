<?php
session_start();
$conn=mysqli_connect("localhost","develqg3_phpproj","GiL3^LJSRkTF","develqg3_phpproject");
    if(!$conn)
        {   die("couldn't connect to server"); }
echo"<br>";

if(!mysqli_select_db($conn, "develqg3_phpproject"))
  { echo"database not selected."; }

if (isset($_POST["submit"]))
{
$a=$_REQUEST["orientation"];
$b=$_POST["dropdown11"];
$c=$_POST["dropdown12"];
$cost=$_REQUEST["total"];
$d=$_POST["fname"];
$e=$_REQUEST["email"];
$f=$_REQUEST["contactno"];
$g=$_REQUEST["address"];
 

		$file_tmp = $_FILES["photo"]["tmp_name"];
		$file_name = time().'_'.$_FILES["photo"]["name"];
		$file_path = "upload/".$file_name;	
		$time = time();

if(file_exists($file_path))
		{
			echo $error = "Sorry,The <b>".$file_name."</b> image already exist.";
		}
			else
			{
				$user_id = $_SESSION['login_user'];
                $hi ="INSERT INTO ordertable(OrderID, UserID, orientation,size,pieces,price,name,email,phone,address,images) values('$time','$user_id', '$a','$b','$c','$cost','$d','$e','$f','$g','$file_path')";
                
                
                if(!mysqli_query($conn,$hi))
                {
                    
                    $msg = '<h1>Sorry !</h1>';
                    $msg .= '<p>Something went wrong. Please try again</p>';
                     $msg .= '<p><a href="http://phpproject.developeriam.com/pages/order.html">Click here to try again</a> | <a href="http://phpproject.developeriam.com">Click here to go back to home</a></p>';
                     echo $msg;   
                }
                else
                { ?>
                	<h1>Congrats !</h1>
                	<p>Your order has been placed successfully !</p>
                	<p>Your order id is: <strong><?php echo $time; ?></strong></p>
                    <p><a href="http://phpproject.developeriam.com/pages/payonline.php?orderid=<?php echo $time; ?>&userid=<?php echo base64_encode($user_id); ?>&token=<?php echo base64_encode($cost); ?>">Click here to pay online</a> | <a href="http://phpproject.developeriam.com">Click here to go back to home</a></p>
                    <?php 
                } 
                move_uploaded_file($file_tmp,$file_path);
                }
}
?>