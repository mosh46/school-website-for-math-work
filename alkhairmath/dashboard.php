<?php

$server = "localhost";
$username = "id17541431_alkhairmath1";
$password = "e!(q^)2x2dmCSvQ=";
$db = "id17541431_alkhairmath";


// Create a database connection
$con = mysqli_connect($server, $username, $password, $db);

// Check for connection success
if (!$con) {
    "<h1>REQUEST FAILED<h2>";
    "<br>";
    die("connection to this database failed due to" . mysqli_connect_error());
}
$user = $_POST['user'];
$pass = $_POST['pass'];

$result = mysqli_query($con, "SELECT * FROM comment");

if ($pass == "iamuzair@alkhairmath123"  and $user == "uzair3w3@gmail.com") { ?>
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <title>Dashboard</title>
        <style>
            .upload {
                margin-top: 10%;
            }

            .dash {
                color: rgb(255, 255, 255);
                text-decoration: none;
                border: 2px solid black;
                margin-left: 45%;
                margin-bottom: 5%;
            }
        </style>
    </head>

    <body>
        <h1>Dashboard</h1>
        <div class="container">
            <form action="uploader.php" method="post" enctype="multipart/form-data" class="upload">
                <h1>upload new work</h1>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">YOUR NAME</span>
                    <input type="text" required name="name" class="form-control" placeholder="AUTHOR NAME" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <label for="title">Title</label>
                <div class="input-group mb-3">
                    <input type="text" required name="title" id="title" name="title" class="form-control" placeholder="Title" aria-label="Username">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Description</span>
                    <textarea name="desc" required class="form-control" aria-label="With textarea"></textarea>
                </div>

                <label for="pic">Picture</label>
                <div class="input-group mb-3">
                    <input type="file" required name="pic" id="pic" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                </div>

                <label for="file">File</label>
                <div class="input-group mb-3">
                    <input type="file" name="file" required id="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                </div>
                <button type="submit" name="submit" class="btn btn-primary dash">Upload</button>

            </form>
        </div>

        <div class="com">
            <table class='table'>
                <thead>

                    <th scope='col'>#</th>
                    <th scope='col'>email</th>
                    <th scope='col'>message</th>
                    <th scope='col'>date</th>

                </thead>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tbody>";

                    echo "<td> " . $row['sr.no'] . " </td>";
                    echo "<td> " . $row['email'] . " </td>";
                    echo "<td> " . $row['comment'] . " </td>";
                    echo "<td> " . $row['dt'] . " </td>";


                    echo "</tbody>";
                }
                ?>
            </table>
        
        <div style="text-align: center;color:white;" class="container-fluid bg-dark mb-0">all rights reserved</div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>

    </html><?php
        } else {
            ?>
    <h1>YOU ARE NOT ADMIN DONT TRY TO LOGIN AGAIN</h1>

<?php
            header("Location: index.php");
            die();
        } ?>
