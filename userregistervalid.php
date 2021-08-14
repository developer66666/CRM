<?php
 session_start();
 if(!isset($_SESSION['login_username'])){
 header('location:index.php');}
?>
<?php


 $con =mysqli_connect('localhost', 'softtech_ganesh','JRCreations@1992');
 
 
 mysqli_select_db($con, 'softtech_CRM');
 $name = $_POST["name"]; $uname = $_POST["username"];
 $email = $_POST["email"]; $phone = $_POST["phone"];
 $pass = $_POST["password"];
 
 
 $s = "select * from users where name = '$name'";
 
 $result = mysqli_query($con, $s);
 $num = mysqli_num_rows($result);
 
 if($num == 1){
	 echo "Username Already Taken";
 }else{
	 $reg = "insert into users (name,username,email,phone,password) values ('$name', '$uname','$email','$phone', '$pass')";
	 mysqli_query($con,$reg);	header('location:userregister.php');
	 
	
 }
 
 ?>