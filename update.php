<?php
$id = $_GET['id'];

$conn = mysqli_connect("localhost", "root", "", "book_db");
$sql = "SELECT * FROM book_form where id =  '$id'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
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

            <form action="" method="POST" class="payment-form">

                <div class="row">

                    <div class="col">
                        <h3 class="title">update information</h3>

                        <div class="inputBox">
                            <span>full name :</span>
                            <input type="text" value="<?php echo $row['name']; ?>" placeholder="john deo" name="name">
                        </div>
                        <div class="inputBox">
                            <span>email :</span>
                            <input type="email" value="<?php echo $row['email']; ?>" placeholder="example@gmail.com" name="email">
                        </div>
                        <div class="inputBox">
                            <span>address :</span>
                            <input type="text" value="<?php echo $row['address']; ?>" placeholder="room - stree - locality" name="address">
                        </div>
                        <div class="input_field">
                            <label>gender :</label>
                            <div class="custom_select">
                                <select name="gender" required>
                                    <option value="">Select</option>
                                    <option value="male" <?php
                                                            if ($row['gender'] == 'male') {
                                                                echo "selected";
                                                            }

                                                            ?>>Male</option>
                                    <option value="female" <?php
                                                            if ($row['gender'] == 'female') {
                                                                echo "selected";
                                                            }

                                                            ?>>Female</option>
                                </select>
                            </div>

                        </div>

                        <div class="inputBox">
                            <span>where to :</span>
                            <input type="text" value="<?php echo $row['location']; ?>" placeholder="place you want to visit" name="location">
                        </div>
                        <div class="inputBox">
                            <span>how many :</span>
                            <input type="number" value="<?php echo $row['peoples']; ?>" placeholder="how many peoples" name="peoples">
                        </div>

                        <div class="input_field">
                            <label>bus :</label>
                            <div class="custom_select">
                                <select name="bus" required>
                                    <option value="">Select</option>
                                    <option value="Shigwan AC Bus" <?php
                                                                    if ($row['bus'] == 'Shigwan AC Bus') {
                                                                        echo "selected";
                                                                    }

                                                                    ?>>Shigwan AC Bus</option>
                                    <option value="Kadam AC Bus" <?php
                                                                    if ($row['bus'] == 'Kadam AC Bus') {
                                                                        echo "selected";
                                                                    }

                                                                    ?>>Kadam AC Bus</option>
                                    <option value="Kadam Non-AC Bus" <?php
                                                                        if ($row['bus'] == 'Kadam Non-AC Bus') {
                                                                            echo "selected";
                                                                        }

                                                                        ?>>Kadam Non-AC Bus</option>
                                    <option value="Shukla AC Bus" <?php
                                                                    if ($row['bus'] == 'Shukla AC Bus') {
                                                                        echo "selected";
                                                                    }

                                                                    ?>>Shukla AC Bus</option>
                                    <option value="Singh AC Bus" <?php
                                                                    if ($row['bus'] == 'Singh AC Bus') {
                                                                        echo "selected";
                                                                    }

                                                                    ?>>Singh AC Bus</option>
                                    <option value="Singh Non-AC Bus" <?php
                                                                        if ($row['bus'] == 'Singh Non-AC Bus') {
                                                                            echo "selected";
                                                                        }

                                                                        ?>>Singh Non-AC Bus</option>
                                    <option value="Harsh Non-AC Bus" <?php
                                                                        if ($row['bus'] == 'Harsh Non-AC Bus') {
                                                                            echo "selected";
                                                                        }

                                                                        ?>>Harsh Non-AC Bus</option>
                                    <option value="Shinde AC Bus" <?php
                                                                    if ($row['bus'] == 'Shinde AC Bus') {
                                                                        echo "selected";
                                                                    }

                                                                    ?>>Shinde AC Bus</option>
                                    <option value="Shinde Non-AC Bus" <?php
                                                                        if ($row['bus'] == 'Shinde Non-AC Bus') {
                                                                            echo "selected";
                                                                        }

                                                                        ?>>Shinde Non-AC Bus</option>
                                </select>
                            </div>

                            <div class="inputBox">
                                <span>arrivals :</span>
                                <input type="date" value="<?php echo $row['arrivals']; ?>" name="arrivals">
                            </div>
                            <div class="inputBox">
                                <span>leaving :</span>
                                <input type="date" value="<?php echo $row['leaving']; ?>" name="leaving">
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
                                <input type="text" value="<?php echo $row['card']; ?>" placeholder="mr. john deo" name="card">
                            </div>
                            <div class="inputBox">
                                <span>credit card number :</span>
                                <input type="number" value="<?php echo $row['cardno']; ?>" placeholder="1111-2222-3333" name="cardno">
                            </div>
                            <div class="inputBox">
                                <span>payment :</span>
                                <input type="number" value="<?php echo $row['payment']; ?>"placeholder="per person ₹100" name="payment">
                            </div>
                            <div class="inputBox">
                                <span>exp month :</span>
                                <input type="text" value="<?php echo $row['month']; ?>" placeholder="january" name="month">
                            </div>

                            <div class="flex">
                                <div class="inputBox">
                                    <span>exp year :</span>
                                    <input type="number" value="<?php echo $row['year']; ?>" placeholder="2022" name="year">
                                </div>
                                <div class="inputBox">
                                    <span>CVV :</span>
                                    <input type="text" value="<?php echo $row['cvv']; ?>" placeholder="1234" name="cvv">
                                </div>
                                <div class="inputBox">
                                    <span>city :</span>
                                    <input type="text" value="<?php echo $row['city']; ?>" placeholder="mumbai" name="city">
                                </div>
                            </div>

                        </div>
                    </div>

                    <input type="submit" value="update" class="submit-btn" name="update">
                    <a href="cancel.php" value="home" input type="home">check </a>



            </form>


        </div>

    </section>

</body>

</html>

<?php

$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $location = $_POST['location'];
    $peoples = $_POST['peoples'];
    $bus = $_POST['bus'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];
    $card = $_POST['card'];
    $cardno = $_POST['cardno'];
    $payment = $_POST['payment'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $cvv = $_POST['cvv'];

    //    $request = " insert into book_form(name, email, address, gender, city, location, peoples, bus, arrivals, leaving, card, cardno, month, year, cvv) values
    //    ('$name', '$email', '$address', '$gender','$city','$location', '$peoples', '$bus', '$arrivals', '$leaving', '$card', '$cardno', '$month', '$year', '$cvv')";

    $request = "update book_form set name='$name', email='$email', address='$address', gender='$gender', city='$city', location='$location', peoples='$peoples', bus='$bus', arrivals='$arrivals', leaving='$leaving', card='$card', cardno='$cardno', payment='$payment', month='$month', year='$year', cvv='$cvv' WHERE id='$id'";
    mysqli_query($connection, $request);

    //    header('location:update.php');


    echo "<script>alert('Record Updated')</script>";




?>

    <meta http-equiv="refresh" content="0; url = http://localhost/project/cancel.php" />
<?php

} else {
    echo 'somehting went wrong try again';
}

?>