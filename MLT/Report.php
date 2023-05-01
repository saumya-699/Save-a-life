<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>side-MLT</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
  <link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./stylek2.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="layout has-sidebar fixed-sidebar fixed-header">
    <aside id="sidebar" class="sidebar break-point-sm has-bg-image">
      <a id="btn-collapse" class="sidebar-collapser"><i class="ri-arrow-left-s-line"></i></a>

      <div class="sidebar-layout">
        <div class="sidebar-header">
          <div class="pro-sidebar-logo">
            <div><img src="logo.png" alt="logo"></div>
            <h5>Save A Life</h5>
          </div>
        </div>
        <div class="sidebar-content">
          <nav class="menu open-current-submenu">
            <ul>
              <li class="menu-header"><span> </span></li>
              <li class="menu-item">
                <a href="seeMLT.php">
                  <span class="menu-icon">
                    <i class="ri-home-fill"></i>
                  </span>
                  <span class="menu-title">Home</span>
                </a>
              </li>
              <li class="menu-item">
                <a href="view donated blood information.php">
                  <span class="menu-icon">
                    <i class="ri-folder-open-fill"></i>
                  </span>
                  <span class="menu-title">View donated blood</span>
                </a>
              </li>
              <li class="menu-item sub-menu">
                <a href="#">
                  <span class="menu-icon">
                    <i class="ri-file-edit-fill"></i>
                  </span>
                  <span class="menu-title">Enter test results</span>
                </a>
                <div class="sub-menu-list">
                  <ul>
                    <li class="menu-item">
                      <a href="Enter Blood testing result.php">
                        <span class="menu-title">Blood Testing</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="Cross matching test result.php">
                        <span class="menu-title">Cross Matching</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="menu-item">
                <a href="Send test results for approval.php">
                  <span class="menu-icon">
                    <i class="ri-file-transfer-line"></i>
                  </span>
                  <span class="menu-title">Send test results for<br> approval</span>
                </a>
              </li>
              <li class="menu-item">
                <a href="View approval of blood test results1.php">
                  <span class="menu-icon">
                    <i class="ri-folder-open-line"></i>
                  </span>
                  <span class="menu-title">View approval of blood <br> test results</span>
                </a>
              </li>

              <li class="menu-item">
                <a href="Add blood components.php">
                  <span class="menu-icon">
                    <i class="ri-file-add-line"></i>
                  </span>
                  <span class="menu-title">Add blood componets</span>
                </a>
              </li>

              <li class="menu-item sub-menu">
                <a href="#">
                  <span class="menu-icon">
                    <i class="ri-hospital-line"></i>
                  </span>
                  <span class="menu-title">Blood Stock</span>
                </a>
                <div class="sub-menu-list">
                  <ul>
                    <li class="menu-item">
                      <a href="Blood stock.php">
                        <span class="menu-title">Stock Info</span>
                      </a>
                    </li>

                    <li class="menu-item">
                      <a href="LessStockComponentsI.php">
                        <span class="menu-title">Low stock blood components</span>
                      </a>
                    </li>


                    <li class="menu-item">
                      <a href="ExpiredComponentsI.php">
                        <span class="menu-title">Blood expiry Information</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="menu-item">
                <a href="Report.php">
                  <span class="menu-icon">
                    <i class="ri-file-chart-line"></i>
                  </span>
                  <span class="menu-title">Reports</span>
                </a>
              </li>


              <li class="menu-header" style="padding-top: 40px"><span> </span></li>
              <li class="menu-item">
                <a href="Edit ProfileMlt.php">
                  <span class="menu-icon">
                    <i class="ri-user-line"></i>
                  </span>
                  <span class="menu-title">Profile</span>

                </a>
              </li>
              <li class="menu-item">
                <a href="#">
                  <span class="menu-icon">
                    <i class="ri-notification-line"></i>
                  </span>
                  <span class="menu-title">Notification</span>

                </a>
              </li>
              <li class="menu-item">
                <a href="logout.php">
                  <span class="menu-icon">
                    <i class="ri-logout-box-r-line"></i>
                  </span>
                  <span class="menu-title">Log out</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>

      </div>
    </aside>
    <div id="overlay" class="overlay"></div>
    <div class="layout">
      <main class="content">
        <!-- add your content from here -->
        <div>
          <a id="btn-toggle" href="#" class="sidebar-toggler break-point-sm"></a>
        </div>

        <div class="container-shadow">
          <div class="container">
            <div class="wrap">
              <div class="headings">
                <center>
                  <h1>Report Generation</h1>
                  <center>
              </div>
              <form action="create.php " method="POST">



                <label for="exampleFormControlInput1 " class="form-label lbl star ">Report name</label>
                <select name="blood_group" id=" " class="form-control txt-input " required="">
                  <option value=" " diabled> Select </option>
                  <option value="xxxx">Blood test report</option>
                  <option value="yyy">xxx</option>

                </select>

                <label for="exampleFormControlInput1 " class="form-label lbl star ">Hospital name</label>
                <select name="Cross_matching_test_result" id=" " class="form-control txt-input " required="">
                  <option value=" " diabled>Select </option>
                  <option value="xxx">xxx</option>
                  <option value="yyy">yyy</option>

                </select>

                <label for="exampleFormControlInput1 " class="form-label lbl star ">Export method</label>
                <select name="Cross_matching_test_result" id=" " class="form-control txt-input " required="">
                  <option value=" " diabled>Select </option>
                  <option value="PDF">PDF</option>
                  <option value="jpg">jpg</option>
                  <option value="jpg">jpg</option>
                  <option value="jpg">jpg</option>

                </select>

                <label for="exampleFormControlInput1 " class="form-label lbl star " name="time_period">Time period (MM/DD/YYYY)</label>
                <div class="input-group mb-4 ">
                  &nbsp; &nbsp;<font size="2px"> From </font> &nbsp; <input type="date" name="expected_date" placeholder="Expected_date" required="" min="<?= date('Y-m-d') ?>">
                  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; <font size="2px">To </font> &nbsp;<input type="date" name="expected_date" placeholder="Expected_date" required="" min="<?= date('Y-m-d') ?>">

                </div>
                <div class="buttons ">
                  <button class="b1" name="submit" value="submit">
                    <font size="2px">Generate</font>
                  </button> &nbsp; &nbsp; &nbsp; &nbsp;
                  &nbsp; &nbsp; &nbsp; &nbsp;<button class="b1" name="cancel" value="cancel"><a href="Report.php">
                      <font size="2px">Cancel</font>
                    </a></button>
                </div>
              </form>


            </div>
          </div>
        </div>
    </div>
  </div>
  <div class="col " width="10 "></div>
  </div>

  </main>
  </div>
  </div>
  <!-- partial -->
  <script src='https://unpkg.com/@popperjs/core@2'></script>
  <script src="./script.js"></script>
  <style>
    .container-shadow {
      position: absolute;
      width: 525px;
      height: 700px;
      left: 50%;
      margin-left: -262.5px;
      margin-top: 0px;
      box-shadow: 0px 80px 50px -20px #000;
    }

    .container {
      position: absolute;
      width: 640px;
      height: 700px;
      left: 50%;
      margin-left: -298.5px;
      margin-top: 60px;
      /*   background: url('https://bit.ly/2kBRtBE'); */
      /*   background: #673AB7; */
      background-color: #0c1e35;
      /*background-image: linear-gradient(315deg, #ffffff 0%, #85C1E9 50%);*/

      box-shadow: 0px 0px 50px -20px #000;
    }

    .buttons {
      margin-top: 20px;
    }
  </style>
</body>

</html>