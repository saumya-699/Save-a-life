
<?php 
session_start();
  $x= $_SESSION["Name"];

?>


 <?php
   if(isset($_SESSION["Name"]))   {
	
 
	
?>

<?php

//include 'mj.php';
?>
<html>

<head>



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
	   
	   
echo "<div class='midiv'> 
   <div class='passwordDiv'>

     <form method='post' action='TransferHospitalBackEnd.php'>
        
                           <center> <b> <font size=7> Deactivation </font></b><br></center>
						   
						   <br> <br> <br>
						    
                             <b> <font size=5> Hospital ID  </font></b><br><br>
                               <input type='text' value=".$row["Hospital_ID"]." name='Hospital_ID' id='Hospital_ID' class='box'><br><br><br>
						    <b> <font size=5> Hospital Name </font></b><br><br>
                             <input type='text' value=".$row["HospitalName"]." name='HName' id='H_Name' class='box'><br><br><br>
							 
							 
							 <b> <font size=5> Stock ID </font></b><br><br>
                             <input type='text' value=".$row["Hospital_ID"]." name='StockName' id='StockID' class='box' ><br><br><br>
							 
							 <b> <font size=5> Transfer to </font></b>   <select name= 'Transfer' class='select'>
                             <option value='h1'>general</option>
                             
                             <option value='h2'>Teaching </option>
                       
                             </select>
							 <br><br><br>
							   
							
                             <b> <font size=5>Transfer by </font></b><br><br>
                             <input type='text' value='$x' name='TransferBy' class='box' id='Transfer' ><br><br><br>
                               
                             <b> <font size=5>Date </font></b><br><br>
                             <input type='text' value='$date' name='date' class='box' id='date' ><br><br><br>
        

                           
						   
                              
                               
                             

     
          </div>
		

   
  </div>
 
  <div  class=container'>
  

     <button type=submit  name=BtnSubmit id=saveChanges class=b1 ><b>Transfer</b></button>
	  
	   <button type=button  name=btnCancel id=Cancel class=b2 ><b><a href='home.php'><font color='white'>Cancel</font></a></b></button>
   
      </div>
      </form> 
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

            .container{
                          
                         margin:0px 40px 60px 100px;

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