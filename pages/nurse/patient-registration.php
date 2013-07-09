<?php
     session_start();
     include('../../db.php');

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
     
    <link href="../../css/style.css" rel="stylesheet">
     
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
          <a class="brand" href="#"><!--<img src="../../images/home.png" />-->
            Padre Pio HMS</a>
          <div class="nav-collapse collapse">
            <form class="navbar-form pull-left">
		        <select>
			    <option>Search patient by...</option>
                            <option name="fname">Firstname</option>
                            <option name="fname">Lastname</option>
                            <option name="fname">Last follow up</option>
                        </select>
               <input class="span2" type="text" placeholder="Search">
                <div class="btn-group">
                    <button class="btn">Go</button>
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
	      <li><a href="index.php">Home</a></li>
              <li class="active"><a href="#">Patient Registration</a></li>
              <li><a href="manage-inpatients.php">Manage Inpatients</a></li>
              <li><a href="manage-outpatients.php">Manage Outpatients</a></li>
              <li><a href="list-of-patients.php">List of Patients</a></li>
              <li class="nav-header">User Account Panel</li>
              <li><a href="account-management/">Manage Account</a></li>
              <li><a href="account-management/change-password.php">Change Password</a></li>
              <li><a href="../../logout.php">Logout</a></li>
              <li class="nav-header">About the Software</li>
              <li><a href="../../about.php">HMS &copy; 2013</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
        <div class="span9">
          <div class="hero-unit">
            <h1><img src="../../images/patient-registration.png" />Patient Registration Module</h1>
          </div>
          
        <div class="row-fluid">
            <form action="#" method="POST" id="patient-form" class="form-horizontal">
                <div class="control-group">
                    <label class="control-label" for="patient_fname">Firstname</label>
                    <div class="controls">
                        <input type="text" name="patient_fname" id="patient_fname" placeholder="Patient's firstname">
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
                        <select id="mySel">
                            <option name="male">Male</option>
                            <option name="female">Female</option>                    
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
                        <select id="mySel">
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
                        <select id="mySel">
                            <option>Inpatient</option>
                            <option>Outpatient</option>                    
                        </select>
                    </div>
                </div>
		<div class="control-group">
                    <label class="control-label" for="input10">Birthday</label>
		    <div class="controls">
			 <div class="input-append date" id="dp3" data-date="<?php echo date("d-m-Y"); ?>" data-date-format="dd-mm-yyyy">
			      <input class="span12" size="16" type="text" value="<?php echo date("d-m-Y"); ?>">
			      <span class="add-on"><i class="icon-calendar"></i></span>
			 </div>
		    </div>
                </div>
                
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-primary">Cancel</button>
                </div>  
            </form> <!-- end of form -->
        </div> <!-- row-fluid -->

        </div><!--/span-->
      </div><!--/row-->
      <hr>
      <footer>
        <p>&copy; All Rights Reserved 2013</p>
      </footer>

    </div><!--/.fluid-container-->
    
		    
    <!--
    <script>
    $.getScript('http://ivaynberg.github.io/select2/select2-2.1/select2.js',function(){
    $("#mySel").select2({
        allowClear:true
        });
    });
    </script> -->

    
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