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
 margin-left:480px;
}
.name{
display: flex;
 margin-bottom:-10px;
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
	<div class="name">Dr. Aditya Sharma
	<br>Ward doctor<div/>
	
			<div class="dropdown">
                <span class="material-icons licon">
                    arrow_drop_down
                </span>
            </div>
 </li>
 </div>
</ul>



<div class="sidenav">
 <button class="dropdown-btn">Hospital
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
   
     <a href="#">Add</a>
    <a href="#">Update/Deactivate</a>
    <a href="#">Deactivation info</a>
	
  </div>
  


  <button class="dropdown-btn">Employee
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
 
    <a href="#">Blood bank doctor</a>
    <a href="#">MLT</a>
	 <a href="#">Ward doctor</a>
    <a href="#">Nurse</a>
	
  </div>
 
  
  
 
  <button class="dropdown-btn">Donor 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  
    <a href="#">Donor info</a>
    <a href="#">Remove</a>
  
	
  </div>
 
  
  
 
  <button class="dropdown-btn">reports
  
  </button>
   
  
  </div>
 </ul>
 
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
