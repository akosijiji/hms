<?php

$username = $_SESSION['username'];

$sql = $conn->prepare("SELECT doctors.doctor_fname, doctors.doctor_mname, doctors.doctor_lname,
                      departments.department_name, doctors.department_id, doctors.user_id, doctors.doctor_schedule
                      FROM doctors as doctors
                      JOIN users as users ON doctors.user_id = users._id
                      JOIN departments as departments ON doctors.department_id = departments.department_id
                      WHERE users.username = '$username' ");
$sql->execute();
$result = $sql->fetch(PDO::FETCH_ASSOC);

	  $fname = $result['doctor_fname'];
	  $mname = $result['doctor_mname'];
	  $lname = $result['doctor_lname'];
	  $department = $result['department_name'];
          $dept_id = $result['department_id'];
          $schedule = $result['doctor_schedule'];

?>