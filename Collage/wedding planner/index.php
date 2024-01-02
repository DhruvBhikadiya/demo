<?php
include 'config.php';
// $server="localhost";
// $username="root";
// $password="";
// $database = "wedding-planner-site";

// $con=mysqli_connect($server,$username,$password,$database);

// if(!$con){
//      die("conntion is faild due to".mysqli_connect_error());
// }
// echo "successfully conncted to the db";
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wedding planner</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo-1.png">
</head>
<body>
    <!-- <header> -->
    <?php include 'header.php'; ?>
    <!-- </header> -->
    <main>
        
        <!-- BANNER -->

        <section class="banner">
            <h2 class="slogan">SET THE STAGE</h2>
        </section>

        <!-- MEETING AND EVENTS -->

        <section class="meet-event">
            <div class="meet-event-content">
                <div class="header d-flex">
                    <span></span>
                    <h1 class="header">CURATED MEETINGS AND EVENTS</h1>
                    <span></span>
                </div>
                <div class="content">
                    <p>Elevate your next event with the glamour and sophistication of our Art Deco-inspired event spaces. Located in the limestone Heritage Wing of our seaside hotel, our venues offer breathtaking views of the Sorrento foreshore and stylish furnishings bathed in natural light. Perfect for weddings, birthdays, meetings, and special occasions, our versatile spaces can be tailored to fit your needs. From banquet celebrations to cocktail affairs, our flexible event packages offer a range of menu and seating options to create a bespoke experience. Let our skilled events team help you plan the perfect intimate evening or grand soirée. Contact us today to start planning your dream event.</p>
                </div>
            </div>
        </section>

        <!-- BALLROOM -->

        <section class="ballroom d-flex">
            <div id="carousel-1" class="carousel slide w-50" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/ballroom-1.jpg" alt="ballroom-1" title="ballroom-1" width="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="img/ballroom-2.jpg" alt="ballroom-2" title="ballroom-2" width="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="img/ballroom-3.jpg" alt="ballroom-3" title="ballroom-3" width="100%">    
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carousel-1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
            </div>
            <div class="w-50">
                <div class="heading">
                    <h2>Grand Ballroom</h2>
                </div>
                <div class="content">
                    <p>Our spectacular Art Deco style Grand Ballroom effortlessly weaves historic glamour with modern style. Once home to candle lit evenings and grand orchestras, this opulent, boutique style ballroom is the perfect venue for your next function. Natural light floods the space, illuminating polished wooden floors, tailored fittings, and extravagant chandeliers.</p>
                </div>
            </div>
        </section>

        <!-- EVENT SPACES -->

        <section class="event">
            <div class="container">
                <div class="header d-flex">
                    <span></span>
                    <h1 class="header">EVENT SPACES</h1>
                    <span></span>
                </div>
                <div class="content d-flex">
                    <div class="card-1 w-3 me-3 ms-3 mt-5">
                        <div class="card-1-top mb-0">
                            <img src="img/event-1.webp" alt="Halcyon Hall" title="Halcyon Hall" width="100%" height="300px">
                        </div>
                        <div class="card-1-bottom mt-0">
                            <div class="header">
                                <h2>Halcyon Hall</h2>
                            </div>
                            <div class="content">
                                <p>Experience coastal splendour and historic decadence at Halcyon Hall. Celebrate beneath the ambient light of ornate chandeliers, and be inspired by the extravagant Art Deco interior. Our largest event space, the Hall is lined with lofty windows and French doors, revealing ocean views and opening onto Sunset Terrace. Room size: 224 sqm</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-2 w-3 me-3 ms-3 mt-5">
                        <div class="card-2-top">
                            <img src="img/event-2.webp" alt="Sunset Terrace" title="Sunset Terrace" width="100%" height="300px">
                        </div>
                        <div class="card-2-bottom mt-0">
                            <div class="header">
                                <h2>Sunset Terrace</h2>
                            </div>
                            <div class="content">
                                <p>Sunset Terrace is the perfect venue for a refined, yet carefree seaside experience. With room to mingle and entertain, and breathtaking ocean views at your fingertips, immerse your guests in Sorrento’s vibrant coastal atmosphere. This alluring space can also be booked in conjunction with our spectacular Halcyon Hall. Room Size: 135 sqm</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-3 w-3 me-3 ms-3 mt-5">
                        <div class="card-3-top">
                            <img src="img/event-3.webp" alt="The Gallery" title="The Gallery" width="100%" height="300px">
                        </div>
                        <div class="card-3-bottom mt-0">
                            <div class="header">
                                <h2>The Gallery</h2>
                            </div>
                            <div class="content">
                                <p>A sophisticated and versatile space, The Gallery is the perfect venue for an elegant meeting or intimate event. Large windows flood the room with natural light and provide ocean views. This space is ideal for a meeting of the minds, with precisely tailored furnishings and packages available to suit your needs. Room size: 105 sqm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PACKAGE -->

        <section class="package">
            <div class="container">
                <div class="header d-flex">
                    <span></span>
                    <h1 class="header">EVENTS AND WEDDINGS PACKAGES</h1>
                    <span></span>
                </div>
                <div class="content d-flex">
                    <div class="card-1 w-3 me-3 ms-3 mt-5">
                        <div class="card-1-top mb-0">
                            <img src="img/packege-1.webp" alt="Halcyon Hall" title="Halcyon Hall" width="100%" height="300px">
                        </div>
                        <div class="card-1-bottom mt-0">
                            <div class="header">
                                <h3>Weddings at InterContinental Sorrento</h3>
                            </div>
                            <div class="content">
                                <p>Celebrate your dream wedding at an iconic seaside destination. Allow us to bring your vision to life, and embark on life’s biggest adventure surrounded by sun-kissed limestone, timeless elegance, and a vibrant coastal atmosphere. Select one of our packages, or create a truly personalised experience with our Events team. Plan your dream day. Contact one of our Events Specialists at</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-2 w-3 me-3 ms-3 mt-5">
                        <div class="card-2-top">
                            <img src="img/packege-2.webp" alt="Sunset Terrace" title="Sunset Terrace" width="100%" height="300px">
                        </div>
                        <div class="card-2-bottom mt-0">
                            <div class="header">
                                <h3>Sorrento Private Residence Package</h3>
                            </div>
                            <div class="content">
                                <p>Create a truly bespoke event with Sorrento Private Residence. Carefully tailored to those seeking a private and collaborative space to enhance their business and connect as a team, this package includes exclusive use of the hotel’s accommodation and Pool Deck, sole access to three elegant meeting spaces, and select meals created by award-winning chef, Scott Pickett.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-3 w-3 me-3 ms-3 mt-5">
                        <div class="card-3-top">
                            <img src="img/packege-3.jpg" alt="The Gallery" title="The Gallery" width="100%" height="300px">
                        </div>
                        <div class="card-3-bottom mt-0">
                            <div class="header">
                                <h3>Be Rewarded</h3>
                            </div>
                            <div class="content">
                                <p>Make event planning more rewarding with IHG® Business Rewards. Earn 3 points* for every $1USD spent on qualifying bookings made for others. Enjoy access to all of the redemption options available in our IHG Rewards Club global catalogue, including hotel stays, air travel, and much more. *Terms and conditions apply.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

       <?php include 'footer.php';?>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>