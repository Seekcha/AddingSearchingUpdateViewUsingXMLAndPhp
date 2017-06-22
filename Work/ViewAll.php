<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View All</title>
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
						
				<div class="col-lg-4  col-md-3">
					<a href="interface.html"> 
				    	<button class="button">Main Menu</button>
				    </a>
				</div>
				<div class="col-lg-4  col-md-3">
					<a href="newEntry.php">
				    	<button class="button">New Entry</button>
				    </a>
				</div>
				<div class="col-lg-4  col-md-3">
					<a href="search.html"> 
				    	<button class="button">Search</button>
				    </a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12  col-md-12 ">
		<br><br>
		<img src="img/medicio.png" class="img-responsive"/>
		</div>
	</div>
	
<?php
	$xml = simplexml_load_file('patient.xml');
	$poz = 0;
	$num = 1;
	$i = 0;
	if($_GET['currentPage'] != 0){
		$poz = $_GET['currentPage']-1; //set position patient
		$num = $num + $poz;
		$i = $poz;
	}
	//$xml->asXML('patient.xml');
	$no_rows = count($xml);
	
	for($i; $i<$num;$i++){
			//foreach ($xml ->patients as$patients) {
	    $img = $xml -> patients[$poz] -> img;
	    $filecode = $xml -> patients[$poz] -> filecode;
	    $firstname = $xml -> patients[$poz] -> firstname;
	    $lastname = $xml -> patients[$poz] -> lastname;
	    $dob = $xml -> patients[$poz] -> dob;
	    $street = $xml -> patients[$poz] -> address -> street;
	    $city = $xml -> patients[$poz] -> address -> city;
	    $cell = $xml -> patients[$poz] -> phone -> cell ;
	    $home = $xml -> patients[$poz] -> phone -> home ;
	    $work = $xml -> patients[$poz] -> phone -> work ;
	    $email = $xml -> patients[$poz] -> email;
	    $medical = $xml -> patients[$poz] -> medicalhistory;
	    $allergies = $xml -> patients[$poz] -> allergies;
	    $bloodgroup = $xml -> patients[$poz] -> bloodgroup;
	    $occupation = $xml -> patients[$poz] -> occupation;
	    $sfirstname = $xml -> patients[$poz] -> spousename -> firstname;
	    $slastname = $xml -> patients[$poz] -> spousename -> lastname;
	    $emfirstname= $xml -> patients[$poz] -> employ -> firstname;
	    $emlastname = $xml -> patients[$poz] -> employ ->  lastname;
	    $emcell = $xml -> patients[$poz] -> employ ->  phone -> cell;
	    $emhome = $xml -> patients[$poz] -> employ ->  phone -> home;
	    $emwork = $xml -> patients[$poz] -> employ ->  phone -> work;
	    $emstreet = $xml -> patients[$poz] -> employ ->  address -> street;
	    $emcity = $xml -> patients[$poz] -> employ ->  address -> city;
	    $efirstname = $xml -> patients[$poz] -> emergence ->  firstname;
	    $elastname = $xml -> patients[$poz] -> emergence ->  lastname;
	    $estreet = $xml -> patients[$poz] -> emergence ->  address -> street;
	    $ecity = $xml -> patients[$poz] -> emergence ->  address -> city;
	    $ecell = $xml -> patients[$poz] -> emergence -> phone -> cell;
	    $ehome = $xml -> patients[$poz] -> emergence -> phone -> home;
	    $ework = $xml -> patients[$poz] -> emergence -> phone -> work;
	    $eemail = $xml -> patients[$poz] -> emergence -> email;

	    
	
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
					<!-- Textbox for ID -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">File code</label>  
			     		<label class="col-md-8 control-label"><?php echo $filecode; ?></label> 
		     		</div>
	     			<!-- Textbox First name -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">First Name</label>  
			     		<label class="col-md-8 control-label"><?php echo $firstname; ?></label>  						
		     		</div>

		     		<!-- Textbox last name -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Last Name</label>  
			     		<label class="col-md-8 control-label"><?php echo $lastname; ?></label> 
		     		</div>

		     		<!-- Textbox dob -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Date of Birth</label>  
			     		<label class="col-md-8 control-label"><?php echo $dob; ?></label> 
		     		</div>
		     		
		     		<!-- Textbox street -->
					<div class="form-group">
					  <label class="col-md-4 control-label">Street</label> 
					  <label class="col-md-8 control-label"><?php echo $street; ?></label>  					    
					</div>		     		
		     		<!-- Textbox city -->
					<div class="form-group">
					  <label class="col-md-4 control-label">City</label>  
					  <label class="col-md-8 control-label"><?php echo $city; ?></label> 					 
					</div>
		     		<!-- Textbox cell 3 -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Cell #</label>
					  <label class="col-md-8 control-label"><?php echo $cell; ?></label> 
					</div>
		     		<!-- Textbox home -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Home #</label>  
					  <label class="col-md-8 control-label"><?php echo $home; ?></label> 
					</div>

		     		<!-- Textbox work -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Work #</label>  
					  <label class="col-md-8 control-label"><?php echo $work; ?></label> 
					</div>

		     		<!-- Textbox email -->
		     		<div class="form-group">
				        <label class="col-md-4 control-label">E-Mail</label>
				        <label class="col-md-8 control-label"><?php echo $email; ?></label>   
				    </div>
				    <!-- Textarea Medical history -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Medical History</label>
					  <label class="col-md-8 control-label"><?php echo $medical; ?></label> 					 
					</div>

		     		<!-- Textbox alergies -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Allergies</label>
					  <label class="col-md-8 control-label"><?php echo $allergies; ?></label> 
					</div>

		     		<!-- Textbox bloodgroup -->
					<div class="form-group">
					  <label class="col-md-4 control-label">Blood Group</label>  
					  <label class="col-md-8 control-label"><?php echo $bloodgroup; ?></label> 					    
					</div>

		     		 
		     		<!-- Textbox spouse first name -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Spouse First Name</label>  
			     		<label class="col-md-8 control-label"><?php echo $sfirstname; ?></label> 
		     		</div>

		     		<!-- Textbox spouse lastname -->
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

		     		<!-- Textbox Occupation -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Occupation</label>  
			     		<label class="col-md-8 control-label"><?php echo $occupation; ?></label> 
		     		</div>

		     		<!-- Textbox employer First name -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Employer First Name</label> 
			     		<label class="col-md-8 control-label"><?php echo $emfirstname; ?></label>  
		     		</div>

		     		<!-- Textbox employer last name -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Employer Last Name</label>  
			     		<label class="col-md-8 control-label"><?php echo $emlastname; ?></label> 
		     		</div>

		     		<!-- Textbox employer cell 3 -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Cell #</label>  
					  <label class="col-md-8 control-label"><?php echo $emcell; ?></label> 
					</div>


		     		<!-- Textbox employer home -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Home #</label>  
					  <label class="col-md-8 control-label"><?php echo $emhome; ?></label> 				    
					</div>

		     		<!-- Textbox employer work -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Work #</label> 
					  <label class="col-md-8 control-label"><?php echo $emwork; ?></label>  
					</div>

		     		<!-- Textbox work address street -->
					<div class="form-group">
					  <label class="col-md-4 control-label">Street</label>
					  <label class="col-md-8 control-label"><?php echo $emstreet; ?></label> 
					</div>		     		

		     		<!-- Textbox work ctiy -->
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
		     		<!-- Textbox first name -->
					<div class="form-group">
			     		<label class="col-md-4 control-label">First Name</label>  
			     		<label class="col-md-8 control-label"><?php echo $efirstname; ?></label>
		     		</div>

		     		<!-- Textbox last name -->
		     		<div class="form-group">
			     		<label class="col-md-4 control-label">Last Name</label>  
			     		<label class="col-md-8 control-label"><?php echo $elastname; ?></label> 
		     		</div>

		     		<!-- Textbox street -->
					<div class="form-group">
					  <label class="col-md-4 control-label">Street</label> 
					  <label class="col-md-8 control-label"><?php echo $estreet; ?></label>  
					</div>

		     		<!-- Textbox city -->
					<div class="form-group">
					  <label class="col-md-4 control-label">City</label>  
					  <label class="col-md-8 control-label"><?php echo $ecity; ?></label>
					</div>

		     		<!-- Textbox cell 3 -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Cell #</label>  
					  <label class="col-md-8 control-label"><?php echo $ecity; ?></label> 
					</div>

		     		<!-- Textbox home -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Home #</label>  
					  <label class="col-md-8 control-label"><?php echo $ehome; ?></label> 
					</div>

		     		<!-- Textbox work -->
		     		<div class="form-group">
					  <label class="col-md-4 control-label">Work #</label> 
					  <label class="col-md-8 control-label"><?php echo $ework; ?></label> 
					</div>

		     		<!-- Textbox email 3 -->
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
						  	<a class="button" onclick="Back()"><span class="glyphicon glyphicon-step-backward">Back</span></a>
						  </div>
						</div>
			     	</div>		     		  
	     		</fieldset>
	     	</form>
	     </div>
       </div>
	</div>
	<div class="container" style="text-align: center;">
	   <div class="row">
	     <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
			<?php
			$rowpage = 1;
			$currentPage = 1;
			if($currentPage > $no_rows){
				$currentPage = $no_rows;
			}

			if ($currentPage < 1) {
				$currentPage = 1;
			}

			$range = 37; // 

			for($x = ($currentPage - $range); $x < (($currentPage + $range)+1); $x++){
				if(($x > 0) && ($x <= $no_rows) ){					
					echo "<a href='{$_SERVER['PHP_SELF']}?currentPage=$x'> $x</a>";
				}
			}

			if ($currentPage != $no_rows){
				$nextPage = $currentPage + 1;
				echo " <a href='{$_SERVER['PHP_SELF']}?currentPage=$no_rows'>Last</a>";
			}
				?>
		     </div>
       </div>
	</div>
<?php
}
// if (isset($_GET['action']) && $_GET['action']=='Delete') {
//     $xml = simplexml_load_file('patient.xml');
//     $filecode = $_GET['filecode'];
//     $removeNode = 0;
//     $pageRemove = 0;
//     foreach ($xml -> patients as $pati) {
// 		if ($pati -> filecode == $filecode) {
// 		    $pageRemove = $removeNode;
// 		    break;
// 		}         
// 		$pageRemove++;       	
//     }
//     unset($xml->patients[$pageRemove]);
//     file_put_contents('patient.xml', $xml->asXML());
// 	}
?>

</body>
</html>