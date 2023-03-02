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

<h1>Daily Blood Collection </h1>
 
<?php


require 'conection.php';
    
  
   

          //echo "<font color=red>";
	      //echo "<font size=6>";
	   
	   echo  "<div class='tab'>";
       echo '<form method="POST" action="end_blood_collection.php">';
echo "<button class='button' name='BtnSubmit'> Start Blood <br> Collection";
        echo "</button>";
echo "<form/>";
	   
	 echo "</div>";
	


$conn->close();
?>





<style>





h1{
	
		margin-top:100px;	
		margin-left:650px;
		margin-bottom:20px;
}


			   
                  .button{
					      height:60px;
                          width:130px;
						  color:#FFF;
						  margin-left:20px;
						   border-radius:5px;
                           margin-top:50px;
                           background-color:#58A727;
						   border: none;
						   cursor:pointer;
                           padding:10px;
						   
				            
				  
				  }
				  
				  
				  
				  
				    .f2{
					      //background-color:red;
						    margin-left:90px;
							margin-top:-50px;
							background-color:transparent;
							 border: none;
						   cursor:pointer;
						   
				            
				  
				  }
				  
				  
				  .f1{
					     // background-color:yellow;
						      background-color:transparent;
						  margin-left:55px;
						    margin-right:60px;
							margin-bottom:0px;
							margin-top:-100px;
						   border: none;
						   cursor:pointer;
						  
						  
				  }
				  
				  .fp{
					  
					  
					 
					  //background-color:green;
					  margin-right:100px;
					  margin-top:0px;
					 
					  margin-bottom:-53px;
					  background-color:transparent;
					   border: none;
					   cursor:pointer;
					  
					  
					  
				  }
			   
			   
			   .tab{
				   
				   background-color:#F5F5F5;
				    margin-top:0px;
					margin-left:370px;
					//padding:10px;
					margin-right:265px;
					padding-left:37px;
                   padding-right:60px;
				   padding-bottom:50px;
                   width:800px;
                   height:500px;
					 
				   
				   
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
		
		
			   
</style>

</body>
</html>
	