<!DOCTYPE html>
<html lang="en">

<head>

<meta name="viewport"
		content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet"
		href=
"https://unpkg.com/purecss@2.0.6/build/pure-min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet"
          href=
"https://unpkg.com/purecss@2.0.6/build/pure-min.css">
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

.dropdown-container1 {
  display: none;
  background-color:#007675;
  padding-left:100px:
 

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
  position:fixed;
  width:100%;
  height:57px;
  
}



.name li {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 1px 16px;
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

body {
  background-image: url("ki.png");
  background-repeat: no-repeat;
  background-position:top;
  background-attachment: fixed;
  
  
}


        .custom-display {
            /* To limit the menu width to
            the content of the menu: */
            display: inline-block;
			
		   margin-top:-450px;
		  
		  
        }
		
		.pure-menu-list{
			
			     background-color:blue;
				   font-size:0px;
				  
			
		}
		
		.pure-menu-link{
			
			
			 font-size:0px;
		}
	
	.pure-menu-children{
		 background-color:green;
		
		
	}
	
	.pure-menu-item{
		
		
			 
	}
</style>
</head>
<body style="background-color:#FFC3BF;">
 
<div id="image"></div>
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
   
     <a href="#">Add</a>
    <a href="#">Update/Deactivate</a>
    <a href="#">Deactivation info</a>
	
  </div>
  


  <button class="dropdown-btn">Employee
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container1">
 
    
    <a href="#">   <div class=" pure-menu custom-display">
        <ul class="pure-menu-list">  
			
            <li class="pure-menu-item
                       pure-menu-has-children
                       pure-menu-allow-hover ">
                <a href="#"
                   class="pure-menu-link">
                   MLT
                </a>
 
                <ul class="pure-menu-children">
                    <li class="pure-menu-item">
                        <a href="#"
                           class="pure-menu-link">
                           Add
                        </a>
                    </li>
                    <li class="pure-menu-item">
                        <a href="#"
                           class="pure-menu-link">
                           Remove
                        </a>
                    </li>
                  
                </ul>
            </li>
         
        </ul>
    </div>   </a> 
    <a href="#">   <div class=" pure-menu custom-display">
        <ul class="pure-menu-list">  
			
            <li class="pure-menu-item
                       pure-menu-has-children
                       pure-menu-allow-hover ">
                <a href="#"
                   class="pure-menu-link">
                    Blood bank <br> doctor
                </a>
 
                <ul class="pure-menu-children">
                    <li class="pure-menu-item">
                        <a href="#"
                           class="pure-menu-link">
                           Add
                        </a>
                    </li>
                    <li class="pure-menu-item">
                        <a href="#"
                           class="pure-menu-link">
                           Remove
                        </a>
                    </li>
                  
                </ul>
            </li>
         
        </ul>
    </div>   </a> 
    <a href="#">   <div class=" pure-menu custom-display">
        <ul class="pure-menu-list">  
			
            <li class="pure-menu-item
                       pure-menu-has-children
                       pure-menu-allow-hover ">
                <a href="#"
                   class="pure-menu-link">
                 Ward doctor
                </a>
 
                <ul class="pure-menu-children">
                    <li class="pure-menu-item">
                        <a href="#"
                           class="pure-menu-link">
                           Add
                        </a>
                    </li>
                    <li class="pure-menu-item">
                        <a href="#"
                           class="pure-menu-link">
                           Remove
                        </a>
                    </li>
                  
                </ul>
            </li>
         
        </ul>
    </div>   </a>
   
    <a href="#">   <div class=" pure-menu custom-display">
        <ul class="pure-menu-list">  
			
            <li class="pure-menu-item
                       pure-menu-has-children
                       pure-menu-allow-hover ">
                <a href="#"
                   class="pure-menu-link">
                    Nurse
                </a>
 
                <ul class="pure-menu-children">
                    <li class="pure-menu-item">
                        <a href="#"
                           class="pure-menu-link">
                           Add
                        </a>
                    </li>
                    <li class="pure-menu-item">
                        <a href="#"
                           class="pure-menu-link">
                           Remove
                        </a>
                    </li>
                  
                </ul>
            </li>
         
        </ul>
    </div>   </a>
	
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
