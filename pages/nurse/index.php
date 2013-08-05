<?php
     session_start();
     include('../../db.php');

     if($_SESSION['authority'] != 'nurse'){
        header("location: ../../index.php");
	exit();
     }

    include('include/header.php');
    include('include/footer.php'); 
     
?>

    
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Navigation</li>
              <li class="active"><a href="#"><i class="icon-home icon-black"></i> Home</a></li>
              <li><a href="manage-inpatients.php"><i class="icon-pencil icon-black"></i> Manage Inpatients</a></li>
              <li><a href="manage-outpatients.php"><i class="icon-pencil icon-black"></i> Manage Outpatients</a></li>
              <li><a href="list-of-patients.php"><i class="icon-list-alt icon-black"></i> List of Patients</a></li>
              <li class="nav-header">User Account Panel</li>
              <li><a href="account-management/"><i class="icon-pencil icon-black"></i> Manage Account</a></li>
              <li><a href="account-management/change-password.php"><i class="icon-lock icon-black"></i> Change Password</a></li>
              <li><a href="../../logout.php"><i class="icon-off icon-black"></i> Logout</a></li>
              <li class="nav-header">About the Software</li>
              <li><a href="../../about.php"><i class="icon-info-sign icon-black"></i> HMS &copy; 2013</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
            <h1><img src="../../images/home.png" />Hospital Management System</h1>
            <embed src="http://www.clocklink.com/clocks/5005-pink.swf?TimeZone=Philippines_Manila&"
                   width="120" height="40"
                   wmode="transparent" type="application/x-shockwave-flash">
          </div>

        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; All Rights Reserved 2013</p>
      </footer>

    </div><!--/.fluid-container-->
    

    
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap-transition.js"></script>
    <script src="../../js/bootstrap-alert.js"></script>
    <script src="../../js/bootstrap-modal.js"></script>
    <script src="../../js/bootstrap-dropdown.js"></script>
    <script src="../../js/bootstrap-scrollspy.js"></script>
    <script src="../../js/bootstrap-tab.js"></script>
    <script src="../../js/bootstrap-tooltip.js"></script>
    <script src="../../js/bootstrap-popover.js"></script>
    <script src="../../js/bootstrap-button.js"></script>
    <script src="../../js/bootstrap-collapse.js"></script>
    <script src="../../js/bootstrap-carousel.js"></script>
    <script src="../../js/bootstrap-typeahead.js"></script>