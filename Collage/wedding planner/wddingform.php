<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Package Form</title>
   <link rel="stylesheet" href="css/weddingform.css">
</head>
<body>
    <div class="container">
        <h1>Wedding Package Form</h1>
        <div class="close">
            <a href="venues.php">x</a>
        </div>
        <form action="#" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="rooms">Number of Rooms Needed:</label>
            <input type="text" id="rooms" name="rooms" required>

            <label for="attendees">Number of Attendees:</label>
            <input type="text" id="attendees" name="attendees" required>

            <div class="form-group">
                <label for="start-date">Function Start Date:</label>
                <input type="date" id="start-date" name="start_date" required>

                <label for="end-date">Function End Date:</label>
                <input type="date" id="end-date" name="end_date" required>
            </div>

            <label for="comments">Comments:</label>
            <textarea id="comments" name="comments" rows="4"></textarea>

            <!-- <a href="venues.php">Submit</a> -->
            <input type="submit" name="booknow">
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['booknow'])) {
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $rooms=$_POST['rooms'];
    $attendees=$_POST['attendees'];
    $start_date=$_POST['start_date'];
    $end_date=$_POST['end_date'];
    $comments=$_POST['comments'];

    if($name == "" || $email == ""){
        echo "<script>alert('Fill the proper details')
        </script>";
    }
    else{
        $sql = "INSERT INTO wedding_form(name,phone,email,rooms,attendees,start_date,end_date,comments,nodays) VALUES ('$name','$phone','$email','$rooms','$attendees','$start_date','$end_date','$comments',datediff('$end_date','$start_date'))";
        $result = mysqli_query($conn, $sql);    

        
            if ($result) {
                echo "<script>alert('Wedding Successful')
            </script>";
            header ("location: index.php");
            } else {
                echo "<script>alert('Something went wrong')
            </script>";
            }
    }
}
?>