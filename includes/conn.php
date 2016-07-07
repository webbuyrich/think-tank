<<<<<<< HEAD
<<<<<<< HEAD
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
=======
<?php
$user = 'webdev';
$pass = 'intranet';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=think_tank', $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    die();
}
>>>>>>> 3d9b5c6c0b5bcff09055d36915593f3609c3327b
=======
<?php
$user = 'webdev';
$pass = 'intranet';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=think_tank', $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    die();
}
>>>>>>> 3d9b5c6c0b5bcff09055d36915593f3609c3327b
?>