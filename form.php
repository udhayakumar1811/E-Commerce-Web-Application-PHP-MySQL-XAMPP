<?php
$f = $_POST['firstname'];
$l = $_POST['lastname'];
$p = $_POST['pass'];

$con = mysqli_connect("localhost", "root", "", "sopping");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO signin (firstname, lastname, pass) VALUES ('$f', '$l', '$p')";

$r = mysqli_query($con, $sql);

if ($r) {
    echo "Sign In success";
} else {
    echo "Sign In Failed: " . mysqli_error($con);
}

mysqli_close($con);
?>
