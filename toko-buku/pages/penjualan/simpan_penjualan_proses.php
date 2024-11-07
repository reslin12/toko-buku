<?php
include "../../conf/conn.php";
$kasir   = $_POST['kasir'];
$total   = $_POST['total'];
$tanggal = $_POST['tanggal'];
$query = "INSERT INTO penjualan (id_kasir, total, tanggal) VALUES ('$kasir', '$total', '$tanggal')";


if ($koneksi->query($query)) {
  //redirect ke halaman index.php 
  //header("location: index.php");
  echo '<script>alert("Data Berhasil Ditambah !!!");
  window.location.href="../../index.php?page=data_penjualan"</script>';
} else {
  //pesan error gagal update data
  //echo "Data Gagal Disimpan!";
  echo '<script>alert("Data Gagal Ditambah !!!");
  window.location.href="../../index.php?page=data_penjualan"</script>';
}