
<?php 
session_start();

?>
<html>

<head>



</head>
<body>

<?php
require "conp.php";
 //echo '<script type="text/javascript">';

       if(isset($_POST['delete'])){
		   
	
                 
		   echo '<script type="text/javascript">';
		// echo 'alert("Added successfully");';
         echo 'window.location.href="RemoveOrUpdateNurseI.php";';
	
		 echo '</script>';
		
 
	   
		  
							$did=$_POST['Nurse_ID'];
							 $query="update nurse set Remark='Removed' where Nurse_ID='$did'";
							$result= $conn->query($query);
					  
						
							 if($conn->query($result))
      {
		
         
	    
                       
	   }	   
	   }

else
	
	{
		echo "Error in ". $query."<br>".$conn->error;

		
	}
	
	//}
// get all records
//$query = "SELECT * FROM nurse" or die( mysqli_error() );
//$result = mysqli_query( $conn, $query );
//echo "Error in ".$query."<br>".$conn->error;



?>

<h1> Nurse </h1>
 <form method="post" action="searchy.php">
<div class="midiv">

  <div class="passwordDiv">

 <font size=3> Search by </font></b>  <br/> <br/><select name= "search" class="select">
                             <option value="Position"><b> position</b></option>
                             <option value="Nurse_ID"><b> Nurse_ID</b></option>
                             <option value="Email" selected><b>Email</b></option>
		                    <option value="ContactNumber" selected><b> Contact number</b></option>
                             </select>


<input type="text" placeholder="type here" name="data" id="data" class="box">

 <button type="submit"  name="BtnSubmit" id="search" class="b1" ><b>Search</b></button>

</div>
</div>

</form>



<style>

table{
	
	
	margin-left:440px;
	width:800px;
	height:100px;
	border-collapse: collapse;	
		margin-top:50px;	

}


td {
  text-align: center;
}

h1{
	
		margin-top:50px;	
		margin-left:700px;
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

                     
                     margin: 25px 0px 2px 95px;
					 line-height:92%;
					 padding-top:20px;

               }                 



           .midiv{

                    background-color:transparent;
                    
                    margin-left:396px;
                    margin-right:325px;
                    margin-bottom:0px;
                    padding:2px 90px 30px 10px;
					margin-top:10px;
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
					      height:35px;
                          width:130px;
                          
						  color:#FFF5F3;
						  margin-left:20px;
						   border-radius:20px;
                           
                           background-color:#F3506D;
						   border: none;
						   cursor:pointer;
						   
				            
				  
				  }
			   
			   
		
			   
</style>

</body>
</html>
