<?php 

session_start();


if( !isset($_SESSION['admin_name'])) {
  header("Location:login_form.php");
  exit;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style4.css">
</head>

<body>

   <div class="container">


      <div class="admin-product-form-container centered">
         <?php
         include 'config.php';
         $edit = $_GET['edit'];
         $select = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM products WHERE id = '$edit'"));

         if (isset($_POST['update_product'])) {
            $id = $_POST['id'];
            $name = $_POST['product_name'];
            $detail = $_POST['product_detail'];
            $price = $_POST['product_price'];
            $last_image = $_POST['last_image'];

            if ($_FILES['product_image']['error'] === 4) {
               $image = $last_image;
            } else {

               $namaFile = $_FILES['product_image']['name'];
               $ukuranFile = $_FILES['product_image']['size'];
               $error = $_FILES['product_image']['error'];
               $tmpName = $_FILES['product_image']['tmp_name'];

               if ($error === 4) {
                  echo "<script>
            alert('Masukan Gambar')
          </script>";
                  return false;
               }

               // hanya gambar yang dapat diupload
               $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
               $ekstensiGambar = explode('.', $namaFile);
               $ekstensiGambar = strtolower(end($ekstensiGambar));
               if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
                  echo "<script>
          alert('anda bukan mengupload gambar');
         </script>";
                  return false;
               }

               // jika size terlalu besar
               if ($ukuranFile > 1000000) {
                  echo "<script>
          alert('ukuran terlalu beasar');
         </script>";
                  return false;
               }

               //loss
               $namaFileBaru = uniqid();
               $namaFileBaru .= '.';
               $namaFileBaru .= $ekstensiGambar;

               move_uploaded_file($tmpName, 'uploaded_img/' . $namaFileBaru);

               $image = $namaFileBaru;
            }

            $sql = mysqli_query($conn, "UPDATE products SET products.name = '$name', products.price = '$price', products.detail = '$detail', products.image = '$image' WHERE id = '$id'");
            if ($sql) {
               header("Location:admin_page.php");
            }
         }
         ?>

         <form action="" method="post" enctype="multipart/form-data">
            <h3 class="title">update the product</h3>
            <input type="hidden" class="box" name="id" value="<?php echo $edit; ?>">
            <input type="hidden" class="box" name="last_image" value="<?php echo $select['image']; ?>">
            <label for="">Nama</label>
            <input type="text" class="box" name="product_name" value="<?php echo $select['name']; ?>"
               placeholder="enter the product name">
            <label for="">Harga</label>
            <input type="number" min="0" class="box" name="product_price" value="<?php echo $select['price']; ?>"
               placeholder="enter the product price">
            <label for="">Detail</label>
            <input type="text" class="box" name="product_detail" value="<?php echo $select['detail']; ?>"
               placeholder="enter the product name">
            <label for="">Gambar Produk</label> <br>
            <img src="uploaded_img/<?php echo $select['image']; ?>" width="50%">
            <input type="file" class="box" name="product_image" accept="image/png, image/jpeg, image/jpg" value="">
            <input type="submit" value="update product" name="update_product" class="btn">
            <a href="admin_page.php" class="btn">go back!</a>
         </form>

      </div>
   </div>

</body>

</html>