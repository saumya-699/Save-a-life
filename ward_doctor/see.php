
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
                </span> Edit Profile</a>
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
 <button class="dropdown-btn" style=background-color:#DB2A54;><a href="see.php">Home</a></button>
 
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

                               
                          
                                <h1 class="txt-l ">Welcome back to NBTS</h1>
            <h1 class="txt-l " style=margin-left:120px;> <div class="name">Dear Dr.<?php 
                       echo " " . $_SESSION['Name_With_Initials'];
                         ?></h1>
            <h2 class="txt-l ">You have sucessfully accessed to your Ward Doctor Account</h1>
                                
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col " width="10 "></div>
    </div>



</body>

</html>
