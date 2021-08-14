<?php session_start(); if(!isset($_SESSION['login_username'])){ header('location:index.php');}?>
<html>
 <head>  <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86">
  <title>CRM</title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
  <script src="js/bootstrap-datepicker.js"></script>
  <style>
  body
  {
   margin:0;
   padding:0;
   background-color:#f1f1f1;
  }
  .box
  {
   width:1300px;
   padding:20px;
   background-color:#fff;
   border:1px solid #ccc;
   border-radius:5px;
   margin-top:10px;
   box-sizing:border-box;
  }
  </style>
 </head>
 <body>
 
 
  <div class="container box">
    <div class="container-fluid">                    <div class="text-left">                             <a href="dashboard.php">&larr; Back to Dashboard</a>          </div>        </div><h1 align="center">Customer List</h1>
   <br />
   
   <div class="table-responsive">
   <br />
   
    <div align="left">
     <button type="button" name="add" id="add" class="btn btn-info">Create</button>
    </div>
    <br />
   <center> <div id="alert_message"></div></center>
    <table id="user_data" class="table table-bordered table-striped">
     <thead>
      <tr>
      
	  <th>ID</th>
       <th>Invoice</th>
	   <th>Name</th>
	    <th>Email</th>
		 <th>address_1</th>
		  <th>address_2</th>
		   <th>town</th>
		    <th>county</th>
			<th>postcode</th>
			<th>phone</th>
			<th>name_ship</th>
			<th>address_1_ship</th>
			<th>address_2_ship</th>
			<th>town_ship</th>
			<th>county_ship</th>
			<th>postcode_ship</th>
			
			
       <th>Remove</th>
      </tr>
     </thead>
    </table>
   </div>
  </div>
 </body>
</html>

<script type="text/javascript" language="javascript" >
 $(document).ready(function(){
  
  fetch_data();

  function fetch_data()
  {
   var dataTable = $('#user_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"customerfetch.php",
     type:"POST"
    }
   });
  }
  
  function update_data(id, column_name, value)
  {
   $.ajax({
    url:"customerupdate.php",
    method:"POST",
    data:{id:id, column_name:column_name, value:value},
    success:function(data)
    {
     $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
     $('#user_data').DataTable().destroy();
     fetch_data();
    }
   });
   setInterval(function(){
    $('#alert_message').html('');
   }, 5000);
  }

  $(document).on('blur', '.update', function(){
   var id = $(this).data("id");
   var column_name = $(this).data("column");
   var value = $(this).text();
   update_data(id, column_name, value);
  });
  
  $('#add').click(function(){
   var html = '<tr>';
   html += '<td contenteditable id="data1"></td>';
   html += '<td contenteditable id="data2"></td>';
   html += '<td contenteditable id="data3"></td>';
   html += '<td contenteditable id="data4"></td>';
   html += '<td contenteditable id="data5"></td>';
   html += '<td contenteditable id="data6"></td>';
   html += '<td contenteditable id="data7"></td>';
   html += '<td contenteditable id="data8"></td>';
   html += '<td contenteditable id="data9"></td>';
   html += '<td contenteditable id="data10"></td>';
   html += '<td contenteditable id="data11"></td>';
   html += '<td contenteditable id="data12"></td>';
   html += '<td contenteditable id="data13"></td>';
   html += '<td contenteditable id="data14"></td>';
   html += '<td contenteditable id="data15"></td>';
   html += '<td contenteditable id="data16"></td>';
  
  
   html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
   html += '</tr>';
   $('#user_data tbody').prepend(html);
  });
  
  $(document).on('click', '#insert', function(){
   
   var id = $('#data1').text();
   var invoice = $('#data2').text();
   var name = $('#data3').text();
   var email = $('#data4').text();
   var address_1 = $('#data5').text();
   var address_2 = $('#data6').text();
   var town = $('#data7').text();
   var county = $('#data8').text();
   var postcode = $('#data9').text();
   var phone = $('#data10').text();
   var name_ship = $('#data11').text();
   var address_1_ship = $('#data12').text();
   var address_2_ship = $('#data13').text();
   var town_ship = $('#data14').text();
   var county_ship = $('#data15').text();
   var postcode_ship = $('#data16').text();
   
      
      
   if(id != '' && invoice != '' && name != '' && email != '' && address_1 != '' && address_2 != '' && town != '' && county != '' && postcode != '' && phone !='' && name_ship != '' && address_1_ship != '' && address_2_ship != '' && town_ship != '' && county_ship != '' && postcode_ship != '')
   {
    $.ajax({
     url:"customerinsert.php",
     method:"POST",
     data:{id:id, invoice:invoice, 	name:name, email:email, address_1:address_1, address_2:address_2, town:town, county:county, postcode:postcode, phone:phone, name_ship:name_ship, address_1_ship:address_1_ship, address_2_ship:address_2_ship, town_ship:town_ship, county_ship:county_ship, postcode_ship:postcode_ship },
     success:function(data)
     {
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
   else
   {
    alert("All Fields are required");
   }
  });
  
  $(document).on('click', '.delete', function(){
   var id = $(this).attr("id");
   if(confirm("Are you sure you want to Delete this?"))
   {
    $.ajax({
     url:"customerdelete.php",
     method:"POST",
     data:{id:id},
     success:function(data){
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
  });
 });
</script>



 