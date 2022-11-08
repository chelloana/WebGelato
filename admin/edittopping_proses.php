<?php

include "../koneksi.php";

$id_topping   = $_POST['id_topping'];
$topping       = $_POST['topping'];
$harga_topping = $_POST['harga_topping'];

$sql    = "UPDATE topping SET topping='$topping', harga_topping='$harga_topping' WHERE id_topping='$id_topping'";
$query  = mysqli_query($connect, $sql);

if ($query) {
    header("location: topping.php");
} else {
    echo "Data tidak berhasil diedit <a href='topping.php'>Kembali</a>";
}
