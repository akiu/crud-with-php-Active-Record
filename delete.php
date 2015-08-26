<?php

require_once "config.php";

$id = $_GET['id'];

$buku = Buku::find($id);

$buku->delete();

header('Location: index.php');
 ?>
