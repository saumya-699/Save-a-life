
<?php 
session_start();

?>

<?php

include 'mj.php';
?>
<html>

<head>



</head>
<body>
<br><br>
 
 <form method="post" action="SearchBB.php">
 
<div class="ta">
<div class="midiv">

  <div class="passwordDiv">
 

 <font size=3> Search by </font></b>  <br/> <br/><select name= "search" class="select">
                           <option value="BloodBank_doctor_ID"><b> BloodBank_doctor_ID</b></option>
							   <option value="Name_With_Initials"><b>Name_With_Initials</b></option>
						        <option value="HospitalName"><b> Hospital Name</b></option>
							   <option value="SLMC_number"><b> SLMC_number</b></option>
                             <option value="Email" selected><b>Email</b></option>
		                    <option value="ContactNumber" selected><b> Contact number</b></option>
						    <option value="Remark" selected><b>Remark</b></option>
						  	  <option value="Director_ID" selected><b>Director_ID</b></option>
							
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
   $did=$_POST['BloodBank_doctor_ID'];
   $query="select * from BloodBank_doctor where BloodBank_doctor_ID='$did'";
   $result= $conn->query($query);
   

  
   

          //echo "<font color=red>";
	      //echo "<font size=6>";
	   
	   echo  "<div class='tab'>";
	   echo  "<table border=1>"."<tr>"."<th style='text-align:center;width:120px;'>"."Doctor_ID"."</th>"."<th style='text-align:center;width:70px;'>"."Name_With_Initials"."</th>"."<th>"."Hospital name"."</th>"."<th>"."SLMC number"."</th>"."<th>"."Email"."</th>"."<th style='text-align:center;width90px;'>"."Contact number"."</th>"."<th>"."Remark"."</th>"."<th>"."Director_ID"."</th>"."<th style='text-align:left:width:20px;'>"."Action"."</th>"."</tr>";
      echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=10'>"."</td>"."</tr>";
   while($row = $result->fetch_assoc())
   
   {     
     
	  echo  "<tr>"."<td>".$row["BloodBank_doctor_ID"]."</td>"."<td>".$row["Name_With_Initials"]."</td>"."<td>".$row["HospitalName"]."</td>"."<td>".$row["SLMC_Number"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["ContactNumber"]."</td>"."<td>".$row["Remark"]."</td>"."<td>".$row["Director_ID"]."</td>";
	   echo "<td>
				<form method='POST' action ='Fill_BBUpdateFormBackEnd.php'>
                <input type=hidden name=BloodBank_doctor_ID value=".$row["BloodBank_doctor_ID"]." >
                <button type=submit value=update name=update  class='f1'><img src=edit.png width=26 height=26></button>
                </form>
                <form method='POST' action ='DeleteBB.php'>
                <input type=hidden  name=BloodBank_doctor_ID value=".$row["BloodBank_doctor_ID"]." >
                <button type=submit value=Delete name=delete class='f2' ><img src=dx.png width=30 height=33></button>
                </form>
                </td>";
				 echo "</tr>";
	 
	   echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=10'>"."</td>"."</tr>";
	  
	}
	
	 echo "</font>";
	 echo  "</font>";   
	 echo "</table>";
	 echo "</div>";
	
	
	


}

$conn->close();
?>


<button type="submit" name="data" id="data" class="bx"><a href="RemoveOrUpdateBB.php"><font color="white"><font size="3">Back</font></font></a></button>


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
							margin-top:-54px;
							background-color:transparent;
							 border: none;
							  cursor:pointer;
						  
						   
				            
				  
				  }
				  
				  
				  .f1{
					     // background-color:yellow;
						      background-color:transparent;
						  margin-left:55px;
						    margin-right:60px;
							margin-bottom:5px;
							margin-top:20px;
						   border: none;
						   cursor:pointer;
						  
				  }
				  
				  
			   
			   
			   .tab{
				   
				   background-color:#F5F5F5;
				    margin-top:0px;
					margin-left:285px;
					//padding:10px;
					margin-right:60px;
					padding-left:8px;
                  // padding-right:1000px;
					 
				   
				   
			   }
			  
	 
			   .ta{
				   
				   background-color:#F5F5F5;
				  
				   
				   margin-top:90px;
				   margin-bottom:0px;
				  margin-left:285px;
				  margin-right:60px;
				  padding-left:30px;
				   
				   
				   
			   }
			  
	tr{
		
		background-color:white;
		
		
	}
		
		
		
                  .bx{
					      height:25px;
				          width:100px;
										   
						    color:#FFF5F3;
							margin-left:1384px;
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
