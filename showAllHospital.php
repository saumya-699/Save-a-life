

<?php 
session_start();

?>

 <?php
   if(isset($_SESSION["ID"]))   {
	
	
?>
<?php

include 'mj.php';
?>
<html>

<head>



</head>
<body>



 <form method="post" action="searchHospital.php">
 <div class="ta">
<div class="midiv">

  <div class="passwordDiv">
 

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
</div>
</form>
<?php


require 'conp.php';
    


if(isset($_POST['view']))  

{	
   $did=$_POST['Hospital_ID'];
   $query="select * from hospital where Hospital_ID='$did'";
   $result= $conn->query($query);
   
  
   

          
	   echo  "<div class='tab'>";
	    
	   echo  "<table border=1>"."<tr>"."<th>"."Hospital_ID"."</th>"."<th style='width:165px;'>"."HospitalName"."</th>"."<th style='width:115px;'>"."Type"."</th>"."<th style='width:105px;'>"."District"."</th>"."<th>"."Head_Of_Hospital"."</th>"."<th>"."Address"."</th>"."<th>"."Landline number"."</th>"."<th>"."Contact number of hospital head"."</th>"."<th>"."Director ID"."</th>"."<th>"."Remark"."</th>"."<th>"."Action"."</th>"."</tr>";
       echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=5'>"."</td>"."</tr>";
   while($row = $result->fetch_assoc())
   
   {     
     
	  echo  "<tr>"."<td>".$row["Hospital_ID"]."</td>"."<td>".$row["HospitalName"]."</td>"."<td>".$row["Type"]."</td>"."<td>".$row["District"]."</td>"."<td>".$row["Head_Of_Hospital"]."</td>"."<td>".$row["Address"]."</td>"."<td>".$row["Landline_Number"]."</td>"."<td>".$row["ContactNum_Hospital_Head"]."</td>"."<td>".$row["Director_ID"]."</td>"."<td>".$row["Remark"]."</td>";
	   echo "<td class='cv'>
                
				<form method='POST' action ='Fill_HospitalUpdateForm.php'>
                <input type=hidden name=Hospital_ID value=".$row["Hospital_ID"]." >
                <button type=submit value=update name=update  class='f1'><img src=edit.png width=26 height=26></button>
                </form>
                <form method='POST' action ='DeactivateHospitalackEnd.php'>
                <input type=hidden name=Hospital_ID value=".$row["Hospital_ID"]." >
                <button type=submit value=Delete name=delete class='f2' ><img src=dx.png width=30 height=33></button>
                </form>
                </td>";
				 echo "</tr>";
				 
				   echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=5'>"."</td>"."</tr>";
	 
	   
	  
	}
	
	 echo "</font>";
	 echo  "</font>";   
	 echo "</table>";
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
  padding:1px;


}



h1{
	
		margin-top:70px;	
		margin-left:200px;
		margin-bottom:100px;
}

.select{
	
	 
 height:35px;
 width:158px;
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
							margin-top:2px;
						   border: none;
						   cursor:pointer;
						  
						  
				  }
				  
				  .fp{
					  
					  
					 
					 // background-color:green;
					  margin-right:100px;
					  margin-top:16px;
					
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
					 
				   
				   
			   }
			  
	 
			   .ta{
				   
				   background-color:#F5F5F5;
				  
				   
				   margin-top:90px;
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

<?php
	
}
 else 
	 
	 {echo '<script type="text/javascript">';
		 echo 'alert("Please log in first");';
         
		echo 'window.location.href="userloginFront.php";';
  echo '</script>';
	 }
 
?>