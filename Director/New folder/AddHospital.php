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

       
     <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>

    <link rel="stylesheet" href="style.css">  
	<link rel="stylesheet" href="css/nbtssl/nbtssl.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.15.4/css/all.css">
    <link rel="stylesheet" href="css/mediaquery.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

        


     
      
   <style>
   
   
   
   
           .midiv{

                    background-color:transparent;
                    
                    margin-left:566px;
                    margin-right:325px;
                    margin-bottom:10px;
                    padding:2px 90px 5px 10px;
					margin-top:60px;
					outline:2px solid red;
					border-radius: 25px;

               }
    
          
         .passwordDiv{

                     
                     margin: 25px 0px 0px 95px;
					 line-height:92%;
					 padding-top:10px;
					 padding-bottom:2px;

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



.name li {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 1px 16px;
  font-weight: 500;
  font-style: italic;
  font-family:Open Sans, sans-serif;
  position:fixed;
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
  font-style: italic;
  font-family:Open Sans, sans-serif;
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
        
        
        








<div class="container frm-login">
        <div class="card frm-form">
            <div class="card-body frm-body">
   
       
    
     <form method="post" action="AddHospitalBackEnd.php">
        
                                <h1 class="txt-l">Add Hospital</h1>
                              
                              
                            <label for="exampleFormControlInput1" class="form-label lbl star">Hospital Name</label>
                             <input type="text" placeholder="Enter the Hospital Name" name="HName" id="H_id" class="form-control txt-input">
							 
							   
							 <label for="exampleFormControlInput1" class="form-label lbl star"> Type </label>
                             <select name="district" class="form-control txt-input" required>
							   <option value="Not Provided"> None</option>
                             <option value="general">District General</option>
                             
                             <option value="Teaching">Teaching </option>
							 <option value="Teaching">Base Hospital A </option>
						     <option value="Teaching">Base Hospital B </option>
							 <option value="Teaching">Primary Medical Care </option>
							 <option value="Teaching"> </option>
                              </select>

							 
					     <label for="exampleFormControlInput1" class="form-label lbl star">District </label>
                          <select name="district" class="form-control txt-input" required>
						    <option value="Not Provided"> None</option>
                        <option value="Matara">Matara</option>
						 	 <option value="Galle">Galle</option>
							 <option value="Anuradhapura">Anuradhapura</option>
							 <option value="kandy">kandy</option>
							 <option value="Nuwaraeliya">Nuwaraeliya</option>
							 <option value="Kalutara">Kalutara</option>
							 <option value="Colombo">Colombo</option>
							  <option value="Gampaha">Gampaha</option>
							   <option value="Kandy">Kandy</option>
							     <option value="Badulla">Badulla</option>
								  <option value="Monaragala">Monaragala</option>
								  <option value="Hambantota">Hambantota</option>
								  <option value="Hambantota">Hambantota</option>
								 <option value="Hambantota">Puttalam</option>
									  <option value="Hambantota">Kurunegala</option>
									  
                          </select>

                    

        
                           <label for="exampleFormControlInput1" class="form-label lbl star">Head of Hospital</label>
                             <input type="text" placeholder="Enter the name of Hospital Head " name="headName" id="headID" class="form-control txt-input" " >
        
                            
                            <label for="exampleFormControlInput1" class="form-label lbl star">Address</label>
                             <input type="text" placeholder="Enter the Address" name="address" class="form-control txt-input" id="adddress" >
        

                         <label for="exampleFormControlInput1" class="form-label lbl star">Land Line Number</label>
                            <input type="text" placeholder="Enter the Land Line Number" name="number1"  class="form-control txt-input"  id="numb1" >
							
					   <label for="exampleFormControlInput1" class="form-label lbl star"> Contact Number of Hospital Head</label>
                            <input type="text" placeholder="Enter the Contact Number of Hospital Head" name="number2" id="numb2" class="form-control txt-input">
                              

                  <div class='row btn-buttons'>
                        
                        <div class='col btn-but'> <input type='submit' name='BtnSubmit' value='Add' class='btn btn-danger btn-reg'></div>
                        <div class='col btn-but'> <input type='submit' name='btnCancel' value='Cancel' class='btn btn-secondary btn-can'></div>
                    </div>							  

     
          </div>
		

   
  </div>
 
    </div>
      </form> 



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