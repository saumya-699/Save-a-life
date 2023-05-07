<!DOCTYPE html>
<html lang="en">

<head>

<meta name="viewport"
		content="width=device-width, initial-scale=1.0" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

<link rel="stylesheet"
		href=
"https://unpkg.com/purecss@2.0.6/build/pure-min.css">

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


.sidenav a, .sidebar-btn {
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
.sidenav a:hover, .sidebar-btn:hover {
  color:#574240;
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


.dropdown-container {
  display: none;
  background-color:#007675;
  padding-left: 50px;
}

.fa-caret-down {
  float: right;
  padding-right: 8px;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.top {
  list-style-type: none;
  margin-top:-1px;
  padding-bottom:0px;
   height:57px;
   width:100%;
  /*overflow: hidden;*/
  background-color:#E56262;
  position:fixed;
  top:0;
}

/*.top {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:#E56262;
}*/




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
  margin-top:-10px;

}

body {
  background-image: url("ki.png");
  background-repeat: no-repeat;
  background-position:top;
  
  
}

.top-right
{
    display: flex;
 margin-bottom:1px;
 margin-left:420px;
 
}
.name{
display: flex;
margin-top:-20px;
 /*margin-bottom:-10px;*/
 cursor: pointer;

}

.person{
   cursor: pointer;
}

.notification{
  cursor: pointer;
}


.welcome{
 margin-left:400px;

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
  
    
	<br>Nurse</div>
	
			
  <div class="dropdown">
               <span class="material-icons licon">
                    arrow_drop_down
                </span> 
				<div class="dropdown-content">
  <a href="#"> <span class="material-icons licon">
  person
                </span> Profile</a>
  <a href="login.php">
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

<button class="dropdown-btn" ><a href="NurseHome.php">Home</a></button>

 <button class="sidebar-btn"><a href="reg.php">Register the Donors</a>
    
  </button>

  
  <button class="sidebar-btn"><a href="add_medical.php">Add Medical Details</a>
    
  </button>
  
 
  <button class="dropdown-btn">Donor Information 
    
  </button>
  <div class="dropdown-container">
  
    <a href="View_Donors.php">personal</a>
    <a href="view_medical.php">Medical</a>
  
	
  </div>
 
  
  
 
  <button class="sidebar-btn">Declaration Forms
  
  </button>

  <button class="sidebar-btn"><a href="start_blood_collection.php">Daily Blood Collection</a>
    
  </button>

  <button class="sidebar-btn"><a href="Donor_records.php">Donor Records</a>
    
  </button>
   
  
  </div>
 </ul>

 
 
 <div>
 
</div>


<script>

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

</body>

</html>
