<?php
include("../../db.php");

if(isset($_POST['_id']))
{
$id = $_POST['_id'];
$com = $conn->prepare("SELECT * FROM patients WHERE _id ='$id' ORDER BY _id");
$com->execute();
while($r = $com->fetch())
{
$c_id = $r['_id'];
$comment = $r['fname'];
?>


<div class="comment_ui" >
<div class="comment_text">
<div  class="comment_actual_text"><?php echo $comment; ?></div>
</div>
</div>


<?php } }?>