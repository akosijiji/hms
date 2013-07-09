<?php
$dbusername = 'root';
$dbpassword = '';

/*
 * The Prepared Statements Method
 * Best Practice
 */

try {
    $conn = new PDO('mysql:host=localhost;dbname=hospitaldb', $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>