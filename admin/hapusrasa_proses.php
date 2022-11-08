<?php

include "../koneksi.php";
$id_rasa    = $_GET['id_rasa'];
$query  = mysqli_query($connect, "DELETE FROM rasa where id_rasa=$id_rasa");

if ($query) {
    header("location: rasa.php");
} else {
    echo "Data tidak berhasil dihapus <a href='rasa.php'>Kembali</a>";
}
