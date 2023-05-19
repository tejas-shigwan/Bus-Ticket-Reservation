<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <section class="payment">

        <div class="container">

            <form action="book_form.php" method="POST" class="payment-form">

                <div class="row">

                    <div class="col">
                        <h3 class="title">booking information</h3>

                        <div class="inputBox">
                            <span>full name :</span>
                            <input type="text" placeholder="john deo" name="name">
                        </div>
                        <div class="inputBox">
                            <span>email :</span>
                            <input type="email" placeholder="example@gmail.com" name="email">
                        </div>
                        
                        <div class="input_field">
                            <label>gender :</label>
                            <div class="custom_select">
                                <select name="gender" required>
                                    <option value="">Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                            

                        </div>
                        <div class="inputBox">
                            <span>where to :</span>
                            <input type="text" placeholder="place you want to visit" name="location">
                        </div>
                        
                        <div class="inputBox">
                            <span>how many :</span>
                            <input type="number" placeholder="how many peoples" name="peoples">
                        </div>

                        <div class="input_field">
                            <label>bus :</label>
                            <div class="custom_select">
                                <select name="bus" required>
                                    <option value="">Select</option>
                                    <option value="Shigwan AC Bus">Shigwan AC Bus</option>
                                    <option value="Kadam AC Bus">Kadam AC Bus</option>
                                    <option value="Kadam Non-AC Bus">Kadam Non-AC Bus</option>
                                    <option value="Shukla AC Bus">Shukla AC Bus</option>
                                    <option value="Singh AC Bus">Singh AC Bus</option>
                                    <option value="Singh Non-AC Bus">Singh Non-AC Bus</option>
                                    <option value="Harsh Non-AC Bus">Harsh Non-AC Bus</option>
                                    <option value="Shinde AC Bus">Shinde AC Bus</option>
                                    <option value="Shinde Non-AC Bus">Shinde Non-AC Bus</option>
                                </select>
                            </div>

                        <div class="inputBox">
                            <span>arrivals :</span>
                            <input type="date" name="arrivals">
                        </div>
                        <div class="inputBox">
                            <span>leaving :</span>
                            <input type="date" name="leaving">
                        </div>
                        

                        <!-- <div class="flex">
                        <div class="inputBox">
                                <span>state :</span>
                                <input type="text" placeholder="india">
                            </div>
                            <div class="inputBox">
                                <span>zip code :</span>
                                <input type="text" placeholder="123">
                            </div>
                        </div> -->

                    </div>

                    <div class="col">
                        <h3 class="title">payment</h3>

                        <div class="inputBox">
                            <span>card accepted :</span>
                            <img src="images/card_img.png" alt="">
                        </div>
                        <div class="inputBox">
                            <span>name on card :</span>
                            <input type="text" placeholder="mr. john deo" name="card">
                        </div>
                        <div class="inputBox">
                            <span>credit card number :</span>
                            <input type="number" placeholder="1111-2222-3333" name="cardno">
                        </div>
                        <div class="inputBox">
                            <span>payment :</span>
                            <input type="number" placeholder="per person ₹100" name="payment">
                        </div>
                        <div class="inputBox">
                            <span>address :</span>
                            <input type="text" placeholder="room - stree - locality" name="address">
                        </div>
                        <div class="inputBox">
                            <span>exp month :</span>
                            <input type="text" placeholder="january" name="month">
                        </div>

                        <div class="flex">
                            <div class="inputBox">
                                <span>exp year :</span>
                                <input type="number" placeholder="2022" name="year">
                            </div>
                            <div class="inputBox">
                                <span>CVV :</span>
                                <input type="text" placeholder="1234" name="cvv">
                            </div>
                            <div class="inputBox">
                                <span>city :</span>
                                <input type="text" placeholder="mumbai" name="city">
                            </div>
                            
                            
                        </div>

                    </div>
                </div>

                <input type="submit" value="submit" class="submit-btn" name="send">
                <a href="home.php"   value="home" input type="home">Back to home</a>



            </form>


        </div>

    </section>

</body>

</html>

