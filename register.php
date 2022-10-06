<?php
include 'conn.php';

$user = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];


if (mysqli_num_rows(mysqli_query($con, "SELECT `Username`, `Email` FROM `tbl_users` WHERE `Username`='$user'")) > 0) {
    echo 3;
} else if (mysqli_num_rows(mysqli_query($con, "SELECT `Username`, `Email` FROM `tbl_users` WHERE `Email`='$email'"))) {
    echo 2;
} else {
    $sql = mysqli_query($con, "INSERT INTO `tbl_users`(`Username`,`Email`,`Password`) VALUES('$user','$email','$password')");
    if ($sql) {
        echo 1;
    }
}
