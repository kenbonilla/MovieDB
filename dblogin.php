<?php
////////////////////////////
// Connect to DB
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MovieDB";
// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
//echo "<br>Connected successfully to MovieDB";
// put your code here
//echo "<p></p>";
// Create connection

?>
