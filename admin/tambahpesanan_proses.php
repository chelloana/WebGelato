<?php

include '../koneksi.php';

$id_pesanan     = $_POST['id_pesanan'];
$nama           = $_POST['nama'];
$id_rasa        = $_POST['id_rasa'];
$id_wadah       = $_POST['id_wadah'];
$id_topping     = $_POST['id_topping'];
$tanggal        = date("Y-m-d H:i:s");

$sql        = "INSERT INTO pesanan VALUES('$id_pesanan', '$nama', '$id_rasa', '$id_wadah', '$id_topping', '$tanggal')";
$query      = mysqli_query($connect, $sql);

if ($query) {
    header("location: order.php");
} else {
    echo "Input data gagal";
}
