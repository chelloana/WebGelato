<?php

include '../koneksi.php';

$id_topping     = $_POST['id_topping'];
$topping        = $_POST['topping'];
$harga_topping  = $_POST['harga_topping'];

$sql        = "INSERT INTO topping VALUES('$id_topping', '$topping', '$harga_topping')";
$query      = mysqli_query($connect, $sql);

if ($query) {
    header("location: topping.php");
} else {
    echo "Input data gagal";
}
