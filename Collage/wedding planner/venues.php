<?php include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" href="css/venues.css">
</head>
<body>
<header><?php include 'header.php';?></header>

<section id="secondsection" style="margin-top : 220px">
        <div class="ourroom">
            <center>
            <h1 class="head my-4">≼ Our room ≽</h1>
            </center>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
            <div class="roomselect">
                <div class="row gap-5 justify-content-around">
            <?php
                            $sql = "SELECT * FROM event_place, event_venue where event_venue.venue_id = event_place.venue_id";
                            $result = mysqli_query($conn,$sql);
                            if (mysqli_num_rows($result) > 0) { 
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                <div class="roombox col-md-3" style="width:21%;">
                    <div class="hotelphoto"><img src="admin/<?php echo $row['event_img']; ?>" alt=""></div>
                    <div class="roomdata">
                        <h2><?php echo $row['venue_name']; ?></h2>
                        <p><?php echo $row['description']; ?></p>
                        <div class="services">
                            <i class="fa-solid fa-wifi"></i>
                            <i class="fa-solid fa-burger"></i>
                            <i class="fa-solid fa-spa"></i>
                            <i class="fa-solid fa-dumbbell"></i>
                            <i class="fa-solid fa-person-swimming"></i>
                        </div>
                        <a href="wddingform.php">Book Now</a>
                    </div>
                </div>
                <?php 
                                }
                            }
                            else{
                                echo "<h2>No Record Found.</h2>";
                            }
                            ?>
                            </div>
            </div>
            </div>
            </div>
            </div>
        </div>
    </section>

<?php include 'footer.php';?>    
</body>
</html>