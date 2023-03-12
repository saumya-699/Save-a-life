<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Log In Form</title>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<body>
  <div class="container-shadow">
  </div>
  <div class="container">
    <div class="wrap">
      <div class="headings">
         <center><span><h1>LOGIN</h1></span><center>
      </div>
      <div id="sign-in-form">
        <form method="post" action="loginBackEnd.php" >
          <label for="username">Username</label>
            <input type="text" placeholder="user name" name="UserName" class="validation" id="User name" required><br>
							       

          <label for="password">Password</label>
            <input type="password" placeholder="Password" name="Password"  class="validation"  id="password"  required>
          <input type="submit"  name="BtnSubmit" value="Sign in">
        </form>

        <footer>
          <div class="hr"></div>
          <div class="fp"><a href="home.php">Cancel</a></div>
          <br>
          <div class="fp"><a href="">Don't have an account?<br> <b>Sign Up Now</b></a></div>
        </footer>
      </div>
    </div>
  </div>

</body>
</html>
