<?php

 $connection = mysqli_connect('localhost','root','','book_db');

 if(isset($_POST['send'])){
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

   $request = " insert into book_form(name, email, address, gender,city, location, peoples, bus, arrivals, leaving, card, cardno, payment, month, year, cvv) values
   ('$name', '$email', '$address', '$gender','$city','$location', '$peoples', '$bus','$arrivals', '$leaving', '$card', '$cardno', '$payment', '$month', '$year', '$cvv')";

   mysqli_query($connection, $request);

   header('location:payment.php');
 echo '';
  
 }else{
   echo '';
 }






?>