<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section start  -->

<section class="header">

<a href="home.php" class="logo">Bus Reservation</a>

<nav class="navbar">
<a href="home.php">home</a>
<a href="about.php">about</a>
<a href="packages.php">packages</a>
<a href="cancel.php">check</a>
<a href="payment.php">payment</a>

</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section end  -->

<!-- home section starts  -->

<section class="home">
<div class="swiper home-slider">

<div class="swiper-wrapper">

    <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
        <div class="content">
           <span>explore, discover, travel</span>
           <h3>travel around the cities</h3>
           <a href="packages.php" class="btn">discover more</a>
        </div>
    </div>

    <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
        <div class="content">
           <span>explore, discover, travel</span>
           <h3>discover the new places</h3>
           <a href="packages.php" class="btn">discover more</a>
        </div>
    </div>

    <div class="swiper-slide slide" style="background:url(images/home-slide-3.png) no-repeat">
        <div class="content">
           <span>explore, discover, travel</span>
           <h3>enjoy the travelling with us</h3>
           <a href="packages.php" class="btn">discover more</a>
        </div>
    </div>

</div>

<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>

</div>

</section>

<!-- home section end  -->

<!-- services section starts  -->

<section class="services">
<h1 class="heading-title"> our services</h1>

<div class="box-container">

    <div class="box">
        <img src="images/icon-1.png" alt="">
        <h3>adventure</h3>
    </div>

    <div class="box">
        <img src="images/icon-2.png" alt="">
        <h3>tour guide</h3>
    </div>

    <div class="box">
        <img src="images/icon-3.png" alt="">
        <h3>trekking</h3>
    </div>

    <div class="box">
        <img src="images/icon-4.png" alt="">
        <h3>camp fire</h3>
    </div>

    <div class="box">
        <img src="images/icon-5.png" alt="">
        <h3>off road</h3>
    </div>

    <div class="box">
        <img src="images/icon-6.png" alt="">
        <h3>camping</h3>
    </div>


</div>

</section>

<!-- services section ends  -->

<!-- hoome about section starts  -->

<section class="home-about">

    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>we provide the best services to our customers and offers also to explore the outside world !</p>
        <a href="about.php" class="btn">read more</a>
    </div>
</section>

<!-- home about section is ends -->

<!-- home package section starts -->

<section class="home-packages">

 <h1 class="heading-title"> our packages </h1>

 <div class="box-container">

    <div class="box">
        <div class="image">
            <img src="images/img-1.png" alt="">
        </div>
        <div class="content">
            <h3>mumbai darshan</h3>
            <p>Mumbai is a city that has been the inspiration for writing many beautiful stories and making several movies.</p>
            <a href="payment.php" class="btn">₹100 book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/img-2.png" alt="">
        </div>
        <div class="content">
            <h3>pune</h3>
            <p>If Mumbai is the most happening place in Maharashtra, then it's neighbour Pune is the cultural hub and the biggest city in the state.</p>
            <a href="payment.php" class="btn">₹100 book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/img-3.png" alt="">
        </div>
        <div class="content">
            <h3>lonavala</h3>
            <p>Lonavala city is one of the most beautiful retreats, that takes you away from the maddening rush of the metropolises. It is located in the western part of India in the Pune district of Maharashtra</p>
            <a href="payment.php" class="btn">₹100 book now</a>
        </div>
    </div>

 </div>

 <div class="load-more"> <a href="packages.php" class="btn">load more</a> </div>

</section>

<!-- home package section ends -->

<!-- home offer section starts -->

<section class="home-offer">
    <div class="content">
        <h3>50% off</h3>
        <p>For festival seasons or Book more than 5 seats you will ultimately eligible for our offer !</p>
        <a href="payment.php" class="btn">Book now</a>
    </div>
</section>

<!-- home offer section ends -->












<!-- footer section starts -->
<section class="footer">

<div class="box-container">
    <div class="box">
        <h3>quick links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
        <a href="packages.php"><i class="fas fa-angle-right"></i> packages</a>
        <a href="payment.php"><i class="fas fa-angle-right"></i> book</a>
    </div>

    <div class="box">
        <h3>extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i> about us</a>
        <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
    </div>

    <div class="box">
        <h3>contact info</h3>
        <a href="#"><i class="fas fa-phone"></i> +123-456-3210</a>
        <a href="#"><i class="fas fa-phone"></i> +111-222-3233</a>
        <a href="#"><i class="fas fa-envelope"></i> teja@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i> mumbai, india - 400078 </a>

    </div>

    <div class="box">
        <h3>follow us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
    </div>
    
</div>

<div class="credit">created by <span>Our Team Members</span> | all rights reservered! </div>

</section>
<!-- footer section end -->










<!-- swiper js link  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>