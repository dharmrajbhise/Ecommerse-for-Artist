<?php
// Establish database connection (replace placeholders with your actual database credentials)
include('./../config.php');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the ID parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete data from database
    $sql = "DELETE FROM paintings WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('Painting deleted successfully!');
        window.location.href = './../artist_dash.php';
        </script>";
    } else {
        echo "<script>
        alert('Error: " . $sql . "<br>" . $conn->error . "');
        window.location.href = './../artist_dash.php';
        </script>";
    }
} else {
    echo "No painting ID specified.";
}

// Close database connection
$conn->close();
?>
