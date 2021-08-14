<?php
 session_start();
 if(!isset($_SESSION['login_username'])){
 header('location:index.php');}
?>
<?php

$connect = mysqli_connect("localhost", 'softtech_ganesh','JRCreations@1992', "softtech_CRM");
$columns = array('enquirydate', 'fname', 'company', 'mobile', 'email', 'street', 'city', 'state', 'country', 'gst', 'productname', 'model', 'quantity', 'targetprice', 'description', 'customertype', 'leadsource', 'leadstatus', 'feedback', 'engineer', 'branch');

$query = "SELECT * FROM leadmedical";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE fname LIKE "%'.$_POST["search"]["value"].'%" 
 OR company LIKE "%'.$_POST["search"]["value"].'%" 
 OR customertype LIKE "%'.$_POST["search"]["value"].'%" 
 OR mobile LIKE "%'.$_POST["search"]["value"].'%" 
 OR city LIKE "%'.$_POST["search"]["value"].'%" 
 OR state LIKE "%'.$_POST["search"]["value"].'%"
 OR country LIKE "%'.$_POST["search"]["value"].'%"
 OR gst LIKE "%'.$_POST["search"]["value"].'%" 
 OR email LIKE "%'.$_POST["search"]["value"].'%"
 OR productname LIKE "%'.$_POST["search"]["value"].'%"
 OR model LIKE "%'.$_POST["search"]["value"].'%"
 OR leadsource LIKE "%'.$_POST["search"]["value"].'%"
 OR leadstatus LIKE "%'.$_POST["search"]["value"].'%"
 OR branch LIKE "%'.$_POST["search"]["value"].'%"
 OR engineer LIKE "%'.$_POST["search"]["value"].'%"
 OR enquirydate LIKE "%'.$_POST["search"]["value"].'%"
 OR feedback LIKE "%'.$_POST["search"]["value"].'%"
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="enquirydate">' . $row["enquirydate"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="fname">' . $row["fname"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="company">' . $row["company"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="mobile">' . $row["mobile"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="email">' . $row["email"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="street">' . $row["street"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="city">' . $row["city"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="state">' . $row["state"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="country">' . $row["country"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="gst">' . $row["gst"] . '</div>'; 
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="productname">' . $row["productname"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="model">' . $row["model"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="quantity">' . $row["quantity"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="targetprice">' . $row["targetprice"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="description">' . $row["description"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="customertype">' . $row["customertype"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="leadsource">' . $row["leadsource"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="leadstatus">' . $row["leadstatus"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="feedback">' . $row["feedback"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="engineer">' . $row["engineer"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="branch">' . $row["branch"] . '</div>';
  $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Delete</button>';
  $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM leadmedical";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>
