<?php
session_start();
if(!isset($_SESSION['username'])){
  header('Location: login.php');
}
?>

<?php
include('config.php');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($conn ->connect_error){
    die("Connection Failed: " . $conn->connect_error); 
    echo 'Connection Failed';   
}

// Define pagination variables
$results_per_page = 5; // Number of results per page
$current_page = isset($_GET['page']) ? $_GET['page'] : 1; // Current page number, default is 1

// Calculate the starting point for the results on the current page
$start_from = ($current_page - 1) * $results_per_page;


$sql = "SELECT * FROM paintings LIMIT $start_from, $results_per_page";
$result = mysqli_query($conn, $sql);

// if($result){
//     $num = mysqli_num_rows($result);
//     if($num > 0){
//         while($row = mysqli_fetch_assoc($result)){
//             $id = $row['id'];
//             $title = $row['image_title'];
//             $medium = $row['image_medium'];
//             $size = $row['image_size'];
//             $price = $row['image_prize'];
//             $category = $row['image_category'];
//         }
//     }else{
//         echo "No results found";
//     }
// }else{
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- Bootstrap CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- Glide js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/artist_dash.css" />
    <title>SM Art Gallery</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
<link rel="manifest" href="./site.webmanifest">

  </head>
  <body>

  <!-- Header -->
  <header class="header" id="header">    
<div class="top-nav">
  <div class="container d-flex">
    <div class="contact-info">
     
      <div>
    
          


        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
        </svg>
        &nbsp;sanjay.mangodekar@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


            <br>

    
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
          <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
      </svg>
       +91-9890316789

       <br>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- navbar starts -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand d-flex align-items-center" href="">
    <img src="./images/favicon.jpeg" alt="Logo" width="40" height="40" class="mr-2"> <!-- Adjust width, height, and path accordingly -->
          <h1 class="mr-lg-5 mb-0">SM Art Gallery  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;   </h1> 
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="artist_dash.php" >Home  &nbsp;<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/smart/paintings/add_painting.php" >Add Paintings &nbsp;<span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/smart/login.php"><i class="bx bx-log-out" style="font-size: 24px;"></i></a> <!-- Adjusted font size -->
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- table starts -->
  <div class="container">
    <h2>All Paintings</h2>
    <table class="table table-responsive">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Medium</th>
      <th scope="col">Size</th>
      <th scope="col">Price</th>
      <th scope="col">Category</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php
   if($result){
    $num = mysqli_num_rows($result);
    if($num > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo '<tr>'; // Move opening <tr> tag here
            echo '
            <td>'.$row['id'].'</td>
            <td>'.$row['image_title'].'</td>
            <td>'.$row['image_medium'].'</td>
            <td>'.$row['image_size'].'</td>
            <td>'.$row['image_prize'].'</td>
            <td>'.$row['image_category'].'</td>
            <td>'.$row['image_status'].'</td>
            <td>
            <a href="/smart/paintings/edit_painting.php?id='.$row['id'].'" class="btn btn-primary">Edit</a>
            <a href="/smart/paintings/delete_painting.php?id='.$row['id'].'" class="btn btn-danger">Remove</a>
            </td>';
            echo '</tr>'; // Move closing </tr> tag here

            // Uncomment and use these lines if needed elsewhere
            // $id = $row['id'];
            // $title = $row['image_title'];
            // $medium = $row['image_medium'];
            // $size = $row['image_size'];
            // $price = $row['image_prize'];
            // $category = $row['image_category'];
        }
    }else{
        echo "<tr><td colspan='7'>No results found</td></tr>"; // Display message in a single row with colspan
    }
}else{
    echo "<tr><td colspan='7'>Error: " . $sql . "<br>" . $conn->error . "</td></tr>"; // Display error in a single row with colspan
}
   ?>
  </tbody>
</table>


<!-- Pagination links -->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <?php
    // Calculate total number of pages
    $sql = "SELECT COUNT(*) AS total FROM paintings";
    $result2 = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_assoc($result2);
    $total_pages = ceil($row2['total'] / $results_per_page);

    // Display pagination links
    // Display previous button
    if ($current_page > 1) {
      echo '<li class="page-item"><a class="page-link" href="?page='.($current_page - 1).'">Previous</a></li>';
  }

  // Display pagination links
  for ($page = 1; $page <= $total_pages; $page++) {
      echo '<li class="page-item '.($page == $current_page ? 'active' : '').'"><a class="page-link" href="?page='.$page.'">'.$page.'</a></li>';
  }

  // Display next button
  if ($current_page < $total_pages) {
      echo '<li class="page-item"><a class="page-link" href="?page='.($current_page + 1).'">Next</a></li>';
  }
  ?>
  </ul>
</nav>

</div>





     <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </body>
</html>
