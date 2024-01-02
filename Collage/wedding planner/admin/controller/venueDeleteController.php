<?php

    include_once "../../config.php";
    
    $v_id=$_POST['record'];
    $query="DELETE FROM event_venue where venue_id='$v_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Venue Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>