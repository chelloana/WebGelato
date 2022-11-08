<?php

include "../koneksi.php";
$id_wadah    = $_GET['id_wadah'];
$query  = mysqli_query($connect, "DELETE FROM wadah where id_wadah=$id_wadah");

if ($query) {
    header("location: wadah.php");
} else {
    echo "Data tidak berhasil dihapus <a href='wadah.php'>Kembali</a>";
}
