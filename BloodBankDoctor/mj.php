

<html>
<html lang="en">

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />



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
  margin-top:46.6px;
  font-weight:600;
}

a {text-decoration: none;}

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


.dropdown-btn1 {
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


.dropdown-btn.active {
  background-color:#DB2A54;
  color: white;
}

.dropdown-btn1.active {
  background-color:#966B7B;
  color: white;
}
.dropdown-container {
  display: none;
  background-color:#007675;
  
  
}

.dropdown-container1 {
  display: none;
  background-color:#5793CA;
  padding-left:76px;

 

}
.fa-caret-down {
  float: right;
  padding-right: 8px;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}





</style>
</head>
<body style="background-color:#FFC3BF;">
 

<div class="logo-massaviu">
  &nbsp; &nbsp; <img src="icon.png" width="15%">
</div>
<div class="top">
<ul class="name" >

  <li>&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <font size="5.2px"> National Blood Transfusion Service  </font size></li>
 
 
</ul>

</div>
<div class="sidenav">
 <button class="dropdown-btn">Hospital
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
   
     <a href="AddHospital.php">Add</a>
    <a href="DeactivateOrUpdateHospital.php">Update/Deactivate</a>
    <a href="DeactivationInfo.php">Deactivation info</a>
	
  </div>
  


  <button class="dropdown-btn">Employee
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
 
    
   
  <button class="dropdown-btn1">&nbsp; &nbsp;Blood bank doctor
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container1">
 
    
    <a href="Add_bb.php"> Add </a>
	<a href="RemoveOrUpdateBB.php">remove/update</a>
  
 
	
	
  </div>
	

  <button class="dropdown-btn1">&nbsp; &nbsp;MLT
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container1">
 
    
    <a href="addMLT.php"> Add </a>
	<a href="RemoveOrUpdateMLT.php">remove/update</a>
	
  </div>  
  
  
 
  <button class="dropdown-btn1">&nbsp; &nbsp;Ward doctor
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container1">
 
    
    <a href="AddWardDoctor.php"> Add </a>
	<a href="RemoveOrUpdateWardDoctor.php">remove/update</a>

  </div>
	


    
   
  <button class="dropdown-btn1">&nbsp; &nbsp;Nurse
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container1">
 
    
    <a href="AddNurse.php"> Add </a>
	<a href="RemoveOrUpdateNurse.php">remove/update</a>
  
 
	
	
  </div>	
  </div>
 
  
  
 

  <button class="dropdown-btn" id="myButtonx">Donors
  
  </button>
   
 
  
  
 
  <button class="dropdown-btn" id="myButton"> reports
  
  </button>
   
  
  </div>
 </ul>
 
</div>


<script>
   document.getElementById("myButton").onclick = function () {
        location.href = "ReportGeneration.php";
    };
	
	document.getElementById("myButtonx").onclick = function () {
        location.href = "View_Donors.php";
    };


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


var dropdown1 = document.getElementsByClassName("dropdown-btn1");
var i;

for (i = 0; i < dropdown1.length; i++) {
  dropdown1[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent1 = this.nextElementSibling;
    if (dropdownContent1.style.display === "block") {
      dropdownContent1.style.display = "none";
    } else {
      dropdownContent1.style.display = "block";
    }
  });
}
</script>

</body>

</html>
