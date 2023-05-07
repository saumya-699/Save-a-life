<html>

<head>



</head>

<?php

include 'see.php';


?>


<body>

<h1>Donation Records</h1>


<?php


require 'conection.php';
if(isset($_POST['BtnSubmit']))
    
{		
 
  
$search =$_POST["search"];
$data =$_POST["data"];		 
$sql= "select * from donation_records WHERE $search='$data'";  
$result = $conn->query($sql);

if($result->num_rows>0)

{ 
    echo  "<div class='tab'>";    
    //echo "<font color=red>";
	//echo "<font size=6>";
	   
	    
	echo  "<table border=1>"."<tr>"."<th>"."Donor_ID"."</th>"."<th>"."Donation Date"."</th>"."<th>"."Donor Name"."</th>"."<th>"."Quantity"."</th>"."<th>"."Nurse ID"."</th>"."</tr>";
    echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";

   while($row = $result->fetch_assoc())
   
   {     
     
	  echo  "<tr>"."<td>".$row["Donor_ID"]."</td>"."<td>".$row["Donation_Date"]."</td>"."<td>".$row["Donor_Name"]."</td>"."<td>".$row["Quantity"]."</td>"."<td>".$row["Nurse_ID"]."</td>".'<a href="Donor_records.php">'.'</a>'."&nbsp;"."</td>"."</tr>";
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
	width:800px;
	height:20px;
	border-collapse: collapse;	
	margin-top:40px;
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
    padding:1px;
}

h1{
	
	
	margin-top:60px;	
	margin-left:700px;
}



 .b1{
		height:25px;
		width:100px;
		color:#FFF5F3;
		margin-left:1200px;
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
	margin-left:370px;
	//padding:10px;
	margin-right:265px;
	padding-left:37px;
    padding-right:60px;
					 
				   
				   
	 }

               
			  
	tr{
		
		background-color:white;
		
		
	}
			   
			   
			   
</style>

</body>
</html>
