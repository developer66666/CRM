<?php
 session_start();
 if(!isset($_SESSION['login_username'])){
 header('location:index.php');}
?>
<?php


$connect = new PDO("mysql:host=localhost;dbname=softtech_CRM", "softtech_ganesh", "JRCreations@1992");

$query = "
INSERT INTO leadmedical
(enquirydate, fname, company, mobile, email, street, city, state, country, gst, productname, model, quantity, targetprice, description, customertype, leadsource, leadstatus, feedback, engineer, branch) 
VALUES (:enquirydate, :fname, :company, :mobile, :email, :street, :city, :state, :country, :gst, :productname, :model, :quantity, :targetprice, :description, :customertype, :leadsource, :leadstatus, :feedback, :engineer, :branch)";

for($count = 0; $count<count($_POST['hidden_fname']); $count++)
{

	$data = array(
		':enquirydate'	=>	$_POST['hidden_enquirydate'][$count],
		':fname'	=>	$_POST['hidden_fname'][$count],
		':company'	=>	$_POST['hidden_company'][$count],
		':mobile'	=>	$_POST['hidden_mobile'][$count],
		':email'	=>	$_POST['hidden_email'][$count],
		':street'	=>	$_POST['hidden_street'][$count],
		':city'	=>	$_POST['hidden_city'][$count],
		':state'	=>	$_POST['hidden_state'][$count],
		':country'	=>	$_POST['hidden_country'][$count],
		':gst'	=>	$_POST['hidden_gst'][$count],
		':productname'	=>	$_POST['hidden_productname'][$count],
		':model'	=>	$_POST['hidden_model'][$count],
		':quantity'	=>	$_POST['hidden_quantity'][$count],
		':targetprice'	=>	$_POST['hidden_targetprice'][$count],
		':description'	=>	$_POST['hidden_description'][$count],
		':customertype'	=>	$_POST['hidden_customertype'][$count],
		':leadsource'	=>	$_POST['hidden_leadsource'][$count],
		':leadstatus'	=>	$_POST['hidden_leadstatus'][$count],
		':feedback'	=>	$_POST['hidden_feedback'][$count],
		':engineer'	=>	$_POST['hidden_engineer'][$count],
		':branch'	=>	$_POST['hidden_branch'][$count]
	
	);
	$statement = $connect->prepare($query);
	$statement->execute($data);
}

?>