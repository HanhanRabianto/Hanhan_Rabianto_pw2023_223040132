<?php

session_start();

if ( isset($_SESSION['user_type'])){
   header("Location:halamanutama.php");
   exit;
}

include 'config.php';


if (isset($_POST['submit'])) {


   $email = mysqli_real_escape_string($konn, $_POST['email']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($konn, $select);

   if (mysqli_num_rows($result) > 0) {

      $row = mysqli_fetch_array($result);

      if ($row['user_type'] == 'admin') {

         $_SESSION['admin_name'] = $row['name'];
         header('location:dashboardadmin.php');

      } elseif ($row['user_type'] == 'user') {

         $_SESSION['user_name'] = $row['name'];
         header('location:halamanutama.php');

      }

   } else {
      $error[] = 'email atau password salah!';
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
   <title>register form</title>
</head>

<body>

   <div class="form-container">

      <form action="" method="post">
         <h3>Login</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            }
            ;
         }
         ;
         ?>


         <input type="email" name="email" required placeholder="masukan email">
         <input type="password" name="password" required placeholder="masukan password">
         <input type="submit" name="submit" value="login sekarang" class="form-btn">
         <p>tidak punya akun? <a href="register_form.php">register sekarang</a></p>
      </form>
   </div>

</body>

</html>