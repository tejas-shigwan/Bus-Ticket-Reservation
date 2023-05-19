<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

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
            <a href="book.php">book</a>
            <a href="cancel.php">cancel</a>

        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!-- header section end  -->

    <div class="heading" style="background:url(images/heading-img-3.png) no-repeat">
        <h1>
            book now
        </h1>
    </div>

    <!-- booking section starts -->

    <section class="booking">

        <h1 class="heading-title">book your trip!</h1>

        <form action="book_form.php" method="post" class="book-form">


            <div class=" flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>gender :</span>
                    <input type="radio" name="gender" id="male" value="male">
                    <label for="male">
                        <font size="+0.5">male</font>
                    </label>
                    <input type="radio" name="gender" id="female" value="female">
                    <label for="female">
                        <font size="+0.5">female</font>
                    </label>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>contact :</span>
                    <input type="number" placeholder="enter your contact" name="phone">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location">
                </div>
                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" placeholder="how many peoples" name="peoples">
                </div>
                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving">
                </div>
                <div class="inputBox">
                    <span>bus selection :</span>
                    <input type="check-box" name="bus">
                </div>



            </div>

            <input type="submit" value="next" class="btn" name="send">


        </form>
        </form>
    </section>

    <!-- booking section ends -->











    <!-- footer section starts -->
    <section class="footer">

        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
                <a href="packages.php"><i class="fas fa-angle-right"></i> packages</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
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

        <div class="credit">created by <span>mr. tejas shigwan</span> | all rights reservered! </div>

    </section>
    <!-- footer section end -->










    <!-- swiper js link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>