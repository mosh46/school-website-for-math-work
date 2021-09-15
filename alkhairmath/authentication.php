<?php

$user = $_POST['user'];
$pass = $_POST['pass'];

if($pass=="pass"  and $user=="user"){
    ?>
    <h1>WE ARE REDIRECTING TO DASHBOARD</h1>
    <?php
    header("Location: dashboard.php");
    die();
    ?>
<?php
}
else{
    ?>
    <h1>YOU ARE NOT ADMIN DONT TRY TO LOGIN AGAIN</h1>

<?php
header("Location: index.php");
die();
}
?>
