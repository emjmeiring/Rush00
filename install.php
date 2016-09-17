#!/usr/bin/php
<?php
    $s_name = "localhost:3306";
    $username = "root";
    $password = "hahaha";
    $db_name = "myne";
//connects with server
    $con = mysqli_connect($s_name, $username, $password);
    if (!$con)
        die("connection failed: " . mysqli_connect_error()) . "\n";
    echo "connection success\n";
//Creates data base
    $sql = "Create Database " . $db_name;
    if (mysqli_query($con, $sql))
        echo "DB created successfully\n";
    else
        echo "Error creating DB: " . mysqli_error($con) . "\n";
//CONNECT WITH DB "myne"
    $con_db = mysqli_connect($s_name, $username, $password, $db_name);
//Creates table for users
    $cr_table = "CREATE TABLE users (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                firstname VARCHAR(30) NOT NULL,
                lastname VARCHAR(30) NOT NULL,
                email VARCHAR(50),
                reg_date TIMESTAMP)";
    if (mysqli_query($con_db, $cr_table))
        echo "Table users created successfully";
    else
        echo "Error creating table: " . mysqli_error($con_db);
    
mysqli_close($con);
?>