<?php 
     error_reporting(E_ERROR | E_PARSE);     
     session_start();
     
    if($_SESSION['authority'] == 'admin'){
        header("location: pages/admin/");
        exit();
    }
    if($_SESSION['authority'] == 'doctor'){
        header("location: pages/doctor/");
	exit();
    }
    if($_SESSION['authority'] == 'nurse'){
        header("location: pages/nurse/");
	exit();
    }
    if($_SESSION['authority'] == 'pharmacist'){
        header("location: pages/pharmacist/");
	exit();
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Padre Pio Hospital Management System</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
            
        <script type="text/javascript"
                src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
        <script language="javascript">  
        $(document).ready(function(){  
        $("#loginForm").submit(function(){  
    
        $("#report").removeClass().addClass('loader').html('<img src="images/ajax-loader.gif">').fadeIn(1000);  
        $.post("checklogin.php",{ username:$('#username').val(),password:$('#password').val()},function(data){  
        if(data=='yes'){  
        $("#report").fadeTo(200,1,function(){       
        $(this).html('<img src="images/loader-bar.gif">').addClass('log').fadeTo(900,1,function(){          
                document.location='main.php';  
             });       
         });  
        }
        else {  
        $("#report").fadeTo(200,1,function(){        
        $(this).html('<img src="images/icon_error.gif"> Username or password error.').addClass('error').fadeTo(900,1);  
            });    
        }  
        });  
        return false;   
        });  
        $("#password").blur(function(){  
        $("#login_form").trigger('submit');  
            });  
        });  
        </script>   
    </head>
    
<body>

    <div class="container">
      <form class="form-signin" action="checklogin.php" method="post" id="loginForm">
        <h2 class="form-signin-heading"><img src="images/hms_icon.png" />User Login</h2>
        <input type="text" class="input-block-level" placeholder="Username" name="username" id="username">
        <input type="password" class="input-block-level" placeholder="Password" name="password" id="password">
        <button class="btn btn-large btn-primary" type="submit" name="login" id="login">Sign in</button> 
        
        <div id="report"></div>
        
      </form>

    </div> <!-- /container -->

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

</body>
</html>