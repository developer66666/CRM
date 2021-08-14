<?php
 session_start();
 if(!isset($_SESSION['login_username'])){
 header('location:index.php');}
?>
<?php
$connect = mysqli_connect("localhost", 'softtech_ganesh','JRCreations@1992', "softtech_CRM");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM leadmedical WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Lead Deleted';
 }
}
?>
