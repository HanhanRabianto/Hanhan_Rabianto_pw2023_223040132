<section class="trending-product" id="trending">
  <div class="products">
    <?php
    include '../config.php';
    $keyword = "";
    if (isset($_POST['search'])) {
      $keyword = $_POST['search'];
    }
    $product = mysqli_query($conn, "SELECT * FROM products WHERE products.name LIKE '%$keyword%'");
    if (mysqli_num_rows($product) > 0) {
      while ($p = mysqli_fetch_array($product)) {
        ?>
        <div class="row">
          <a href="detail_product.php?id=<?php echo $p['id'] ?>"><img src="uploaded_img/<?php echo $p['image'] ?>" /></a>
          <div class="product-text">
            <h5>Sale</h5>
            <div class="price">
              <h4>
                <?php echo $p['name'] ?>
              </h4>
              <p>Rp.
                <?php echo $p['price'] ?>
              </p>
            </div>
          </div>
        </div>
      <?php }
    } else { ?>
      <p>product tidak ada</p>
    <?php } ?>
</section>