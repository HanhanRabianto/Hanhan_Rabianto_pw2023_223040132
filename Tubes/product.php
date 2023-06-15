<?php


session_start();


if( !isset($_SESSION['user_name'])) {
  header("Location:login_form.php");
  exit;
}

include 'config.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product</title>
  <link rel="stylesheet" href="style2.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />

</head>

<body>
  <section class="trending-product" id="trending">

    <div class="center-text">
      <h2>product</h2>
      <center>
        <input type="search" class="form-control" placeholder="Search" id="search" name="search" autofocus
          autocomplete="off">
        <button type="submit" name="cari" id="tombol-cari">Cari!</button>
      </center>
    </div>

    <!-- hasil ajax live search -->
    <div id="hasil"></div>

  </section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      load_data();

      $('#search').keyup(function () {
        var search = $("#search").val();
        load_data(search);
        console.log(search);
      });

      function load_data(search) {
        $.ajax({
          url: "ajax/productsearch.php",
          method: "POST",
          data: {
            search: search
          },
          success: function (data) {
            console.log(data)
            $('#hasil').html(data);
          }
        });
      }

    });
  </script>
</body>

</html>