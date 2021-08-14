<?php
 session_start();
 if(!isset($_SESSION['login_username'])){
 header('location:index.php');}
?>


<html>  
    <head>  
	 <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86">
        <title>Medical Lead</title>  
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="js/bootstrap.min.css" />
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>  
    <body>  
        <div class="container">
			<br />
			<div class="container-fluid">

          
          <div class="text-left">
            
     
            <a href="dashboard.php">&larr; Back to Dashboard</a>
          </div>

        </div>
			<h3 align="center">Medical Product Leads</a></h3><br />
			<br />
			<br />
			<div align="left" style="margin-bottom:5px;">
				<button type="button" name="add" id="add" class="btn btn-success btn-xs">Create</button>
			</div>
			<br />
			<form method="post" id="user_form">
				<div class="table-responsive">
					<table class="table table-striped table-bordered" id="user_data">
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
									<th>GST No.</th>
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
									<th>Details</th>
							<th>Remove</th>
						</tr>
					</table>
				</div></br></br>
				<div align="center">
					<input type="submit" name="insert" id="insert" class="btn btn-primary" value="Save" />
				</div>
			</form>

			<br />
		</div>
		<div id="user_dialog" title="Add Data">
			<div class="form-group">
				<label>Enquiry Date</label>
				<input type="text" name="enquirydate" id="enquirydate" class="form-control" />
				<span id="error_enquirydate" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Customer Name</label>
				<input type="text" name="fname" id="fname" class="form-control" />
				<span id="error_fname" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Company Name</label>
				<input type="text" name="company" id="company" class="form-control" />
				<span id="error_company" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" id="mobile" class="form-control" />
				<span id="error_mobile" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" id="email" class="form-control" />
				<span id="error_email" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Street</label>
				<input type="text" name="street" id="street" class="form-control" />
				<span id="error_street" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>city</label>
				<input type="text" name="city" id="city" class="form-control" />
				<span id="error_city" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>State</label>
				<input type="text" name="state" id="state" class="form-control" />
				<span id="error_state" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Country</label>
				<input type="text" name="country" id="country" class="form-control" />
				<span id="error_country" class="text-danger"></span>
			</div>
			
			<div class="form-group">
				<label>GST No.</label>
				<input type="text" name="gst" id="gst" class="form-control" />
				<span id="error_gst" class="text-danger"></span>
			</div>
						
			<div class="form-group">
				<label>Product Name</label>
				<input type="text" name="productname" id="productname" class="form-control" />
				<span id="error_productname" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Model</label>
				<input type="text" name="model" id="model" class="form-control" />
				<span id="error_model" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Quantity</label>
				<input type="text" name="quantity" id="quantity" class="form-control" />
				<span id="error_quantity" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Target Price</label>
				<input type="text" name="targetprice" id="targetprice" class="form-control" />
				<span id="error_targetprice" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Description</label>
				<input type="text" name="description" id="description" class="form-control" />
				<span id="error_description" class="text-danger"></span>
			</div>
			
			<div class="form-group">
				<label>Customer Type</label>
				<input type="text" name="customertype" id="customertype" class="form-control" />
				<span id="error_customertype" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Lead Source</label>
				<input type="text" name="leadsource" id="leadsource" class="form-control" />
				<span id="error_leadsource" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Lead Status</label>
				<input type="text" name="leadstatus" id="leadstatus" class="form-control" />
				<span id="error_leadstatus" class="text-danger"></span>
			</div>
			
			<div class="form-group">
				<label>Feedback</label>
				<input type="text" name="feedback" id="feedback" class="form-control" />
				<span id="error_feedback" class="text-danger"></span>
			</div>
			
			
			<div class="form-group">
				<label>Engineer Name</label>
				<input type="text" name="engineer" id="engineer" class="form-control" />
				<span id="error_engineer" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Branch</label>
				<input type="text" name="branch" id="branch" class="form-control" />
				<span id="error_branch" class="text-danger"></span>
			</div>
			
							
			
			<div class="form-group" align="center">
				<input type="hidden" name="row_id" id="hidden_row_id" />
				<button type="button" name="save" id="save" class="btn btn-info">Save</button>
			</div>
		</div>
		<div id="action_alert" title="Action">

		</div>
    </body>  
</html>  




