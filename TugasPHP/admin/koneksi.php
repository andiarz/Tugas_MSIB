<?php
$dbname = 'dbtoko';
$db = 'mysql:dbname='.$dbname.';host:localhost';
$user = 'root';
$password = '';

try{
    $dbh = new PDO($db, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "";
}catch(PDOException $e){
    echo "Database Gagal Tersambung ke ".$e->getMessage();
}

?>