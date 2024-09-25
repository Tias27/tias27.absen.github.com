<?php
$mysqli = new mysqli("localhost", "root", "", "absen");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$id = $_POST['id'];
$status = $_POST['status'];

$update_query = "UPDATE absen SET status = '$status' WHERE id = $id";
if ($mysqli->query($update_query) === TRUE) {
    echo "success";
} else {
    echo "error";
}

$mysqli->close();
?>
