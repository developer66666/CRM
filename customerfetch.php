<?php

 session_start();

 if(!isset($_SESSION['login_username'])){

 header('location:index.php');}

?>

<?php

$connect = mysqli_connect("localhost", 'softtech_ganesh','JRCreations@1992', "softtech_CRM");
$columns = array('id','invoice', 'name', 'email', 'address_1', 'address_2', 'town', 'county', 'postcode', 'phone', 'name_ship', 'address_1_ship', 'address_2_ship', 'town_ship', 'county_ship', 'postcode_ship');

$query = "SELECT * FROM customers";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE id LIKE "%'.$_POST["search"]["value"].'%" 
OR invoice LIKE "%'.$_POST["search"]["value"].'%" 
 OR name LIKE "%'.$_POST["search"]["value"].'%" 
 OR email LIKE "%'.$_POST["search"]["value"].'%" 
 OR address_1 LIKE "%'.$_POST["search"]["value"].'%" 
 OR address_2 LIKE "%'.$_POST["search"]["value"].'%"
 OR town LIKE "%'.$_POST["search"]["value"].'%"
 OR county LIKE "%'.$_POST["search"]["value"].'%" 
 OR postcode LIKE "%'.$_POST["search"]["value"].'%"
 OR phone LIKE "%'.$_POST["search"]["value"].'%"
 OR name_ship LIKE "%'.$_POST["search"]["value"].'%"
 OR address_1_ship LIKE "%'.$_POST["search"]["value"].'%"
 OR address_2_ship LIKE "%'.$_POST["search"]["value"].'%"
 OR town_ship LIKE "%'.$_POST["search"]["value"].'%"
 OR county_ship LIKE "%'.$_POST["search"]["value"].'%"
 OR postcode_ship LIKE "%'.$_POST["search"]["value"].'%"
 
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
 
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="id">' . $row["id"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="invoice">' . $row["invoice"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="name">' . $row["name"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="email">' . $row["email"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="address_1">' . $row["address_1"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="address_2">' . $row["address_2"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="town">' . $row["town"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="county">' . $row["county"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="postcode">' . $row["postcode"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="phone">' . $row["phone"] . '</div>'; 
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="name_ship">' . $row["name_ship"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="address_1_ship">' . $row["address_1_ship"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="address_2_ship">' . $row["address_2_ship"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="town_ship">' . $row["town_ship"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="county_ship">' . $row["county_ship"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="postcode_ship">' . $row["postcode_ship"] . '</div>';

  $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Delete</button>';
  $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM customers";
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
