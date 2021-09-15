<?php
// Set connection variables
$server = "localhost";
$username = "root";
$password = "";

// Create a database connection
$con = mysqli_connect($server, $username, $password);

// Check for connection success
if (!$con) {
    "<h1>REQUEST FAILED<h2>";
    "<br>";
    die("connection to this database failed due to" . mysqli_connect_error());
}
// echo "Success connecting to the db";

$email = $_POST['email'];
$comment = $_POST['comment'];
$sql = "INSERT INTO `alkhairmath`.`comment` (`sr.no`, `email`, `comment`, `dt`) VALUES (NULL, '$email', '$comment', current_timestamp());";

"<br>";
//echo $sql;

// Execute the query
if ($con->query($sql) == true) {
    // echo "Successfully inserted";
    "<h1>Thank you For Your Feedback";
    // Flag for successful insertion
    $insert = true;
    //echo "done";
} else {
    echo "ERROR: $sql <br> $con->error";
}

// Close the database connection
$con->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .loader {
            border: 16px solid #f3f3f3;
            /* Light grey */
            border-top: 16px solid #3498db;
            /* Blue */
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        button {
            margin-top: 50%;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="all.css">
</head>

<body>

    <h1>THANK YOU FOR YOUR FEEDBACK</h1>
    <h1>GOING BACK</h1>
    <div class="loader"></div>
    <button><a href="index.html">GO BACK</a></button>
    <?php
    header("refresh:3;url=index.php");
    die();
    ?>
</body>

</html>