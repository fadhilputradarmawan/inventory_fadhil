<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>data barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../barang/index.php">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../jenis/index.php">jenis</a>
        </li>
    </div>
  </div>
</nav>
<h1>Data Barang</h1>
<a href="tambahan.php" class="btn btn-outline-primary mt-3">
      <i class="bi bi-plus-circle"></i><i class="fa-solid fa-plus"></i>Tambah Data
    </a>
<table class="table table-bordered">
        <tr>
            <th class="table-dark">Id Barang</th>
            <th class="table-dark">Id Jenis</th>
            <th class="table-dark">Nama barang</th>
            <th class="table-dark">Harga barang</th>
            <th class="table-dark">Aksi</th>
        </tr>
        <?php 
        include '../../config/koneksi.php';
        $query=mysqli_query($conn,"SELECT * FROM barang");
        if(mysqli_num_rows($query)>0){
            while($result=mysqli_fetch_assoc($query)){
                ?>
                <tr>
                <td><?php echo $result['Id_Barang']?></td>
                    <td><?php echo $result['Id_Jenis']?></td>
                    <td><?php echo $result['Nama_barang']?></td>
                    <td><?php echo $result['Harga_barang']?></td>
                    <td>
                    <a href="hapus.php?Id_Barang=<?php echo $result['Id_Barang']; ?>"
   onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" 
   class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i>HAPUS</a>
   <a href="edit.php?Id_Barang=<?php echo $result['Id_Barang'];?>" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i>EDIT</a>
                    </td>
                </tr>
                <?php
            }
        }else{
            echo"data kosong";
        }
        ?>
    </table>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
