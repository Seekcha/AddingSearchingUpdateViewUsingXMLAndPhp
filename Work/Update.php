<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
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
	</style>
	<script>
	function Back() {
	    window.history.back();
	}
	</script>
</head>
<body>
<div class="row">
	<div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
			
	<div class="row">
		<div class="col-lg-12  col-md-12 ">
		<br><br>
			<marquee>
				<img src="img/medicio.png" class="img-responsive"/>
			</marquee>	
		</div>
	</div>
	<div class="container">
	<?php 
	 
        $xml = simplexml_load_file('patient.xml') or die('Error: Object not found!');
        foreach ($xml ->patients as $patients ) {    
           if ($patients -> filecode == $_GET['filecode']) {
               $img = $patients -> img;
               $filecode = $patients -> filecode ;
               $firstname = $patients -> firstname;
               $lastname= $patients -> lastname;
               $dob = $patients -> dob;
               $street = $patients -> address -> street;
               $cell = $patients -> phone -> cell;
               $home = $patients -> phone -> home ;
               $work = $patients -> phone -> work;
               $email = $patients -> email;
               $medical = $patients -> medicalhistory;
               $allergies = $patients -> allergies;
               $bloodgroup = $patients -> bloodgroup;
               $poccupation = $patients -> occupation;
               $efirstname = $patients -> spousename -> firstname;
               $elastname = $patients -> spousename -> lastname;
               $efirstname = $patients -> employ ->  firstname;
               $elastname = $patients -> employ ->  lastname;
               $ecell = $patients -> employ ->  phone -> cell;
               $ehome = $patients -> employ ->  phone -> home;
               $ework = $patients -> employ ->  phone -> work;
               $estreet = $patients -> employ ->  address -> street;
               $ecity = $patients -> employ ->  address -> city;
               $emfirstname = $patients -> emergence ->  firstname;
               $emlastname = $patients -> emergence ->  lastname;
               $emstreet = $patients -> emergence ->  address -> street;
               $emcity = $patients -> emergence ->  address -> city;
               $emcell = $patients -> emergence -> phone -> cell;
               $emhome = $patients -> emergence -> phone -> home;
               $emwork = $patients -> emergence -> phone -> work;
              $ememail =  $patients -> emergence -> email;
               break;
             }                
     }


	// if ($_POST['upload'] !== "") {
 //     $patients -> images = "img/" . $_POST["upload"];
 //             	}

            // "<img src=' " . $patients -> img . " ' width='100 px' height= '150 px'/> <br/>" ;
          
