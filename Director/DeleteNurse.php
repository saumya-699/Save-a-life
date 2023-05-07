
<?php 
session_start();

?>
<html>

<head>



</head>
<body>

<?php
require "conp.php";

$m= $_SESSION["Name"];
$query = "select * from director where UserName ='$m'";


   		
$resultd = $conn->query($query);

//echo "Error in ".$vql."<br>".$conn->error;

if($resultd->num_rows>0)

{        

while($row = $resultd->fetch_assoc())

{




$x= $row["Director_ID"];





}


}
	

 //echo '<script type="text/javascript">';

       if(isset($_POST['delete'])){
		   
	
                 
		   echo '<script type="text/javascript">';
		// echo 'alert("Added successfully");';
         echo 'window.location.href="RemoveOrUpdateNurseI.php";';
	
		 echo '</script>';
		
 
	                  
		 $ty ="update Nurse set Director_ID ='$x'";

		 $result= $conn->query($ty);

		  
							$did=$_POST['Nurse_ID'];
							 $query="update nurse set Remark='Removed' where Nurse_ID='$did'";
							 $UserName =$_POST['UserName'];
                           $queryx ="delete from system_users where UserName ='$UserName'";

							 $result= $conn->query($query);
							 $resultx= $conn->query($queryx);
						  
						 
							  if(!$result)
		   {
		 
			 echo "Error deleting record: " . $conn->error;
		 
		   }	 
 
 if (!$resultx) {
	 echo "Error deleting record: " . $conn->error;
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
