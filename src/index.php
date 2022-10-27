<?php

echo "Hello <br><br>";


$host = 'db';

$user = 'MYSQL_USER';

$pass = 'MYSQL_PASSWORD';

$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}
?>