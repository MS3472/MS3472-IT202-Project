<?php
//ms3472
 function getDB() {
    $host = 'sql1.njit.edu';
    $port = 3306;
    $dbname = 'ms3472';
    $username = 'ms3472';
    $password = 'It2021234567!';
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
   try {
       $db = new mysqli($host, $username, $password, $dbname, $port);
       return $db;
   } catch (mysqli_sql_exception $e) {
       error_log($e->getMessage(), 0);
       echo $e->getMessage();
   }
 }
 getDB();
?>
