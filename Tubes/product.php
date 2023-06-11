<?php 

include 'config.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />

</head>
<body>
    <section class="trending-product" id="trending">
        <div class="center-text">
          <h2><span>product</span></h2>
        </div>
  
        <div class="products">
        <?php 
              $product = mysqli_query($conn, "SELECT * FROM products ORDER BY id DESC LIMIT 8");
              if(mysqli_num_rows($product) >0){
                while($p = mysqli_fetch_array($product)){
          ?>
        <div class="row">
         <a href="detail_product.php"><img src="image/<?php echo $p['image'] ?>"/></a>
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
  
</body>
</html>