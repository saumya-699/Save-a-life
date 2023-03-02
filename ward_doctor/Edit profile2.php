
	
</html>

<!DOCTYPE html>
<html lang="en">

<head>

<meta name="viewport"
		content="width=device-width, initial-scale=1.0" />
		
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
		 
<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>


.sidenav a.active {
  background-color: red;
  color: white;
}


.sidenav {
  height: 100%;
  width: 246px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #C14246;
  overflow-x: hidden;
  padding-top: 0px;
  margin-top:55.6px;
  font-weight:600;
}


.sidenav a, .dropdown-btn {
  padding: 26px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #D9D9D9;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  font-family:Open Sans, sans-serif;
 
}



/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color:#574240;
}


.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}


.active {
  background-color:#DB2A54;
  color: white;
}




@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.top {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:#E56262;
}



.top li {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  font-weight: 500;
  font-style: italic;
  font-family:Open Sans, sans-serif;
}


.logo-massaviu {
  position: fixed;
  padding-left: 0px;
  background: transparent;
  overflow: hidden;
  z-index: 1;
  width: 198px;
  padding-top:9px;
  padding-left:6px;
}

.top-right
{
    display: flex;
 margin-bottom:1px;
 margin-left:420px;
 
}
.name{
display: flex;
 margin-bottom:-10px;
 cursor: pointer;

}

.person{
   cursor: pointer;
}

.notification{
  cursor: pointer;
}


.welcome{
 margin-left:100px;
 max-width: 350px;
  width: 80%;
  margin-top: 70px;
  padding:10px;
  border-style: solid;
  border-color: red;
  border-radius: 25px;

}

.dropdown{
   cursor: pointer;

}

.dropdown:hover{  
  color: black;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #C14246;
  min-width: 90px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f5646c}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

body {
  background-image: url("ki.png");
  background-repeat: no-repeat;
  background-position:top;
  
  
}

	
</style>
</head>
<body style="background-color:#FFC3BF;">
 
<div id="image"></div>
<div class="logo-massaviu">
  &nbsp; &nbsp; <img src="icon.png" width="15%">
</div>
<ul class="top">

  <li>&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <font size="5.2px"> National Blood Transfusion Service  </font size></li>

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
	<div class="name">
    <?php
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

<div class="welcome" style="margin-left:450px">
     <h4 style=" text-align: center">  Profile Update Form</h4>
  
<form action="Editprofilebackend.php" method="post">
<table> <tr><td>
    <div>
    <?php
     echo "Name:</td><td> " . $_SESSION['Name_With_Initials'];
    ?>
  </td>
  </tr>
    <tr><td>Email:
<td>
    <input type="Email" name="Email" value="<?php echo $Email; ?>">
    </td>
    
    </td></tr><tr><td>
    ContactNumber:
    </td><td>
    <input type="ContactNumber" name="ContactNumber" value="<?php echo $ContactNumber; ?>">
    </td></tr>
    
    <tr><td>
    UserName:</td><td>

    <input type="UserName" name="UserName" value="<?php echo $UserName; ?>">
    </td></tr>
    
<tr><td>
    Password:
</td><td>
    <input type="Password" name="Password" value="<?php echo $Password; ?>">
    </td></tr>
    

  <tr><td>
    <input type="submit" value="Update" name="update">
    </td></tr>
    </table>
</form> 
</div>
 
<div class="sidenav">
 <button class="dropdown-btn" style=background-color:#DB2A54;><a href="see.php">Home</a></button>
 
  <button class="dropdown-btn"><a href="Make blood request.php">Make Blood request</a> </button>

  <button class="dropdown-btn"><a href="Request History1.php">Request History </a>  </button>
  
  </div>
 </ul>

 <?php 

include "config.php";

    if (isset($_POST['update'])) {

        $Email = $_POST['Email'];

        $ContactNumber = $_POST['ContactNumber'];

        $UserName = $_POST['UserName'];

        $Password = $_POST['Password'];


        $sql = "UPDATE `warddoctor` SET `Email	`='$Email',`ContactNumber`='$ContactNumber',`UserName`='$UserName', `Password`='$Password' WHERE `id`='$WardDoctor_ID'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $WardDoctor_ID = $_GET['id']; 

    $sql = "SELECT * FROM `warddoctor` WHERE `id`='$WardDoctor_ID'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $Email = $row['Email'];

            $ContactNumber = $row['ContactNumber'];

            $UserName = $row['UserName'];

            $Password = $row['Password'];

            $id = $row['id'];

        } 

    ?>

        
        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?> 

</body>

</html>
