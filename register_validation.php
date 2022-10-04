<?php 
include "conn.php";
$id = $_POST["data_id"];
$key = $_POST["key"];
$cp = $_POST["cp"];
$demo = "rayyan";
if($key != "" ){
$fetch_username_data =mysqli_query($con,"SELECT * FROM `tbl_users` where `Username` ='$key'");
$fetch_email_data =mysqli_query($con,"SELECT * FROM `tbl_users` where `Email` ='$key'");
    if($id == 1){
if(mysqli_num_rows($fetch_username_data) > 0){

    echo '<span class="text-danger fs-7 fw-normal">username already exist</span>';
}
else if(strlen($key) < 10){

        echo '<span class="text-danger fs-7 fw-normal">username was too low</span>';
    }else{
        echo "<span class='text-success fs-7 fw-normal'>that's sounds to be great</span>";
    }

    }else if($id == 2){
        if(mysqli_num_rows($fetch_email_data) > 0){
            echo '<span class="text-danger fs-7 fw-normal">email already exist</span>';
        }else if(strlen($key) < 6){
            echo '<span class="text-danger fs-7 fw-normal">Incorrect email</span>';
        }else{
            echo "<span class='text-success fs-7 fw-normal'>that's sounds to be great</span>";
        }
    }else if($id == 3){
            if(strlen($key) <= 15){
            echo "<span class='text-danger fs-7 fw-normal'>Password should greater than 15 characters</span>";
        }else{
            echo "<span class='text-success fs-7 fw-normal'>that's sounds to be great</span>";
        }
    }else if($id==4){
        if($key == $cp){
            
            echo "<span class='text-success fs-7 fw-normal'>matched</span>";
        }else{
            echo "<span class='text-danger fs-7 fw-normal'>unmatched</span>";
            
}
    }
}else{
    echo 'feilds are empty';
}
?>