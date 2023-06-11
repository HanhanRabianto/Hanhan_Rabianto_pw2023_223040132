<?php 

include 'config.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style2.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  </head>
  <body>
    <header>
      <h2 class="header h2">LandGaming</h2>

      <ul class="navmenu">
        <li><a href="#">Home</a></li>
        <li><a href="product.php">Product</a></li>
        <li><a href="login_form.php">Keluar</a></li>
      </ul>

      <div class="nav-icon">
           
      <form action="" method="post">

         <input type="text" name="keyword" size="40" autofocus
         placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword">
         <button type="submit" name="cari" id="tombol-cari">Cari!</button>
 

      </form>



      </div>
    </header>

    <section class="main-home">
      <div class="main-text">
        <h1>New Gaming <br />Collection</h1>
        <p>Peralatan Gaming Terbaik</p>

        <a href="product.php" class="main-btn">Shop Now <i class="bx bx-right-arrow-alt"></i></a>
      </div>

      <div class="down-arrow">
        <a href="#trending" class="down"><i class="bx bx-down-arrow-alt"></i></a>
      </div>
    </section>

    <!--trending poroduct-->
    <div id="container">
    <section class="trending-product" id="trending">
      <div class="center-text">
        <h2>Our Trending <span>product</span></h2>
      </div>
      <div class="products">
          <?php 
              $product = mysqli_query($conn, "SELECT * FROM `products` ORDER BY `products`.`id` ASC" );
              if(mysqli_num_rows($product) >0){
                while($p = mysqli_fetch_array($product)){
          ?>
        <div class="row">
          <a href="detail_product.php?id=<?php echo $p['id']?>">
          <img src="image/<?php echo $p['image'] ?>"/>
          </a>
          <div class="product-text">
            <h5>Sale</h5>
            <div class="price">
              <h4><?php echo $p['name'] ?></h4>
              <p>Rp.<?php echo $p['price'] ?></p>
            </div>
          </div>
        </div>
        <?php }}else{ ?>
          <p>product tidak ada</p>
        <?php } ?>
    </section>
        </div>

    <section class="contact">
      <div class="contact-info">
        <div class="first-info">
          <img src="image/logo.jpg" alt="" />

          <a href="https://www.google.com/maps/@-6.8657212,107.592136,20.25z?entry=ttu"
            ><p>Jln Setiabudi no 334,<br />Bandung,Jawa Barat</p></a
          >
          <p>082127867416</p>
          <p>hanhnrabian@gmail.com</p>

          <div class="social-icon">
            <a href="#"><i class="bx bxl-whatsapp"></i></a>
            <a href="https://www.instagram.com/hanhanr__/?hl=id"><i class="bx bxl-instagram"></i></a>
            <a href="#"><i class="bx bxl-facebook"></i></a>
          </div>
        </div>

        <div class="second-info">
          <h4>Support</h4>
          <p>Contact us</p>
          <p>About page</p>
          <p>Shopping and return</p>
        </div>

        <div class="third-info">
          <h4>Shop</h4>
          <p>Acsescories gaming</p>
          <p>Laptop Gaming</p>
          <p>Gaming Series</p>
        </div>

        <div class="four-info">
          <h4>Company</h4>
          <p>Blog</p>
          <p>Login</p>
          <p>About</p>
        </div>
      </div>
    </section>

    <div class="end-text">
      <p>Copyright @2023. All Reserved.Desingnd By Hanhan Rabianto.</p>
    </div>

    <script src="java2.js"></script>
  </body>
</html>
