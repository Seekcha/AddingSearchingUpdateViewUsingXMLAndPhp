<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration form</title>	

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
	<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/script.js"></script>

	<style type="text/css">
		.Part {
		  background-color: #5fcf80;
		  color: #fff;
		  height: 30px;
		  width: 30px;
		  display: inline-block;
		  font-size: 0.8em;
		  margin-right: 4px;
		  line-height: 30px;
		  text-align: center;
		  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
		  border-radius: 100%;
		}
		img {
       display: block;
        margin: 0 auto;
    }
	</style> 
	
</head>
<body>
	<div class="row">
		<div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
			<div class="row">
						
				<div class="col-lg-4  col-md-3">
					<a href="interface.html"> 
				    	<button class="button">Main Menu</button>
				    </a>
				</div>
				
				<div class="col-lg-4  col-md-3">
					<a href="search.html"> 
				    	<button class="button">Search</button>
				    </a>
				</div>
				
				<div class="col-lg-4  col-md-3">
					<a href="ViewAll.php?currentPage=1">
						<button class="button">View all Entry</button>
					</a>
				</div>

			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12  col-md-12 ">
		<br><br>
		<img src="img/medicio.png" align="middle" class="img-responsive"/>
		</div>
	</div>
	
	<div class="container">
	   <div class="row">
	     <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
	     	<h1><b>Patient New Entry</b></h1>

	     	<!-- Start Form -->
	     	<form  method="Post" name="myForm" class="form-horizontal">
	     		
	     		<fieldset>
	     			<legend>
	     				<h3>
	     					<span class="Part">1</span>
	     					<i>Your Personal Info</i>
	     				</h3>
	     			</legend>

	     			<!-- Upload -->
					<div class="form-group">
					  <label class="col-md-4 control-label">Photo<i class="glyphicon glyphicon-upload"></i></label>
					  <div class="col-md-8 inputGroupContainer">  
					  	<input name="upload" id="file" type="file"  required>
					  </div>
					</div>
					<!-- Textbox for ID -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">File code</label>  
						<div class="col-md-8 inputGroupContainer">
						  <div class="input-group">
							  <span class="input-group-addon">
							  	<i class="glyphicon glyphicon-user"></i>
							  </span>
							  <input  name="filecode" id="filecode" value="A0008" class="form-control" type="text" pattern="[A-Z]{1}[0-9]{4}" title="One Capital letter followed by four letter. E.g: A0001" required>
					   	  </div>
						</div>
		     		</div>
	     			<!-- Textbox First name -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">First Name</label>  
						<div class="col-md-8 inputGroupContainer">
						  <div class="input-group">
							  <span class="input-group-addon">
							  	<i class="glyphicon glyphicon-user"></i>
							  </span>
							  <input  name="firstname" id="firstname" class="form-control" value="Test" type="text"  pattern="[A-Z]{1}[a-z]{1,15}" title="Start by a capital letter followed by small letter" required>
					   	  </div>
						</div>
		     		</div>

		     		<!-- Textbox last name -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Last Name</label>  
						<div class="col-md-8 inputGroupContainer">
						  <div class="input-group">
							  <span class="input-group-addon">
							  	<i class="glyphicon glyphicon-user"></i>
							  </span>
							  <input  name="Lastname" id="Lastname" class="form-control" value="Test"  type="text"  pattern="[A-Z]{1}[a-z]{1,15}" title="Start by a capital letter followed by small letter" required>
					   	  </div>
						</div>
		     		</div>

		     		<!-- Textbox dob -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Date of Birth</label>  
						<div class="col-md-8 inputGroupContainer">
						  <div class="input-group">
							  <span class="input-group-addon">
							  	<i class="glyphicon glyphicon-pencil"></i>
							  </span>
							  <input  name="dob" id="dob" class="form-control" type="date"  required>
					   	  </div>
						</div>
		     		</div>
		     		<!-- Selectpicker Gender -->
					<div class="form-group">
                        <label class="col-md-4 control-label">Gender</label>
                        <div class="col-md-4">
	                        <select name="gender" id="gender" class="form-control selectpicker" >
						         <option value="" >Please select your Status</option>
						         <option>Male</option>
						         <option>Female</option>    
					        </select>
                        </div>
                    </div>
		     		<!-- Textbox street -->
					<div class="form-group">
					  <label class="col-md-4 control-label">Street</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
					        <input name="street" id="street" class="form-control" value="Test" type="text"  required>
					    </div>
					  </div>
					</div>		     		
		     		<!-- Textbox city -->
					<div class="form-group">
					  <label class="col-md-4 control-label">City</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
					  	<input name="city" id="city" value="Test" class="form-control" type="text" required>
					    </div>
					  </div>
					</div>
		     		<!-- Textbox cell 3 -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Cell #</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
					  	<input name="cell" id="cell" value="57577566" class="form-control" type="text" pattern="[5]{1}\d{7}" title="5XXXXXXX" required>
					    </div>
					  </div>
					</div>
		     		<!-- Textbox home -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Home #</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
					 		<input name="home" id="home" value="4296389" class="form-control" type="text" type="text" pattern="^\d{7}" title="XXXXXXX" required >
					    </div>
					  </div>
					</div>

		     		<!-- Textbox work -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Work #</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
					 		<input name="home" id="home" value="7017900" class="form-control" type="text" type="text" pattern="^\d{7}" title="XXXXXXX" required >
					    </div>
					  </div>
					</div>

		     		<!-- Textbox email -->
		     		<div class="form-group">
				        <label class="col-md-4 control-label">E-Mail</label>  
				          <div class="col-md-8 inputGroupContainer">
				          <div class="input-group">
				              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				       	 	<input name="email" id="email" class="form-control" value="Test@Test.com" type="text" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" title="E.g: Avan@hot.com" required>
				          </div>
				        </div>
				    </div>

		     		<!-- Textarea Medical history -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Medical History</label>
					  <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
					        	<input class="form-control" name="medical" id="medical" placeholder="e.g: any surgery, taking any pills" value="Test" required>
					    </div>
					  </div>
					</div>

		     		<!-- Textbox alergies -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Allergies</label>
					  <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
					        	<input class="form-control" id="allergies" name="allergies" value="Test" placeholder="e.g: drug allergies" required>
					    </div>
					  </div>
					</div>

		     		<!-- Textbox bloodgroup -->
					<div class="form-group">
					  <label class="col-md-4 control-label">Blood Group</label>  
					   <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
					  <input name="bloodgroup" id="bloodgroup" class="form-control" value="Ab+" type="text"  required>
					    </div>
					  </div> 
					</div>

		     		<!-- Textbox spouse first name -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Spouse First Name</label>  
						<div class="col-md-8 inputGroupContainer">
						  <div class="input-group">
							  <span class="input-group-addon">
							  	<i class="glyphicon glyphicon-user"></i>
							  </span>
							  <input  name="sfirstname" id="sfirstname" value="Test" class="form-control" pattern="[A-Z]{1}[a-z]{1,15}" title="Start by a capital letter followed by small letter" type="text">
					   	  </div>
						</div>
		     		</div>

		     		<!-- Textbox spouse lastname -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Spouse Last Name</label>  
						<div class="col-md-8 inputGroupContainer">
						  <div class="input-group">
							  <span class="input-group-addon">
							  	<i class="glyphicon glyphicon-user"></i>
							  </span>
							  <input  name="slastname" value="Test" id="slastname" class="form-control"  pattern="[A-Z]{1}[a-z]{1,15}" title="Start by a capital letter followed by small letter" type="text">
					   	  </div>
						</div>
		     		</div>


		     		<!-- Professional info -->
		     		<legend>
	     				<h3>
	     					<span class="Part">2</span>
	     					<i>Your Professional Info</i>
	     				</h3>
	     			</legend>

		     		<!-- Textbox Occupation -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Occupation</label>  
						<div class="col-md-8 inputGroupContainer">
						  <div class="input-group">
							  <span class="input-group-addon">
							  	<i class="glyphicon glyphicon-file"></i>
							  </span>
							  <input value="Test" name="poccupation" id="poccupation" class="form-control"  type="text">
					   	  </div>
						</div>
		     		</div>

		     		<!-- Textbox employer First name -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Employer First Name</label>  
						<div class="col-md-8 inputGroupContainer">
						  <div class="input-group">
							  <span class="input-group-addon">
							  	<i class="glyphicon glyphicon-user"></i>
							  </span>
							  <input value="Test" name="efirstname" id="efirstname" class="form-control"  pattern="[A-Z]{1}[a-z]{1,15}" title="Start by a capital letter followed by small letter" type="text">
					   	  </div>
						</div>
		     		</div>

		     		<!-- Textbox employer last name -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Employer Last Name</label>  
						<div class="col-md-8 inputGroupContainer">
						  <div class="input-group">
							  <span class="input-group-addon">
							  	<i class="glyphicon glyphicon-user"></i>
							  </span>
							  <input value="Test" name="elastname" id="elastname" class="form-control"  pattern="[A-Z]{1}[a-z]{1,15}" title="Start by a capital letter followed by small letter" type="text">
					   	  </div>
						</div>
		     		</div>

		     		<!-- Textbox employer cell 3 -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Cell #</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
					  	<input name="ecell" id="ecell" class="form-control" pattern="[5]{1}\d{7}" title="5XXXXXXX" type="text">
					    </div>
					  </div>
					</div>


		     		<!-- Textbox employer home -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Home #</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
					  	<input name="ehome" id="ehome" class="form-control" type="text" pattern="^\d{7}" title="XXXXXXX" type="text">
					    </div>
					  </div>
					</div>

		     		<!-- Textbox employer work -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Work #</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
					  		<input name="ework" id="ework" class="form-control" type="text" type="text" pattern="^\d{7}" title="XXXXXXX">
					    </div>
					  </div>
					</div>

		     		<!-- Textbox work address street -->
					<div class="form-group">
					  <label class="col-md-4 control-label">Street</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
					        <input name="estreet" id="estreet" value="Test" class="form-control" type="text">
					    </div>
					  </div>
					</div>		     		

		     		<!-- Textbox work ctiy -->
					<div class="form-group">
					  <label class="col-md-4 control-label">City</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
					  	<input name="ecity" value="Test" id="ecity" class="form-control"  type="text">
					    </div>
					  </div>
					</div>

		     		<!-- Contact for Emergence -->
		     		<legend>
	     				<h3>
	     					<span class="Part">3</span>
	     					<i>Contact For Emergency</i>
	     				</h3>
	     			</legend>
		     		<!-- Textbox first name -->
					<div class="form-group">
			     		<label class="col-md-4 control-label">First Name</label>  
						<div class="col-md-8 inputGroupContainer">
						  <div class="input-group">
							  <span class="input-group-addon">
							  	<i class="glyphicon glyphicon-user"></i>
							  </span>
							  <input value="Test" name="emfirstname" id="emfirstname" class="form-control" value="Shay" type="text" pattern="[A-Z]{1}[a-z]{1,15}" title="Start by a capital letter followed by small letter" required>
					   	  </div>
						</div>
		     		</div>

		     		<!-- Textbox last name -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Last Name</label>  
						<div class="col-md-8 inputGroupContainer">
						  <div class="input-group">
							  <span class="input-group-addon">
							  	<i class="glyphicon glyphicon-user"></i>
							  </span>
							  <input value="Test" name="emlastname" id="emlastname" class="form-control" value="Doorga" type="text"  pattern="[A-Z]{1}[a-z]{1,15}" title="Start by a capital letter followed by small letter" required>
					   	  </div>
						</div>
		     		</div>

		     		<!-- Textbox street -->
					<div class="form-group">
					  <label class="col-md-4 control-label">Street</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
					        <input name="emstreet" value="Test" id="emstreet" value="Street" class="form-control" type="text"  required>
					    </div>
					  </div>
					</div>

		     		<!-- Textbox city -->
					<div class="form-group">
					  <label class="col-md-4 control-label">City</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
					  	<input name="emcity" id="emcity" value="city" value="Test" class="form-control"  type="text"  required>
					    </div>
					  </div>
					</div>

		     		<!-- Textbox cell 3 -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Cell #</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
					  	<input name="emcell" id="emcell" value="57286494" class="form-control" type="text" pattern="[5]{1}\d{7}" title="5XXXXXXX" required>
					    </div>
					  </div>
					</div>

		     		<!-- Textbox home -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Home #</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
					  	<input name="emhome" id="emhome"
					  	value="2816922" class="form-control" type="text" type="text" pattern="^\d{7}" title="XXXXXXX">
					    </div>
					  </div>
					</div>

		     		<!-- Textbox work -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Work #</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
					  		<input name="emwork" id="emwork" class="form-control" value="7102386" type="text" type="text" pattern="^\d{7}" title="XXXXXXX">
					    </div>
					  </div>
					</div>

		     		<!-- Textbox email 3 -->
		     		<div class="form-group">
				        <label class="col-md-4 control-label">E-Mail</label>  
				          <div class="col-md-8 inputGroupContainer">
				          <div class="input-group">
				              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				   		      <input name="ememail" id="ememail" class="form-control" value="Test@gmail.com" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" title="E.g: Avan@hot.com" type="text"  required>
				          </div>
				        </div>
				      </div>
		     		<!-- Submit button -->
		     		<br><br>
		     		<div class="form-group">
		     		  <div class="col-md-6">
					    <button type="submit" name="save" class="button"><span class="glyphicon glyphicon-send"> Send</span></button>
					  </div>
					  <div class="col-md-6">
					    <a href="#"><button type="Reset" class="button"><span class="glyphicon glyphicon-remove-circle">Cancel</span></button></a>
					  </div>
					</div>
	     		</fieldset>
	     	</form>
	     </div>
       </div>
	</div>

	<?php

	if(isset($_POST['save'])){
		echo "<img src='img/regis.png' class='img-responsive'/>";
			$img = "img/" . $_POST["upload"];
            $filecode = $_POST["filecode"]; //value to be search
        	$firstname = $_POST["firstname"];
        	$Lastname = $_POST["Lastname"];
        	$dob = $_POST["dob"];
        	$gender = $_POST["gender"];
        	$street = $_POST["street"];
        	$city = $_POST["city"];
        	$cell = $_POST["cell"];
        	$home = $_POST["home"];
        	$email = $_POST["email"];
        	$medical = $_POST["medical"];
        	$allergies = $_POST["allergies"];
        	$bloodgroup = $_POST["bloodgroup"];
        	$sfirstname = $_POST["sfirstname"];
        	$slastname = $_POST["slastname"];
        	$poccupation = $_POST["poccupation"];
        	$efirstname = $_POST["efirstname"];
        	$elastname = $_POST["elastname"];
        	$ecell = $_POST["ecell"];
        	$ehome = $_POST["ehome"];
        	$ework = $_POST["ework"];
        	$estreet = $_POST["estreet"];
        	$ecity = $_POST["ecity"];
        	$emfirstname = $_POST["emfirstname"];
        	$emlastname = $_POST["emlastname"];
        	$emstreet = $_POST["emstreet"];
        	$emcity = $_POST["emcity"];
        	$emcell = $_POST["emcell"];
        	$emhome = $_POST["emhome"];
        	$emwork = $_POST["emwork"];
        	$ememail = $_POST["ememail"];
			
	$xml = simplexml_load_file("patient.xml");

	foreach ($xml ->patients as $patients) {
		if ($filecode == $patients -> filecode ) {
			echo "<script type='text/javascript'>alert('Filecode already exist');</script>";
			break;
		}
		else{
			if (file_exists('patient.xml')) {

                $xml = simplexml_load_file('patient.xml');

                $xmlFormat = new simpleXMLElement($xml -> asXML());
                //adding new child to the xml

            $patient = $xml -> addChild("patients");
            $patient->addChild("img",  ($img));//(node,text)
            $patient -> addChild("filecode", ($filecode));
            $patient->addChild("firstname",  ($firstname));
            $patient->addChild("lastname",  ($Lastname));
            $patient->addChild("dob",  ($dob));
            $patient->addChild("gender",  ($gender));

            $add = $patient->addchild("address");
            $add->addChild("street",  ($street));
            $add->addChild("city",  ($city));

            $phone = $patient->addchild("phone");
            $phone->addChild("cell",  ($cell));
            $phone->addChild("home",  ($home));
            $phone->addChild("work",  ($phone));
            $patient-> addChild("email",$email);
            $patient->addChild("medical",  ($medical));
            $patient->addChild("allergies",  ($allergies));
            $patient->addChild("bloodgroup",  ($bloodgroup));
           

            $spouse = $patient->addchild("spousenamem");
            $spouse->addChild("firstname",  ($sfirstname));     
            $spouse->addChild("lastname",  ($slastname));
            $patient->addChild("occupation",  ($poccupation));

            $employ = $patient->addchild("employ");
            $employ->addChild("firstname",  ($efirstname));
            $employ->addChild("lastname",  ($elastname));
            $phon = $employ->addchild("phone");
            $phon->addChild("cell",  ($ecell));
            $phon->addChild("home",  ($ehome));
            $phon->addChild("work",  ($ework));
            $address = $employ->addchild("address");
            $address->addChild("street",  ($estreet));
            $address->addChild("city",  ($ecity));
            $emergence = $patient->addchild("emergence");
            $emergence->addChild("firstname",  ($emfirstname));
            $emergence->addChild("lastname",  ($emlastname));
            $ad = $emergence->addchild("address");
            $ad->addChild("street",  ($emstreet));
            $ad->addChild("city",  ($emcity));
            $pho = $emergence->addchild("phone");
            $pho->addChild("cell",  ($emcell));
            $pho->addChild("home",  ($emhome));
            $pho->addChild("work",  ($emwork));
            $emergence-> addChild("email",$email);

            $xml->asXML('patient.xml');
            break;
            }else {
		        alert('Failed to open XML');
		    }
			
		}
	}
}
         
	
	?>
</body>
</html>