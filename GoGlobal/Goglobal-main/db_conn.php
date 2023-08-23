<?php

$connection = mysqli_connect('localhost','root','','book_db');

if(isset($_POST['sign'])){
   $name = $_POST['name'];
   $password = md5($_POST['password']);
   $email= $_POST['email'];



   $request = " insert into db_conn_form(name, password,email) values('$name','$password','$email') ";
   mysqli_query($connection, $request);

   
   header('location:index.html'); 

}else{
   echo 'something went wrong please try again!';
}

?>