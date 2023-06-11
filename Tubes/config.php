<?php

$conn = mysqli_connect('localhost','root','','cart_db');
$konn = mysqli_connect('localhost','root','','user_db');


function cari($keyword){
    $query = "SELECT * FROM products 
                WHERE
              name LIKE '%$keyword%' OR
              price LIKE '%$keyword%' OR
              image LIKE '%$keyword%'
              ";

    return query($query);          
              
}

?>

