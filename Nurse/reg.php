<?php

require 'see.php'


?>

<html>
    <head>
        
        <title>Regitration form </title>

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
                <h1 class="txt-l ">Registration Form</h1>
                <form method="post" action="reg_backend.php">
                    
                    <label for="exampleFormControlInput1" class="form-label lbl star">Prefix</label>
                    <select name="prefix" id="" class="form-control txt-input" required>Prefix
                    <option selected disabled value="">Prefix</option>
                    <option value="Mr">Mr</option>
                            <option value="Ms">Ms</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Other">Other</option>
                        </select>

                    

                    <label for="exampleFormControlInput1" class="form-label lbl star">Full Name</label>
                    <input type="text" name="fullname" class="form-control txt-input" placeholder="Type your Full Name" required>

                    <label for="exampleFormControlInput1" class="form-label lbl star">Name with Initials</label>
                    <input type="text" class="form-control txt-input" placeholder="Type your Name with Initials" name="Initials" required>

                   <label for="exampleFormControlInput1" class="form-label lbl star">NIC No</label>
                   <input type="text" class="form-control txt-input" placeholder="Type NIC Number" name="NIC" pattern="[0-9]{9}[Vv0-9]{1,3}" required>

                   <label for="exampleFormControlInput1" class="form-label lbl star">Date Of Birth Day</label>
                    <div class="input-group mb-4">
                    <input type="date" name="DOB" class="datepicker_input form-control txt-input" placeholder="" required>
                    </div>

                   <label for="exampleFormControlInput1" class="form-label lbl">Email Address (If having)</label>
                    <input type="email" class="form-control txt-input" placeholder="Type your Email Address" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >

                    <label for="exampleFormControlInput1" class="form-label lbl star">Gender</label>
                    <select name="gender" id="" class="form-control txt-input" required>Gender
                    <option selected disabled value="">Gender</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>

                    <label for="exampleFormControlInput1" class="form-label lbl star">Address</label>
                    <textarea name="address" id="" cols="20" rows="10" class="form-control txt-input" placeholder="Type your Address" required></textarea>

                    <label for="exampleFormControlInput1" class="form-label lbl star">Province</label>
                    <select name="province" id="" class="form-control txt-input" required>Province
                        <option value="Not Provided"> None</option>
                        <option value="Northern"> Northern</option>
                        <option value="North Western"> North Western</option>
                        <option value="North Central"> North Central</option>
                        <option value="Western"> Western </option>
                        <option value="Central"> Central</option>
                        <option value="Sabaragamuwa"> Sabaragamuwa </option>
                        <option value="Eastern"> Eastern</option>
                        <option value="Uva"> Uva </option>
                        <option value="Southern"> Southern </option>
                    </select>

                    <label for="exampleFormControlInput1" class="form-label lbl star">Postal Code</label>
                    <input type="number" class="form-control txt-input" placeholder="Type the Postal Code of your Area" name="postal" required>

                    <label for="exampleFormControlInput1" class="form-label lbl star">Telephone Number (Mobile)</label>
                    <input type="number" class="form-control txt-input" placeholder="eg:0777123456" name="mobile" pattern="[0-9]{10}" required>

                    <label for="exampleFormControlInput1" class="form-label lbl">Telephone Number (Land) (If having)</label>
                    <input type="number" class="form-control txt-input" placeholder="eg:0112345678 " name="land" pattern="[0-9]{10}">


                    <label for="exampleFormControlInput1" class="form-label lbl star">User Name</label>
                    <input type="text" class="form-control txt-input" placeholder="Type a User Name" name="username" required>


                    <label for="exampleFormControlInput1" class="form-label lbl star"> Password</label>
                    <input type="password" class="form-control txt-input" placeholder="Enter a password" name="password" required>
                

                    <label for="exampleFormControlInput1" class="form-label lbl star">Re-enter the Password</label>
                    <input type="password" class="form-control txt-input" placeholder="Re-enter the password" name="confirm_password" required>
                    

                    <div class="row btn-buttons">
                        <input type="hidden" name="registration" value="success"/>
                        <div class="col btn-but"> <input type="submit" value="Register" class="btn btn-danger btn-reg"  name="BtnSubmit"></div>
                        <div class="col btn-but"> <input type="submit" value="Cancel" class="btn btn-secondary btn-can"></div>
                    </div>

                </form>

            </div>
        </div>
    </div>


</body>
</html>