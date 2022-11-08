<?php

include '../koneksi.php';

$id_wadah     = $_POST['id_wadah'];
$wadah        = $_POST['wadah'];
$harga_wadah  = $_POST['harga_wadah'];

$sql        = "INSERT INTO wadah VALUES('$id_wadah', '$wadah', '$harga_wadah')";
$query      = mysqli_query($connect, $sql);

if ($query) {
    header("location: wadah.php");
} else {
    echo "Input data gagal";
}
