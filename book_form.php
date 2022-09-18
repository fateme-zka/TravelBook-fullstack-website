<?php

// DATA BASE Infos
// database name : book_db
// boots table name : book_form
// columns: 
//       id -> int(255)
//       name -> varchar(255)
//       email -> varchar(255)
//       phone -> varchar(11)
//       address -> varchar(255)
//       location -> varchar(255)
//       guests -> int(255)
//       arrivals -> date
//       leaving -> date

$connection = mysqli_connect('localhost', 'root', '', 'book_db');

// if all the inputs have been set and not null
if ((isset($_POST['name']) && $_POST['name'] != null) &&
   (isset($_POST['email']) && $_POST['email'] != null) &&
   (isset($_POST['phone']) && $_POST['phone'] != null) &&
   (isset($_POST['address']) && $_POST['address'] != null) &&
   (isset($_POST['packages']) && $_POST['packages'] != null) &&
   (isset($_POST['guests']) && $_POST['guests'] != null) &&
   (isset($_POST['arrivals']) && $_POST['arrivals'] != null) &&
   (isset($_POST['leaving']) && $_POST['leaving'] != null)
) {

   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $package = $_POST['packages'];
   $guests = $_POST['guests'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];

   $insert_query = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) 
values('$name','$email','$phone','$address','$package','$guests','$arrivals','$leaving') ";
   mysqli_query($connection, $insert_query);

   header('location:book.php');
} else {
   echo 'something went wrong please try again!';
}
