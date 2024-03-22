<?php
// Establish database connection (replace placeholders with your actual database credentials)
include('./../config.php');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['image_title'];
    $medium = $_POST['image_medium'];
    $size = $_POST['image_size'];
    $price = $_POST['image_prize'];
    $category = $_POST['image_category'];
    $status = $_POST['image_status'];

    // Update data in database
    $sql = "UPDATE paintings SET image_title='$title', image_medium='$medium', image_size='$size', image_prize='$price', image_category='$category', image_status='$status' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('Painting updated successfully');
        window.location.href = './../artist_dash.php';
        </script>";
    } else {
        echo "<script>
        alert('Error: " . $sql . "<br>" . $conn->error . "');
        window.location.href = './../artist_dash.php';
        </script>";
    }
}

// Close database connection
$conn->close();
?>