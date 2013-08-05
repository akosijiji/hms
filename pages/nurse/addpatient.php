<?php
include('../../db.php');

//Data to save from FORM SUBMIT
$fname = $_POST['patient_fname'];
$lname = $_POST['patient_lname'];
$mname = $_POST['patient_mname'];
$occupation = $_POST['patient_occupation'];
$phoneno = $_POST['patient_phoneno'];
$gender = $_POST['patient_gender'];
$religion = $_POST['patient_religion'];
$type = $_POST['patient_type'];
$bday = $_POST['patient_bday'];
$status = $_POST['patient_status'];
$address = $_POST['patient_address'];
$remarks = $_POST['patient_remarks'];

$statement = $conn->prepare("INSERT INTO patients (
                            fname,
                            lname,
                            mname,
                            gender,
                            bday,
                            status,
                            occupation,
                            religion,
                            phoneno,
                            address,
                            type,
                            remarks)
                          VALUES (
                          :fname,
                          :lname,
                          :mname,
                          :gender,
                          :bday,
                          :status,
                          :occupation,
                          :religion,
                          :phoneno,
                          :address,
                          :type,
                          :remarks)");
$statement->execute(array(':fname' => $fname,
                          ':lname' => $lname,
                          ':mname' => $mname,
                          ':gender' => $gender,
                          ':bday' => $bday,
                          ':status' => $status,
                          ':occupation' => $occupation,
                          ':religion' => $religion,
                          ':phoneno' => $phoneno,
                          ':address' => $address,
                          ':type' => $type,
                          ':remarks' => $remarks));

header("Location: list-of-patients.php");

?>