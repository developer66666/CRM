<?php session_start(); if(!isset($_SESSION['login_username'])){ header('location:index.php');}?>
<?php
$connect = mysqli_connect('localhost', 'softtech_ganesh','JRCreations@1992', "softtech_CRM");
if(isset($_POST["id"], $_POST["invoice"],  $_POST["name"], $_POST["email"], $_POST["address_1"], $_POST["address_2"], $_POST["town"], $_POST["county"], $_POST["postcode"],  $_POST["phone"],  $_POST["name_ship"], $_POST["address_1_ship"], $_POST["address_2_ship"], $_POST["town_ship"], $_POST["county_ship"], $_POST["postcode_ship"] ))
{
 $id = mysqli_real_escape_string($connect, $_POST["id"]);
 $invoice = mysqli_real_escape_string($connect, $_POST["invoice"]);
 $name = mysqli_real_escape_string($connect, $_POST["name"]);
 $email = mysqli_real_escape_string($connect, $_POST["email"]);
 $address_1 = mysqli_real_escape_string($connect, $_POST["address_1"]);
 $address_2 = mysqli_real_escape_string($connect, $_POST["address_2"]);
 $town = mysqli_real_escape_string($connect, $_POST["town"]);
 $county = mysqli_real_escape_string($connect, $_POST["county"]);
 $postcode = mysqli_real_escape_string($connect, $_POST["postcode"]);
 $phone = mysqli_real_escape_string($connect, $_POST["phone"]);
 $name_ship = mysqli_real_escape_string($connect, $_POST["name_ship"]);
 $address_1_ship = mysqli_real_escape_string($connect, $_POST["address_1_ship"]);
 $address_2_ship = mysqli_real_escape_string($connect, $_POST["address_2_ship"]);
 $town_ship = mysqli_real_escape_string($connect, $_POST["town_ship"]);
 $county_ship = mysqli_real_escape_string($connect, $_POST["county_ship"]);
 $postcode_ship = mysqli_real_escape_string($connect, $_POST["postcode_ship"]);
 
		
 
  
 $query = "INSERT INTO customers (id,invoice,name,email,address_1,address_2,town,county,postcode,phone,name_ship,address_1_ship,address_2_ship,town_ship,county_ship,postcode_ship) VALUES('$id','$invoice', '$name','$email','$address_1','$address_2','$town','$county','$postcode', '$phone','$name_ship','$address_1_ship','$address_2_ship','$town_ship','$county_ship','$postcode_ship')";
 if(mysqli_query($connect, $query))
 {
  echo 'Customer Created';
 }
}
?>
