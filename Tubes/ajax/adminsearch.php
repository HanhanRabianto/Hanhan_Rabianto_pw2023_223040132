<?php
include '../config.php';
$keyword = "";
if (isset($_POST['search'])) {
    $keyword = $_POST['search'];
}
$select = mysqli_query($conn, "SELECT * FROM products WHERE products.name LIKE '%$keyword%'");
while ($row = mysqli_fetch_assoc($select)) { ?>
    <tr>
        <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
        <td>
            <?php echo $row['name']; ?>
        </td>
        <td>Rp
            <?php echo $row['price']; ?>
        </td>
        <td>
            <?php echo $row['detail']; ?>
        </td>
        <td>
            <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit
            </a>
            <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="btn"
                onclick="return confirm('Yakin hapus data?')"> <i class="fas fa-trash"></i>
                hapus </a>
        </td>
    </tr>
<?php } ?>