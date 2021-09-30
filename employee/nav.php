<?php
  include './../../connection.php'; 
  include './../admin_session.php';
  $residentid=$_GET['residentid'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>True hand</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content=""/>
    <meta name="author" content="Welink"/>

    <!-- fontawesome icon -->
    <link rel="stylesheet" href="../assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="../assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="index.php" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                    <span class="b-title">TRUE HAND </span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="../index.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>resident</label>
                    </li>        

                    <li class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">Add Resident</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="../addresident.php" class="">Resident</a></li>
                        </ul>
                    </li>   
                    <?php
                        if ($_GET['residentid']) {
                            ?>
                    <li class="nav-item pcoded-hasmenu active">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Add  file / Resident</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="verificationknowledgeskills.php?residentid=<?php echo $residentid; ?>" class="">Verification Knowledge Skills</a></li>
                            <li class=""><a href="confidentialitystatement.php?residentid=<?php echo $residentid; ?>" class="">Confidentiality Statement</a></li>
                            <li class=""><a href="personnelorientation.php?residentid=<?php echo $residentid; ?>" class="">Personnel Orientation</a></li>
                            <li class=""><a href="proceduresreview.php?residentid=<?php echo $residentid; ?>" class="">Procedures Review</a></li>
                            <li class=""><a href="reportingabuse.php?residentid=<?php echo $residentid; ?>" class="">Reporting of Abuse</a></li>
                            <li class=""><a href="quarterlyreview.php?residentid=<?php echo $residentid; ?>" class="">Quarterly Review</a></li>
                            <li class=""><a href="treatmentplan.php?residentid=<?php echo $residentid; ?>" class="">Treatment Plan</a></li>
                      </ul>
                    </li>
                    
                    <?php
                                }
                                ?>
                    
                    <li class="nav-item pcoded-menu-caption">
                        <label>Employee</label>
                    </li>  
                    <li class="nav-item pcoded-hasmenu active">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">Employee</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="./index.php" class="">employee</a></li>
                        </ul>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="verificationknowledgeskills.php?residentid=<?php echo $residentid; ?>" class="">Verification Knowledge Skills</a></li>
                            <li class=""><a href="confidentialitystatement.php?residentid=<?php echo $residentid; ?>" class="">Confidentiality Statement</a></li>
                            <li class=""><a href="personnelorientation.php?residentid=<?php echo $residentid; ?>" class="">Personnel Orientation</a></li>
                            <li class=""><a href="proceduresreview.php?residentid=<?php echo $residentid; ?>" class="">Procedures Review</a></li>
                            <li class=""><a href="reportingabuse.php?residentid=<?php echo $residentid; ?>" class="">Reporting of Abuse</a></li>
                            <li class=""><a href="quarterlyreview.php?residentid=<?php echo $residentid; ?>" class="">Quarterly Review</a></li>
                            <li class=""><a href="personnelorientation.php?residentid=<?php echo $residentid; ?>" class="">Personnel Orientation</a></li>
                            <li class=""><a href="proceduresreview.php?residentid=<?php echo $residentid; ?>" class="">Policy & Procedures Review</a></li>
                            <li class=""><a href="personnel_info.php?residentid=<?php echo $residentid; ?>" class="">Personnel Information</a></li>
                            <li class=""><a href="medication.php?residentid=<?php echo $residentid; ?>" class="">Medication Training Checklist</a></li>
                            <li class=""><a href="premployment.php?residentid=<?php echo $residentid; ?>" class="">Prior to Starting Employment</a></li>
                            <li class=""><a href="contactlog.php?residentid=<?php echo $residentid; ?>" class="">Family Contact Log</a></li>
                            <li class=""><a href="facesheet.php?residentid=<?php echo $residentid; ?>" class="">Facesheet</a></li>
                            <li class=""><a href="treatmentplan.php?residentid=<?php echo $residentid; ?>" class="">Treatment Plan</a></li>
                            <li class=""><a href="consenttreatment.php?residentid=<?php echo $residentid; ?>" class="">Consent for Treatment</a></li>
                            <li class=""><a href="grievanceprocedure.php?residentid=<?php echo $residentid; ?>" class="">Grievance Procedures</a></li>
                            <li class=""><a href="medicalrecordsaccess.php?residentid=<?php echo $residentid; ?>" class="">Medical Records Access</a></li>
                      </ul>
                    </li> 
                    <li class="nav-item pcoded-menu-caption">
                        <label>website</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Add  content</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="../home.php" class="">Home</a></li>
                            <li class=""><a href="../about.php" class="">About</a></li>
                            <li class=""><a href="../service.php" class="">services</a></li>
                            <li class=""><a href="../gallery.php" class="">Gallery</a></li>
                            <li class=""><a href="../career.php" class="">Career</a></li>
                            <li class=""><a href="../contact.php" class="">Contact</a></li>
                        </ul>
                    </li>
                    <li  class="nav-item">
                        <a href="../user.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Users</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="index.html" class="b-brand">
                   <div class="b-bg">
                       <i class="feather icon-trending-up"></i>
                   </div>
                   <span class="b-title">true hand</span>
               </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li><a href="javascript:" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>
                <li class="nav-item">
                    <div class="main-search">
                        <div class="input-group">
                            <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                            <a href="javascript:" class="input-group-append search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </a>
                            <span class="input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="../assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span><?php echo $user_username ?></span>
                                <a href="../signout.php" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
                                <li><a href="../signout.php" class="dropdown-item"><i class="feather icon-log-out"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->