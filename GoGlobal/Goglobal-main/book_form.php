<?php

$connection = mysqli_connect('localhost','root','','book_db');

if(isset($_POST['send'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $location = $_POST['location'];
   $guests = $_POST['guests'];
   $Arrival = $_POST['Arrival'];
   $Leaving = $_POST['Leaving'];

   $request = "insert into book_form(name, email, phone, address, location, guests, Arrival, Leaving) values('$name','$email','$phone','$address','$location','$guests','$Arrival','$Leaving') ";
   mysqli_query($connection, $request);

   header('location:book.html'); 

} 
else
{
   echo 'something went wrong please try again!';
}

?>