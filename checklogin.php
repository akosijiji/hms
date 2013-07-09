<?php
session_start();
// Connect to db
include('db.php');

// username and password sent from form
$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
$stmt->execute(array(':username' => $_POST['username'], ':password' => $_POST['password']));

$result = $stmt->fetch(PDO::FETCH_ASSOC);
$affected_rows = $stmt->rowCount();

   /*if($affected_rows == 1) {
            //add the user to our session variables
            $_SESSION['username'] = $username;
        while($affected_rows = $result){
            
            if($affected_rows['authority'] == 'admin'){
                $_SESSION['authority'] = 'admin';
                header("Location: pages/admin/index.php");
                exit;
            }
            if($affected_rows['authority'] == 'doctor'){
                $_SESSION['authority'] = 'doctor';
                header("Location: pages/doctor/index.php");
                exit;
            }
            if($affected_rows['authority'] == 'nurse'){
                $_SESSION['authority'] = 'nurse';
                header("Location: pages/nurse/index.php");
                exit;
            }
        } 
        //$_SESSION['username'] = $username;
        //echo "yes";
    }
    else if($username == '' || $password == '' ){
        echo 'blank fields!';
    }
    else {
        echo "no";
    } // end of $affected_rows */


        if($affected_rows >= 1){
            $_SESSION['username'] = $username;
            echo "yes";
        }
        else{
            echo "no";
        } 

?>