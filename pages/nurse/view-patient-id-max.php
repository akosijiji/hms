<?php
include('../../db.php');

$sql = $conn->prepare('SELECT MAX(_id) as _id FROM patients');
$sql->execute();
$result = $sql->fetch(PDO::FETCH_ASSOC);
$next_auto_inc = $result['_id'] + 1;

?>