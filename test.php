<?php
$host = 'localhost';
$username = 'root';
$password = 'Root$_1234';
$dbname = 'registration';

// echo (mysql_error());


    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (!$conn){
        echo("Unable to connect to the database:" .mysqli_error());
    }
    else{
    echo "Connection Successful";
}

// echo "Hello";

?>
