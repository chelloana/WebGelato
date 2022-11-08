<?php

include "../koneksi.php";

$id_wadah    = $_POST['id_wadah'];
$wadah       = $_POST['wadah'];
$harga_wadah = $_POST['harga_wadah'];

$sql    = "UPDATE wadah SET wadah='$wadah', harga_wadah='$harga_wadah' WHERE id_wadah='$id_wadah'";
$query  = mysqli_query($connect, $sql);

if ($query) {
    header("location: wadah.php");
} else {
    echo "Data tidak berhasil diedit <a href='wadah.php'>Kembali</a>";
}
