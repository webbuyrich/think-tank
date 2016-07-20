<?php
$user = 'dbo632050929';
$pass = 'WebDev22#1';



try {
    $dbh = new PDO('mysql:host=db632050929.db.1and1.com;dbname=db632050929', $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    die();
}
?>