
<?php include 'config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wedding planner</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/package.css">
    <link rel="icon" href="img/logo-1.png">
</head>
<body>
    <header>
        <div class="logo-reservation d-flex justify-between">
            <button class="toggle">+</button>
            <img src="img/logo.png" alt="logo" title="logo" class="logo">
            <!-- <div class="btn">
                <a href="logout.php" class="reservation">Logout</a>
            </div> -->
            <button class="btn reservation"><a href="logout.php">Logout</a></button>
        </div>
        <div class="menu d-flex justify-center">
            <nav class="justify-between">
                <ul class="menubar d-flex justify-center">
                    <a href="index.php"><li class="mx-10">HOME</li></a>
                   
                    <a href="venues.php"><li class="mx-10">VENUES</li></a>
                    <a href="blog.php"><li class="mx-10">BLOG</li></a>
                    <a href="inquiry.php"><li class="mx-10">ENQUIRY</li></a>
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>