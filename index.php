<?php


require_once "config.php";

$data = Buku::all();

?>


<!DOCTYPE html>
<html>
<head>
  <title>Php Active Record Sederhana</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>


    <div class="container">
      <h1>Form Add</h1>
    <form action="insert.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Nama Buku</label>
        <input type="text" class="form-control" id="nama" placeholder="Nama Buku" name="nama" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Harga</label>
        <input type="number" class="form-control" id="harga" placeholder="Harga" name="harga" required>
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Add This">
      </div>
    </form>

    </div>
    <div class="container">
      <h1>Buku</h1>

  <table class="table table-condensed">
    <tr>
      <th>id</th>
      <th>Nama</th>
      <th>Harga</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>

  <?php

    foreach($data as $buku) {

      echo "<tr>";
        echo "<td>" . $buku->id . "</td>";
        echo "<td>" . $buku->nama . "</td>";
        echo "<td>" . $buku->harga . "</td>";
        echo "<td>" . "<a class=\"btn btn-info\" href=\"edit.php?id={$buku->id}\">Edit</a>" . "</td>";
        echo "<td>" . "<a class=\"btn btn-danger\" onclick=\"return confirm('Apakah akan menghapus ini ?')\" href=\"delete.php?id={$buku->id}\">Delete</a>" . "</td>";
      echo "</tr>";

    }

   ?>

 </table>
    </div>
</body>
</html>
