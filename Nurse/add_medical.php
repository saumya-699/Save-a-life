
<?php

require 'see.php'


?>

<html>
    <head>
        
        <title>Add medical details</title>

        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>

<link rel="stylesheet" href="style_d.css">  
<link rel="stylesheet" href="css/nbtssl/nbtssl.min.css">
<link rel="stylesheet" href="css/fontawesome-free-5.15.4/css/all.css">
<link rel="stylesheet" href="css/mediaquery.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />


    
</head>
    <body>

    <div class="container frm-login">
        <div class="card frm-form">
            <div class="card-body frm-body">
                <h1 class="txt-l ">Medical Details</h1>
                <form method="post" action="add_medical_backend.php">
                    
                    
                    <label for="exampleFormControlInput1" class="form-label lbl star">Donor ID</label>
                    <input type="text" name="donorid" class="form-control txt-input" placeholder="Type Donor ID" required>

                    <label for="exampleFormControlInput1" class="form-label lbl star">Donor Name</label>
                    <input type="text" class="form-control txt-input" placeholder="Type Donor Name" name="dname" required>

                   <label for="exampleFormControlInput1" class="form-label lbl star">NIC Number</label>
                   <input type="text" class="form-control txt-input" placeholder="Type NIC Number" name="nic" pattern="[0-9]{9}[Vv0-9]{1,3}" required>

                   <label for="exampleFormControlInput1" class="form-label lbl star">Weight</label>
                    <div class="input-group mb-4">
                    <input type="text" name="weight" class="datepicker_input form-control txt-input" placeholder="Weight" required>
                    </div>

                   <label for="exampleFormControlInput1" class="form-label lbl">Height</label>
                    <input type="text" class="form-control txt-input" placeholder="Height" name="height" required >

                    <label for="exampleFormControlInput1" class="form-label lbl star">Blood Pressure</label>
                    <input type="text"name="bpressure" class="form-control txt-input" placeholder="Blood Pressure" required>

                    <label for="exampleFormControlInput1" class="form-label lbl star">Hemoglobine Level</label>
                    <input type="text" class="form-control txt-input" placeholder="Hemoglobine Level" name="hemoglobine" required>

                
                    

                    <div class="row btn-buttons">
                        <input type="hidden" name="registration" value="success"/>
                        <div class="col btn-but"> <input type="submit" value="Add" class="btn btn-danger btn-reg"  name="BtnSubmit"></div>
                        <div class="col btn-but"> <input type="submit" value="Cancel" class="btn btn-secondary btn-can"></div>
                    </div>

                </form>

            </div>
        </div>
    </div>


</body>
</html>