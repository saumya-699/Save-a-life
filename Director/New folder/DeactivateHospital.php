
<?php 
session_start();
  $x= $_SESSION["Name"];

?>


 <?php
   if(isset($_SESSION["Name"]))   {
	
 
	
?>

<?php

include 'mj.php';
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
  padding-top:10px;
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

</head>
<body>


<?php
$date =date("Y/m/d");

require 'conp.php';
if(isset($_POST['delete']))  

{	
   $did=$_POST['Hospital_ID'];
   $query="select * from hospital where Hospital_ID='$did'";
   
   $result= $conn->query($query);
   
  
   
  if($result->num_rows>0)

  {     
   

       
    while($row = $result->fetch_assoc())
   
   {     
     
	 // echo   $row["Nurse_ID"]."</td>"."<td>".$row["Name_With_Initials"]."</td>"."<td>".$row["HospitalName"]."</td>"."<td>".$row["Position"]."</td>"."<td>".$row["SLMC_Number"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["ContactNumber"]."</td>";
	   
	   
echo "  <div class='container frm-login'>
        <div class='card frm-form'>
            <div class='card-body frm-body'>


     <form method='post' action='TransferHospitalBackEnd.php'>
        
                           <center> <b> <font size=7> Deactivation </font></b><br></center>
						   
						 
						    
                           
                              <label for='exampleFormControlInput1' class='form-label lbl star'>Hospital ID </label>
                               <input type='text' value=".$row["Hospital_ID"]." name='Hospital_ID' id='Hospital_ID' class='form-control txt-input'>
						    <b> <font size=5> Hospital Name </font></b><br><br>
                             <input type='text' value=".$row["HospitalName"]." name='HName' id='H_Name' class='form-control txt-input'>
							 
							 
							  <label for='exampleFormControlInput1' class='form-label lbl star'>Stock ID </label>
                             <input type='text' value=".$row["Hospital_ID"]." name='StockName' id='StockID' class='form-control txt-input' >";
							 
							 
							 
							 

						  $sql= 'select *from hospital' ;
                           $result = $conn->query($sql);

      if($result->num_rows>0)

   {     
   

          	      echo "<label for='exampleFormControlInput1' class='form-label lbl star'>Transfer to </label>";
				  
	     echo 
		   "<select name='Transfer' class='form-control txt-input' required>";
                      
	  
	 
      while($row=$result->fetch_assoc())
   
   {     
     
	      echo 
		   
         " <option value='$row[HospitalName]'>$row[HospitalName]</option>";
	   
	  
	}
   }                      
      echo "</select>";     
							 
							 
						echo	 "
							
                            <label for='exampleFormControlInput1' class='form-label lbl star'>Transfer by </label>
                             <input type='text' value='$x' name='TransferBy' class='form-control txt-input' id='Transfer' >
                               
                           
                            <label for='exampleFormControlInput1' class='form-label lbl star'>Date  </label>
                             <input type='text' value='$date' name='date' class='form-control txt-input' id='date' >
        

                           
						   
                              
                               
                             
 <div class='row btn-buttons'>
                        
                        <div class='col btn-but'> <input type='submit' name='BtnSubmit' value='Transfer' class='btn btn-danger btn-reg'></div>
                        <div class='col btn-but'> <input type='submit' name='btnCancel' value='Cancel' class='btn btn-secondary btn-can'></div>
                    </div>
     
          </div>
		

   
    </div>
 
     </form> 
      </div>
   </div>
  </div>";
  
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	    //echo "Error in ".$query."<br>".$conn->error;
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
			 
			 
			 
	}
	
	
	
	
}	

 else

 {
  echo "Error in ".$query."<br>".$conn->error;

 echo "no results";

 }

}

$conn->close();
?>




      
   <style>
   
   
   
   
           .midiv{

                    background-color:transparent;
                    
                    margin-left:566px;
                    margin-right:325px;
                    margin-bottom:20px;
                    padding:2px 90px 30px 10px;
					margin-top:50px;
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
							
							 margin:0px 10px 20px 755px;
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
	 margin-right:40px;
	
	        
      }

 </style>
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