<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "alkhairmath";

// Create a database connection
$con = mysqli_connect($server, $username, $password, $db);

// Check for connection success
if (!$con) {
    "<h1>REQUEST FAILED<h2>";
    "<br>";
    die("connection to this database failed due to" . mysqli_connect_error());
}



$result = mysqli_query($con, "SELECT * FROM upload");

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="all.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="styles.css">

  <title>ALKHAIR MATH</title>
</head>

<body>



  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a href="#" class="navbar-brand">ALKHAIR MATH X</a>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">We are working on this function</button>
      </form>
    </div>
  </nav>

  <div id="carouselExampleSlidesOnly top" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://source.unsplash.com/1600x800/?school,education" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1600x800/?school,math" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1600x800/?school,teacher" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>

  <div class="container-fluid main">
    <h1 class="heading">Get Your Work Done</h1>

    <div class="row">
      <!--  -->
    <?php
    while ($row = mysqli_fetch_array($result)) {
    
  
      echo "<div class='col-sm-3'>";
        echo "<div class='card'>";
        echo "<img src='uploads/".$row['pic']."' class='card-img-top' alt='...' >";
          echo '<div class="card-body">';
            echo "<h5 class='card-title'> ".$row['title']." </h5>";
            echo "<p class='card-text'> ".$row['description']." </p>";
            echo "<p class='card-text'>uploaded on: ".$row['dt']." </p>";
            echo "<a href='zip-uploads/".$row['file']."' download class='btn btn-primary'>download</a>";
          echo "</div>";
       echo "</div>";
      echo "</div>";
      }
      ?>

    </div>
  </div>


  <form action="commented.php" method="POST" style="padding: 100px;margin: auto;">
    <h1 style="margin: auto;">FEEDBACK</h1>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input required style="border: 2px solid black;" type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="comment" class="form-label">comment</label>
      <textarea style="border: 2px solid black;" class="form-control" id="comment" name="comment" cols="30" rows="5">Help Us To Improve With Your comments</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <dive class="container-fluid bg-dark mb-0" width="100">
  <span style="color:white;" >if you are a site owner:</span>
  <a style="
   color: rgb(255, 255, 255);
    text-decoration: underline;
    border: none;
    margin-left: 0;
    margin-bottom: 0;" class=" dash " href="login.php" target="_blank" rel="noopener noreferrer">GO TO DASHBOARD</a>
  </dive>

</body>

</html>