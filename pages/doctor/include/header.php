<!DOCTYPE html>
<html>
    <head>
        <title></title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <link href="../../css/notif.css" rel="stylesheet">
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
        
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>             
<script type="text/javascript">
$(function() 
{
$(".view_comments").click(function() 
{

var ID = $(this).attr("id");

$.ajax({
type: "POST",
url: "view-new-patients.php",
data: "_id="+ ID, 
cache: false,
success: function(html){
$("#view_comments"+ID).prepend(html);
$("#view"+ID).remove();
$("#two_comments"+ID).remove();
}
});

return false;
});
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
          <a class="brand" href="#">Padre Pio HMS</a>
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
              Logged in as <a href="#" class="navbar-link"><img src="../../images/doctor.png" alt="Doctor" /><?php echo $_SESSION['username']; ?></a> &nbsp; | &nbsp;
              <a href="../../logout.php" class="navbar-link">
               Logout<img src="../../images/logout.png" alt="Logout?" /></a>
            </p>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
