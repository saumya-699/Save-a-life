
<?php

include "config.php";
   
  if (isset($_GET['WardDoctor_ID'])) {

    $id = $_GET['WardDoctor_ID']; 

    $sql = "SELECT * FROM `warddoctor` WHERE `WardDoctor_ID`='$id'";

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
                </span> Profile</a>
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

  <button class="dropdown-btn"><a href="Request History1.php">Request History </a>  </button>
  
  </div>

 </ul>
</div>
<br>
<div class="col-9 ">
                <div class="frm-login ">
                    <div class="card frm-form ">
                        <div class="card-body frm-body ">

                                <h1 class="txt-l "> Profile Update Form</h1>
                                <form action="Editprofilebackend" method="POST">

                                <?php
                          if ($result->num_rows > 0) {
                          while ($rows = $result->fetch_assoc()) {
                                ?>

                                <label for="exampleFormControlInput1 " class="form-label lbl ">Name</label>
                                <input type="text" class="form-control txt-input " name="Name_With_Initials" value=" <?php
                                                                          echo   $_SESSION['Name_With_Initials']; ?>" >
                                <label for="exampleFormControlInput1 " class="form-label lbl ">User ID</label>
                                <input type="hidden" name="id" value="<?php echo $WardDoctor_ID; ?>">



                               <label for="exampleFormControlInput1 " class="form-label lbl ">Email</label>
                                <input type="text" class="form-control txt-input " name="Email" value="<?php echo $Email; ?>">
                                
                                <label for="exampleFormControlInput1 " class="form-label lbl ">ContactNumber</label>
                                <input type="text" class="form-control txt-input " name="ContactNumber" value="<?php echo $ContactNumber; ?>">
                       
                                <label for="exampleFormControlInput1 " class="form-label lbl ">UserName</label>
                                <input type="text" class="form-control txt-input " name="UserName" value="<?php echo $UserName; ?>">
                                 
                                
                                <label for="exampleFormControlInput1 " class="form-label lbl ">Password</label>
                                <input type="text" class="form-control txt-input " name="Password" value="<?php echo $Password; ?>">

                                <div class="row btn-buttons ">
                                    <button class="b1" name="submit" value="update"><font size="2px">Update</font size></button> &nbsp; &nbsp; &nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp;  <button class="b1" name="cancel" value="cancel"><a href="Edit profile.php"><font size="2px">Cancel</font size></a></button>
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



</body>

</html>
<?php
} ?>