<?php
session_start();
include('db.php');
$userLoggedIn = $_SESSION['username'];

$stmt = $conn->prepare( 'SELECT * FROM users WHERE username = :username' );
$stmt->execute(array( ':username' => $userLoggedIn ));

$result = $stmt->fetch(PDO::FETCH_ASSOC);
$affected_rows = $stmt->rowCount();

    if($affected_rows >= 1) {
        while($affected_rows = $result){
            if($affected_rows['authority'] == 'admin'){
                $_SESSION['authority'] = 'admin';
                $_SESSION['username'] = $userLoggedIn;
                header("Location: pages/admin/");
                exit;
            }
            if($affected_rows['authority'] == 'doctor'){
                $_SESSION['authority'] = 'doctor';
                $_SESSION['username'] = $userLoggedIn;
                header("Location: pages/doctor/");
                exit;
            }
            if($affected_rows['authority'] == 'nurse'){
                $_SESSION['authority'] = 'nurse';
                $_SESSION['username'] = $userLoggedIn;
                header("Location: pages/nurse/");
                exit;
            }
            if($affected_rows['authority'] == 'pharmacist'){
                $_SESSION['authority'] = 'pharmacist';
                $_SESSION['username'] = $userLoggedIn;
                header("Location: pages/pharmacist/");
                exit;
            }
        }
    }

?>