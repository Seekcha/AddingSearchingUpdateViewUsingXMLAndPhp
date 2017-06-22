<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Search</title>
	
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
		.glyphicon.glyphicon-search {
		  font-size: 75px;
		}	
		.glyphicon.glyphicons-ban-circle{
		  font-size: 75px;
		}																			
	</style>
	<script>
		function Back() {
		    window.history.back();
		}
	</script>
</head>
<body>
	
<?php 
$search = $_POST['search']; //value to be search
$xml = simplexml_load_file("patient.xml");

foreach ($xml ->patients as $patients) {
	$name = $_POST['name']; //node
	if ($patients -> $name  == $search ) {
		   $img = $patients -> img;
	       $filecode = $patients -> filecode ;
	       $firstname = $patients -> firstname;
	       $lastname= $patients -> lastname;
	       $dob = $patients -> dob;
	       $gender = $patients -> gender;
	       $street = $patients -> address -> street;
	       $city = $patients -> address -> city;
	       $cell = $patients -> phone -> cell;
	       $home = $patients -> phone -> home ;
	       $work = $patients -> phone -> work;
	       $email = $patients -> email;
	       $medical = $patients -> medicalhistory;
	       $allergies = $patients -> allergies;
	       $bloodgroup = $patients -> bloodgroup;
	       $occupation = $patients -> occupation;
	       $sfirstname = $patients -> spousename -> firstname;
	       $slastname = $patients -> spousename -> lastname;
	       $emfirstname = $patients -> employ ->  firstname;
	       $emlastname = $patients -> employ ->  lastname;
	       $emcell = $patients -> employ ->  phone -> cell;
	       $emhome = $patients -> employ ->  phone -> home;
	       $emwork = $patients -> employ ->  phone -> work;
	       $emstreet = $patients -> employ ->  address -> street;
	       $emcity = $patients -> employ ->  address -> city;
	       $efirstname = $patients -> emergence ->  firstname;
	       $elastname = $patients -> emergence ->  lastname;
	       $estreet = $patients -> emergence ->  address -> street;
	       $ecity = $patients -> emergence ->  address -> city;
	       $ecell = $patients -> emergence -> phone -> cell;
	       $ehome = $patients -> emergence -> phone -> home;
	       $ework = $patients -> emergence -> phone -> work;
	      $eemail =  $patients -> emergence -> email;
           
              ?>
              <div class="container">
	   <div class="row">
	     <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
	     	<h1><b>Patient</b></h1>
	     	<form  method="get" class="form-horizontal">
	     		
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
					  </div>
					</div>
					<!-- Label for ID -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">File code</label>  
			     		<label class="col-md-8 control-label"><?php echo $filecode; ?></label> 
		     		</div>
	     			<!-- Label First name -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">First Name</label>  
			     		<label class="col-md-8 control-label"><?php echo $firstname; ?></label>  						
		     		</div>

		     		<!-- Label last name -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Last Name</label>  
			     		<label class="col-md-8 control-label"><?php echo $lastname; ?></label> 
		     		</div>

		     		<!-- Label dob -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Date of Birth</label>  
			     		<label class="col-md-8 control-label"><?php echo $dob; ?></label> 
		     		</div>
		     		<!-- Label Gender -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Gender</label>  
			     		<label class="col-md-8 control-label"><?php echo $gender; ?></label> 
		     		</div>
		     		
		     		
		     		<!-- Label street -->
					<div class="form-group">
					  <label class="col-md-4 control-label">Street</label> 
					  <label class="col-md-8 control-label"><?php echo $street; ?></label>  					    
					</div>		     		
		     		<!-- Label city -->
					<div class="form-group">
					  <label class="col-md-4 control-label">City</label>  
					  <label class="col-md-8 control-label"><?php echo $city; ?></label> 					 
					</div>
		     		<!-- Label cell 3 -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Cell #</label>
					  <label class="col-md-8 control-label"><?php echo $cell; ?></label> 
					</div>
		     		<!-- Label home -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Home #</label>  
					  <label class="col-md-8 control-label"><?php echo $home; ?></label> 
					</div>

		     		<!-- Label work -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Work #</label>  
					  <label class="col-md-8 control-label"><?php echo $work; ?></label> 
					</div>

		     		<!-- Label email -->
		     		<div class="form-group">
				        <label class="col-md-4 control-label">E-Mail</label>
				        <label class="col-md-8 control-label"><?php echo $email; ?></label>   
				    </div>
				    <!-- Textarea Medical history -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Medical History</label>
					  <label class="col-md-8 control-label"><?php echo $medical; ?></label> 					 
					</div>

		     		<!-- Label alergies -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Allergies</label>
					  <label class="col-md-8 control-label"><?php echo $allergies; ?></label> 
					</div>

		     		<!-- Label bloodgroup -->
					<div class="form-group">
					  <label class="col-md-4 control-label">Blood Group</label>  
					  <label class="col-md-8 control-label"><?php echo $bloodgroup; ?></label> 					    
					</div>

		     		 
		     		<!-- Label spouse first name -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Spouse First Name</label>  
			     		<label class="col-md-8 control-label"><?php echo $sfirstname; ?></label> 
		     		</div>

		     		<!-- Label spouse lastname -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Spouse Last Name</label> 
			     		<label class="col-md-8 control-label"><?php echo $slastname;?></label> 
			     		
		     		</div>


		     		<!-- Professional info -->
		     		<legend>
	     				<h3>
	     					<span class="Part">2</span>
	     					<i>Your Professional Info</i>
	     				</h3>
	     			</legend>

		     		<!-- Label Occupation -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Occupation</label>  
			     		<label class="col-md-8 control-label"><?php echo $occupation; ?></label> 
		     		</div>

		     		<!-- Label employer First name -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Employer First Name</label> 
			     		<label class="col-md-8 control-label"><?php echo $emfirstname; ?></label>  
		     		</div>

		     		<!-- Label employer last name -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Employer Last Name</label>  
			     		<label class="col-md-8 control-label"><?php echo $emlastname; ?></label> 
		     		</div>

		     		<!-- Label employer cell 3 -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Cell #</label>  
					  <label class="col-md-8 control-label"><?php echo $emcell; ?></label> 
					</div>


		     		<!-- Label employer home -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Home #</label>  
					  <label class="col-md-8 control-label"><?php echo $emhome; ?></label> 				    
					</div>

		     		<!-- Label employer work -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Work #</label> 
					  <label class="col-md-8 control-label"><?php echo $emwork; ?></label>  
					</div>

		     		<!-- Label work address street -->
					<div class="form-group">
					  <label class="col-md-4 control-label">Street</label>
					  <label class="col-md-8 control-label"><?php echo $emstreet; ?></label> 
					</div>		     		

		     		<!-- Label work ctiy -->
					<div class="form-group">
					  <label class="col-md-4 control-label">City</label>  
					  <label class="col-md-8 control-label"><?php echo $emcity; ?></label> 
					</div>

		     		<!-- Contact for Emergence -->
		     		<legend>
	     				<h3>
	     					<span class="Part">3</span>
	     					<i>Contact For Emergency</i>
	     				</h3>
	     			</legend>
		     		<!-- Label first name -->
					<div class="form-group">
			     		<label class="col-md-4 control-label">First Name</label>  
			     		<label class="col-md-8 control-label"><?php echo $efirstname; ?></label>
		     		</div>

		     		<!-- Label last name -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Last Name</label>  
			     		<label class="col-md-8 control-label"><?php echo $elastname; ?></label> 
		     		</div>

		     		<!-- Label street -->
					<div class="form-group">
					  <label class="col-md-4 control-label">Street</label> 
					  <label class="col-md-8 control-label"><?php echo $estreet; ?></label>  
					</div>

		     		<!-- Label city -->
					<div class="form-group">
					  <label class="col-md-4 control-label">City</label>  
					  <label class="col-md-8 control-label"><?php echo $ecity; ?></label>
					</div>

		     		<!-- Label cell 3 -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Cell #</label>  
					  <label class="col-md-8 control-label"><?php echo $ecity; ?></label> 
					</div>

		     		<!-- Label home -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Home #</label>  
					  <label class="col-md-8 control-label"><?php echo $ehome; ?></label> 
					</div>

		     		<!-- Label work -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Work #</label> 
					  <label class="col-md-8 control-label"><?php echo $ework; ?></label> 
					</div>

		     		<!-- Label email 3 -->
		     		<div class="form-group">
				        <label class="col-md-4 control-label">E-Mail</label>
				        <label class="col-md-8 control-label"><?php echo $eemail; ?></label>  
				      </div>
		     		<!-- Submit button -->
		     		<br><br>
		     		<div class="form-group">
			     		<div class="row">
			     		  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						  	<a class="button" href="update.php?filecode=<?php echo $filecode?>"><span class="glyphicon glyphicon-edit">Edit</span></a>
						  </div>
						  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						  	<a class="button" href="<a class="button" onclick="Back()"><span class="glyphicon glyphicon-step-backward">Back</span></a>
						  </div>
						</div>
			     	</div>		     		  
	     		</fieldset>
	     	</form>
	     </div>
       </div>
	</div>
 <?php
 				
	} //if
// Empty textbox 
	elseif ($search == '') {
		?>
<div class="container">
   <div class="row">
     <div class="col-lg-4  col-md-4 col-sm-4 col-xs-4">
     	<span class="glyphicons glyphicons-ban-circle" style="text-align: center;"></span>     	
     </div>

     <div class="col-lg-8  col-md-8 col-sm-8 col-xs-8">
        <h2>Please Insert Data</h2> 	
     </div>
    </div>
    <div class="row">
     <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12"> 
     	<br> 
       	<button class="button" onclick="Back()">Back</button>
     </div>	     	
   </div>
</div>
<script type="text/javascript">
	function Back() {
    window.history.back();
}
</script>
<?php
break;	
	}// elseif
//else
// </else>
} //foreach

	
	 

?>


</body>
</html>