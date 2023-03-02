<?php 
session_start();

?>


 
<?php

include 'see.php';
?>
<html>

<head>
<script src="https://kit.fontawesome.com/87928bc990.js" crossorigin="anonymous"></script>


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
                             <option value="NIC_Number"><b>NIC</b></option>
                             <option value="Gender"><b>Gender</b></option>
                             <option value="province"><b>Provice</b></option>
                             </select>


<input type="text" placeholder="type here" name="data" id="data" class="box">

 <button type="submit"  name="BtnSubmit" id="search" class="b1" ><b>Search</b></button>
</div>
</div>
</div>

</form>
<?php


require 'conp.php';
    
$sql= "select * from donors" ;
$result = $conn->query($sql);

if($result->num_rows>0)

{     
   

          //echo "<font color=red>";
	      //echo "<font size=6>";
	   
	   echo  "<div class='tab'>";
	   echo  "<table border=1>"."<tr>"."<th style='text-align:center;width:120px;'>"."Donor_ID"."</th>"."
       <th style='text-align:center;width:200px;'>"."Donor Name"."
       <th style='text-align:center;width:120px;'>"."NIC Number"."</th>"."
       <th>"."Gender"."</th>"."
       <th>"."Cotact Number"."</th>"."
	   <th>"."province"."</th>"."
       <th>"."Action"."</th>"."
	   <th >"." "."</th>"."
       </tr>";
      echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
   while($row = $result->fetch_assoc())
   
   {     
     
	  echo  "<tr>"."<td>".$row["Donor_Id"]."</td>"."<td>".$row["Prefix"].".".$row["Full_Name"]."</td>"."<td>".$row["NIC_Number"]."</td>"."<td>".$row["Gender"]."</td>"."<td>".$row["mobile_number"]."</td>"."<td>".$row["province"]."</td>";
	   echo "<td><form method='POST' action ='ViewAll.php'>
                <input type=hidden name=Donor_Id value=".$row["Donor_Id"]." >
                <button type=submit value=view name=view id=btn style=display: inline-block><i class='fa-sharp fa-solid fa-eye'></i></button>
                </form>"."
				<form method='POST' action =''> 
                <input type=hidden name=Donor_Id value=".$row["Donor_Id"]." >
                <button type=submit value=update name=update id=btn ><i class='fa-regular fa-pen-to-square'></i></i></button>
                </form>"."
            </td>";
				 echo "</tr>";
	 
	   echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
	  
	}
	
	 echo "</font>";
	 echo  "</font>";   
	 echo "</table>";
	 echo "</div>";
	
	
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
	
	
	//margin-left:440px;
	width:1050px;
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
	
		margin-top:0px;	
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
					margin-top:-10px;
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
			   
			   
			   .tab{
				   
				   background-color:#F5F5F5;
				    margin-top:0px;
					margin-left:320px;
					padding-right:10px;
					margin-right:265px;
					padding-left:37px;
                   padding-right:60px;
				   width:1050px;
				   
					 
				   
				   
			   }
			  
	 
			   .ta{
				   
				   background-color:#F5F5F5;
				  
				   width:1100px;
				   margin-top:50px;
				   margin-bottom:0px;
				  margin-left:320px;
				  margin-right:265px;
				  padding-left:30px;
				  padding-right: 17px;
				   
				   
				   
			   }
			  
	tr{
		
		background-color:white;
		
		
	}

	#btn i {
  			display: inline-block;
			}


	#btn{
		border:none;
		background-color: transparent;
		cursor:pointer;
	}
		
		
			   
</style>

</body>
</html>
	