<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['name'])) {
    ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>HOTEL GP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style1.css">
        <link rel = "icon" href = "images/logo.png" type = "image/png">
        <script src="https://kit.fontawesome.com/421e558d95.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" type="text/css" href=".css"> -->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
    crossorigin="anonymous" />
    </head>
    <body>
        <!-- header -->
        <header class = "header" id = "header">
            <div class = "head-top">
                <div class = "site-name">
                    <span>THE SAVORY</span>
                </div>
                <div class = "site">
                    <ul>
                    <li><a class="nav-link" href="logout.php">Log out</a></li>
                       <li><a href = "index1.php">Sign up</a></li>
                    </ul>
                </div>
            </div>

            <div class = "head-bottom flex">
                <h2>A COMFORT PLACE FAR FROM HOME</h2>
            </div>
        </header>
        <!-- end of header -->

        <!-- side navbar -->
        <div class = "sidenav" id = "sidenav">
            <span class = "cancel-btn" id = "cancel-btn">
                <i class = "fas fa-times"></i>
            </span>

            <ul class = "navbar">
                <li><a href = "#header">home</a></li>
                <li><a href = "#services">services</a></li>
                <li><a href = "#rooms">rooms</a></li>
                <li><a href = "#customers">customers</a></li>
            </ul>
            <button class = "btn sign-up">sign up</button>
            <button class = "btn log-in">log in</button>
        </div>
        <!-- end of side navbar -->

        <!-- fullscreen modal -->
        <div id = "modal"></div>
        <!-- end of fullscreen modal -->

        <!-- body content  -->
        <section class = "services sec-width" id = "services">
            <div class = "title">
                <h1>services</h1>
            </div>
            <div class = "services-container">
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-utensils"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Food Service/ Food Runner</h2>
                        <p>We service our customers to a royal multi cuisine restaurant. Our multitalented staff with skilled chefs from Italy and Hungary. We want to make your holidays worthfull at The Savory</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-swimming-pool"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Refreshment</h2>
                        <p>Refreshments like welcome drinks, swimming pool , pool games, ampitheatre, personal home theatre, spa and massage for your royal stay. We will provide musical night, candle light dinner !</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-broom"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Housekeeping</h2>
                        <p>Our skilled workers are always ready to serve you 24x7, Room cleaning, ordering food to room services, our staff is always ready to help you out!</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-door-closed"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Room Security</h2>
                        <p>The Savory keeps all the note on the security terms. Our staff is fully awared with your precious things so we have keep a locker placed in every rooms and more lockers are alloted as per the need of the customer!</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
            </div>
          </div>
        </section>

        <div class = "book">
            <h2>Book your Room </h2><br>
            <a href="register.php" > <button type = "button" style="color = #00FF00; " >rooms</button> </a>
        </div>

        <section class = "rooms sec-width" id = "rooms">
            <div class = "title">
                <h1>rooms</h1>
            </div>
            <div class = "rooms-container">
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "hotel-room-type-xotels-hotel-management-company.webp">
                    </div>
                    <div class = "room-text">
                        <h3>Luxury Rooms</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Comfort.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Royalty.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Service.
                            </li>
                        </ul>
                        <p>A home far from your own. Treated with royalty. A well frangrant auroma, furnished, cosy lights with unlimited ammenities like personal room lockers, Italian marble floor.</p>
                        <p>100percent egyptian cotton bedsheets, cosy lights, 24x7 room service, a telephone to connect with us.</p>
                        <p class = "rate">
                            <span>Rs. 7999.00 /</span> Per Night
                        </p>
                        <button type = "button" class = "btn">book now</button>
                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "cq5dam.web.1280.1280.jpeg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Luxury Rooms</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Comfort.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Royalty.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Service.
                            </li>
                        </ul>
                        <p>A home far from your own. Treated with royalty. A well frangrant auroma, furnished, cosy lights with unlimited ammenities like personal room lockers, Italian marble floor.</p>
                        <p>100percent egyptian cotton bedsheets, cosy lights, 24x7 room service, a telephone to connect with us.</p>
                        <p class = "rate">
                            <span>Rs. 7999.00 /</span> Per Night
                        </p>
                        <button type = "button" class = "btn">book now</button>
                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
            </div>
        </section>

        <section class = "customers" id = "customers">
            <div class = "sec-width">
                <div class = "title">
                    <h1>customers</h1>
                </div>
                <div class = "customers-container">
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>We Loved it</h3>
                        <p>This hotel is nice place to stay, we book this hotel by this web site. wild life sanctuary is very awesome... I Love Blackbuck.<br><br><br><br><br><br><br><br></p>
                        <span>Salmon Bhai, India</span>
                    </div>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Comfortable Living</h3>
                        <p>Hotel rooms are very comfortable. Food is also nice. I like to stay here with my friend KR$NA and Raftaar. Malum hai naaa...<br><br><br><br><br><br><br><br></p>
                        <span>Emiway Bantai, India</span>
                    </div>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Nice Place</h3>
                        <p>Hotel is on perfect location. Tourist places are on walking distance. Booking is very easy by using this web site. I am giving it 4 stars out of 5.<br><br><br><br><br><br><br><br></p>
                        <span>Kamleshh, India</span>
                    </div>
                    <!-- end of single customer -->
                </div>
            </div>
        </section>
        <!-- end of body content -->
        
        <!-- footer -->
        <footer class = "footer">
            <div class = "footer-container">
                <div>
                    <h2>About Us </h2>
                    <p>This web site provide information about hotel and you can also book rooms by this web site.</p>
                    <ul class = "social-icons">
                        <li class = "flex"><a href = "https://twitter.com/thecharusat?lang=en">
                            <i class = "fa fa-twitter fa-2x"></i></a>
                        </li>
                        <li class = "flex"><a href = "https://www.facebook.com/CHARUSAT/">
                            <i class = "fa fa-facebook fa-2x"></i></a>
                        </li>
                        <li class = "flex"><a href = "https://www.instagram.com/thecharusat/">
                            <i class = "fa fa-instagram fa-2x"></i></a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2>Useful Links</h2>
                    <a href = "#">Blog</a>
                    <a href = "#rooms">Rooms</a>
                    <a href = "register.php">Booking</a>
                    <a href = "review.php">Review</a>
                </div>

                <div>
                    <h2>Privacy</h2>
                    <a href = "#">Career</a>
                    <a href = "about.html">About Us</a>
                    <a href = "contact.html">Contact Us</a>
                    <a href = "#services">Services</a>
                </div>

                <div>
                    <h2>Have A Question</h2>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                        </span>
                        <span>
                            CSPIT-CE Charusat University, Nadiad, Gujrat, India.
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                            +91 9106626774
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span>
                            aaryshah777@gmail.com
                        </span>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>

<?php
}else{
    header("Location: index.php");
    exit();
}
?>