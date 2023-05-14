<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../database.php';

$db = Database::getInstance();
$query = "SELECT * FROM donors WHERE username='$_SESSION[username]'";
$data = [];
$already_submitted = false;
$invalid_form = false;
if (!isset($_SESSION['username']) || mysqli_num_rows($db->executeQuery($query)) == 0)
{
	header('Location: /Save-a-life/Guest/login/login.php');
}

else
{
	if (isset($_POST['save']) && $_POST['save'] == 'success')
	{
		// if no -> form disabled
		$no_list = ["PartE_c"];
		// if yes -> form disabled
		$yes_list = ["PartA_d", "PartA_e", "PartE_a", "PartE_b", "PartE_d", "PartF_b", "PartF_c"];
	
		foreach ($no_list as $key => $value) {
			if (isset($_POST[$value]) && $_POST[$value] == 2) {
				$invalid_form = true;
				break;
			}
		}
	
		foreach ($yes_list as $key => $value) {
			if (isset($_POST[$value]) && $_POST[$value] == 1) {
				$invalid_form = true;
				break;
			}
		}
	
		if (!$invalid_form)
		{
			if (!isset($_POST["PartB_b"]))
				$_POST["PartB_b"] = 0;
			if (!isset($_POST["PartB_c"]))
				$_POST["PartB_c"] = 0;
			if (!isset($_POST["PartB_d"]))
				$_POST["PartB_d"] = 0;
			if (!isset($_POST["PartB_e"]))
				$_POST["PartB_e"] = 0;
			if (!isset($_POST["PartB_f"]))
				$_POST["PartB_f"] = 0;
			if (!isset($_POST["PartB_h"]))
				$_POST["PartB_h"] = 0;
			if (!isset($_POST["PartB_i"]))
				$_POST["PartB_i"] = 0;
			if (!isset($_POST["PartB_j"]))
				$_POST["PartB_j"] = 0;
			
			$query = "INSERT INTO declaration_form (Created_Time,PartA_d,PartA_e,PartA_f,PartB_a,PartB_b,PartB_c,PartB_d,PartB_e,PartB_f,PartB_h,PartB_i,PartB_j,PartB_k,PartB_l,PartB_m,PartB_n,PartC_a,PartC_b,PartD_a,PartD_b,PartD_c,PartD_d,PartD_e,PartD_f,PartE_a,PartE_b,PartE_c,PartE_d,PartF_a,PartF_b,PartF_c,Donor_ID)
				VALUES (NOW(), $_POST[PartA_d],$_POST[PartA_e],$_POST[PartA_f],$_POST[PartB_a],$_POST[PartB_b],$_POST[PartB_c],$_POST[PartB_d],$_POST[PartB_e],$_POST[PartB_f],$_POST[PartB_h],$_POST[PartB_i],$_POST[PartB_j],$_POST[PartB_k],$_POST[PartB_l],$_POST[PartB_m],$_POST[PartB_n],$_POST[PartC_a],$_POST[PartC_b],$_POST[PartD_a],$_POST[PartD_b],$_POST[PartD_c],$_POST[PartD_d],$_POST[PartD_e],$_POST[PartD_f],$_POST[PartE_a],$_POST[PartE_b],$_POST[PartE_c],$_POST[PartE_d],$_POST[PartF_a],$_POST[PartF_b],$_POST[PartF_c], $_SESSION[Donor_ID])";
			$rSet = $db->executeQuery($query);
			var_dump($rSet);
			if ($rSet)
			{
				$already_submitted = true;
			}
			else
			{
				echo '<h1>Database Error!</h1>';
				return;
			}
		}
	}
	else
	{
		$query = "SELECT * FROM declaration_form WHERE Donor_ID='$_SESSION[Donor_ID]' ORDER BY Created_Time DESC";
		$rSet = $db->executeQuery($query);
		if (mysqli_num_rows($rSet) > 0)
		{
			$data = mysqli_fetch_assoc($rSet);
			$recent_donation = new DateTime($data['Created_Time']);
			$duration = $recent_donation->diff(new DateTime());
			$duration_hours = $duration->format("%h");
			if ($duration_hours < 24)
			{
				$already_submitted = true;
			}
			else
			{
				$already_submitted = false;
			}
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Fill Decleration Form</title>
<!-- Bootstrap CSS -->
<link href=https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css rel="stylesheet">
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
<link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="../css/style2.css">
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="../css/fontawesome-free-5.15.4/css/all.css">

<!-- Vanilla Datepicker CSS -->
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</head>
<body>
<style>
.accordion-body{background-color: #b2c0e0 !important;}
.accordion-button:not(.collapsed) {
color: #fff !important;}
</style>
<!-- partial:index.partial.html -->
<div class="layout has-sidebar fixed-sidebar fixed-header">
<aside id="sidebar" class="sidebar break-point-sm has-bg-image">
<a id="btn-collapse" class="sidebar-collapser"><i class="ri-arrow-left-s-line"></i></a>
<div class="sidebar-layout">
  <div class="sidebar-header">
	<div class="pro-sidebar-logo">
	  <div><img src="../img/logo.png" alt="logo"></div>
	  <h5>Save A Life</h5>
	</div>
  </div>
  <div class="sidebar-content">
	<nav class="menu open-current-submenu">
	  <ul>
		<li class="menu-header"></li>
		<li class="menu-item">
		  <a href="../home/home.php">
			<span class="menu-icon">
			  <i class="ri-home-fill"></i>
			</span>
			<span class="menu-title">Home</span>
		  </a>
		  <div class="sub-menu-list">
		  </div>
		</li>
		<li class="menu-item">
		  <a href="../donar/doner_information.php">
			<span class="menu-icon">
			  <i class="ri-folder-user-fill"></i>
			</span>
			<span class="menu-title">Personal Information</span>
		  </a>
		  <div class="sub-menu-list">
			
		  </div>
		</li>
		<li class="menu-item">
		  <a href="../donation_history/donation_history.html">
			<span class="menu-icon">
			  <i class="ri-history-line"></i>
			</span>
			<span class="menu-title">Donation History</span>
		  </a>
		  <div class="sub-menu-list">
			
		  </div>
		</li>
		<li class="menu-item">
		  <a href="../filldeclaration/filldecleration.php">
			<span class="menu-icon">
			  <i class="ri-file-edit-fill"></i>
			</span>
			<span class="menu-title">Fill Declaration Form</span>
		  </a>
		  <div class="sub-menu-list">
		</li>
	  
		<li class="menu-header" style="padding-top: 40px"><span>|</span></li>
		<li class="menu-item">
		  <a href="../donar/doner_information.php">
			<span class="menu-icon">
			  <i class="ri-user-line"></i>
			</span>
			<span class="menu-title">Profile</span>
		  </a>
		</li>
		<li class="menu-item">
		  <a href="#">
			<span class="menu-icon">
			  <i class="ri-notification-line"></i>
			</span>
			<span class="menu-title">Notifications</span>
		  </a>
		</li>

		<li class="menu-item">
		  <a href="../logout.php">
			<span class="menu-icon">
			  <i class="ri-logout-box-r-line"></i>
			</span>
			<span class="menu-title">Log Out</span>
		  </a>
		</li>
	  </ul>
	</nav>
  </div>
</div>
</aside>
  <div id="overlay" class="overlay"></div>
  <div class="layout">
	<main class="content">
	  <!-- add your content from here -->
	  <div class="row" style="width:100%;padding-left:5px;padding-top:60px;">
		<div class="col-12">
			<h1 style="text-align: center;font-weight: 800;font-size: 36px;">Fill Decleration Form</h1>
		</div>
	</div>

<?php if ($already_submitted) { ?>
		<h1>Form is already submitted</h1>
<?php
} else {
	if ($invalid_form) {?>
		<script type="text/javascript">
			alert("Form not submitted. Please contact your nearest blood bank!");
		</script>
<?php } ?>

		<form action="/Save-a-life/Guest/filldeclaration/filldecleration.php" method="POST" style="margin-top: 60px;">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" style="width: 100%;height: 50px;font-weight: 800;font-size: 34px;background-color: #0c1e35;color:#7d84ab;"  type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  PART - A
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">  <div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;">
                  <label class="required">A) Have you donated blood previously ?</label>
                  
                </div><div class="col-2">  
                   <select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;" name="PartA_a" disabled>
			  
<?php
	$query = "SELECT * FROM donation_records WHERE Donor_Id=$_SESSION[Donor_ID] ORDER BY Donation_Date DESC";
	$rSet = $db->executeQuery($query);
	$donation_records = []; 
	$donation_times = mysqli_num_rows($rSet);
	if ($rSet && $donation_times > 0)
	{
		$donation_records = mysqli_fetch_assoc($rSet);
	}
?>
				   <option <?php if (!empty($donation_records)) echo "selected"; ?> value="1">Yes</option>
                   <option <?php if (empty($donation_records)) echo "selected"; ?> value="2">No</option>
			 </select>
		   
		   </div></div>
		   <div class="spec" style="margin-top:20px;"></div>
		<hr>
		<div class="spec" style="margin-top:20px;"></div>
		   <div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">B) If yes, how many times :</label>
			  
		   </div><div class="col-2">  
		   <input class="form-select" min="0" value="<?php echo $donation_times; ?>" name="PartA_b" type="number" disabled/>
<!--
			  <select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;"name="PartA_b">
			  <option value="0" selected>Select</option>
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			  <option value="8">8</option>
			  <option value="9">9</option>
			  <option  value="10">10</option>
-->			</select>
		  
		  </div></div>
  
  
		  
		 <div class="spec" style="margin-top:20px;"></div>
	  <hr>
	  <div class="spec" style="margin-top:20px;"></div>
		 <div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">C) Date of last donation :</label>
			
		 </div><div class="col-2">  
			
<?php
	$sql_date = $donation_records['Donation_Date']; 
	$html_date = date("d-m-Y", strtotime($sql_date));
?>
		 <input type="datetime" value="<?php echo $html_date; ?>" name="dob" class="datepicker_input form-control txt-input input-wrapper" placeholder="Select Date" style="width: 100%;" name="PartA_c" disabled>
		  <i class="fas fa-calendar-alt input-group-text errspan"></i>
		
		</div></div>
		<div class="spec" style="margin-top:20px;"></div>
		<hr>
		<div class="spec" style="margin-top:20px;"></div>
		<div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">D) Did you experience any ailment,difficulty or discomfort during previous donations ?</label>
			  
		</div><div class="col-2">  
		   <select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;" name="PartA_d">
		   <option value="0" selected>Select</option>
		   <option value="1">Yes</option>
		   <option value="2">No</option>
		  
		 </select>
	   
	   </div></div><div class="spec" style="margin-top:20px;"></div>
	  <!-- <hr>
	   <div class="spec" style="margin-top:20px;"></div>
  
	   <div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">E) if yes,what was the defficulty</label>
			  
	   </div><div class="col-2">  
		  <select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;" name="PartA-e">
		  <option value="0" selected>Select</option>
		  <option value="1">Yes</option>
		  <option value="2">No</option>
		 
		</select>
	  
	  </div></div>
	  <div class="spec" style="margin-top:20px;"></div>-->
	  <hr>
	  <div class="spec" style="margin-top:20px;"></div>
  
	  <div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">E) Have you ever been medically advised not to donate blood ?</label>
			  
	  </div><div class="col-2">  
		 <select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;" name="PartA_e">
		 <option value="0" selected>Select</option>
		 <option value="1">Yes</option>
		 <option value="2">No</option>
		
	   </select>
	 
	 </div></div>
	 <div class="spec" style="margin-top:20px;"></div>
	 <hr>
	 <div class="spec" style="margin-top:20px;"></div>
	 <div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">F) Have you read and understood the "Blood Donation Information" in the website ? </label>
			  
	 </div><div class="col-2">  
		<select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;" name="PartA_f">
		<option value="0" selected>Select</option>
		<option value="1">Yes</option>
		<option value="2">No</option>
	   
	  </select>
	
	</div></div>
		</div>
		  </div>
		
		  <!--bbbbbbbbbbbbb-->
		  
		</div>  <div class="spec" style="margin-top:30px;"></div>
		<div class="accordion accordion-flush" id="accordionFlushExample">
		  <div class="accordion-item">
			<h2 class="accordion-header" id="flush-headingTwo">
			  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" style="background-color: #0c1e35;width: 100%;height: 50px;font-weight: 800;font-size: 34px;color:#7d84ab;">
				PART - B
			  </button>
			</h2>
			<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
			  <div class="accordion-body"><div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">A) Are you feeling well, today ?</label> </div><div class="col-2">
				<select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;" name="PartB_a">
					<option value="0" selected>Select</option>
					<option value="1">Yes</option>
					<option value="2">No</option>
				   
				  </select></div></div>
				
				  <div class="spec" style="margin-top:20px;"></div>
				  <hr>
				  <div class="spec" style="margin-top:20px;"></div>
				  <div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">B) Have you ever had or taken treatment for any of the following disease.conditions? If  yes, please mark <i class="fas fa-check"></i> in relevant boxes and discuss with the medical officer during the interview."</label>
						   
				  </div>
				  <div class="spec" style="margin-top:20px;"></div>
				  <div class="box-boder-b" style="border: 1px solid #000000;">
				  <div class="row">
					<div class="spec" style="margin-top:20px;"></div>
					<div class="col-2" style="font-size: 18px;font-weight:600;">
					  Heart Disease     
				  </div>
				  <div class="col-2" style="font-size: 18px;font-weight:600;">
					<input type="checkbox" name="PartB_b" id="">    
				</div>


				<div class="col-2" style="font-size: 18px;font-weight:600;">
					Diabetes   
				</div>
				<div class="col-2" style="font-size: 18px;font-weight:600;">
				  <input type="checkbox" name="PartB_c" id="">  

			  </div>
			  <div class="col-2" style="font-size: 18px;font-weight:600;">
				Fits    
			</div>
			<div class="col-2" style="font-size: 18px;font-weight:600;">
			  <input type="checkbox" name="PartB_d" id="">    
		  </div>
				 </div>
				
				
				 <div class="row">
					<div class="spec" style="margin-top:20px;"></div>
					<div class="col-2" style="font-size: 18px;font-weight:600;">
					Strokes     
				  </div>
				  <div class="col-2" style="font-size: 18px;font-weight:600;">
					<input type="checkbox" name="PartB_e" id="">    
				</div>


				<div class="col-2" style="font-size: 18px;font-weight:600;">
				   Asthma/Lung Disease  
				</div>
				<div class="col-2" style="font-size: 18px;font-weight:600;">
				  <input type="checkbox" name="PartB_f" id="">  

			  </div>
			  <div class="col-2" style="font-size: 18px;font-weight:600;">
				Liver Disease     
			</div>
			<div class="col-2" style="font-size: 18px;font-weight:600;">
			  <input type="checkbox" name="PartB_g" id="">    
		  </div>
				 </div>
				 
				 
				 <div class="row">
					<div class="spec" style="margin-top:20px;"></div>
					<div class="col-2" style="font-size: 18px;font-weight:600;">
					  Kidney Disease     
				  </div>
				  <div class="col-2" style="font-size: 18px;font-weight:600;">
					<input type="checkbox" name="PartB_h" id="">    
				</div>


				<div class="col-2" style="font-size: 18px;font-weight:600;">
				   Blood Disorders     
				</div>
				<div class="col-2" style="font-size: 18px;font-weight:600;">
				  <input type="checkbox" name="PartB_i" id="">  

			  </div>
			  <div class="col-2" style="font-size: 18px;font-weight:600;">
				Cancer    
			</div>
			<div class="col-2" style="font-size: 18px;font-weight:600;">
			  <input type="checkbox" name="PartB_j" id="">    
		  </div>
				 </div>
				 <div class="spec" style="margin-top:20px;"></div>
				 
				</div>
				<div class="spec" style="margin-top:20px;"></div>
				<hr>
				<div class="spec" style="margin-top:20px;"></div>
				<div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">C) Are you taking any medication/treatment, presently?</label> </div><div class="col-2">
					<select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;margin-left: 25px;" name="PartB_k">
						<option value="0" selected>Select</option>
						<option value="1">Yes</option>
						<option value="2">No</option>
					   
					  </select></div></div>  <div class="spec" style="margin-top:20px;"></div><hr><div class="spec" style="margin-top:20px;"></div>
					  <div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">D) Have you undergone any surgery? </label></div><div class="col-2">
						<select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;margin-left: 25px;" name="PartB_l">
							<option value="0" selected>Select</option>
							<option value="1">Yes</option>
							<option value="2">No</option>
						   
						  </select></div></div>
					  
					  <div class="spec" style="margin-top:20px;"></div>


				<hr>
				<div class="spec" style="margin-top:20px;"></div>
				<div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">E) After donating blood, do you have to engage in any heavy work, 
				  driving passenger or heavy vehicles or work at heights today ?</div><div class="col-2">
					<select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;margin-left: 25px;" name="PartB_m">
						<option value="0" selected>Select</option>
						<option value="1">Yes</option>
						<option value="2">No</option>
					   
					  </select></div></div>  <div class="spec" style="margin-top:20px;"></div><hr><div class="spec" style="margin-top:20px;"></div>
					  <div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">F) (For females) Are you pregnant or breast feeding at present ? Have you had a child birth or an abortion during last 12 months ?</label> </div><div class="col-2">
						<select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;margin-left: 25px;" name="PartB_n">
							<option value="0" selected>Select</option>
							<option value="1">Yes</option>
							<option value="2">No</option>
						   
						  </select></div></div>
		  </div>
			</div>
		  </div>
</div>
<!--ccccccccccccccccccccccccccccccccccc-->
<div class="spec" style="margin-top:30px;"></div>
<div class="accordion-item">
<h2 class="accordion-header" id="headingTwo">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color:#7d84ab;background-color: #0c1e35;width: 100%;height: 50px;font-weight: 800;font-size: 34px;">
PART - C
</button>
</h2>
<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
<div class="accordion-body">  <hr>
<div class="spec" style="margin-top:20px;"></div>
<div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">A) Have you ever had Janudice/hepatitis in the past ?</label>
 </div><div class="col-2">
	<select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;" name="PartC_a">
		<option value="0" selected>Select</option>
		<option value="1">Yes</option>
		<option value="2">No</option>
	   
	  </select></div></div>  <div class="spec" style="margin-top:20px;"></div><hr><div class="spec" style="margin-top:20px;"></div>
	  <div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">B) During last 2 years: Have you had Tuberculosis or Typhoid or taken treatment for them ?</label> </div><div class="col-2">
		<select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;" name="PartC_b">
			<option value="0" selected>Select</option>
			<option value="1">Yes</option>
			<option value="2">No</option>
		   
		  </select></div></div></div></div>
<!--dddddddddddddddddddddddddddddddddddddddddddddddddd-->
</div>
<div class="spec" style="margin-top:30px;"></div>
<div class="accordion-item">
<h2 class="accordion-header" id="headingThree">
<button class="accordion-button collapsed" type="button" style="color:#7d84ab;background-color: #0c1e35;width: 100%;height: 50px;font-weight: 800;font-size: 34px;" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
PART - D
</button>
</h2>
<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
<div class="accordion-body">

<div class="spec" style="margin-top:20px;"></div>
<div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required"> During past 12 months,</label>
 </div><div class="col-2">
	   
	  </select></div></div>  
	  <div class="spec" style="margin-top:20px;"></div>
<hr> 
<div class="spec" style="margin-top:20px;"></div>
<div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">A) Have you received any vaccinations?</label>
</div><div class="col-2">
<select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;" name="PartD_a">
  <option value="0" selected>Select</option>
  <option value="1">Yes</option>
  <option value="2">No</option>
 
</select></div></div>  <div class="spec" style="margin-top:20px;"></div><hr><div class="spec" style="margin-top:20px;"></div>
<div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">B) Have you had tattooing, ear / body piercing on acupuncture treatment ?</label>  </div><div class="col-2">
  <select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;" name="PartD_b">
	  <option value="0" selected>Select</option>
	  <option value="1">Yes</option>
	  <option value="2">No</option>
	 
	</select></div></div>


<hr>
 <div class="spec" style="margin-top:20px;"></div>
<div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">C) Have you been imprisoned for any reason ?</label>
 </div><div class="col-2">
	<select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;" name="PartD_c">
		<option value="0" selected>Select</option>
		<option value="1">Yes</option>
		<option value="2">No</option>
	   
	  </select></div></div>  
	  <div class="spec" style="margin-top:20px;"></div><hr><div class="spec" style="margin-top:20px;"></div>
	  <div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">D) Have you or your partner travelled abroad ? </label> </div><div class="col-2">
		<select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;" name="PartD_d">
			<option value="0" selected>Select</option>
			<option value="1">Yes</option>
			<option value="2">No</option>
		   
		  </select></div></div>
	  
	  <div class="spec" style="margin-top:20px;"></div>
	  <hr> <div class="spec" style="margin-top:20px;"></div>
	  <div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">E) Have you or your partner received blood or blood products ?</label>
	   </div><div class="col-2">
		  <select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;" name="PartD_e">
			  <option value="0" selected>Select</option>
			  <option value="1">Yes</option>
			  <option value="2">No</option>
			 
			</select></div></div>  <div class="spec" style="margin-top:20px;"></div><hr><div class="spec" style="margin-top:20px;"></div>
			<div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">F) Have you had malaria or taken treatment for malaria ?</label></div><div class="col-2">
			  <select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;" name="PartD_f">
				  <option value="0" selected>Select</option>
				  <option value="1">Yes</option>
				  <option value="2">No</option>
				 
				</select></div></div>
			
			<div class="spec" style="margin-top:20px;"></div>
</div>
</div></div></div>
<!---EEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE-->
<div class="spec" style="margin-top:30px;"></div>
<div class="accordion-item">
<h2 class="accordion-header" id="headingFour">
<button class="accordion-button collapsed" type="button" style="color:#7d84ab;background-color: #0c1e35;width: 100%;height: 50px;font-weight: 800;font-size: 34px;" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
PART - E
</button>
</h2>
<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
<div class="accordion-body"><div class="spec" style="margin-top:20px;"></div>
<hr> <div class="spec" style="margin-top:20px;"></div>
<div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">A) During last 6 months : Have you had Dengue fever ?</label>
</div><div class="col-2">
<select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;" name="PartE_a">
  <option value="0" selected>Select</option>
  <option value="1">Yes</option>
  <option value="2">No</option>
 
</select></div></div>  <div class="spec" style="margin-top:20px;"></div><hr><div class="spec" style="margin-top:20px;"></div>
<div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">B) During last 1 month : Have you had chicken pox measles, mumps, rubella, diarrhoea or any other long standing (more than one week) fever ?</label></div><div class="col-2">
  <select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;" name="PartE_b">
	  <option value="0" selected>Select</option>
	  <option value="1">Yes</option>
	  <option value="2">No</option>
	 
	</select></div></div>

<div class="spec" style="margin-top:20px;"></div>
<div class="spec" style="margin-top:20px;"></div>
	<hr> <div class="spec" style="margin-top:20px;"></div>
	<div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">C) During last 1 week : Have you had a dental extraction ?</label>
	 </div><div class="col-2">
		<select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 400; border: 1px solid #FF0303;" name="PartE_c">
			<option value="0" selected>Select</option>
			<option value="1">Yes</option>
			<option value="2">No</option>
		   
		  </select></div></div>  <div class="spec" style="margin-top:20px;"></div><hr><div class="spec" style="margin-top:20px;"></div>
		  <div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">D) During last 1 week : Have you  taken Aspirin, Antibiotics or any other medicine ?</label></div>
<div class="col-2">
			<select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 400; border: 1px solid #FF0303;" name="PartE_d">
				<option value="0" selected>Select</option>
				<option value="1">Yes</option>
				<option value="2">No</option>
			   
			  </select></div></div>
		  
</div>

</div></div>

<div class="spec" style="margin-top:30px;">
<div class="accordion-item">

<h2 class="accordion-header" id="headingFive">
<a href="#"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo" style="background-color: #0c1e35;width: 100%;height: 50px;font-weight: 800;font-size: 34px;color:#7d84ab;">
PART - F
</button></a>
</h2>
<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
<div class="accordion-body">  <hr>
	<div class="spec" style="margin-top:20px;"></div>
	<div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">A) Do you know that people following categories should not give blood ?</label>
	 </div><div class="col-2">
		<select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;" name="PartF_a">
			<option value="0" selected>Select</option>
			<option value="1">Yes</option>
			<option value="2">No</option>
		   
		   </select></div></div><div class="row"><div class="col-10">
				 <ul style="font-size: 18px;font-weight:600;">
			 <li>If you were found to be Positive for HIV, Hepatitis B, C or Syphills infections at any time </li>
			 <li>If you have had multiple sexual partners</li>
		<li>If you have ever engaged in male to male sexual activity</li>
			<li>If have ever injected any drug (esp. Narcotics) not prescribed by qualified medical practitoner</li>
			<li>If you have ever worked as a commercial sex worker</li>
		<li>If you have had sex with a commercial sex worker or an unknown partner during last 1 year</li>
		<li>If you suspect that you or your partner may have got HIV or any other sexually transmitted infection</li>
</ul>
		 </div></div> <div class="spec" style="margin-top:20px;"></div><hr><div class="spec" style="margin-top:20px;"></div>
		  <div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">B) Have you or your sexual partner belong to one of the above categories ?</label>
	 </div><div class="col-2">
		<select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;" name="PartF_b">
			<option value="0" selected>Select</option>

			<option value="1">Yes</option>
			<option value="2">No</option>
		   
		  </select></div></div>  <div class="spec" style="margin-top:20px;"></div><hr><div class="spec" style="margin-top:20px;"></div>
		  <div class="row"><div class="col-10" style="font-size: 18px;font-weight:600;"><label class="required">C) Are you having persistent fever, diarrhoea, multiple swollen lymph nodes or unintentional weight loss ?</label> </div><div class="col-2">
			<select class="form-select" aria-label="Default select example" style="font-size: 18px;font-weight: 600; border: 1px solid #FF0303;" name="PartF_c">
				<option value="0" selected>Select</option>
				<option value="1">Yes</option>
				<option value="2">No</option>
			   
			  </select>

</div></div></div></div></div>
</div>

<div class="row" style="margin-top:30px;"><div class="col-10"><h3 style="color:#FF0101;">*Compulsary</h3></div>
<div class="row" style="margin-top:30px;justify-content: center;"><div class="row btn-buttons btn-largeform">
  <input type="hidden" name="save" value="success"/>

  <div class="col btn-but"> <input type="submit" value="Save" class="btn btn-danger btn-reg" style="color:#000;"></div>
      <div class="col btn-but"> <input type="submit" value="Cancel" class="btn btn-secondary btn-can"></div>
  </div>
   </div>
  </form>
<?php } ?>
        </div>
        
        </main>
      </div>
    </div>

    <!-- nbtssl 5 JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/nbtssl@5.1.0/dist/js/nbtssl.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Vanilla Datepicker JS -->
    <script src='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker-full.min.js'></script>

    <script>
        /* nbtssl 5 JS included */
        /* vanillajs-datepicker 1.1.4 JS included */

        const getDatePickerTitle = elem => {
            // From the label or the aria-label
            const label = elem.nextElementSibling;
            let titleText = '';
            if (label && label.tagName === 'LABEL') {
                titleText = label.textContent;
            } else {
                titleText = elem.getAttribute('aria-label') || '';
            }
            return titleText;
        }

        const elems = document.querySelectorAll('.datepicker_input');
        for (const elem of elems) {
            const datepicker = new Datepicker(elem, {
                'format': 'dd/mm/yyyy', // UK format
                title: getDatePickerTitle(elem)
            });
        }
    </script>
  <script src='https://unpkg.com/@popperjs/core@2'></script><script  src="./script.js"></script>
  <script type='text/javascript' src='../js/script.js'></script>
</body>
</html>
