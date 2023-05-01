<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Side bar</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
<link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script><link rel="stylesheet" href="./add_medical.css">


</head>
<body>
<!-- partial:index.partial.html -->

           

            <div class="container-shadow">
            </div>
            <div class="container">
              <div class="wrap">
                <div class="headings">
                  <center><span><h1>Add Donation Details</h1></span><center>
                
                </div>
               
                    
               <form method="post" action="add_donation_backend.php">
                  
                    
					<label for="exampleFormControlInput1" class="form-label lbl star">Donation Date</label>
                   <input type="date" class="form-control txt-input" placeholder="Type Donation Date" name="Donation_Date"  required>

				   
				   <label for="exampleFormControlInput1" class="form-label lbl">Batch Number</label>
                    <input type="text" class="form-control txt-input" placeholder="Batch Number" name="batch_no" required >

					
					<label for="exampleFormControlInput1" class="form-label lbl star">Donor ID</label>
                    <input type="text" name="Donor_Id" class="form-control txt-input" placeholder="Type Donor ID" required>

                    <label for="exampleFormControlInput1" class="form-label lbl star">Blood Packet Number</label>
                    <input type="text"name="Packet_Id" class="form-control txt-input" placeholder="Blood Packet Number" required>
					
					<label for="exampleFormControlInput1" class="form-label lbl star">Number of Packets</label>
                    <input type="text" class="form-control txt-input" placeholder="Type Donation ID" name="packet_quantity" required>

                    <label for="exampleFormControlInput1" class="form-label lbl star">Nurse ID</label>
                    <input type="text" class="form-control txt-input" placeholder="Nurse ID" name="Nurse_ID" required>
                                        
                                      <br><br><br><br>
                         
                            <div class='row btn-buttons'>
                                  
                                   <input type='submit' name='BtnSubmit' value='Add' class='b1'>
                                   <input type='submit' name='btnCancel' value='Cancel' class='b2'>
                              </div>							  
          
               
                    </div>
              
          
             
            </div>
           
              </div>
                </form> 
          
        </main>
      </div>
    </div>
<!-- partial -->
<script src='https://unpkg.com/@popperjs/core@2'></script><script  src="./script.js"></script>

</body>
</html>
