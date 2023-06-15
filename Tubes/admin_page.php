<?php

session_start();


if( !isset($_SESSION['admin_name'])) {
  header("Location:login_form.php");
  exit;
}

include 'config.php';

if (isset($_POST['add_product'])) {

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_detail = $_POST['product_detail'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/' . $product_image;

   if (empty($product_name) || empty($product_price) || empty($product_detail) || empty($product_image)) {
      $message[] = 'please fill out all';
   } else {
      $insert = "INSERT INTO products(name, price , detail , image) VALUES('$product_name', '$product_price','$product_detail','$product_image')";
      $upload = mysqli_query($conn, $insert);
      if ($upload) {
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'Product baru berhasil di tambahkan';
      } else {
         $message[] = 'Tidak bisa menambahkan product baru';
      }
   }

}
;

if (isset($_GET['delete'])) {
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM products WHERE id = $id");
   header('location:admin_page.php');
}
;

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="style4.css">

</head>

<body>

   <?php

   if (isset($message)) {
      foreach ($message as $message) {
         echo '<span class="message">' . $message . '</span>';
      }
   }

   ?>

   <div class="container">


      <div class="admin-product-form-container">

         <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <h3>Tambah product baru</h3>
            <input type="text" placeholder="masukan nama product" name="product_name" class="box">
            <input type="number" placeholder="masukan harga product" name="product_price" class="box">
            <input type="text" placeholder="masukan detail product" name="product_detail" class="box">
            <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
            <input type="submit" class="btn" name="add_product" value="tambahkan product">
         </form>

      </div>

      <div class="product-display">
         <input type="search" class="form-control form-control-color" placeholder="Cari Produk" id="search"
            name="search" autofocus autocomplete="off" style="font-size:20px; border: 1px solid grey; padding: 5px">
         <button type="submit" name="cari" id="tombol-cari"
            style="font-size:20px; border: 1px solid grey; padding: 5px">Cari!</button>
         <table class="product-display-table" id="myTable">
            <thead>
               <tr>
                  <th>gambar product</th>
                  <th>nama product</th>
                  <th>harga product</th>
                  <th>detail product</th>
                  <th>action</th>
               </tr>
            </thead>
            <!-- hasil live search ajax -->
            <tbody id="hasil"></tbody>
         </table>
      </div>
      <script src="https://code.jquery.com/jquery-3.7.0.min.js"
         integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
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
                  url: "ajax/adminsearch.php",
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