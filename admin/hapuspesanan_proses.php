<?php

include "../koneksi.php";
$id_pesanan    = $_GET['id_pesanan'];
$query  = mysqli_query($connect, "DELETE FROM pesanan where id_pesanan=$id_pesanan");

if ($query) {
    header("location: order.php");
} else {
    echo "Data tidak berhasil dihapus <a href='order.php'>Kembali</a>";
}
