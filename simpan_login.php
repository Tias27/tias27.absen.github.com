<?php
$mysqli = new mysqli("localhost", "root", "", "absen");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim = $_POST['fnim'];
    $nama = $_POST['fnama'];
    $tahun = $_POST['ftahun'];
    
    // Clear table before inserting (as per your logic)
    $delete_query = "DELETE FROM absen";
    $mysqli->query($delete_query);

    // Insert new record
    $insert_query = $mysqli->query("INSERT INTO absen (nim, nama, tahun) VALUES ('$nim', '$nama', '$tahun')");

    if ($insert_query) {
        // Respond with success message
        echo 'success';
    } else {
        // Respond with error message
        echo 'error';
    }

    // Close the connection
    $mysqli->close();
}
?>
