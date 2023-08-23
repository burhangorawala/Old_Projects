
<?php

$connection = mysqli_connect('localhost','root','','book_db');





if(isset($_POST['login'])){
    $name=$_POST['name'];
    $password = md5($_POST['password']);
  
   
    $select = "select * from db_conn_form where name='$name' && password='$password'";
     $result= mysqli_query($connection, $select);

     if (mysqli_num_rows($result) > 0) {
       
            header('location:home.html');

        
}
else{

    <script>
    alert("nikal");
    </script>
 
    
}
}


?>
