<?php
     session_start();
     include('../../db.php');
     include('display-doctor-details.php');

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
              <li><a href="list-of-patients.php"><i class="icon-user icon-black"></i> List of Patients</a></li>
              <li class="nav-header">User Account Panel</li>
              <li class="active"><a href="#"><i class="icon-user icon-black"></i> Manage Account</a></li>
              <li><a href="change-password.php"><i class="icon-lock icon-black"></i> Change Password</a></li>
              <li><a href="../../logout.php"><i class="icon-off icon-black"></i> Logout</a></li>
              <li class="nav-header">About the Software</li>
              <li><a href="../../about.php"><i class="icon-info-sign icon-black"></i> HMS &copy; 2013</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
            <h1><img src="../../images/home.png" />Account Management</h1>
          </div>
     

	  <div class="row-fluid">
	       <form action="#" method="POST" id="doctor-form" class="form-horizontal">
		    <div class="control-group">
                    <label class="control-label" for="doctor_fname">Firstname</label>
			 <div class="controls">
			      <input type="text" name="doctor_fname" id="doctor_fname" value="<?php echo $fname;?>" readonly="true">
			 </div>
		    </div>

		    <div class="control-group">
                    <label class="control-label" for="doctor_mname">Middlename</label>
			 <div class="controls">
			      <input type="text" name="doctor_mname" id="doctor_mname" value="<?php echo $mname;?>" readonly="true">
			 </div>
		    </div>
		    
		    <div class="control-group">
                    <label class="control-label" for="doctor_lname">Lastname</label>
			 <div class="controls">
			      <input type="text" name="doctor_lname" id="doctor_lname" value="<?php echo $lname;?>" readonly="true">
			 </div>
		    </div>
		    
		    <div class="control-group">
                    <label class="control-label" for="doctor_schedule">Schedule</label>
			 <div class="controls">
			      <input type="text" name="doctor_schedule" id="doctor_schedule" value="<?php echo $schedule;?>" readonly="true"> 
			 </div>
		    </div>
		    
		    <div class="control-group">
                    <label class="control-label" for="doctor_specialization">Specialization</label>
			 <div class="controls">
			      <select id="doctor_specialization" name="doctor_specialization" disabled="">
				   <option name="cardiology" <?php if ($dept_id == 1) echo ' selected="selected"'; ?> value="1">Cardiology</option>
				   <option name="neurology" <?php if ($dept_id == 2) echo ' selected="selected"'; ?> value="2">Neurology</option>
				   <option name="internal_medicine" <?php if ($dept_id == 3) echo ' selected="selected"'; ?> value="3">Internal Medicine</option>
				   <option name="ent" <?php if ($dept_id == 4) echo ' selected="selected"'; ?> value="4">ENT</option>
			      </select>
			 </div>
		    </div>
		    
		    <div class="form-actions">
			 <button type="button" class="btn btn-primary" id="btn-update">Update</button>
			 <button type="submit" class="btn btn-primary" id="btn-save" disabled="">Save</button>
			 <button type="reset" class="btn btn-primary" id="btn-cancel" disabled="">Cancel</button>
		    </div>  
		    
	       </form>    
	  </div>
	       
	  
	  
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; All Rights Reserved 2013</p>
      </footer>

    </div><!--/.fluid-container-->
    

    
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../../js/jquery.js"></script>
    <script src="../../../js/bootstrap-transition.js"></script>
    <script src="../../../js/bootstrap-alert.js"></script>
    <script src="../../../js/bootstrap-modal.js"></script>
    <script src="../../../js/bootstrap-dropdown.js"></script>
    <script src="../../../js/bootstrap-scrollspy.js"></script>
    <script src="../../../js/bootstrap-tab.js"></script>
    <script src="../../../js/bootstrap-tooltip.js"></script>
    <script src="../../../js/bootstrap-popover.js"></script>
    <script src="../../../js/bootstrap-button.js"></script>
    <script src="../../../js/bootstrap-collapse.js"></script>
    <script src="../../../js/bootstrap-carousel.js"></script>
    <script src="../../../js/bootstrap-typeahead.js"></script>