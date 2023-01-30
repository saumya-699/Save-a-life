<!--add nurse-->
<?php 
session_start();

?>


 <?php
   if(isset($_SESSION["ID"])) 
   $x= $_SESSION["ID"]; 
   
   {
	
	
?>
<?php

require 'cj.php';

require 'conp.php';
$vql ="select * from bloodbank_doctor where BloodBank_doctor_ID ='$x'";
$resultx = $conn->query($vql);

 while($row = $resultx->fetch_assoc())
   
   {     
     
	  $ty=$row["Hospital_ID"];
    $nm = $row["Name_With_Initials"];
	 
	  
	  
	}

$dql ="select * from hospital where Hospital_ID ='$ty'";
$resultd = $conn->query($vql);

 while($row = $resultd->fetch_assoc())
   
   {     
     
	  $tz=$row["HospitalName"];
	 
	  
	  
	}


?>
<html>

 
    <head>

        
        


     
      
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

 </style>




<meta name="viewport" content="width=device-width, initial-scale=1.0">
  









    </head>
    <body>
       <!--Header-->
        
        


     
<?php
require 'conp.php';
$date =date("Y/m/d");
echo "<div class='slider'>
<br> <br>



<div class='midiv'> 
   <div class='passwordDiv'>

   
       
    
     <form method='post' action='sendRequestbackEnd.php' id='FormName'>
        
                           <center> <b> <font size=8> External request <br><br><br>for components</font></b><br></center>
						   
						   <br> <br> <br>";
						   
                              
                              
                             

?>
	

	
	
	<?php
	
             echo "<br><br><br>";  
	        echo  "<b><font size=5>  Requesting hospital name </font></b><br><br>
          <input type='text'  name='H1Name' id='DOA' class='box' value='$tz'><br><br><br>";
?>
    
    
    <?php
	

  $sql= 'select *from hospital' ;
               $result = $conn->query($sql);

if($result->num_rows>0)

{     


      echo "<b> <font size=5> Requested hospital name </font></b><br><br>";

echo 
"<select name='H2Name' class='box' required>";


while($row=$result->fetch_assoc())

{     

echo 

" <option value='$row[HospitalName]'>$row[HospitalName]</option>";


}
}                      
echo "</select>";                      

?>


          
  <?php      
          echo "<br><br><br>
        
                             <b> <font size=5>Reuesting blood bank doctor name</font></b><br><br>
                             <input type='text' name='RBDN' id='slmc' class='box' value='$nm' required>
                             <br><br><br>
                             <b><font size=5> Required blood component</font></b><br><br><select id='position' name='RBC' class='box' required>
                             <option value='RBC'>Head&nbsp;nurse</option></select>
                             <br><br><br>
                             <b><font size=5> Required blood group</font></b><br><br><select id='position' name='RBG' class='box' required>
                             <option value='A+'>A+</option>
                             <option value='A-'>A-</option>
                             <option value='B+'>B+</option>
                             <option value='B-'>B-</option>
                             <option value='O+'>O+</option>
                             <option value='O-'>O-</option>
                             <option value='AB+'>AB+</option>
                             <option value='AB-'>AB-</option>
                             
                             
                             </select>
                             <br><br><br>
                             <b><font size=5> Required no of packs</font></b><br><br><select id='position' name='RBP' class='box' required>
                             <option value='1'>1</option>
                             <option value='2'>2</option>
                             <option value='3'>3</option>
                             <option value='4'>4</option>
                             </select> 
                             <br><br><br>
							               <b><font size=5>  Date</font></b><br><br>
                             <input type='text'  name='Date' id='DOA' class='box' value='$date'><br><br><br>
 
          </div>
		

  </div>
  
 
  <div  class='container'>
  

     <button type='submit'  name='BtnSubmit' id='saveChanges' class='b1' ><b>Send</b></button>
	  
	   <button type='button'  name='btnCancel' id='Cancel' class='b2' ><b><a href='home.php'><font color='white'>Cancel</font></a></b></button>
   
      </div>
      </form> 
  </div>";


}
?>
</body>



</html>


	

<?php

/*else 
	 
	 {
    
    echo '<script type="text/javascript">';
		 echo 'alert("Please log in first");';
         
		echo 'window.location.href="userloginFront.php";';
  echo '</script>';
	 }
 
?>*/