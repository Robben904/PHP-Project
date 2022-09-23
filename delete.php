<?php
include 'config.php';


$id=$_GET['delete'];

    $query="delete from students where id='$id'";
    $result=mysqli_query($conn, $query);
    if($result){
        //echo"Delete Successful";
        header("location: admin_dashboard.php");
    }
    else{
        die(mysqli_error($conn));
    }

?>