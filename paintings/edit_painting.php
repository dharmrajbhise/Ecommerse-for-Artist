<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Paintings</title>

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
    <link rel="stylesheet" href="./../css/add_painting.css" />
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
              <a class="nav-link" href="/smart/artist_dash.php" >Home  &nbsp;<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="add_paintings.php" >Add Paintings &nbsp;<span class="sr-only">(current)</span></a>
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


    <!-- form to add painting -->

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Painting</h4>
                </div>
                <div class="card-body">
                    <?php
                    // Include database connection code or require_once("db_connection.php") if you have a separate file
                    include('./../config.php');

                    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                    // Assume $conn is your database connection
                    $painting_id = $_GET['id']; // Assuming you pass the painting ID via URL parameter

                    // Fetch painting data from database
                    $sql = "SELECT * FROM paintings WHERE id = $painting_id";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        ?>
                        <form action="/smart/paintings/update_painting.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="image_title" id="title" class="form-control" value="<?php echo $row['image_title']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="medium">Medium</label>
                                <input type="text" name="image_medium" id="medium" class="form-control" value="<?php echo $row['image_medium']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="size">Size</label>
                                <input type="text" name="image_size" id="size" class="form-control" value="<?php echo $row['image_size']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" name="image_prize" id="price" class="form-control" value="<?php echo $row['image_prize']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="image_category" id="category" class="form-control" required>
                                    <option value="">Select Category</option>
                                    <option value="Abstract Painting" <?php if ($row['image_category'] == 'Abstract Painting') echo 'selected'; ?>>Abstract Painting</option>
                                    <option value="Realistic Painting" <?php if ($row['image_category'] == 'Realistic Painting') echo 'selected'; ?>>Realistic Painting</option>
                                    <option value="Composition Painting" <?php if ($row['image_category'] == 'Composition Painting') echo 'selected'; ?>>Composition Painting</option>
                                    <option value="Nature/wildlife Painting" <?php if ($row['image_category'] == 'Nature/wildlife Painting') echo 'selected'; ?>>Nature/wildlife Painting</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="image_status" id="status" class="form-control" required>
                                    <option value="">Select Status</option>
                                    <option value="Available" <?php if ($row['image_status'] == 'Available') echo 'selected'; ?>>Available</option>
                                    <option value="Not Available" <?php if ($row['image_status'] == 'Not Available') echo 'selected'; ?>>Not Available</option>
                                </select>
                            </div>
                            <button class="btn btn-primary" type="submit">Update Painting</button>
                        </form>
                    <?php
                    } else {
                        echo "No painting found with ID: $painting_id";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>





     <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>