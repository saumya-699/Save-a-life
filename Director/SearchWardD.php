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


 
 
<?php

require 'conp.php';
if(isset($_POST['BtnSubmit']))
    
{		
 
  
$search =$_POST["search"];
$data =$_POST["data"];		 
$sql= "select * from warddoctor WHERE $search='$data'";  
$result = $conn->query($sql);


if($result->num_rows>0)

{     
   

          //echo "<font color=red>";
	      //echo "<font size=6>";
	   
	   echo  "<div class='tab'>";
	   echo  "<table border=1>"."<tr>"."<th style='text-align:center;width:120px;'>"."Doctor_ID"."</th>"."<th style='text-align:center;width:120px;'>"."Name_With_Initials"."</th>"."<th>"."Hospital name"."</th>"."<th>"."Specialization"."</th>"."<th>"."SLMC number"."</th>"."<th style='width:120px;'>"."Action"."</th>"."</tr>";
      echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
   while($row = $result->fetch_assoc())
   
   {     
     
	  echo  "<tr>"."<td>".$row["WardDoctor_ID"]."</td>"."<td>".$row["Name_With_Initials"]."</td>"."<td>".$row["HospitalName"]."</td>"."<td>".$row["Specialization"]."</td>"."<td>".$row["SLMC_Number"]."</td>";
	   echo "<td><form method='POST' action ='showAllWardDoctor.php'>
                <input type=hidden name=WardDoctor_ID value=".$row["WardDoctor_ID"]." >
                <button type=submit value=view name=view  class='fp'><img src=eye.png width=43 height=37></button>
                </form>
				<form method='POST' action ='Fill_WardDoctoUpdateForm.php'>
                <input type=hidden name=WardDoctor_ID value=".$row["WardDoctor_ID"]." >
                <button type=submit value=update name=update  class='f1'><img src=edit.png width=26 height=26></button>
                </form>
                <form method='POST' action ='DeleteWardDoctor.php'>
                <input type=hidden  name=WardDoctor_ID value=".$row["WardDoctor_ID"]." >
                <button type=submit value=Delete name=delete class='f2' ><img src=dx.png width=30 height=33></button>
                </form>
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

}

$conn->close();
?>



<button type="submit" name="data" id="data" class="b1"><a href="RemoveORUpdateNurse.php"><font color="white"><font size="3">Back</font></font></a></button>


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
						  margin-left:1120px;
						  margin-top:20px;
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
					  
					  
					 
					  //background-color:green;
					  margin-right:100px;
					  margin-top:16px;
					 
					  margin-bottom:-53px;
					  background-color:transparent;
					   border: none;
					   cursor:pointer;
					  
					  
					  
				  }
			   
			   
			   .tab{
				   
				   background-color:#F5F5F5;
				    margin-top:10px;
					margin-left:370px;
					//padding:10px;
					margin-right:265px;
					padding-left:37px;
                   padding-right:60px;
					 
				   
				   
			   }
			  
	 
			   .ta{
				   
				   background-color:#F5F5F5;
				  
				   
				   margin-top:100px;
				   margin-bottom:0px;
				  margin-left:370px;
				  margin-right:206px;
				  padding-left:30px;
				   
				   
				   
			   }
			  
	tr{
		
		background-color:white;
		
		
	}
		
		
			    
               a{
				   
				   text-decoration:none;
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