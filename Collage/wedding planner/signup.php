<?php
$showAlert = true;
if($_SERVER["REQUEST_METHOD"] == "POST"){

    include 'config.php';
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $mobileno=$_POST["mobileno"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $Cpasswoed=$_POST["Cpassword"];
    $exists=false;
    if(($password == $Cpasswoed) && $exists==false){
        // $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` (`firstname`, `lastname`, `mobileno`, `email`, `password`) VALUES ('$firstname', '$lastname', '$mobileno', '$email', '$password');";
        $result = mysqli_query($conn,$sql);
        if($result){
            $showAlert = false;
        }
        header ("location: login.php");
    }
    else{
        $password = "password do not match";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
</head>
<body>
        <div class="login d-flex">
            <div class="w-35">
                <h2>Hello, Friend!</h2>
                 <p>Enter your personal details and start journey with us</p>
            </div>
        
            <div class="w-65">
                <h1>Welcome to D2M wedding planner</h1>
                <form action="/wedding planner/signup.php" method="POST">
                    <label for="firstname">First name</label><br>
                    <input type="text" id="firstname" name="firstname" placeholder="enter your first name" required autofocus><br><br>
                    <label for="lastname">Last name</label><br>
                    <input type="text" id="lastname" name="lastname" placeholder="enter your Last name" required><br><br>
                    <label for="mobileno">Mobile No</label><br>
                    <input type="text" id="mobileno" name="mobileno" placeholder="enter mobile number" required><br><br>
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" placeholder="enter your email" required><br><br>
                    <label for="Password">Password</label><br>
                    <input type="password" id="password" name="password" placeholder="enter your password" required><br><br>
                    <label for="Cpassword">Confirm Password</label><br>
                    <input type="password" id="Cpassword" name="Cpassword" placeholder="enter your password" required><br>
                    <small>Make sure your password strong.</small><br><br>
                    <button class="btn">SignUp</button><br><br>
                    <a href="login.php">LOGIN </a>
                </form>
        </div>
    
</body>
</html>