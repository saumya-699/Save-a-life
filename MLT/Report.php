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

<style>
    .sidenav a.active {
      background-color: red;
      color: white;
    }
    .sidenav {
      height: 150%;
      width: 246px;
      position: absolute;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #C14246;
      overflow-x: hidden;
      padding-top: 0px;
      margin-top:55px;
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
      background-color:#DB2A54;
      color: white;
    }
    .dropdown-container {
      display: none;
      background-color:#007675;
      
      
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
     echo " " . $_SESSION['name_with_initials'];
    ?>
	<br>MLT</div>
		 <div class="dropdown">
               <span class="material-icons licon">
                    arrow_drop_down
                </span> 
				<div class="dropdown-content">
  <a href="Edit ProfileMlt.php"> <span class="material-icons licon">
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
    <button class="dropdown-btn" ><a href="seeMLT.php">Home</a>
    </button>
  
  <button class="dropdown-btn">
  <a href="view donated blood information.php">View donated blood</a>  </button>
  	

  <button class="dropdown-btn1"><a href="Enter test result.php">Enter test result </a> 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  
    
  <a href="Enter Blood testing result.html">Blood test</a>    
    <a href="Cross matching test result.html">Cross matching</a>
  </div>
 
  <button class="dropdown-btn" >
  <a href="Send test results for approval.php">Send test results for approval</a>
  </button>
  
  <button class="dropdown-btn" >
  <a href="View approval of blood test results1.php">View approval of blood test results</a>
    </button>

    <button class="dropdown-btn">
    <a href="Add blood components.php">Add blood components</a>
        </button>
        
        <button class="dropdown-btn"  >
        <a href="Blood stock.php"> Blood stock</a>
            </button>
            
    
  <button class="dropdown-btn"  style=background-color:#DB2A54; >
  <a href="Report.php">Reports</a>
  </button>
   
  
  </div>
 </ul>
 
 
</div>
<br>
<div class="col-9 ">
                <div class="frm-login ">
                    <div class="card frm-form ">
                        <div class="card-body frm-body ">

                            <h1 class="txt-l ">Report Generation</h1>
                            <form action="create.php " method="POST">

                           
                            
                        <label for="exampleFormControlInput1 " class="form-label lbl star ">Report name</label>
                        <select name="blood_group" id=" " class="form-control txt-input " required="">
                       <option value=" " diabled> Select </option>
                       <option value="xxxx">Blood test report</option>
                        <option value="yyy">xxx</option>
                        
                    </select>
                            
                    <label for="exampleFormControlInput1 " class="form-label lbl star ">Hospital name</label>
                            <select name="Cross_matching_test_result" id=" " class="form-control txt-input " required="">
                           <option value=" " diabled>Select </option>
                           <option value="xxx">xxx</option>
                            <option value="yyy">yyy</option>
                            
                        </select>

                        <label for="exampleFormControlInput1 " class="form-label lbl star ">Export method</label>
                        <select name="Cross_matching_test_result" id=" " class="form-control txt-input " required="">
                       <option value=" " diabled>Select </option>
                       <option value="PDF">PDF</option>
                        <option value="jpg">jpg</option>
                        <option value="jpg">jpg</option>
                        <option value="jpg">jpg</option>

                    </select>

                    <label for="exampleFormControlInput1 " class="form-label lbl star " name="time_period">Time period (MM/DD/YYYY)</label>
                    <div class="input-group mb-4 ">
                    &nbsp; &nbsp;<font size="2px"> From </font>  &nbsp; <input type="date" name="expected_date" placeholder="Expected_date" required="" min="<?= date('Y-m-d') ?>">                               
                     &nbsp; &nbsp; &nbsp;  &nbsp;&nbsp; <font size="2px">To </font>   &nbsp;<input type="date" name="expected_date" placeholder="Expected_date" required="" min="<?= date('Y-m-d') ?>">                               

                    </div>
                            <div class="row btn-buttons ">
                                <button class="b1" name="submit" value="submit"><font size="2px">Generate</font></button> &nbsp; &nbsp; &nbsp; &nbsp;
  &nbsp; &nbsp; &nbsp; &nbsp;<button class="b1" name="cancel" value="cancel"><a href="Report.php"><font size="2px">Cancel</font></a></button>
                            </div>
                        </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col " width="10 "></div>
    </div>

    <script>
        var dropdown = document.getElementsByClassName("dropdown-btn1");
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
