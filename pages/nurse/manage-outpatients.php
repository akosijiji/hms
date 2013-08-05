<?php
     session_start();
     include('../../db.php');
     include('view-patient-id-max.php');

     if($_SESSION['authority'] != 'nurse'){
        header("location: ../../index.php");
	exit();
     }

?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <link href="../../css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <link href="../../css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../../css/registration-style.css" rel="stylesheet">
    <script src="../../js/jquery.js"></script>
    <script src="../../js/script-validation.js"></script>
    <script src="../../js/jquery.validate.js"></script>
    <link href="../../css/datepicker.css" rel="stylesheet">
    <script src="../../js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
	       $(document).ready(function($) {
	       $('#dp3').datepicker();
	  });
    </script>
        
    </head>
<body>
    
    
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">
            Padre Pio HMS</a>
          <div class="nav-collapse collapse">
            <form class="navbar-form pull-left form-search">
			 <select>
			    <option>Search patient by...</option>
                            <option name="fname">Firstname</option>
                            <option name="fname">Lastname</option>
                            <option name="fname">Last follow up</option>
                        </select>
               <div class="input-append">
	       <input data-provide="typeahead" data-items="4"  type="text" class="span2 search-query">
	       <button class="btn">Search</button>
	       </div>
            </form>
            <p class="navbar-text pull-right">
               Logged in as <a href="#" class="navbar-link"><img src="../../images/nurse.png" alt="Nurse" /><?php echo $_SESSION['username']; ?></a> &nbsp; | &nbsp;
               <a href="../../logout.php" class="navbar-link">
               Logout<img src="../../images/logout.png" alt="Logout?" />
              </a>
            </p>
            
            
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Navigation</li>
              <li><a href="index.php"><i class="icon-home icon-black"></i> Home</a></li>
              <li><a href="manage-inpatients.php"><i class="icon-pencil icon-black"></i> Manage Inpatients</a></li>
              <li class="active"><a href="#"><i class="icon-pencil icon-black"></i> Manage Outpatients</a></li>
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
            <h1><img src="../../images/patient-registration.png" />Manage Outpatients Module</h1>
          </div>
	  
	  <div class="row-fluid">
	       
	       <ul class="nav nav-tabs">
		    <li class="active"><a href="#list" data-toggle="tab">List of Outpatients</a></li>
		    <li><a data-toggle="tab" href="#registration">Outpatient Registration</a></li>
	       </ul>
	       
	       <div class="tab-content">
		    <div class="tab-pane active" id="list">...</div>
		    <div class="tab-pane" id="registration">
			 <form action="addpatient.php" method="POST" id="patient-form" class="form-horizontal">
			      
			      <div class="control-group">
				   <label class="control-label" for="date">Date</label>
				   <div class="controls">
					<input type="text" value="<?php echo date("m-d-Y"); ?>" name="date" id="admission_date" class="span3" readonly="true">
				   </div>
			      </div>
			      
			      <div class="control-group">
				   <label class="control-label" for="patient_id">Patient ID</label>
				   <div class="controls">
					<input class="input-mini" type="text" name="patient_id" id="patient_id" readonly="true" value="<?php echo $next_auto_inc; ?>">
				   </div>
			      </div>
		    
			      <div class="control-group">
				   <label class="control-label" for="patient_fname">Firstname</label>
				   <div class="controls">
					<input type="text" value="" name="patient_fname" id="patient_fname" placeholder="Patient's firstname">
				   </div>
			      </div>
			      
			      <div class="control-group">
				   <label class="control-label" for="patient_lname">Lastname</label>
				   <div class="controls">
					<input type="text" name="patient_lname" id="patient_lname" placeholder="Patient's lastname">
				   </div>
			      </div>
			      
			      <div class="control-group">
				   <label class="control-label" for="patient_mname">Middlename</label>
				   <div class="controls">
					<input type="text" name="patient_mname" id="patient_mname" placeholder="Patient's middlename">
				   </div>
			      </div>
			      
			      <div class="control-group">
				   <label class="control-label" for="patient_gender">Gender</label>
				   <div class="controls">
					<select id="mySel" name="patient_gender">
					     <option name="male">Male</option>
					     <option name="female">Female</option>                    
					</select>
				   </div>
			      </div>
			      
			      <div class="control-group">
				   <label class="control-label" for="patient_status">Civil Status</label>
				   <div class="controls">
					<select id="mySel" name="patient_status">
					     <option name="single">Single</option>
					     <option name="married">Married</option>
					     <option name="widow-widower">Widow/Widower</option>
					     <option name="separted">Separated</option> 
					</select>
				   </div>
			      </div>
			      
			      <div class="control-group">
				   <label class="control-label" for="patient_occupation">Occupation</label>
				   <div class="controls">
					<input type="text" name="patient_occupation" id="patient_occupation" placeholder="Patient's occupation">
				   </div>
			      </div>
			      
			      <div class="control-group">
				   <label class="control-label" for="patient_religion">Religion</label>
				   <div class="controls">
					<select id="mySel" name="patient_religion">
					     <option>Christian - Born Again</option>
					     <option>Christian - Protestant</option>
					     <option>Christian - Roman Catholic</option>
					     <option>Iglesia Ni Cristo</option>
					     <option>Jehova's Witness</option>
					     <option>Muslim</option>
					     <option>Hinduist</option>
					     <option>Buddhist</option>
					     <option>Shintoist</option>
					     <option>Atheist</option>
					     <option>Agnostic</option>
					     <option>Others</option>
					</select>
				   </div>
			      </div>
			      
			      <div class="control-group">
				   <label class="control-label" for="patient_phoneno">Phone number</label>
				   <div class="controls">
					<input type="text" name="patient_phoneno" id="patient_phoneno" placeholder="Patient's Phone number">
				   </div>
			      </div>
			      
			      <div class="control-group">
				   <label class="control-label" for="patient_address">Address</label>
				   <div class="controls">
					<input type="text" name="patient_address" id="patient_address" placeholder="Patient's address">
				   </div>
			      </div>
		
			      <div class="control-group">
				   <label class="control-label" for="patient_type">Patient Type</label>
				   <div class="controls">
					<input type="text" name="patient_type" id="patient_type" value="Outpatient" readonly="true">
				   </div>
			       </div>
			      
			      <div class="control-group">
				   <label class="control-label" for="patient_bday">Birthday</label>
				   <div class="controls">
					<div class="input-append date" id="dp3" data-date="<?php echo date("m-d-Y"); ?>" data-date-format="mm-dd-yyyy">
					     <input class="span12" size="16" type="text" name="patient_bday" value="<?php echo date("m-d-Y"); ?>">
						  <span class="add-on"><i class="icon-calendar"></i></span>
					</div>
				   </div>
			      </div>
			      
			      <div class="control-group">
				   <label class="control-label" for="patient_remarks">Remark/s</label>
				   <div class="controls">
					<textarea class="input-xxlarge" rows="10" type="text" name="patient_remarks"></textarea>
				   </div>
			      </div>
			      
				   <div class="form-actions">
					<button type="submit" class="btn btn-primary">Save</button>
					<button type="reset" class="btn btn-primary">Cancel</button>
				   </div>
			 </form>
		    </div> 
	       
	       
	       
	       </div> <!-- end of tab-content -->
		    
	  </div> <!-- row fluid 2 -->

        </div><!--/span 9-->
      </div><!--/row fluid 1-->

      <hr>
      <footer>
        <p>&copy; All Rights Reserved 2013</p>
      </footer>

    </div><!--/.fluid-container-->
    

    <script>
     $(document).ready(function() {
	  $('#myTab a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
     });
     
     }
    </script>
    
    <!-- Placed at the end of the document so the pages load faster -->
    
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

</body>
</html>