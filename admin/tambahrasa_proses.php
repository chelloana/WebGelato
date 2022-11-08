<?php

include '../koneksi.php';

$id_rasa     = $_POST['id_rasa'];
$rasa        = $_POST['rasa'];
$harga_rasa  = $_POST['harga_rasa'];

$sql        = "INSERT INTO rasa VALUES('$id_rasa', '$rasa', '$harga_rasa')";
$query      = mysqli_query($connect, $sql);

if ($query) {
    header("location: rasa.php");
} else {
    echo "Input data gagal";
}
