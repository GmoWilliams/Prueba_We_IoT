<?php
    // Database credentials
    $servername = "den1.mysql5.gear.host";
    $username   = "databasemysqliot";
    $password   = "Fc6t7o_30-0Q";
    $dbname     = "databasemysqliot";
    $tbname     = "potentiometers";

    // Create database connection
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
    
    // Check Connection
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
    //echo "[MySQL] Connected successfully <br/>";
?>