<?php
    include_once "../../config.php";
    
    if(isset($_POST['upload']))
    {
       
        $venuename = $_POST['v_name'];
       
         $insert = mysqli_query($conn,"INSERT INTO event_venue
         (venue_name) 
         VALUES ('$venuename')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../index.php?venue=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../index.php?venue=success");
         }
     
    }
        
?>