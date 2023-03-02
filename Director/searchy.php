<html>

<head>



</head>

<body>
<?php

include 'mj.php';


?>

<h1>Nurse</h1>

<?php

require 'conp.php';
if(isset($_POST['BtnSubmit']))
    
{		
 
  
$search =$_POST["search"];
$data =$_POST["data"];		 
$sql= "select * from nurse WHERE $search='$data'";  
$result = $conn->query($sql);

if($result->num_rows>0)

{     
    echo "<font color=red>";
	      echo "<font size=6>";
	   
	    
	   echo  "<table border=1>"."<tr>"."<th>"."Nurse_ID"."</th>"."<th>"."Name_With_Initials"."</th>"."<th>"."Hospital name"."</th>"."<th>"."Position"."</th>"."<th>"."SLMC number"."</th>"."<th>"."Email"."</th>"."<th>"."Contact number"."</th>"."<th>"."Action"."</th>"."</tr>";

   while($row = $result->fetch_assoc())
   
   {     
     
	  echo  "<tr>"."<td>".$row["Nurse_ID"]."</td>"."<td>".$row["Name_With_Initials"]."</td>"."<td>".$row["HospitalName"]."</td>"."<td>".$row["Position"]."</td>"."<td>".$row["SLMC_Number"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["ContactNumber"]."</td>"."<td>".'<a href="RemoveORUpdateNurse.php">'.'<img src="del.png" " width="20" height="20" />'.'</a>'."&nbsp;".'<img src="edit.png" " width="20" height="20" />'."</td>"."</tr>";
	  
	   
	  
	}
	
	 echo "</font>";
	 echo  "</font>";
	  
	   
	
	echo "</table>";
	
}	

else

{
///printf("Query failed: %s\n", $conn->error);
 echo "no results";

}

}

$conn->close();

?> 


<button type="submit" name="data" id="data" class="b1"><a href="RemoveORUpdateNurse.php"><font color="white"><font size="3">Back</font></font></a></button>
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
	
		margin-top:60px;	
		margin-left:700px;
}

.select{
	
	 
 height:35px;
 width:130px;
 border-radius:10px;
						
	
}


         .passwordDiv{

                     
                     margin: 25px 0px 2px 95px;
					 line-height:92%;
					 padding-top:20px;

               }                 



           .midiv{

                    background-color:transparent;
                    
                    margin-left:366px;
                    margin-right:325px;
                    margin-bottom:20px;
                    padding:2px 90px 30px 10px;
					margin-top:60px;
					outline:2px solid red;
					border-radius: 25px;

               }
			   
			   
			   .box{
                  
                    
                    height:35px;
					width:200px;
					
					margin-left:20px;
					margin-top:0px;
				   border-radius:20px;
                     
           
               }
			   
			   
      
                  .b1{
					      height:25px;
				          width:100px;
										   
						    color:#FFF5F3;
							margin-left:1150px;
							 border-radius:30px;
                             margin-top:30px;
                           background-color:#F35050;
						   border: none;
						   cursor:pointer;
				            
				  
				  }
			   
			   
			   a{
				   
				   text-decoration:none;
			   }
			   
			   
			   
</style>

</body>
</html>
