
<?php

include 'mj.php';
?>
<html>

<head>



</head>
<body>



 <form method="post" action="searchHospital.php">
<div class="midiv">

  <div class="passwordDiv">
  <h1> Nurse </h1>

 <font size=3> Search by </font></b>  <br/> <br/><select name= "search" class="select">
                             <option value="Hospital Name"><b> Hospital Name</b></option>
                             <option value="Type"><b> Type</b></option>
                             <option value="District" selected><b>District</b></option>
		                    <option value="Head_Of_Hospital" selected><b>Head_Of_Hospital</b></option>
                             </select>


<input type="text" placeholder="type here" name="data" id="data" class="box">

 <button type="submit"  name="BtnSubmit" id="search" class="b1" ><b>Search</b></button>

</div>
</div>

</form>
<?php


require 'conp.php';
    
$sql= "select * from nurse" ;
$result = $conn->query($sql);

if($result->num_rows>0)

{     
   

          echo "<font color=red>";
	      echo "<font size=6>";
	   
	    
	   echo  "<table border=1>"."<tr>"."<th>"."HospitalName"."</th>"."<th>"."Type"."</th>"."<th>"."District"."</th>"."<th>"."Head_Of_Hospital"."</th>"."<th>"."Address"."</th>"."<th>"."Landline_Number"."</th>"."<th>"."ContactNumber of Hospital Head"."</th>"."<th>"."Remark"."</th>"."<th>"."Director_ID"."</th>"."</tr>";

   while($row = $result->fetch_assoc())
   
   {     
     
	  echo  "<tr>"."<td>".$row["HospitalName"]."</td>"."<td>".$row["Type"]."</td>"."<td>".$row["District"]."</td>"."<td>".$row["Head_Of_Hospital"]."</td>"."<td>".$row["Address"]."</td>"."<td>".$row["Landline_Number"]."</td>"."<td>".$row["ContactNum_Hospital_Head"]."</td>."<td>".$row["Remark"]."</td>."<td>".$row["Director_ID"]."</td>";
	   echo "<td class='cv'><form method='POST' action ='Fill_UpdateHospitalFormBackEnd.php'>
                <input type=hidden name=HospitalName value=".$row["HospitalName"]." >
                <button type=submit value=update name=update  class='f1'><img src=edit.png width=20 height=30></button>
                </form>
                <form method='POST' action ='DeactivateHospitalackEnd.php'>
                <input type=hidden name=HospitalName value=".$row["HospitalName"]." >
                <button type=submit value=Delete name=delete class='f2' ><img src=del.png width=20 height=30></button>
                </form>
                </td>";
				 echo "</tr>";
	 
	   
	  
	}
	
	 echo "</font>";
	 echo  "</font>";   
	 echo "</table>";
	
	
}	

else

{
  echo "Error in ".$sql."<br>".$conn->error;

 echo "no results";

}

$conn->close();
?>





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


.cv{
	
width:00px;	
	
} 
h1{
	
		margin-top:70px;	
		margin-left:200px;
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