if(isset($_POST['submitSave'])){

	foreach ($xml ->patients as $patients ) {

             if ($patients -> filecode == $_POST['filecode']) {
               if ($_POST['imgs'] !== "") {
     				$patients -> img = 'img/' . $_POST['imgs'];
             	}
               //$patients -> filecode = $_POST['filecode'];

               $patients -> firstname = $_POST['firstname'];
               $patients -> lastname = $_POST['lastname'];
               $patients -> dob =$_POST['dob'];
               $patients -> address -> street = $_POST['street'];
               $patients -> phone -> cell  = $_POST['cell'];               
			   $patients -> phone -> home  = $_POST['home'];               
			   $patients -> phone -> work  = $_POST['work'];               
			   $patients -> email == $_POST['email'];
               $patients -> medicalhistory = $_POST['medical'];
               $patients -> allergies = $_POST['allergies'];
               $patients -> bloodgroup = $_POST['bloodgroup'];
               $patients -> occupation = $_POST['poccupation'];
               $patients -> spousename -> firstname = $_POST['efirstname'];
               $patients -> spousename -> lastname = $_POST['elastname'];
               $patients -> employ ->  firstname = $_POST['efirstname'];
               $patients -> employ ->  lastname = $_POST['elastname'];
               $patients -> employ ->  phone -> cell = $_POST['ecell'];
               $patients -> employ ->  phone -> home = $_POST['ehome'];
               $patients -> employ ->  phone -> work  = $_POST['ework'];
               $patients -> employ ->  address -> street = $_POST['estreet'];
               $patients -> employ ->  address -> city  = $_POST['ecity'];
               $patients -> emergence ->  firstname = $_POST['emfirstname'];
               $patients -> emergence ->  lastname = $_POST['emlastname'];
               $patients -> emergence ->  address -> street = $_POST['emstreet'];
               $patients -> emergence ->  address -> city = $_POST['emcity'];
               $patients -> emergence -> phone -> cell = $_POST['emcell'];
               $patients -> emergence -> phone -> home = $_POST['emhome'];
               $patients -> emergence -> phone -> work = $_POST['emwork'];
               $patients -> emergence -> email = $_POST['ememail'];
               break;
     }

}
	file_put_contents('patient.xml', $xml->asXML());
	?>
<script type="text/javascript">
	alert("Saved");
</script>
	<?php

}
	?>
	   <div class="row">
	     <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
	     	<h1><b>Patient</b></h1>
	     	<form  method="post" class="form-horizontal">
	     		
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
					  	<img class="img-responsive" src="<?php echo $img; ?>" style="height:320px;width: 270px;">
					  	<br><input type="file" name="imgs" value="<?php echo $image; ?>">
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
							  <input  name="filecode" id="filecode" value="<?php echo $filecode; ?>" class="form-control" readOnly="true" type="text"  >
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
							  <input  name="firstname" id="firstname" class="form-control" value="<?php echo $firstname; ?>" type="text"  >
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
							  <input  name="lastname" id="lastname" placeholder="Last Name" class="form-control" value="<?php echo $lastname; ?>" type="text"  >
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
							  <input  name="dob" id="dob" placeholder="DOB" value="<?php echo $dob; ?>" class="form-control"   type="date"  >
					   	  </div>
						</div>
		     		</div>
		     		

		     		<!-- Textbox street -->
					<div class="form-group">
					  <label class="col-md-4 control-label">Street</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
					        <input name="street" id="street" placeholder="street" class="form-control" value="<?php echo $street; ?>" type="text">
					    </div>
					  </div>
					</div>	
		     		<!-- Textbox cell 3 -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Cell #</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
					  	<input name="cell" id="cell" value="<?php echo $cell; ?>" placeholder="57102386" class="form-control" type="text" >
					    </div>
					  </div>
					</div>
		     		<!-- Textbox home -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Home #</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
					 		<input name="home" id="home" value="<?php echo $home; ?>" placeholder="2102386" class="form-control" type="text"  >
					    </div>
					  </div>
					</div>

		     		<!-- Textbox work -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Work #</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
					  		<input name="work" id="work" placeholder="5102386" value="<?php echo $work; ?>" class="form-control" type="text" >
					    </div>
					  </div>
					</div>

		     		<!-- Textbox email -->
		     		<div class="form-group">
				        <label class="col-md-4 control-label">E-Mail</label>  
				          <div class="col-md-8 inputGroupContainer">
				          <div class="input-group">
				              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				       	 	<input name="email" id="email" placeholder="E-Mail Address" class="form-control" value="<?php echo $email; ?>" type="text"  >
				          </div>
				        </div>
				    </div>

		     		<!-- Textarea Medical history -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Medical History</label>
					  <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
					        	<input class="form-control" name="medical" id="medical" placeholder="e.g: any surgery, taking any pills" value="<?php echo $medical; ?>" >
					    </div>
					  </div>
					</div>

		     		<!-- Textbox alergies -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Allergies</label>
					  <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>					        	
					        	<input class="form-control" id="allergies" name="allergies" value="<?php echo $allergies; ?>" placeholder="e.g: drug allergies" >
					    </div>
					  </div>
					</div>

		     		<!-- Textbox bloodgroup -->
					<div class="form-group">
					  <label class="col-md-4 control-label">Blood Group</label>  
					   <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
					  <input name="bloodgroup" id="bloodgroup" placeholder="e.g: AB+" class="form-control" value="<?php echo $bloodgroup; ?>" type="text"  >

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
							  <input  name="sfirstname" id="sfirstname" placeholder="First Name" class="form-control" value="<?php echo $efirstname; ?>" type="text">
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
							  <input  name="slastname" id="slastname" placeholder="Last Name" class="form-control" value="<?php echo $elastname; ?>" type="text">
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
							  <input  name="poccupation" id="poccupation" placeholder="Occupation" class="form-control" value="<?php echo $poccupation; ?>" type="text">
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
							  <input  name="efirstname" id="efirstname" placeholder="Employer First Name" value="<?php echo $emfirstname; ?>" class="form-control"  type="text">
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
							  <input  name="elastname" id="elastname" placeholder="Last Name" class="form-control" value="<?php echo $emlastname; ?>" type="text">
					   	  </div>
						</div>
		     		</div>

		     		<!-- Textbox employer cell 3 -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Cell #</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
					  	<input name="ecell" id="ecell" placeholder="57102386" value="<?php echo $emcell; ?>" class="form-control" type="text">
					    </div>
					  </div>
					</div>


		     		<!-- Textbox employer home -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Home #</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
					  	<input name="ehome" id="ehome" placeholder="2102386" value="<?php echo $emhome; ?>" class="form-control" type="text">
					    </div>
					  </div>
					</div>

		     		<!-- Textbox employer work -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Work #</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
					  		<input name="ework" id="ework" placeholder="57102386" value="<?php echo $emwork; ?>" class="form-control" type="text">
					    </div>
					  </div>
					</div>

		     		<!-- Textbox work address street -->
					<div class="form-group">
					  <label class="col-md-4 control-label">Street</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
					        <input name="estreet" id="estreet" placeholder="street" class="form-control" value="<?php echo $emstreet; ?>" type="text">
					    </div>
					  </div>
					</div>		     		

		     		<!-- Textbox work ctiy -->
					<div class="form-group">
					  <label class="col-md-4 control-label">City</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
					  	<input name="ecity" id="ecity" placeholder="city" value="<?php echo $emcity; ?>" class="form-control"  type="text">
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
							  <input  name="emfirstname" id="emfirstname" placeholder="First Name" class="form-control" value="<?php echo $efirstname; ?>" type="text" >
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
							  <input  name="emlastname" id="emlastname" placeholder="Last Name" class="form-control" value="<?php echo $elastname; ?>" type="text"  >
					   	  </div>
						</div>
		     		</div>

		     		<!-- Textbox street -->
					<div class="form-group">
					  <label class="col-md-4 control-label">Street</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
					        <input name="emstreet" id="emstreet" value="Street" placeholder="street" class="form-control" type="text" value="<?php echo $estreet; ?>">
					    </div>
					  </div>
					</div>

		     		<!-- Textbox city -->
					<div class="form-group">
					  <label class="col-md-4 control-label">City</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
					  	<input name="emcity" id="emcity" value="city" placeholder="city" class="form-control" value="<?php echo $ecity; ?>"  type="text"  >
					    </div>
					  </div>
					</div>

		     		<!-- Textbox cell 3 -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Cell #</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
					  	<input name="emcell" id="emcell" value="5286494" placeholder="57102386" value="<?php echo $ecity; ?>" class="form-control" type="text" >
					    </div>
					  </div>
					</div>

		     		<!-- Textbox home -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Home #</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
					  	<input name="emhome" id="emhome" placeholder="57102386" value="<?php echo $ehome; ?>" class="form-control" type="text">
					    </div>
					  </div>
					</div>

		     		<!-- Textbox work -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Work #</label>  
					    <div class="col-md-8 inputGroupContainer">
					    <div class="input-group">
					        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
					  		<input name="emwork" id="emwork" placeholder="57102386" class="form-control" value="<?php echo $ework; ?>" type="text">
					    </div>
					  </div>
					</div>

		     		<!-- Textbox email 3 -->
		     		<div class="form-group">
				        <label class="col-md-4 control-label">E-Mail</label>  
				          <div class="col-md-8 inputGroupContainer">
				          <div class="input-group">
				              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				   		      <input name="ememail" id="ememail" placeholder="E-Mail Address" class="form-control" value="<?php echo $ememail; ?>"  type="text"  >
				          </div>
				        </div>
				      </div>
		     		<!-- Submit button -->
		     		<br><br>
		     		<div class="form-group">
		     		  <div class="col-md-6">
					    <button type="text" class="button" name="submitSave"> <span class="glyphicon glyphicon-save"> Save</span></button>
					  </div>
					  <div class="col-md-6">
					    <button class="button" onclick="Back()"><span class="glyphicon glyphicon-step-backward">Back</span></button>
					  </div>
					</div>
	     		</fieldset>
	     	</form>
	     </div>
       </div>
	</div>
</body>
</html>