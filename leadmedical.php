<?php
 session_start();
 if(!isset($_SESSION['login_username'])){
 header('location:index.php');}
?>
<html>
 <head> <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86">
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
 
 
  <div class="container box"> <div class="container-fluid">                    <div class="text-left">                             <a href="dashboard.php">&larr; Back to Dashboard</a>          </div>        </div>
   <h1 align="center">Medical Leads Update</h1>
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
     url:"leadmedicalfetch.php",
     type:"POST"
    }
   });
  }
  
  function update_data(id, column_name, value)
  {
   $.ajax({
    url:"leadmedicalupdate.php",
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
   html += '<td contenteditable id="data17"></td>';
   html += '<td contenteditable id="data18"></td>';
   html += '<td contenteditable id="data19"></td>';
   html += '<td contenteditable id="data20"></td>';
   html += '<td contenteditable id="data21"></td>';
  
   html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
   html += '</tr>';
   $('#user_data tbody').prepend(html);
  });
  
  $(document).on('click', '#insert', function(){
   
   var enquirydate = $('#data1').text();
   var fname = $('#data2').text();
   var company = $('#data3').text();
   var mobile = $('#data4').text();
   var email = $('#data5').text();
   var street = $('#data6').text();
   var city = $('#data7').text();
   var state = $('#data8').text();
   var country = $('#data9').text();
   var gst = $('#data10').text();
   var productname = $('#data11').text();
   var model = $('#data12').text();
   var quantity = $('#data13').text();
   var targetprice = $('#data14').text();
   var description = $('#data15').text();
   var customertype = $('#data16').text();
   var leadsource = $('#data17').text();
   var leadstatus = $('#data18').text();
   var feedback = $('#data19').text();
   var engineer = $('#data20').text();
   var branch = $('#data21').text();
      
      
   if(enquirydate != '' && fname != '' && company != '' && mobile != '' && email != '' && street != '' && city != '' && state != '' && country != '' && gst !='' && productname != '' && model != '' && quantity != '' && targetprice != '' && description != '' && customertype != '' && leadsource != '' && leadstatus != '' && feedback != '' && engineer != '' && branch != '')
   {
    $.ajax({
     url:"leadmedicalinsert.php",
     method:"POST",
     data:{enquirydate:enquirydate, fname:fname, company:company, mobile:mobile, email:email, street:street, city:city, state:state, country:country, gst:gst, productname:productname, model:model, quantity:quantity, targetprice:targetprice, description:description, customertype:customertype, leadsource:leadsource, leadstatus:leadstatus, feedback:feedback, engineer:engineer, branch:branch },
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
     url:"leadmedicaldelete.php",
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


