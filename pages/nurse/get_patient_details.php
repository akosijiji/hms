<?php
include('../../db.php');
	       
	       $query = $conn->prepare('SELECT * FROM patients WHERE _id = :_id');
	       $query->execute(array(':_id' => 1));
               
               $output_string = '';
               
               for($i=0; $row = $query->fetch(); $i++){
                    $fname = $row['fname'];
                    $lname = $row['lname'];
                    $mname = $row['mname'];
                    $bday = $row['bday'];
                    $religion = $row['religion'];
                    $occupation = $row['occupation'];
                    $gender = $row['gender'];
                    $phoneno = $row['phoneno'];
                    $address = $row['address'];
                    $type = $row['type'];	 
               }
               
               $output_string = $fname;
          echo $output_string;
          //echo json_encode($output_string);
?>