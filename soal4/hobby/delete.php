<?php
include '../konek.php';
$id = $_GET["id"];
    $hasil_query = mysqli_query($mysqli, "DELETE FROM hobby_tb WHERE id='$id' ");
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($mysqli).
       " - ".mysqli_error($mysqli));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='../index.php';</script>";
    }