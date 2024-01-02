<?php

    include_once "../../config.php";
    
    $v_id=$_POST['record'];
    $query="DELETE FROM wedding_form where id='$v_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Booking Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>