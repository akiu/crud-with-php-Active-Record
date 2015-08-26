<?php

  require_once "config.php";

  $nama = $_POST['nama'];
  $harga = $_POST['harga'];

  $buku = new Buku;
  $buku->nama = $nama;
  $buku->harga = $harga;
  $buku->save();

  header('Location: index.php'); 
?>
