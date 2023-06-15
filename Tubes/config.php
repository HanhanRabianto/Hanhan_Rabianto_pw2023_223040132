<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_cart');
$konn = mysqli_connect('localhost', 'root', '', 'db_user');


function cari($keyword)
{
  $query = "SELECT * FROM products 
                WHERE
              name LIKE '%$keyword%' OR
              price LIKE '%$keyword%' OR
              image LIKE '%$keyword%'
              ";

  return query($query);

}

?>