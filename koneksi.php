<?php
$db_host = "localhost";
$db_name = "db_sistem_absensi";
$db_user = "root";
$db_pass = "";
 
// Check connection
 
try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}

?>