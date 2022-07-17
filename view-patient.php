<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
if(isset($_POST['submit']))
  {
    
    $vid=$_GET['viewid'];
    $bp=$_POST['bp'];
    $bs=$_POST['bs'];
    $weight=$_POST['weight'];
    $temp=$_POST['temp'];
   $pres=$_POST['pres'];
   
 
      $query.=mysqli_query($con, "insert   tblmedicalhistory(PatientID,BloodPressure,BloodSugar,Weight,Temperature,MedicalPres)value('$vid','$bp','$bs','$weight','$temp','$pres')");
    if ($query) {
    echo '<script>alert("Medicle history has been added.")</script>';
    echo "<script>window.location.href ='manage-patient.php'</script>";
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Hospital managment system">

    <!-- Title Page-->
    <title>View Patient | Hospital Management System</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/icon/logo.png" alt="jcare" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user-md"></i>Doctors</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="doctor-specialization.php">Doctor Specialization</a>
                                </li>
                                <li>
                                    <a href="add-doctor.php">Add Doctor</a>
                                </li>
                                <li>
                                    <a href="manage-doctors.php">Manage Doctors</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-users"></i>Users</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="manage-users.php">Manage Users</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-wheelchair"></i>Patients</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="manage-patients.php">Manage Patients</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="appointment-history.php">
                                <i class="fas fa-list-alt"></i>Appointment History</a>
                        </li>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="jcare" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user-md"></i>Doctors</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="doctor-specialization.php">Doctor Specialization</a>
                                </li>
                                <li>
                                    <a href="add-doctor.php">Add Doctor</a>
                                </li>
                                <li>
                                    <a href="manage-doctors.php">Manage Doctors</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-users"></i>Users</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="manage-users.php">Manage Users</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-wheelchair"></i>Patients</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="manage-patients.php">Manage Patients</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="appointment-history.php">
                                <i class="fas fa-list-alt"></i>Appointment History</a>
                        </li>
                        </li>
                        
                        
                       
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/user.png" alt="admin" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/user.png" alt="admin" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Admin</a>
                                                    </h5>
                                                    <span class="email">Admin@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="change-password.php">
                                                        <i class="zmdi zmdi-settings"></i>Change Password</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Patient Profile</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" src="images/icon/pat.png" alt="doctor">
                                    <?php
                               $vid=$_GET['viewid'];
                               $ret=mysqli_query($con,"select * from tblpatient where ID='$vid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
                               ?>
                                    <h5 class="text-sm-center mt-2 mb-1"><?php  echo $row['PatientName'];?></h5>
                                    <?php }?>
                                    <div class="location text-sm-center">
                                        <i class="fa fa-wheelchair"></i> Patient</div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <strong>View</strong>
                                <small>Patient Information</small>
                            </div>
                            <?php
                               $vid=$_GET['viewid'];
                               $ret=mysqli_query($con,"select * from tblpatient where ID='$vid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
                               ?>
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <div class="col col-md-11">
                                        <label for="company" class=" form-control-label">Patient Name</label>
                                        <input type="text" value="<?php  echo $row['PatientName'];?>" class="form-control" readonly>
                                    </div>
                                    <div class="col col-md-11">
                                        <label for="company" class=" form-control-label">Patient Contact Number</label>
                                        <input type="text" value="<?php  echo $row['PatientContno'];?>" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col col-md-11">
                                        <label for="company" class=" form-control-label">Patient Gender</label>
                                        <input type="text" value="<?php  echo $row['PatientGender'];?>" class="form-control" readonly>
                                    </div>
                                    <div class="col col-md-11">
                                        <label for="company" class=" form-control-label">Patient Email</label>
                                        <input type="text" value="<?php  echo $row['PatientEmail'];?>" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col col-md-11">
                                        <label for="company" class=" form-control-label">Patient Address</label>
                                        <input type="text" value="<?php  echo $row['PatientAdd'];?>" class="form-control" readonly>
                                    </div>
                                    <div class="col col-md-11">
                                        <label for="company" class=" form-control-label">Patient Age</label>
                                        <input type="text" value="<?php  echo $row['PatientAge'];?>" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col col-md-11">
                                        <label for="company" class=" form-control-label">Patient Medical History(if any)</label>
                                        <input type="text" value="<?php  echo $row['PatientMedhis'];?>" class="form-control" readonly>
                                    </div>
                                    <div class="col col-md-11">
                                        <label for="company" class=" form-control-label">Patient Reg Date</label>
                                        <input type="text" value="<?php  echo $row['CreationDate'];?>" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            </form>
                            <?php }?>
                        </div>
                        
<!-- DATA TABLE -->
<h3 class="title-5 m-b-35">Medical History</h3>
<div class="table-responsive table-responsive-data2">
<?php  

$ret=mysqli_query($con,"select * from tblmedicalhistory  where PatientID='$vid'");



 ?>
    <table class="table table-data2">
        <thead>
        <?php  
while ($row=mysqli_fetch_array($ret)) { 
  ?>
            <tr>
                <th>#</th>
                <th>Blood Pressure</th>
                <th>Weight</th>
                <th>Blood Sugar</th>
                <th>Body Temprature</th>
                <th>Medical Prescription</th>
                <th>Viste Date</th>
            </tr>
        </thead>
        <tbody>
            <tr class="tr-shadow">
                <td><?php echo $cnt;?></td>
                <td><?php  echo $row['BloodPressure'];?></td>
                <td><?php  echo $row['Weight'];?></td>
                <td><?php  echo $row['BloodSugar'];?></td>
                <td><?php  echo $row['Temperature'];?></td>
                <td><?php  echo $row['MedicalPres'];?></td>
                <td><?php  echo $row['CreationDate'];?></td>
            </tr>
            <tr class="spacer"></tr>
            <?php $cnt=$cnt+1;} ?>
        </tbody>
    </table>
</div>
<!-- END DATA TABLE -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2022 Hospial Managment System. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
