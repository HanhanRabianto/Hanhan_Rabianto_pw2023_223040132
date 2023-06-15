<?php

include 'config.php';

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($konn, $_POST['name']);
   $email = mysqli_real_escape_string($konn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($konn, $select);

   if (mysqli_num_rows($result) > 0) {

      $error[] = 'user sudah digunakan!';

   } else {

      if ($pass != $cpass) {
         $error[] = 'password tidak sama!';
      } else {
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($konn, $insert);
         header('location:login_form.php');
      }
   }

}
;


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
   <title>registrasi</title>
</head>

<body>

   <div class="form-container">

      <form action="" method="post">
         <h3>Registrasi</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            }
            ;
         }
         ;
         ?>
         <input type="text" name="name" required placeholder="masukan nama">
         <input type="email" name="email" required placeholder="masukan email">
         <input type="password" name="password" required placeholder="masukan password">
         <input type="password" name="cpassword" required placeholder="confirm your password">
         <select name="user_type">
            <option value="user">user</option>
            <option value="admin">admin</option>
         </select>
         <input type="submit" name="submit" value="registrasi" class="form-btn">
         <p>sudah punya akun? <a href="login_form.php">login sekarang</a></p>
      </form>
   </div>

</body>

</html>