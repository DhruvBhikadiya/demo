<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wedding planner</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="icon" href="img/logo-1.png">
    <link rel="stylesheet" type="text/css" href="css/inquiry.css">
   
</head>
<body>
    <?php include 'header.php' ?>

    <div class="container">
        <h1>Wedding Contact Form</h1>
        <form action="#" method="post" style="margin-top : 180px">
            <label for="fname">First Name:</label>
            <input type="text" id="lname" name="lname" placeholder="Enter your First Name" required>
            <br><br>

            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" placeholder="Enter your Last Name" required>
            <br><br>


            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your Phone Number" required>
            <br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your Email" required>
            <br><br>

          

            <label for="attendees">Number of Attendees:</label>
            <input type="number" id="attendees" name="attendees" placeholder="Enter your Number Attendees" required>
            <br><br>

            <label for="Cname">Comapny Name:</label>
            <input type="text" id="cname" name="cname" placeholder="Enter your company Name" required>
            <br><br>
          

            <label for="comments">Comments:</label>
            <textarea id="comments" name="comments" rows="4" placeholder="Enter your Comments" ></textarea>
            <br><br>

            <button type="submit" class="btn" id="btn1">Submit</button>
        </form>
    </div>
    <?php include 'footer.php';?>
</body>
</html>