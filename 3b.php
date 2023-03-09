<?php

function urutanAngka($angka)
{
    $s = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $s . " ";
            $s++;
        }
        echo "<br>";
    }
}
urutanAngka(5);
?>