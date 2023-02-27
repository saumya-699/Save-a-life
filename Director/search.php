
<?php


require 'conp.php';
if(isset($_POST['BtnSubmit']))
    
{		
  echo "<h1>"."Nurse"."</h1>";
  
$search =$_POST["search"];
$data =$_POST["data"];		 
$sql= "select * from nurse where $search='$data'";  
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

 echo "no results";

}

}

$conn->close();

?> 

