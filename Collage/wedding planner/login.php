<?php 
include 'config.php';
    $login = false;
    $showError = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            $userdata = mysqli_fetch_assoc($result);
            // if (password_verify($password, $userdata['password'])) {
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                
                $_SESSION['role'] = $userdata['role'];
                $_SESSION['email'] = $email;
                if($userdata['role'] == 1)
                {
                    header ("location: admin/index.php");
                }
                else {                            
                    header ("location: index.php");
                }
            // }
        }
        else{
            $showError = "Invalid user";
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="login d-flex">
        <div class="w-65">
            <h1>Welcome to D2M wedding planner</h1>
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                <label name="email">Email</label>
                <br><br>
                <input type="email" name="email" placeholder="enter your email" required autofocus>
                <br><br>
                <label name="password">Password</label>
                <br><br>
                <input type="password" name="password" placeholder="enter your password" required>
                <br><br>
                <button>Login</button>
                <br><br>
                <a href="signup.php">create account</a>
            </form>
        </div>
        <div class="w-35">
            <h2>Welcome Back!</h2>
            <p>to keep connected with us please login with your personal info</p>
        </div>
    </div>
</body>
</html>