<?php
    $DB_SERVER="localhost";
    $DB_USER="root";
    $DB_PASS="";
    $DB_NAME="consdb";
    $con = new mysqli($DB_SERVER,$DB_USER,$DB_PASS,$DB_NAME) or die("Connect failed: %s\n". $con -> error);
?>