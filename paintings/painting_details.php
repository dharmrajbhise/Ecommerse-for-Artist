<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painting Details</title>
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
    <link rel="stylesheet" href="./../css/painting_details.css" />
    <title>SM Art Gallery</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./../apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./../favicon-16x16.png">
    <link rel="manifest" href="./../site.webmanifest">

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
<!-- navbar starts -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand d-flex align-items-center" href="">
    <img src="./../images/favicon.jpeg" alt="Logo" width="40" height="40" class="mr-2"> <!-- Adjust width, height, and path accordingly -->
          <h1 class="mr-lg-5 mb-0">SM Art Gallery  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;   </h1> 
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/smart" >Home  &nbsp;<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#about" >About &nbsp; </a>
            </li>
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="paintingsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Paintings  &nbsp;
              </a>
              <div class="dropdown-menu" aria-labelledby="paintingsDropdown">
                  <a class="dropdown-item" href="/smart/paintings/painting_category.php?image_category=realistic painting" style="font-size: 15px;">Realistic Painting</a>
                  <a class="dropdown-item" href="/smart/paintings/painting_category.php?image_category=composition painting" style="font-size: 15px;">Composition Painting</a>
                  <a class="dropdown-item" href="/smart/paintings/painting_category.php?image_category=abstract painting" style="font-size: 15px;">Abstract Painting</a>
                  <a class="dropdown-item" href="/smart/paintings/painting_category.php?image_category=nature/wildlife painting" style="font-size: 15px;">Nature / Wildlife</a>
              </div>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="#product" >Gallery &nbsp;</a>
          </li>
            <li class="nav-item active">
              <a class="nav-link" href="#contact">Contact </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="login.php">Artist login</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#login.html"><i class="bx bx-user" style="font-size: 24px;"></i></a> <!-- Adjusted font size -->
            </li>
            <!--
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="bx bx-search"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="bx bx-heart"></i> <span class="d-flex"></span></a>
            </li>
            -->
            <li class="nav-item">
              <a class="nav-link" href="#cart.html"><i class="bx bx-cart" style="font-size: 24px;"></i> <span class="d-flex"></span></a> <!-- Adjusted font size -->
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- navbar ends -->

    <?php

    include('./../config.php');
    
    $image_id = $_GET['id'];

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM paintings WHERE id = $image_id";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Error fetching image data: " . mysqli_error($conn));
    }
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // $imageData = $row['image_data'];
        // $imageType = 'image/jpg'; 

        // $base64Image = 'data:' . $imageType . ';base64,' . base64_encode($imageData);
    
        echo '<div class="container">';
        echo '<div class="row top">';
        echo '<div class="col-md-6">';
        echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image_data']) . '" class="img-responsive" style="width: 100%; height: 100%;"/>';
        echo '</div>';
        echo '<div class="col-md-6 info">';
        echo '<h5 class="card-title">' . $row['image_title'] . '</h5>';
        echo '<p class="card-text">Medium: ' . $row['image_medium'] . '</p>' ;
        echo '<p class="card-text">Size: ' . $row['image_size'] . '</p>' ;
        echo '<p class="card-text">Availability: ' . $row['image_status'] . '</p>';
        echo '<p class="card-text">Price: ' . $row['image_prize'] . '</p>' ;
        echo '<a href="/smart/paintings/painting_details.php?id=' . $row['id'] . '" class="btn btn-primary">Buy Now</a>';
        echo '</div>';
        echo '</div>'; // Close row
        echo '</div>'; // Close container
    } else {
        echo 'Image not found';
    }
    
    $conn->close();



   
    
    
    
    ?>



    
</body>
</html>