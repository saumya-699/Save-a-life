<!--add nurse-->
<?php 
session_start();

?>


 <?php
   if(isset($_SESSION["ID"]))   {
	
	
?>
<?php

require 'mj.php'


?>
<html>

 
    <head>

        
        
 <!-- Vanilla Datepicker CSS -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>

    <link rel="stylesheet" href="style.css">  
	<link rel="stylesheet" href="css/nbtssl/nbtssl.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.15.4/css/all.css">
    <link rel="stylesheet" href="css/mediaquery.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <!-- Style CSS -->
   

 
     
      
   <style>
   
   
   
   
           .midiv{

                    background-color:transparent;
                    
                    margin-left:566px;
                    margin-right:325px;
                    margin-bottom:20px;
                    padding:2px 90px 30px 10px;
					margin-top:60px;
					outline:2px solid red;
					border-radius: 25px;

               }
    
          
         .passwordDiv{

                     
                     margin: 25px 0px 2px 95px;
					 line-height:92%;
					 padding-top:20px;

               }                 

                   
      
                 

                 
               
       .box{
                    padding:10px 80px 10px 20px;
                    
                    height:32px;
					width:430px;
					
                     
           
               }


                
            .sin{
                    clip-path: circle(50%);
                    margin-bottom:60px;
                   margin-left:28px;
				    
 
                }
       
    


                     
                

          .save{
                      margin:60px 30px 20px 100px;
               
                     padding:10px 79px 10px 40px;
                     font-size:23px;
                     color:#800000;
					 cursor:pointer;
                     // margin:left;
					   background-color:yellow;
            }
            
         
           span.fgt{

                          float:right;
                          

                 }  

           
                    
               span.prof{
                            float:right;
                            margin-left:50px;

                     }
                         
                        

              
      
                  .b1{
					  
					        width:130px;
                            height:40px;						   
						    color:#FFF5F3;
							
							 margin:0px 10px 20px 655px;
							 border-radius:30px;
                            
                           background-color:#F35050;
						   border: none;
						   cursor:pointer;
				            
				  
				  }
				  
				  .b2{
					  
					      
					        width:130px;
                            height:40px;					   
						    color:#FFF5F3;
							 margin:0px 100px 20px 10px;
							 border-radius:30px;
                             border: none;
                           background-color:#F35050;
				    
				  
				  }



	   



    .sign{
  
                  background-color: black;

  
  }

   .sign1{
  
                  background-color: green;

  
  }

a {text-decoration: none;}

.select{
	
	 float:right;
	 margin-right:0px;
	
	        
      }



.top {
  list-style-type: none;
  margin-top:-10px;
  padding-bottom:0px;
  overflow: hidden;
  background-color:#E56262;
  width:100%;
  height:57px;
  position:fixed;
  top:0;
  
}




.logo-massaviu {
  position: fixed;
  padding-left: 0px;
  background: transparent;
  overflow: hidden;
  z-index: 1;
  width: 198px;
  padding-top:0px;
  padding-left:6px;
  margin-top:-75px;
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
 margin-left:1020px;
 padding-left:300px;
 
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
 margin-left:400px;

}

.dropdownx{
   cursor: pointer;

}

.dropdownx:hover{  
  color: black;
}


.dropdownx-content {
  display: none;
  position: absolute;
  background-color: #C14246;
  min-width: 90px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdownx-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdownx-content a:hover {background-color: #f5646c}

.dropdownx:hover .dropdownx-content {
  display: block;
}

.dropdownx:hover .dropbtn {
  background-color: #3e8e41;
}



.top {
  list-style-type: none;
  margin-top:-8px;
  padding-bottom:0px;
  overflow: hidden;
  padding-top:10px;
  background-color:#E56262;
  width:100%;
  height:57px;
  position:fixed;
  top:0;
  
}



.name li {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 1px 16px;
  font-weight: 500;
 
  font-family:Open Sans;
  position:fixed;
}

 </style>




<meta name="viewport" content="width=device-width, initial-scale=1.0">
  









    </head>
    <body>
       <!--Header-->
      <div class="logo-massaviu">
  &nbsp; &nbsp; 
</div>
<div class="top">
<ul class="name" >

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
      // session_start();
     echo " " . $_SESSION['Name'];
    ?>
	<br>Director</div>
	
			
  <div class="dropdownx">
               <span class="material-icons licon">
                    arrow_drop_down
                </span> 
				<div class="dropdownx-content">
  <a href="#"> <span class="material-icons licon">
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


</div>
        


       <?php

       
function generate_pw() {
  $pw;
  // Set random length for password
  $password_length = rand(8, 16);
  $pw = '';

  for($i = 0; $i < $password_length; $i++) {
    $pw .= chr(rand(32, 126));
  }
  return $pw;
}


$hel = generate_pw();
?>
<?php
require 'conp.php';
$date =date("Y/m/d");
echo "



    <div class='container frm-login'>
        <div class='card frm-form'>
            <div class='card-body frm-body'>

   
       
    
     <form method='post' action='addNurseBackEnd.php' id='FormName'>
                           <center> <b>  <h1 class='txt-l'>Add Nurse</h1></b></center>
         
						   
						 
						   
                              
                              
                           <label for='exampleFormControlInput1' class='form-label lbl star'>Name with Initials</label>
                           <input type='text' placeholder='Enter the name' name='Name' id='name' class='form-control txt-input' required>
							 
							 
					    <label for='exampleFormControlInput1' class='form-label lbl star'>NIC Number</label>
                        <input type='text' placeholder='Enter the NIC number' name='NIC' id='NIC' class='form-control txt-input'  onchange='myFunction1()' required>";
							

?>
	
<?php
	

						  $sql= 'select *from hospital' ;
                           $result = $conn->query($sql);

      if($result->num_rows>0)

   {     
   

          	      echo "<label for='exampleFormControlInput1' class='form-label lbl star'>Hospital name</label>";
				  
	     echo 
		   "<select name='hospital' class='form-control txt-input' required>
		     <option value='Not Provided'> None</option>";
                      
	  
	 
      while($row=$result->fetch_assoc())
   
   {     
     
	      echo 
		   
         " <option value='$row[HospitalName]'>$row[HospitalName]</option>";
	   
	  
	}
   }                      
      echo "</select>";                      
	
	?>
	
	
	<?php
	
             
	        echo   "<label for='exampleFormControlInput1' class='form-label lbl star'>Position</label>
                         <select id='position' name='position'  class='form-control txt-input' required>
						   <option value=;Not Provided'> None</option>
                         <option value='Head nurse'> Head&nbsp;nurse
						 </option>
                         <option value='Nurse'> Nurse</option>
                        
                        
                         </select>
                          
                             
                           
                              
                           
                              <label for='exampleFormControlInput1' class='form-label lbl star'>DOB</label>
                             
							   <div class='input-group mb-4'>
                        <i class='fas fa-calendar-alt input-group-text'></i>

                        <input type='datetime' name='DOB' id='DOB' class='datepicker_input form-control txt-input' placeholder='Select Date' required>
                    </div>

        
        
                              <label for='exampleFormControlInput1' class='form-label lbl star'>SLMC Number</label>
                             <input type='text' placeholder='Enter the SLMC number' name='SLMC' id='slmc' class='form-control txt-input'  onchange='myFunction()' required>
                             
					
                           <label for='exampleFormControlInput1' class='form-label lbl star'>Email</label>
                             <input type='email' placeholder='Enter the Email' name='Email' class='form-control txt-input' id='Email'  required>
        
                             
                           <label for='exampleFormControlInput1' class='form-label lbl star'>Contact Number</label>
                            <input type='tel' placeholder='Enter the contact number' name='contactNumber'  class='form-control txt-input'  id='contact' pattern='[0-9]{10}' required>
							
							 <label for='exampleFormControlInput1' class='form-label lbl star'>Date of Appoinment</label>
                             <input type='text'  name='DOA' id='DOA' class='form-control txt-input' value='$date'>
				
							 <label for='exampleFormControlInput1' class='form-label lbl star'>User Name</label>
                             <input type='text' name='Uname' id='Uname' class='form-control txt-input' required>
                           
						   
						   <script type='text/javascript'>
                      
					 function myFunction(){
                     var x = document.forms['FormName']['slmc'].value;
                     
                    
					 document.getElementById('Uname').value = x;  
                     }
                      </script>
                               
                      <label for='exampleFormControlInput1' class='form-label lbl star'>Password</label>
                      <input type='password'  name='password'  class='form-control txt-input'  value='$hel'  required>

                  <div class='row btn-buttons'>
                        
                        <div class='col btn-but'> <input type='submit' name='BtnSubmit' value='Add' class='btn btn-danger btn-reg'></div>
                        <div class='col btn-but'> <a href='RemoveORUpdateWardDoctor.php'><input type='submit' name='btnCancel' value='Cancel' class='btn btn-secondary btn-can'></a></div>
                    </div>
					
					</form>
          </div>
		
   </div>
   
  </div>";

?>



</body>



</html>

<?php
	
}
 else 
	 
	 {echo '<script type="text/javascript">';
		 echo 'alert("Please log in first");';
         
		echo 'window.location.href="userloginFront.php";';
  echo '</script>';
	 }
 
?>



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
		
		
		
		function go(){
			
		echo "window.location.href='RemoveORUpdateWardDoctor.php'";
		
			
			
			
		}
    </script>