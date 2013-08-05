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
              <li class="active"><a href="#"><i class="icon-home icon-black"></i> Home</a></li>
              <li><a href="list-of-patients.php"><i class="icon-user icon-black"></i> List of Patients</a></li>
              <li class="nav-header">User Account Panel</li>
              <li><a href="account-management.php"><i class="icon-pencil icon-black"></i> Manage Account</a></li>
              <li><a href="change-password.php"><i class="icon-lock icon-black"></i> Change Password</a></li>
              <li><a href="../../../logout.php"><i class="icon-off icon-black"></i> Logout</a></li>
              <li class="nav-header">About the Software</li>
              <li><a href="../../../about.php"><i class="icon-info-sign icon-black"></i> HMS &copy; 2013</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
            <h1><img src="../../images/home.png" />Doctor Module</h1>
          </div>

        </div><!--/span-->
      </div><!--/row-->

      <hr>

        
        <div id="menu_2">
	<ul>
		<li>
			<a href="#" style="padding:10px 0;">
			<img src="../../images/images.png" style="width: 21px;" />
			<?php
			include("../../db.php");
                                $sql = $conn->prepare('SELECT COUNT(*) FROM patients');
                                $sql->execute();
                                $comment_count = $sql->fetchColumn();
				if($comment_count != 0)
				{
				echo '<span id="mes">'.$comment_count.'</span>';
				}
			?>
			</a>
		<ul class="sub-menu">
		
			<?php
                        $msql = $conn->prepare("SELECT * FROM patients ORDER BY _id DESC");
                        $msql->execute();
                        $result = $msql->fetchAll();
			foreach($result as $row){
			$id = $row['_id'];
			$msgcontent = $row['fname'];
                        }
			?>
			<li class="egg">
			<div class="toppointer"></div>
				<?php 
                                $sql = $conn->prepare("SELECT COUNT(*) FROM patients WHERE _id = '$id' ORDER BY _id");
				$sql->execute();
				$comment_count = $sql->fetchColumn();

				if($comment_count > 2)
				{
				$second_count = $comment_count - 2;
				} 
				else 
				{
				$second_count = 0;
				}
				?>

				<div id="view_comments<?php echo $id; ?>"></div>

				<div id="two_comments<?php echo $id; ?>">
				<?php
                                $listsql = $conn->prepare("SELECT * FROM patients WHERE _id = '$id' ORDER BY _id LIMIT $second_count, 2");
				$listsql->execute();
                                $result = $listsql->fetchAll();
                                foreach($result as $rowsmall)
				{ 
				$c_id = $rowsmall['_id'];
				$comment = $rowsmall['fname'];
				?>

				<div class="comment_ui">

				<div class="comment_text">
				<div  class="comment_actual_text"><?php echo $comment; ?></div>
				</div>

				</div>
				
				<?php }?>
				<div class="bbbbbbb" id="view<?php echo $id; ?>">
					<div style="background-color: #F7F7F7; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px; position: relative; z-index: 100; padding:8px; cursor:pointer;">
					<a href="#" class="view_comments" id="<?php echo $id; ?>">View all <?php echo $comment_count; ?> new patients</a>
					</div>
				</div>
			</li>
		</ul>
		</li>
	</ul>
</div>

      <footer class="footer">
        <p>&copy; All Rights Reserved 2013</p>
      </footer>

</div><!--/.fluid-container-->