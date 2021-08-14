<?php
 session_start();
 if(!isset($_SESSION['login_username'])){
 header('location:index.php');}
?>
<?php
$connect = mysqli_connect('localhost', 'softtech_ganesh','JRCreations@1992', "softtech_CRM");
if(isset($_POST["enquirydate"], $_POST["fname"],  $_POST["company"], $_POST["mobile"], $_POST["email"], $_POST["street"], $_POST["city"], $_POST["state"], $_POST["country"],  $_POST["gst"],  $_POST["productname"], $_POST["model"], $_POST["quantity"], $_POST["targetprice"], $_POST["description"], $_POST["customertype"], $_POST["leadsource"], $_POST["leadstatus"],  $_POST["feedback"], $_POST["engineer"], $_POST["branch"] ))
{
 $enquirydate = mysqli_real_escape_string($connect, $_POST["enquirydate"]);
 $fname = mysqli_real_escape_string($connect, $_POST["fname"]);
 $company = mysqli_real_escape_string($connect, $_POST["company"]);
 $mobile = mysqli_real_escape_string($connect, $_POST["mobile"]);
 $email = mysqli_real_escape_string($connect, $_POST["email"]);
 $street = mysqli_real_escape_string($connect, $_POST["street"]);
 $city = mysqli_real_escape_string($connect, $_POST["city"]);
 $state = mysqli_real_escape_string($connect, $_POST["state"]);
 $country = mysqli_real_escape_string($connect, $_POST["country"]);
 $gst = mysqli_real_escape_string($connect, $_POST["gst"]);
 $productname = mysqli_real_escape_string($connect, $_POST["productname"]);
 $model = mysqli_real_escape_string($connect, $_POST["model"]);
 $quantity = mysqli_real_escape_string($connect, $_POST["quantity"]);
 $targetprice = mysqli_real_escape_string($connect, $_POST["targetprice"]);
 $description = mysqli_real_escape_string($connect, $_POST["description"]);
 $customertype = mysqli_real_escape_string($connect, $_POST["customertype"]);
 $leadsource = mysqli_real_escape_string($connect, $_POST["leadsource"]);
 $leadstatus = mysqli_real_escape_string($connect, $_POST["leadstatus"]);
 $feedback = mysqli_real_escape_string($connect, $_POST["feedback"]);
 $engineer = mysqli_real_escape_string($connect, $_POST["engineer"]);
 $branch = mysqli_real_escape_string($connect, $_POST["branch"]);
		
 
  
 $query = "INSERT INTO leadmedical (enquirydate,fname,company,mobile,email,street,city,state,country,gst,productname,model,quantity,targetprice,description,customertype,leadsource,leadstatus,feedback,engineer,branch) VALUES('$enquirydate','$fname', '$company','$mobile','$email','$street','$city','$state','$country', '$gst','$productname','$model','$quantity','$targetprice','$description','$customertype','$leadsource','$leadstatus','$feedback','$engineer','$branch')";
 if(mysqli_query($connect, $query))
 {
  echo 'Lead Created';
 }
}
?>