<script>  
$(document).ready(function(){ 
	
	var count = 0;

	$('#user_dialog').dialog({
		autoOpen:false,
		width:400
	});

	$('#add').click(function(){
		$('#user_dialog').dialog('option', 'title', 'Add Data');
		
		$('#enquirydate').val('');
		$('#fname').val('');
		$('#company').val('');
		$('#mobile').val('');
		$('#email').val('');
		$('#street').val('');
		$('#city').val('');
		$('#state').val('');
		$('#country').val('');
		$('#gst').val('');
		$('#productname').val('');
		$('#model').val('');
		$('#quantity').val('');
		$('#targetprice').val('');
		$('#description').val('');
		$('#customertype').val('');
		$('#leadsource').val('');
		$('#leadstatus').val('');
		$('#feedback').val('');	
		$('#engineer').val('');
		$('#branch').val('');
	
				
		$('#error_enquirydate').text('');
		$('#error_fname').text('');
		$('#error_company').text('');
		$('#error_mobile').text('');
		$('#error_email').text('');
		$('#error_street').text('');
		$('#error_city').text('');
		$('#error_state').text('');
		$('#error_country').text('');
		$('#error_gst').text('');
		$('#error_productname').text('');
		$('#error_model').text('');
		$('#error_quantity').text('');
		$('#error_targetprice').text('');
		$('#error_description').text('');
		$('#error_customertype').text('');
		$('#error_leadsource').text('');
		$('#error_leadstatus').text('');
		$('#error_feedback').text('');
		$('#error_engineer').text('');
		$('#error_branch').text('');
				
				
		$('#enquirydate').css('border-color', '');
		$('#fname').css('border-color', '');
		$('#company').css('border-color', '');
		$('#mobile').css('border-color', '');
		$('#email').css('border-color', '');
		$('#street').css('border-color', '');
		$('#city').css('border-color', '');
		$('#state').css('border-color', '');
		$('#country').css('border-color', '');
		$('#gst').css('border-color', '');
		$('#productname').css('border-color', '');
		$('#model').css('border-color', '');
		$('#quantity').css('border-color', '');
		$('#targetprice').css('border-color', '');
		$('#description').css('border-color', '');
		$('#customertype').css('border-color', '');
		$('#leadsource').css('border-color', '');
		$('#leadstatus').css('border-color', '');
		$('#feedback').css('border-color', '');
		$('#engineer').css('border-color', '');
		$('#branch').css('border-color', '');
		
			
		$('#save').text('Save');
		$('#user_dialog').dialog('open');
	});

	$('#save').click(function(){
		var error_enquirydate = '';
		var error_fname = '';
		var error_company = '';
		var error_mobile = '';
		var error_email = '';
		var error_street = '';
		var error_city = '';
		var error_state = '';
		var error_country = '';
		var error_gst = '';
		var error_productname = '';
		var error_model = '';
		var error_quantity = '';
		var error_targetprice = '';
		var error_description = '';
		var error_customertype = '';
		var error_leadsource = '';
		var error_leadstatus = '';
		var error_feedback = '';
		var error_engineer = '';
		var error_branch = '';
		
			
		var enquirydate = '';
		var fname = '';
		var company = '';
		var mobile = '';
		var email = '';
		var street = '';
		var city = '';
		var state = '';
		var country = '';
		var gst = '';
		var productname = '';
		var model = '';
		var quantity = '';
		var targetprice = '';
		var description = '';
		var customertype = '';
		var leadsource = '';
		var leadstatus = '';
		var feedback = '';
		var engineer = '';
		var branch = '';
		
		
			
		if($('#enquirydate').val() == '')
		{
			error_enquirydate = 'Enquiry Dare us required';
			$('#error_enquirydate').text(error_enquirydate);
			$('#enquirydate').css('border-color', '#cc0000');
			enquirydate = '';
		}
		else
		{
			error_enquirydate = '';
			$('#error_enquirydate').text(error_enquirydate);
			$('#enquirydate').css('border-color', '');
			enquirydate = $('#enquirydate').val();
		}	
		
		
			
		if($('#fname').val() == '')
		{
			error_fname = 'Name is required';
			$('#error_fname').text(error_fname);
			$('#fname').css('border-color', '#cc0000');
			fname = '';
		}
		else
		{
			error_fname = '';
			$('#error_fname').text(error_fname);
			$('#fname').css('border-color', '');
			fname = $('#fname').val();
		}	
		
		
			
		if($('#company').val() == '')
		{
			error_company = 'Company Name is required';
			$('#error_company').text(error_company);
			$('#company').css('border-color', '#cc0000');
			company = '';
		}
		else
		{
			error_company = '';
			$('#error_company').text(error_company);
			$('#company').css('border-color', '');
			company = $('#company').val();
		}
		
		if($('#mobile').val() == '')
		{
			error_mobile = 'Mobile is required';
			$('#error_mobile').text(error_mobile);
			$('#mobile').css('border-color', '#cc0000');
			mobile = '';
		}
		else
		{
			error_mobile = '';
			$('#error_mobile').text(error_mobile);
			$('#mobile').css('border-color', '');
			mobile = $('#mobile').val();
		}
		
		if($('#email').val() == '')
		{
			error_email = 'Email Id is required';
			$('#error_email').text(error_email);
			$('#email').css('border-color', '#cc0000');
			email = '';
		}
		else
		{
			error_email = '';
			$('#error_email').text(error_email);
			$('#email').css('border-color', '');
			email = $('#email').val();
		}
		
		
		
		if($('#street').val() == '')
		{
			error_street = 'Street is required';
			$('#error_street').text(error_street);
			$('#street').css('border-color', '#cc0000');
			street = '';
		}
		else
		{
			error_street = '';
			$('#error_street').text(error_street);
			$('#street').css('border-color', '');
			street = $('#street').val();
		}
		
		if($('#city').val() == '')
		{
			error_city = 'City is required';
			$('#error_city').text(error_city);
			$('#city').css('border-color', '#cc0000');
			city = '';
		}
		else
		{
			error_city = '';
			$('#error_city').text(error_city);
			$('#city').css('border-color', '');
			city = $('#city').val();
		}
		
		
		if($('#state').val() == '')
		{
			error_state = 'State is required';
			$('#error_state').text(error_state);
			$('#state').css('border-color', '#cc0000');
			state = '';
		}
		else
		{
			error_state = '';
			$('#error_state').text(error_state);
			$('#state').css('border-color', '');
			state = $('#state').val();
		}
		
		
		if($('#country').val() == '')
		{
			error_country = 'Country is required';
			$('#error_country').text(error_country);
			$('#country').css('border-color', '#cc0000');
			country = '';
		}
		else
		{
			error_country = '';
			$('#error_country').text(error_country);
			$('#country').css('border-color', '');
			country = $('#country').val();
		}
		
		
		
		if($('#gst').val() == '')
		{
			error_gst = 'GST No. is required';
			$('#error_gst').text(error_gst);
			$('#gst').css('border-color', '#cc0000');
			gst = '';
		}
		else
		{
			error_gst = '';
			$('#error_gst').text(error_gst);
			$('#gst').css('border-color', '');
			gst = $('#gst').val();
		}
		
		
			
		
		if($('#productname').val() == '')
		{
			error_productname = 'Product Name is required';
			$('#error_productname').text(error_productname);
			$('#productname').css('border-color', '#cc0000');
			productname = '';
		}
		else
		{
			error_productname = '';
			$('#error_productname').text(error_productname);
			$('#productname').css('border-color', '');
			productname = $('#productname').val();
		}
		
		
		if($('#model').val() == '')
		{
			error_model = 'Model is required';
			$('#error_model').text(error_model);
			$('#model').css('border-color', '#cc0000');
			model = '';
		}
		else
		{
			error_model = '';
			$('#error_model').text(error_model);
			$('#model').css('border-color', '');
			model = $('#model').val();
		}
		
		
		
		if($('#quantity').val() == '')
		{
			error_quantity = 'Quantity is required';
			$('#error_quantity').text(error_quantity);
			$('#quantity').css('border-color', '#cc0000');
			quantity = '';
		}
		else
		{
			error_quantity = '';
			$('#error_quantity').text(error_quantity);
			$('#quantity').css('border-color', '');
			quantity = $('#quantity').val();
		}
		
		
		if($('#targetprice').val() == '')
		{
			error_targetprice = 'Price is required';
			$('#error_targetprice').text(error_targetprice);
			$('#targetprice').css('border-color', '#cc0000');
			targetprice = '';
		}
		else
		{
			error_targetprice = '';
			$('#error_targetprice').text(error_targetprice);
			$('#targetprice').css('border-color', '');
			targetprice = $('#targetprice').val();
		}
		
		
		if($('#description').val() == '')
		{
			error_description = 'Description is required';
			$('#error_description').text(error_description);
			$('#description').css('border-color', '#cc0000');
			description = '';
		}
		else
		{
			error_description = '';
			$('#error_descriptione').text(error_description);
			$('#description').css('border-color', '');
			description = $('#description').val();
		}
		
		
		if($('#customertype').val() == '')
		{
			error_customertype = 'Customer Type is required';
			$('#error_customertype').text(error_customertype);
			$('#customertype').css('border-color', '#cc0000');
			customertype = '';
		}
		else
		{
			error_customertype = '';
			$('#error_customertype').text(error_customertype);
			$('#customertype').css('border-color', '');
			customertype = $('#customertype').val();
		}
		
		
		if($('#leadsource').val() == '')
		{
			error_leadsource = 'Lead Source is required';
			$('#error_leadsource').text(error_leadsource);
			$('#leadsource').css('border-color', '#cc0000');
			leadsource = '';
		}
		else
		{
			error_leadsource = '';
			$('#error_leadsource').text(error_leadsource);
			$('#leadsource').css('border-color', '');
			leadsource = $('#leadsource').val();
		}
		
		
		if($('#leadstatus').val() == '')
		{
			error_leadstatus = 'Lead Status is required';
			$('#error_leadstatus').text(error_leadstatus);
			$('#leadstatus').css('border-color', '#cc0000');
			leadstatus = '';
		}
		else
		{
			error_leadstatus = '';
			$('#error_leadsource').text(error_leadstatus);
			$('#leadstatus').css('border-color', '');
			leadstatus = $('#leadstatus').val();
		}
		
		
			if($('#feedback').val() == '')
		{
			error_feedback = 'Feedback is required';
			$('#error_feedback').text(error_feedback);
			$('#feedback').css('border-color', '#cc0000');
			leadstatus = '';
		}
		else
		{
			error_feedback = '';
			$('#error_feedback').text(error_leadstatus);
			$('#feedback').css('border-color', '');
			feedback = $('#feedback').val();
		}
		
		
		
		
		
		if($('#engineer').val() == '')
		{
			error_engineer = 'Engineer Name is required';
			$('#error_engineer').text(error_engineer);
			$('#engineer').css('border-color', '#cc0000');
			engineer = '';
		}
		else
		{
			error_engineer = '';
			$('#error_engineer').text(error_engineer);
			$('#engineer').css('border-color', '');
			engineer = $('#engineer').val();
		}
		
		
		if($('#branch').val() == '')
		{
			error_branch = 'Branch is required';
			$('#error_branch').text(error_branch);
			$('#branch').css('border-color', '#cc0000');
			branch = '';
		}
		else
		{
			error_branch = '';
			$('#error_branch').text(error_branch);
			$('#branch').css('border-color', '');
			branch = $('#branch').val();
		}
		
		
		
			
		
		if(error_fname != '' || error_company != '')
		{
			return false;
		}
		else
		{
			if($('#save').text() == 'Save')
			{
				count = count + 1;
				output = '<tr id="row_'+count+'">';
				output += '<td>'+enquirydate+' <input type="hidden" name="hidden_enquirydate[]" id="enquirydate'+count+'" class="enquirydate" value="'+enquirydate+'" /></td>';
				output += '<td>'+fname+' <input type="hidden" name="hidden_fname[]" id="fname'+count+'" class="fname" value="'+fname+'" /></td>';
				output += '<td>'+company+' <input type="hidden" name="hidden_company[]" id="company'+count+'" class="company" value="'+company+'" /></td>';
				output += '<td>'+mobile+' <input type="hidden" name="hidden_mobile[]" id="mobile'+count+'" class="mobile" value="'+mobile+'" /></td>';
				output += '<td>'+email+' <input type="hidden" name="hidden_email[]" id="email'+count+'" class="email" value="'+email+'" /></td>';
				output += '<td>'+street+' <input type="hidden" name="hidden_street[]" id="street'+count+'" class="street" value="'+street+'" /></td>';
				output += '<td>'+city+' <input type="hidden" name="hidden_city[]" id="city'+count+'" class="city" value="'+city+'" /></td>';
				output += '<td>'+state+' <input type="hidden" name="hidden_state[]" id="state'+count+'" class="state" value="'+state+'" /></td>';
				output += '<td>'+country+' <input type="hidden" name="hidden_country[]" id="country'+count+'" class="country" value="'+country+'" /></td>';
				output += '<td>'+gst+' <input type="hidden" name="hidden_gst[]" id="gst'+count+'" class="gst" value="'+gst+'" /></td>';
				output += '<td>'+productname+' <input type="hidden" name="hidden_productname[]" id="productname'+count+'" class="productname" value="'+productname+'" /></td>';
				output += '<td>'+model+' <input type="hidden" name="hidden_model[]" id="model'+count+'" class="model" value="'+model+'" /></td>';
				output += '<td>'+quantity+' <input type="hidden" name="hidden_quantity[]" id="quantity'+count+'" class="quantity" value="'+quantity+'" /></td>';
				output += '<td>'+targetprice+' <input type="hidden" name="hidden_targetprice[]" id="targetprice'+count+'" class="targetprice" value="'+targetprice+'" /></td>';
				output += '<td>'+description+' <input type="hidden" name="hidden_description[]" id="description'+count+'" class="description" value="'+description+'" /></td>';
				output += '<td>'+customertype+' <input type="hidden" name="hidden_customertype[]" id="customertype'+count+'" class="customertype" value="'+customertype+'" /></td>';
				output += '<td>'+leadsource+' <input type="hidden" name="hidden_leadsource[]" id="leadsource'+count+'" class="leadsource" value="'+leadsource+'" /></td>';
				output += '<td>'+leadstatus+' <input type="hidden" name="hidden_leadstatus[]" id="leadstatus'+count+'" class="leadstatus" value="'+leadstatus+'" /></td>';
				output += '<td>'+feedback+' <input type="hidden" name="hidden_feedback[]" id="feedback'+count+'" class="feedback" value="'+feedback+'" /></td>';
				output += '<td>'+engineer+' <input type="hidden" name="hidden_engineer[]" id="engineer'+count+'" class="engineer" value="'+engineer+'" /></td>';
				output += '<td>'+branch+' <input type="hidden" name="hidden_branch[]" id="branch'+count+'" class="branch" value="'+branch+'" /></td>';
				
				
				output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+count+'">Edit</button></td>';
				output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
				output += '</tr>';
				$('#user_data').append(output);
			}
			else
			{
				var row_id = $('#hidden_row_id').val();
				output = '<td>'+enquirydate+' <input type="hidden" name="hidden_enquirydate[]" id="enquirydate'+row_id+'" class="enquirydate" value="'+enquirydate+'" /></td>';
				output += '<td>'+fname+' <input type="hidden" name="hidden_fname[]" id="fname'+row_id+'" class="fname" value="'+fname+'" /></td>';
				output += '<td>'+company+' <input type="hidden" name="hidden_company[]" id="company'+row_id+'" class="company" value="'+company+'" /></td>';
				output += '<td>'+mobile+' <input type="hidden" name="hidden_mobile[]" id="mobile'+row_id+'" class="mobile" value="'+mobile+'" /></td>';
				output += '<td>'+email+' <input type="hidden" name="hidden_email[]" id="email'+row_id+'" class="email" value="'+email+'" /></td>';
				output += '<td>'+street+' <input type="hidden" name="hidden_street[]" id="street'+row_id+'" class="street" value="'+street+'" /></td>';
				output += '<td>'+city+' <input type="hidden" name="hidden_city[]" id="city'+row_id+'" class="city" value="'+city+'" /></td>';
				output += '<td>'+state+' <input type="hidden" name="hidden_state[]" id="state'+row_id+'" class="state" value="'+state+'" /></td>';
				output += '<td>'+country+' <input type="hidden" name="hidden_country[]" id="country'+row_id+'" class="country" value="'+country+'" /></td>';
				output += '<td>'+gst+' <input type="hidden" name="hidden_gst[]" id="gst'+row_id+'" class="gst" value="'+gst+'" /></td>';
				output += '<td>'+productname+' <input type="hidden" name="hidden_productname[]" id="productname'+row_id+'" class="productname" value="'+productname+'" /></td>';
				output += '<td>'+model+' <input type="hidden" name="hidden_model[]" id="model'+row_id+'" class="model" value="'+model+'" /></td>';
				output += '<td>'+quantity+' <input type="hidden" name="hidden_quantity[]" id="quantity'+row_id+'" class="quantity" value="'+quantity+'" /></td>';
				output += '<td>'+targetprice+' <input type="hidden" name="hidden_targetprice[]" id="targetprice'+row_id+'" class="targetprice" value="'+targetprice+'" /></td>';
				output += '<td>'+description+' <input type="hidden" name="hidden_description[]" id="description'+row_id+'" class="description" value="'+description+'" /></td>';
				output += '<td>'+customertype+' <input type="hidden" name="hidden_customertype[]" id="customertype'+row_id+'" class="customertype" value="'+customertype+'" /></td>';
				output += '<td>'+leadsource+' <input type="hidden" name="hidden_leadsource[]" id="leadsource'+row_id+'" class="leadsource" value="'+leadsource+'" /></td>';
				output += '<td>'+leadstatus+' <input type="hidden" name="hidden_leadstatus[]" id="leadstatus'+row_id+'" class="leadstatus" value="'+leadstatus+'" /></td>';
				output += '<td>'+feedback+' <input type="hidden" name="hidden_feedback[]" id="feedback'+row_id+'" class="feedback" value="'+feedback+'" /></td>';
				output += '<td>'+engineer+' <input type="hidden" name="hidden_engineer[]" id="engineer'+row_id+'" class="engineer" value="'+engineer+'" /></td>';
				output += '<td>'+branch+' <input type="hidden" name="hidden_branch[]" id="branch'+row_id+'" class="branch" value="'+branch+'" /></td>';
				
				
				output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+row_id+'">Edit</button></td>';
				output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
				$('#row_'+row_id+'').html(output);
			}

			$('#user_dialog').dialog('close');
		}
	});

	$(document).on('click', '.view_details', function(){
		var row_id = $(this).attr("id");
		var enquirydate = $('#enquirydate'+row_id+'').val();
		var fname = $('#fname'+row_id+'').val();
		var company = $('#company'+row_id+'').val();
		var mobile = $('#mobile'+row_id+'').val();
		var email = $('#email'+row_id+'').val();
		var street = $('#street'+row_id+'').val();
		var city = $('#city'+row_id+'').val();
		var state = $('#state'+row_id+'').val();
		var country = $('#country'+row_id+'').val();
		var gst = $('#gst'+row_id+'').val();
		var productname = $('#productname'+row_id+'').val();
		var model = $('#model'+row_id+'').val();
		var quantity = $('#quantity'+row_id+'').val();
		var targetprice = $('#targetprice'+row_id+'').val();
		var description = $('#description'+row_id+'').val();
		var customertype = $('#customertype'+row_id+'').val();
		var leadsource = $('#leadsource'+row_id+'').val();
		var leadstatus = $('#leadstatus'+row_id+'').val();
		var feedback = $('#feedback'+row_id+'').val();
		var engineer = $('#engineer'+row_id+'').val();
		var branch = $('#branch'+row_id+'').val();
		
		$('#enquirydate').val(fname);
		$('#fname').val(fname);
		$('#company').val(company);
		$('#mobile').val(mobile);
		$('#email').val(email);
		$('#street').val(street);
		$('#city').val(city);
		$('#state').val(state);
		$('#country').val(country);
		$('#gst').val(gst);
		$('#productname').val(productname);
		$('#model').val(model);
		$('#quantity').val(quantity);
		$('#targetprice').val(targetprice);
		$('#description').val(description);
		$('#customertype').val(customertype);
		$('#leadsource').val(leadsource);
		$('#leadstatus').val(leadstatus);
		$('#leadstatus').val(leadstatus);
		$('#engineer').val(engineer);
		$('#branch').val(branch);
				
		$('#save').text('Edit');
		$('#hidden_row_id').val(row_id);
		$('#user_dialog').dialog('option', 'title', 'Edit Data');
		$('#user_dialog').dialog('open');
	});

	$(document).on('click', '.remove_details', function(){
		var row_id = $(this).attr("id");
		if(confirm("Are you sure you want to remove this row data?"))
		{
			$('#row_'+row_id+'').remove();
		}
		else
		{
			return false;
		}
	});

	$('#action_alert').dialog({
		autoOpen:false
	});

	$('#user_form').on('submit', function(event){
		event.preventDefault();
		var count_data = 0;
		$('.enquirydate').each(function(){
			count_data = count_data + 1;
		});
		if(count_data > 0)
		{
			var form_data = $(this).serialize();
			$.ajax({
				url:"createleadvalidmask.php",
				method:"POST",
				data:form_data,
				success:function(data)
				{
					$('#user_data').find("tr:gt(0)").remove();
					$('#action_alert').html('<p>Lead Saved Successfully</p>');
					$('#action_alert').dialog('open');
				}
			})
		}
		else
		{
			$('#action_alert').html('<p>Please Add atleast one Lead</p>');
			$('#action_alert').dialog('open');
		}
	});
	
});  
</script>



 
