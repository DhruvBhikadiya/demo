<?php

    include_once "../../config.php";
    
    $p_id=$_POST['record'];
    $query="DELETE FROM event_place where id='$p_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Places Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>