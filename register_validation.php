<?php 

include 'conn.php';
if(isset($_POST['user']))
{
    $key = $_POST['key'];
    $sql = mysqli_query($con,"SELECT `Username` FROM `tbl_users` WHERE `Username`='$key'");
    if(mysqli_num_rows($sql) > 0) 
    {
        echo "user";
    }
    else{
        echo "cor user";
    }
}
if(isset($_POST['email']))
{
    $key = $_POST['key'];
    $sql = mysqli_query($con,"SELECT `Email` FROM `tbl_users` WHERE `Email`='$key'");
    if(mysqli_num_rows($sql) > 0)
    {
        echo "email";
    }
    else{
        echo "cor email";
    }
}

?>