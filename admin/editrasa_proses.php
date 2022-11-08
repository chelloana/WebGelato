<?php

include "../koneksi.php";

$id_rasa    = $_POST['id_rasa'];
$rasa       = $_POST['rasa'];
$harga_rasa = $_POST['harga_rasa'];

$sql    = "UPDATE rasa SET rasa='$rasa', harga_rasa='$harga_rasa' WHERE id_rasa='$id_rasa'";
$query  = mysqli_query($connect, $sql);

if ($query) {
    header("location: rasa.php");
} else {
    echo "Data tidak berhasil diedit <a href='rasa.php'>Kembali</a>";
}
