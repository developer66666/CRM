<?php
 session_start();
 if(!isset($_SESSION['login_username'])){
 header('location:index.php');}
?>
<?php  
//export.php  
$connect = mysqli_connect("localhost", 'softtech_ganesh','JRCreations@1992', "softtech_CRM");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM leadinjection";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr> 
                     <th>ID</th>
	   <th>Enquiry Date</th>
       <th>Name</th>
	   <th>Company</th>
	    <th>Mobile</th>
		 <th>Email</th>
		  <th>Street</th>
		   <th>City</th>
		    <th>State</th>
			<th>Country</th>
			<th>GST No</th>
			<th>Product Name</th>
			<th>Model</th>
			<th>Quantity</th>
			<th>Target Price</th>
			<th>Description</th>
			<th>Customer Type</th>
			<th>Lead Source</th>
			<th>Lead Status</th>
			<th>Feedback</th>
			<th>Engineer</th>
			<th>Branch</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
         <td>'.$row["id"].'</td>
	     <td>'.$row["enquirydate"].'</td>  
         <td>'.$row["fname"].'</td>  
         <td>'.$row["company"].'</td>  
         <td>'.$row["mobile"].'</td>  
         <td>'.$row["email"].'</td>
		 <td>'.$row["street"].'</td>
		 <td>'.$row["city"].'</td>
		 <td>'.$row["state"].'</td>
		 <td>'.$row["country"].'</td>
		 <td>'.$row["gst"].'</td>
		 <td>'.$row["productname"].'</td>
		 <td>'.$row["model"].'</td>
		 <td>'.$row["quantity"].'</td>
		 <td>'.$row["targetprice"].'</td>
		 <td>'.$row["description"].'</td>
		 <td>'.$row["customertype"].'</td>
		 <td>'.$row["leadsource"].'</td>
		 <td>'.$row["leadstatus"].'</td>
		 <td>'.$row["feedback"].'</td>
		 <td>'.$row["engineer"].'</td>
		 <td>'.$row["branch"].'</td>
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Database.xls');
  echo $output;
 }
}
?>
