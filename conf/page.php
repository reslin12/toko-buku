<?php 
 
if (isset($_GET['page'])) { 
  $page = $_GET['page']; 
  switch ($page) { 
      // mahasiswa 
    case 'data_distributor'; 
      include 'pages/distributor/data_distributor.php'; 
      break; 
    case 'tambah_distributor': 
      include 'pages/distributor/tambah_distributor.php'; 
      break; 
    case 'ubah_distributor'; 
      include 'pages/distributor/edit_distributor.php'; 
      break; 
 
      // Pasok 
    case 'data_pasok'; 
      include 'pages/pasok/data_pasok.php'; 
      break; 
    case 'tambah_pasok': 
      include 'pages/pasok/tambah_pasok.php'; 
      break; 
    case 'ubah_pasok'; 
      include 'pages/pasok/edit_pasok.php'; 
      break; 
      // Kasir 
 
    case 'data_kasir'; 
      include 'pages/kasir/data_kasir.php'; 
      break; 
    case 'tambah_kasir': 
      include 'pages/kasir/tambah_kasir.php'; 
      break; 
    case 'ubah_kasir'; 
      include 'pages/kasir/edit_kasir.php'; 
      break; 
 
      // Buku 
    case 'data_buku'; 
      include 'pages/buku/data_buku.php'; 
      break; 
    case 'tambah_buku': 
      include 'pages/buku/tambah_buku.php'; 
      break; 
    case 'ubah_buku'; 
      include 'pages/buku/edit_buku.php'; 
      break; 
 
      // Penjualan 
    case 'data_penjualan'; 
      include 'pages/penjualan/data_penjualan.php'; 
      break; 
      case 'detail_penjualan'; 
      include 'pages/penjualan/detail_penjualan.php'; 
      break; 
    case 'tambah_penjualan': 
      include 'pages/penjualan/tambah_penjualan.php'; 
      break; 
    case 'ubah_penjualan'; 
      include 'pages/penjualan/edit_penjualan.php'; 
      break; 
 
      // Multi Item 
      case 'data_multiitem'; 
      include 'pages/multiitem/data_transaksi_buku.php'; 
      break; 
    case 'bayar': 
      include 'pages/multiitem/bayar.php'; 
      break; 
 
      // penjualan2 
      case 'data_penjualan2'; 
      include 'pages/penjualan2/transaksi_buku.php'; 
      break; 
      case 'data_penjualan2'; 
      include 'pages/penjualan2/transaksi_barang.php'; 
      break; 
    } 
} else { 
  //beranda 
  include "pages/beranda.php";
}