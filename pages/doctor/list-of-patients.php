<?php
     session_start();
     include('../../db.php');

     if($_SESSION['authority'] != 'doctor'){
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
              <li><a href="index.php"><i class="icon-home icon-black"></i> Home</a></li>
              <li class="active"><a href="#"><i class="icon-list-alt icon-black"></i> List of Patients</a></li>
              <li class="nav-header">User Account Panel</li>
              <li><a href="account-management.php"><i class="icon-pencil icon-black"></i> Manage Account</a></li>
              <li><a href="change-password.php"><i class="icon-lock icon-black"></i> Change Password</a></li>
              <li><a href="../../logout.php"><i class="icon-off icon-black"></i> Logout</a></li>
              <li class="nav-header">About the Software</li>
              <li><a href="../../about.php"><i class="icon-info-sign icon-black"></i> HMS &copy; 2013</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span3-->
	
        <div class="span9">
          <div class="hero-unit">
            <h1><img src="../../images/patient-registration.png" />Patients' List</h1>
          </div>
	  
	  <div class="row-fluid">
	       <table class="table table-striped">
			 <tr class="info">
			      <td>Firstname</td>
			      <td>Lastname</td>
			      <td>Middlename</td>
			      <td>Bday</td>
			      <td>Status</td>
			      <td>Religion</td>
			      <td>Occupation</td>
			      <td>Gender</td>
			      <td>Phone No.</td>
			      <td>Address</td>
			      <td>Type</td>
			      <td>Remark/s</td>
			 </tr>
			 
	  <?php	 
	  $query = $conn->prepare("SELECT * FROM patients");
	  $query->execute();
     
	  for($i=0; $row = $query->fetch(); $i++){
	       $fname = $row['fname'];
	       $lname = $row['lname'];
	       $mname = $row['mname'];
	       $bday = $row['bday'];
	       $status = $row['status'];
	       $religion = $row['religion'];
	       $occupation = $row['occupation'];
	       $gender = $row['gender'];
	       $phoneno = $row['phoneno'];
	       $address = $row['address'];
	       $type = $row['type'];
	       $remarks = $row['remarks'];
	  ?>
			 
			 <tr class="success">
			      <td><?php echo $fname; ?></td>
			      <td><?php echo $lname; ?></td>
			      <td><?php echo $mname; ?></td>
			      <td><?php echo $bday; ?></td>
			      <td><?php echo $status; ?></td>
			      <td><?php echo $religion; ?></td>
			      <td><?php echo $occupation; ?></td>
			      <td><?php echo $gender; ?></td>
			      <td><?php echo $phoneno; ?></td>
			      <td><?php echo $address; ?></td>
			      <td><?php echo $type; ?></td>
			      <td><?php echo $remarks; ?></td>
			 </tr>
	  <?php
			 }
	  ?>
	       </table>
	  </div> <!--/end of row fluid 2-->
	  

        </div><!--/span9-->
      </div><!--/row fluid 1-->

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