<?php 

include '../config.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM products 
          WHERE
          name LIKE '%$keyword%' OR
          price LIKE '%$keyword%'
          ";
$products = query($query);


?>
<section class="trending-product" id="trending">
<div class="center-text">
  <h2>Our Trending <span>product</span></h2>
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