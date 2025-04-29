<form action="" method="post">
    email:
    <input type="email" name="name">
    password:
    <input type="password" name="password">
    <input type="submit" name="kirim" value="login">
</form>

<?php

   $email = $_POST['email'];
   $password =$_POST['password'];

   echo $email;
   echo "<br>";
   echo $password;
?>