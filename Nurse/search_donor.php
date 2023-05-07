<html>

<head>



</head>

<?php

include 'see.php';


?>

<h1>Donor Details</h1>
<body>



<?php


require 'conection.php';
if(isset($_POST['BtnSubmit']))
    
{		
 
  
$search =$_POST["search"];
$data =$_POST["data"];		 
$sql= "select * from donors WHERE $search='$data'";  
$result = $conn->query($sql);

if($result->num_rows>0)

{    
	echo "<div class='tab'>"; 
    //echo "<font color=red>";
	//echo "<font size=6>";
	   
	    
	echo  "<table border=1>"."<tr>"."<th>"."Donor_ID"."</th>"."<th>"."Initials"."</th>"."<th>"."NIC_Number"."</th>"."<th>"."DOB"."</th>"."<th>"."Address"."</th>"."<th>"."Gender"."</th>"."<th>"."Email"."</th>"."<th>"."Contact number"."</th>"."<th>"."Action"."</th>"."</tr>";
	echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";

   while($row = $result->fetch_assoc())
   
   {     
     
	  echo  "<tr>"."<td>".$row["Donor_Id"]."</td>"."<td>".$row["Initials"]."</td>"."<td>".$row["NIC_Number"]."</td>"."<td>".$row["DOB"]."</td>"."<td>".$row["Address"]."</td>"."<td>".$row["Gender"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["mobile_number"]."<br/>".$row["land_number"]."</td>"."<td>".'<a href="View_Donors.php">'.'</a>'."&nbsp;".'<img src="edit.png" " width="20" height="20" />'."</td>"."</tr>";
	  echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
	   
	  
	}
	
	 echo "</font>";
	 echo  "</font>";
	echo "</table>";
    echo "</div>";

	
}	

else

{
///printf("Query failed: %s\n", $conn->error);
 echo "no results";

}

}

$conn->close();

?> 



<button type="submit" name="data" id="data" class="b1"><a href="View_Donors.php"><font color="white"><font size="3">Back</font></font></a></button>

<style>

table{
	
	
	//margin-left:440px;
	width:1150px;
	height:20px;
	border-collapse: collapse;	
	margin-top:50px;
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
}

h1{
	
		margin-top:60px;	
		margin-left:700px;
}

      
.b1{
		height:25px;
		width:100px;
		color:#FFF5F3;
		margin-left:1400px;
		border-radius:30px;
		margin-top:30px;
		background-color:#F35050;
		border: none;
		cursor:pointer;
				            
				  
	}
			   
			   
a{
				   
	text-decoration:none;
	}

.tab{
				   
		background-color:#F5F5F5;
		margin-top:0px;
		margin-left:280px;
		padding-top:10px;
		margin-right:265px;
		padding-left:37px;
		padding-right:60px;
		width:1100px;
						
					  
					  
	}
   
				  
				 
tr{
		   
	background-color:white;
 }
			   
			   
</style>

</body>
</html>
