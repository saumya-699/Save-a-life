
<?php 
session_start();

?>

<?php

include 'see.php';
?>
<html>

<head>
<title>View all</title>




</head>
<body>
<br><br>
 
 <form method="post" action="search_donor.php">
 
<div class="ta">
<div class="midiv">

  <div class="passwordDiv">
 

  <font size=3> Search by </font></b>  <br/> <br/><select name= "search" class="select">
                             <option value="Donor_Id" selected><b> Donor Id</b></option>
                             <option value="Donor_Name"><b> Donor Name</b></option>
                             <option value="NIC"><b>NIC</b></option>
                             <option value="Blood_Group"><b>Blood Group</b></option>
                             <option value="Gender"><b>Gender</b></option>
                             <option value="province"><b>Provicel</b></option>
            		            <option value="postal"><b> Postal Code</b></option>
                             </select>


<input type="text" placeholder="type here" name="data" id="data" class="box">

 <button type="submit"  name="BtnSubmit" id="search" class="b1" ><b>Search</b></button>
</div>
</div>
</div>

</form>
<?php

require 'conection.php';
if(isset($_POST['view']))  

{	
   $did=$_POST['Donor_Id'];
   $query="select * from donors where Donor_Id='$did'";
   $result= $conn->query($query);
   

  
   

          //echo "<font color=red>";
	      //echo "<font size=6>";
	   
	   echo  "<div style='overflow-x:auto;' class='tab'>";
	   echo  "<table border=1>"."<tr>"."<th style='text-align:center;width:120px;'>"."Donor_ID"."</th>"."<th style='text-align:center;width:100px;'>"."Full name"."</th>"."<th>"."Name with initials"."</th>"."<th>"."NIC"."</th>"."<th width:100px;>"."DOB"."<th style='text-align:center;width:90px;'>"."Address"."</th>"."<th>"."Province"."</th>"."<th>"."Postal Code"."</th>"."<th>"."Gender"."</th>"."<th>"."E-mail"."</th>"."<th style='text-align:left:width:50px;'>"."Contact Number"."</th>"."<th style='text-align:left:width:50px;'>"."Action"."</th>"."</tr>";
      echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=10'>"."</td>"."</tr>";
   while($row = $result->fetch_assoc())
   
   {     
     
	  echo  "<tr>"."<td>".$row["Donor_Id"]."</td>"."<td>".$row["Prefix"].".".$row["Full_Name"]."</td>"."<td>".$row["Initials"]."</td>"."<td>".$row["NIC_Number"]."</td>"."<td>".$row["DOB"]."</td>"."<td>".$row["Address"]."</td>"."<td>".$row["province"]."</td>"."<td>".$row["postal"]."</td>"."<td>".$row["Gender"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["mobile_number"]."<br/>".$row["land_number"]."</td>";
	   echo "<td>
				<form method='POST' action ='#'>
                <input type=hidden name=Donor_Id value=".$row["Donor_Id"]." >
                <button type=submit value=update name=update  class='f1'><img src=edit.png width=26 height=26></button>
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


<button type="submit" name="data" id="data" class="bx"><a href="View_Donors.php"><font color="white"><font size="3">Back</font></font></a></button>


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
                    
                   // margin-left:396px;
                    //margin-right:325px;
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
					margin-right:90px;
					padding-left:1px;
                  // padding-right:1000px;
					 
				   
				   
			   }
			  
	 
			   .ta{
				   
				   background-color:#F5F5F5;
				  
				   
				   margin-top:90px;
				   margin-bottom:0px;
				  margin-left:285px;
				  margin-right:90px;
				  padding-left:30px;
				   
				   
				   
			   }
			  
	tr{
		
		background-color:white;
		
		
	}
		
		
		
                  .bx{
					      height:25px;
				          width:100px;
										   
						    color:#FFF5F3;
							margin-left:1426px;
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
