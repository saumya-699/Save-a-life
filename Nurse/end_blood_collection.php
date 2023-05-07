<?php 
session_start();

?>


 
<?php

include 'see.php';
?>
<html>

<head>
	
<link rel="stylesheet" href="https://kit.fontawesome.com/87928bc990.css" crossorigin="anonymous">


</head>
<body>
    <h1>Daily Blood Collection</h1>
<br><br>
 
 <form method="post" action="search_donor.php">
 
<div class="ta">
<div class="midiv">

</div>
</div>

</form>
<?php


require 'conection.php';
if (isset($_POST['BtnSubmit'])) {






    echo "<div class='tab'>";
    echo "<button class='button'>Add donor <br> Details";
    echo "</button>";
    echo "<table border=1>" . "<tr>" . "<th style='text-align:center;width:120px;'>" . "Donor_ID" . "</th>" . "
       <th style='text-align:center;width:120px;'>" . "Donation ID" . "
       <th style='text-align:center;width:120px;'>" . "Batch No" . "</th>" . "
       <th>" . "Blood Packet ID" . "</th>" . "
       <th>" . "Number of<br/> blood packets" . "</th>" . "
       <th>" . "Nurse ID" . "</th>" . "
       <th style='width:150px;'>" . "Action" . "</th>" . "
       </tr>";

    echo "<tr>" . "<td style='height:20px;background-color:#F5F5F5;'colspan=8'>" . "</td>" . "</tr>";

    echo "<tr>" . "<td>" . '1' . "</td>" . "<td>" . 'D10' . "</td>" . "<td>" . 'B20' . "</td>" . "<td>" . '100' . "</td>" . "<td>" . '1' . "</td>" . "<td>" . '10' . "</td>" . "<td><button class='b1'>Save</button></td>";

    echo "</tr>";

    echo "</table>";
    echo "<button class='button2'>End blood <br> collection";
    echo "</button>";
    echo "</div>";
}

     


$conn->close();
?>





<style>

table{
	
	
	//margin-left:440px;
	width:800px;
	height:20px;
	border-collapse: collapse;	
		margin-top:20px;
   border:0px transparent;	
 	
}


th{
	
	
	  white-space: nowrap; overflow: hidden; text-overflow:ellipsis;
	  text-align: center;
	   padding-top:25px;
	     padding-bottom:25px;
	   padding-left:20px;
	    padding-right:10px;
	     border:0px transparent;	
	
}

td {
  text-align: center;
  padding:3px;


}



h1{
	
    margin-top:100px;	
		margin-left:650px;
		margin-bottom:10px;
}

.select{
	
	 
 height:35px;
 width:138px;
 border-radius:20px;
 background-color:#56CE94;
  border: none;
 text-align:center;
                     
  
						
	
}


         .passwordDiv{

                     
                     //margin: 25px 0px 2px 95px;
					 line-height:92%;
					 padding-top:20px;

               }                 



           .midiv{

                    background-color:transparent;
                    
                    //margin-left:396px;
                   // margin-right:325px;
                    margin-bottom:-52px;
                    padding:2px 90px 30px 10px;
					margin-top:-10px;
					outline:none;
					border-radius: 25px;

               }
			   
			   
			   .box{
                  
                    
                    height:35px;
					width:200px;
					
					margin-left:20px;
					margin-top:0px;
				   border-radius:20px;
				   border: none;
				   text-align:center;
                     
           
               }
			   
			   
			   
                  .b1{
					      height:25px;
                          width:50px;
                          
						  color:#FFF5F3;
						  margin-left:18px;
						   border-radius:2px;
                           
                           background-color:#58A727;
						   border: none;
						   cursor:pointer;
						   
				            
				  
				  }
				  
				  
				  
				  
				    
			   
			   
			   .tab{
				   
				   background-color:#F5F5F5;
				    margin-top:30px;
					margin-left:370px;
					//padding:10px;
					margin-right:265px;
					padding-left:37px;
                   padding-right:60px;
				   padding-bottom:20px;
					 
				   
				   
			   }
			  
	 
			   .ta{
				   
				   background-color:#F5F5F5;
				  
				   
				   margin-top:50px;
				   margin-bottom:0px;
				  margin-left:370px;
				  margin-right:265px;
				  padding-left:30px;
				   
				   
				   
			   }
			  
	tr{
		
		background-color:white;
		
		
	}

    .button{
					      height:60px;
                          width:130px;
						  color:#FFF;
						  margin-left:20px;
						   border-radius:5px;
                           margin-top:10px;
                           margin-bottom: 10PX;
                           background-color:#58A727;
						   border: none;
						   cursor:pointer;
                           padding:10px;
						   
				            
				  
				  }
.button2{
					      height:50px;
                          width:100px;
						  color:#FFF;
						  margin-left:700px;
						   border-radius:5px;
                           margin-top:20px;
                           margin-bottom: 10PX;
                           background-color:#F3506D;
						   border: none;
						   cursor:pointer;
                           padding:10px;
						   
				            
				  
				  }
				  
		
		
			   
</style>

</body>
</html>
	