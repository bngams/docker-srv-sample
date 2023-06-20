<?php
$servername = getenv("DB_HOST");
$username = getenv("DB_USER");
$password = getenv("DB_PWD");
$database = getenv("DB_NAME");


// Create connection
$conn = new mysqli($servername, $username, $password, $database);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";


echo "Hello, World from Docker! <br>";
echo '<img src="https://www.docker.com/wp-content/uploads/2022/03/horizontal-logo-monochromatic-white.png">';


?>
