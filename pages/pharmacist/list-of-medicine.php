<?php
     session_start();
     include('../../db.php');

     if($_SESSION['authority'] != 'pharmacist'){
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
            <p class="navbar-text pull-right">
               Logged in as <a href="#" class="navbar-link"><img src="../../images/pharmacist.png" alt="Pharmacist" /><?php echo $_SESSION['username']; ?></a> &nbsp; | &nbsp;
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
              <li><a href="#"><i class="icon-home icon-black"></i> Home</a></li>
              <li class="active"><a href="list-of-medicine.php"><i class="icon-eye-open icon-black"></i> Medicine</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">User Account Panel</li>
              <li><a href="#">Change Password</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">About the Software</li>
              <li><a href="#"><i class="icon-info-sign icon-black"></i> HMS &copy; 2013</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
            <h1><img src="../../images/home.png" />Pharmacy Management</h1>
          </div>

          
          <div class="row-fluid">
	       
	       <ul class="nav nav-tabs">
		    <li class="active"><a href="#category" data-toggle="tab">Medicine Category</a></li>
		    <li><a data-toggle="tab" href="#information">Medicine Information</a></li>
		    <li><a href="#supplies" data-toggle="tab">Supplies</a></li>
	       </ul>
               
               <div class="tab-content">
		    <div class="tab-pane active" id="category">
                        <form method="POST" id="patient-form" class="form-horizontal">
			      <div class="control-group">
				   <label class="control-label" for="category_name">Category Name</label>
				   <div class="controls"> <!-- href="#myModal" data-toggle="modal"   -->
					<input type="text" name="category_name" id="category_name" class="span3">
				   </div>
			      </div>
                              
                              <div class="control-group">
				   <label class="control-label" for="category_description">Category Description</label>
				   <div class="controls"> <!-- href="#myModal" data-toggle="modal"   -->
					<input type="text" name="category_description" id="category_description" class="input-xxlarge">
				   </div>
			      </div>
                              
                              <div class="form-actions">
					<button type="submit" class="btn btn-primary">Save</button>
					<button type="reset" class="btn btn-primary">Cancel</button>
			      </div>
                        </form>
                    </div>
                    
		    <div class="tab-pane" id="information">
                        <form method="POST" id="patient-form" class="form-horizontal">
			      <div class="control-group">
				   <label class="control-label" for="medicine_category">Medicine Category</label>
				   <div class="controls"> <!-- href="#myModal" data-toggle="modal"   -->
					<input type="text" name="medicine_category" id="medicine_category" class="span3">
				   </div>
			      </div>
                              
                              <div class="control-group">
				   <label class="control-label" for="medicine_unit">Medicine Unit</label>
				   <div class="controls"> <!-- href="#myModal" data-toggle="modal"   -->
					<input type="text" name="medicine_unit" id="medicine_unit" class="span3">
				   </div>
			      </div>
                              
                              <div class="control-group">
				   <label class="control-label" for="units_in_stock">Units in Stock</label>
				   <div class="controls"> <!-- href="#myModal" data-toggle="modal"   -->
					<input type="text" name="units_in_stock" id="units_in_stock" class="input-mini">
				   </div>
			      </div>
                              
                              <div class="control-group">
				   <label class="control-label" for="medicine_name">Medicine Name</label>
				   <div class="controls"> <!-- href="#myModal" data-toggle="modal"   -->
					<input type="text" name="medicine_name" id="medicine_name" class="span3">
				   </div>
			      </div>
                              
                              <div class="control-group input-prepend input-append">
				   <label class="control-label" for="price_per_unit">Price per Unit</label>
				   <div class="controls"> <!-- href="#myModal" data-toggle="modal"   -->
                                   <span class="add-on">&#8369;</span>
					<input type="text" name="price_per_unit" id="price_per_unit" class="input-mini">
				   <span class="add-on">.00</span>
                                   </div>
			      </div>
                              
                              <div class="form-actions">
					<button type="submit" class="btn btn-primary">Save</button>
					<button type="reset" class="btn btn-primary">Cancel</button>
			      </div>
                        </form>
                    </div>
                    
                    <div class="tab-pane active" id="supplies">
                        
                    </div>
                    
               </div>
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

</body>
</html>