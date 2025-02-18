<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data</title>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<h1>Halaman Tambah Data</h1>
<?php 
$Id_Jenis = $_GET['Id_Jenis'];

include '../../config/koneksi.php'; 
$query = mysqli_query($conn,query: "SELECT * FROM jenis WHERE Id_Jenis='$Id_Jenis'");
$result=mysqli_fetch_array($query);
?>
        <form action="proses.php?Id_Jenis=<?php echo $result['Id_Jenis']; ?>" method="POST">
<div class="mb-3">
    <label for="" class="form-label">Nama Jenis</label>
    <input
        type="text"
        class="form-control"
        name="Nama_Jenis"
        value="<?php echo $result['Nama_Jenis']?>"
        id=""
        aria-describedby="helpId"
        placeholder=""
    />
</div>

   <button type="submit">Simpan</button>
   </form>
</body>
</html>