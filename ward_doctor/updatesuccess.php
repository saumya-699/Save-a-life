<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="./css/stylek.css">
  <link rel="stylesheet" href="./css/nbtssl/nbtssl.min.css">
  <link rel="stylesheet" href="./css/fontawesome-free-5.15.4/css/all.css">
  <link rel="stylesheet" href="./css/mediaquery.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

  <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    .sidenav a.active {
      background-color: red;
      color: white;
    }


    .sidenav {
      height: 100%;
      width: 246px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #C14246;
      overflow-x: hidden;
      padding-top: 0px;
      margin-top: 55px;
      font-weight: 600;
    }


    .sidenav a,
    .dropdown-btn {
      padding: 26px 8px 6px 16px;
      text-decoration: none;
      font-size: 20px;
      color: #D9D9D9;
      display: block;
      border: none;
      background: none;
      width: 100%;
      text-align: left;
      cursor: pointer;
      outline: none;
      font-family: Open Sans, sans-serif;

    }



    /* On mouse-over */
    .sidenav a:hover,
    .dropdown-btn:hover {
      color: #574240;
    }


    .main {
      margin-left: 200px;
      /* Same as the width of the sidenav */
      font-size: 20px;
      /* Increased text to enable scrolling */
      padding: 0px 10px;
    }


    .active {
      background-color: #DB2A54;
      color: white;
    }




    @media screen and (max-height: 450px) {
      .sidenav {
        padding-top: 15px;
      }

      .sidenav a {
        font-size: 18px;
      }
    }

    .top {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #E56262;
      height: 55px;
    }



    .top li {
      float: left;
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      font-weight: 500;
      font-style: italic;
      font-family: Open Sans, sans-serif;
    }


    .logo-massaviu {
      position: fixed;
      padding-left: 0px;
      background: transparent;
      overflow: hidden;
      z-index: 1;
      width: 198px;
      padding-top: 9px;
      padding-left: 6px;
      margin-top: 10px;
    }

    .top-right {
      display: flex;
      margin-bottom: 1px;
      margin-left: 500.5px;

    }

    .name {
      display: flex;
      margin-bottom: -10px;
      cursor: pointer;

    }

    .person {
      cursor: pointer;
    }

    .notification {
      cursor: pointer;
    }


    .wel {
      margin-left: 300px;
      margin-top: 100px;

    }


    .b1 {
      background-color: red;
      color: white;
      border: 6px solid red;
      border-radius: 15px;
      width: 90px
    }

    a {
      text-decoration: none;
      color: white;
    }



    body {
      background-image: url("ki.png");
      background-repeat: no-repeat;
      background-position: top;


    }
  </style>
</head>

<body style="background-color:#FFC3BF;">

  <div id="image"></div>
  <div class="logo-massaviu">
    &nbsp; &nbsp; <img src="icon.png" width="15%">
  </div>
  <ul class="top">

    <li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <font size="5px"> National Blood Transfusion Service </font size>
    </li>

    <li>
      <div class="top-right">
        <div class="notification">
          <span class="material-icons licon">
            notifications
          </span>
        </div>
        &nbsp;
        <div class="person">
          <span class="material-icons licon">
            person
          </span>
        </div>
        &nbsp;
        <div class="name">
          <?php
          session_start();
          echo " " . $_SESSION['Name_With_Initials'];
          ?>
          <br>Ward doctor
        </div>


        <div class="dropdown">
          <span class="material-icons licon">
            arrow_drop_down
          </span>
          <div class="dropdown-content">
            <a href="Edit Profile.php"> <span class="material-icons licon">
                person
              </span> Profile</a>
            <a href="logout.php">
              <span class="material-icons licon">
                exit_to_app
              </span>
              Log out</a>
          </div>
        </div>
    </li>
    </div>
  </ul>



  <div class="sidenav">
    <button class="dropdown-btn"><a href="see.php">Home</a></button>

    <button class="dropdown-btn"><a href="Make blood request.php">Make Blood request</a> </button>

    <button class="dropdown-btn"><a href="Request History1.php">Request History </a> </button>

  </div>

  <br>
  <div class="wel">
    <p><b>
        <font size="2px">Successfully updated</font>
      </b></p>
    &nbsp; &nbsp; <button class="b1" name="view" value="view"><a href="Request History1.php">
        <font size="2px">go to view</font>
      </a></button>

  </div>

</body>

</html>