<?php
include "../../conf/conn.php";
$buku    = $_POST['buku'];
$kasir   = $_POST['kasir'];
$jumlah  = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];

$queryTotalHarga = mysqli_query($koneksi, "SELECT SUM(harga_jual) AS total_harga FROM buku WHERE id_buku = '$buku'");
$rowTotalHarga = mysqli_fetch_assoc($queryTotalHarga);
$totalHarga = $rowTotalHarga['total_harga'];
$total   = $totalHarga * $jumlah;

$query = "INSERT INTO penjualan2 (buku, kasir, jumlah, total, tanggal) VALUES ('$buku', '$kasir', '$jumlah', '$total', '$tanggal')";


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
