<?php

require_once "config.php";



if (isset($_POST['nama']) && isset($_POST['harga'])) {

  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $harga = $_POST['harga'];

  $buku = Buku::find($id);
  $buku->nama = $nama;
  $buku->harga = $harga;
  $buku->save();

  header('Location: index.php');

}

$id = $_GET['id'];

$buku = Buku::find($id);



?>

<!DOCTYPE html>
<html>
<head>
  <title>Php Active Record Sederhana</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>


    <div class="container">
      <h1>Form Edit</h1>
    <form action="edit.php" method="post">
      <div class="form-group">
        <input class="form-control" value="<?php echo $buku->id; ?>" placeholder="Nama Buku" name="id" type="hidden">
        <label for="exampleInputEmail1">Nama Buku</label>
        <input type="text" class="form-control" value="<?php echo $buku->nama; ?>" placeholder="Nama Buku" name="nama" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Harga</label>
        <input type="number" class="form-control" value="<?php echo $buku->harga; ?>" placeholder="Harga" name="harga" required>
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Edit This">
      </div>
    </form>

    </div>

</body>
</html>
