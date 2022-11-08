<?php

include "../koneksi.php";
$id_topping    = $_GET['id_topping'];
$query  = mysqli_query($connect, "DELETE FROM topping where id_topping=$id_topping");

if ($query) {
    header("location: topping.php");
} else {
    echo "Data tidak berhasil dihapus <a href='topping.php'>Kembali</a>";
}
