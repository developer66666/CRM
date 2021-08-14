<?php
 session_start();
 if(!isset($_SESSION['login_username'])){
 header('location:index.php');}
?>
<?php
$connect = mysqli_connect("localhost", 'softtech_ganesh','JRCreations@1992', "softtech_CRM");
$sql = "SELECT * FROM leadinjection";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>   <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86">
  <title>Injection Leads</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
   </br> <div class="container-fluid">                    <div class="text-left">                             <a href="dashboard.php">&larr; Back to Dashboard</a>          </div>
     
    <h2 align="center">Injection Database</h2><br /> 
	
	 <div class="text-left">
	     <form method="post" action="injectionleadviewvalid.php">
     <input type="submit" name="export" class="btn btn-success" value="Export Excell" />
    </form></div>
	
    <table class="table table-bordered">
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
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
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
     ?>
    </table>
    <br />
    
   </div>  
  </div>  
 </body>  
</html>