<?php

include "config.php";
if(isset($_POST['update']))  {

  $did=$_POST['RequestID'];
  $sql = "SELECT * FROM blood_request where requeste_id='$did' ";
  $result = $conn->query($sql);
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="./css/stylek.css">
    <link rel="stylesheet" href="./css/nbtssl/nbtssl.min.css">
    <link rel="stylesheet" href="./css/fontawesome-free-5.15.4/css/all.css">
    <link rel="stylesheet" href="./css/mediaquery.css">

<meta name="viewport"
		content="width=device-width, initial-scale=1.0" />
		
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
		 
<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style1.css">


</head>
<body style="background-color:#FFC3BF;">
 
<div id="image"></div>
<div class="logo-massaviu">
  &nbsp; &nbsp; <img src="icon.png" width="15%">
</div>
<ul class="top">

<li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <font size="5px"> National Blood Transfusion Service  </font size></li>

 <li>
<div class="top-right">
            <div class="notification">
                <span class="material-icons licon">
                    notifications
                </span>
            </div>
			&nbsp; 
			<div class="person">
                <span class="material-icons licon">
                    person
                </span>
            </div>
			&nbsp;
      <div class="name"><?php
       session_start();
     echo " " . $_SESSION['Name_With_Initials'];
    ?>
	<br>Ward doctor</div>
		 <div class="dropdown">
               <span class="material-icons licon">
                    arrow_drop_down
                </span> 
				<div class="dropdown-content">
  <a href="Edit Profile.php"> <span class="material-icons licon">
  person
                </span>Profile</a>
  <a href="logout.php">
  <span class="material-icons licon">
  exit_to_app
                </span>  
  Log out</a>
  </div>
            </div>
 </li>
 </div>
</ul>

<div class="sidenav">
 <button class="dropdown-btn" ><a href="see.php">Home</a></button>
 
  <button class="dropdown-btn" ><a href="Make blood request.php">Make Blood request</a> </button>

  <button class="dropdown-btn" style=background-color:#DB2A54;><a href="Request History1.php">Request History </a>  </button>
  
  </div>




 </ul>
</div>
<br>
<div class="col-9 ">
                <div class="frm-login ">
                    <div class="card frm-form ">
                        <div class="card-body frm-body ">

                                <h1 class="txt-l ">Edit Blood Request</h1>

                                <?php

                                //print_r($row)
                             if ($result->num_rows > 0) {
                               while ($rows = $result->fetch_assoc()) {
                                 ?>
                                 <form action="Updatebackend.php" method="POST">
  
                                <label for="exampleFormControlInput1 " class="form-label lbl star ">Patient Name</label>
                                <input type="text" class="form-control txt-input " name="patient_name" value="<?php echo $rows['patient_name']; ?>">
                                   
                                <input type="hidden" name="user_id" value="<?php echo $rows['requeste_id']; ?>">
                                
                                      
                            <label for="exampleFormControlInput1 " class="form-label lbl star " name="date_of_birth">Patient's Date of birth (MM/DD/YYYY)</label>
                                <div class="input-group mb-4 ">
                                    <input type="date" name="date_of_birth" placeholder="date_of_birth" value="<?php echo $rows['date_of_birth']; ?>" max="<?= date('Y-m-d') ?>">                                </div>
                                    

                                <label for="exampleFormControlInput1" class="form-label lbl star ">Patient Gender</label>
                                <select name="patient_gender" id=" "  class="form-control txt-input " required="">
                               <option value="<?php echo $rows['patient_gender']; ?>">  <?php echo $rows['patient_gender']; ?> </option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                            </select>

                            <label for="exampleFormControlInput1 " class="form-label lbl star ">Blood Group</label>
                                <select name="blood_group" id=" " class="form-control txt-input " required="">
                               <option value="<?php echo $rows['blood_group']; ?>"> <?php echo $rows['blood_group']; ?> </option>
                               <option value="O-">O-</option>
                                <option value="O+">O+</option>
                                <option value="A-">A-</option>
	                            <option value="A+">A+</option>
                                <option value="B-">B-</option>
                                <option value="B+">B+</option>
	                            <option value="AB-">AB-</option>
                               <option value="AB+">AB+</option>
                                
                            </select>

                            <label for="exampleFormControlInput1 " class="form-label lbl star ">Required Blood Component</label>
                                <select name="blood_component" id=" " class="form-control txt-input " required="">
                               <option value="<?php echo $rows['blood_component']; ?>" ><?php echo $rows['blood_component']; ?> </option>
                               <option value="Whole blood">Whole blood</option>
                                <option value="Red cell">Red cell</option>
	                            <option value="Platelet">Platelet</option>
                                <option value="Plasma">Plasma</option>
                            </select>


                            <label for="exampleFormControlInput1 " class="form-label lbl star ">Required Amount (packets)</label>
                                <select name="required_amount" id=" " class="form-control txt-input " required="">
                               <option value="<?php echo $rows['required_amount']; ?>"><?php echo $rows['required_amount']; ?></option>
                               <option value="01">01</option>
                              <option value="02">02</option>
	                           <option value="03">03</option>
                                <option value="04">04</option>
	                          <option value="05">05</option>
                            </select>


                                
                            <label for="exampleFormControlInput1 " class="form-label lbl star " name="expected_date">Expected date to receive (MM/DD/YYYY)</label>
                                <div class="input-group mb-4 ">
                                    <input type="date" name="expected_date" placeholder="Expected_date" value="<?php echo $rows['expected_date']; ?>" min="<?= date('Y-m-d') ?>">                                </div>
                                    
                                   


                                <label for="exampleFormControlInput1 " class="form-label lbl star " name="reason">Reason for the request</label>
                                <input type="text" class="form-control txt-input " name="reason" value="<?php echo $rows['reason']; ?>"required="">

                                <label for="exampleFormControlInput1 " class="form-label lbl star ">Ward number</label>
                                <select name="ward_number" id=" " class="form-control txt-input " required="">
                                <option value="<?php echo $rows['ward_number']; ?> "><?php echo $rows['ward_number']; ?></option>
                                <option value="01">01</option>
                                <option value="02">02</option>
	                           <option value="03">03</option>
                                 <option value="04">04</option>
	                           <option value="05">05</option>
                               <option value="06">06</option>
	                             <option value="07">07</option>
                                  <option value="08">08</option>
	                              <option value="09">09</option>
                                   <option value="10">10</option>
	                            <option value="11">11</option>
                                  <option value="12">12</option>
                            </select>

                            <label for="exampleFormControlInput1 "  name="remark " class="form-label lbl ">Remark</label>
                                <input type="text" class="form-control txt-input " name="remark" value="<?php echo $rows['remark']; ?>">

                                <label for="exampleFormControlInput1" class="form-label lbl star ">Status</label>
                                <select name="status" id=" "  class="form-control txt-input " required="">
                               <option value="<?php echo $rows['status']; ?>">  <?php echo $rows['status']; ?> </option>
                               <option value="Cancel">Cancel</option>
                            </select>
 
                                <div class="row btn-buttons ">
                                    <button class="b1" name="saveChanges" value="saveChanges"><font size="2px">Edit</font size></button> &nbsp; &nbsp; &nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp;  <button class="b1" name="cancel" value="cancel"><a href="Update.php"><font size="2px">Cancel</font size></a></button>
                                </div>
                               
                            </form>
                            <?php       
                                }}

                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col " width="10 "></div>
    </div>




    <!-- nbtssl 5 JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/nbtssl@5.1.0/dist/js/nbtssl.bundle.min.js " integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj " crossorigin="anonymous "></script>

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
   
</body>

</html>
<?php
} ?>