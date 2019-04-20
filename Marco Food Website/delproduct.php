<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM tbl_product WHERE id=".$_GET['id'];

if ($conn->query($sql) === TRUE) {
    header("Location: admin.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
