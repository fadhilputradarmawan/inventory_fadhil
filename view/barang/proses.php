<?php
$Id_Barang = $_GET['Id_Barang']; 
 $Id_Jenis = $_POST['Id_Jenis']; 
 $Nama_barang = $_POST['Nama_barang'];
 $Harga_barang =$_POST['Harga_barang'];
 include '../../config/koneksi.php'; 
 $query = mysqli_query($conn,"UPDATE barang SET
 Id_Jenis='$Id_Jenis',
 Nama_barang='$Nama_barang',
 Harga_barang='$Harga_barang'
 WHERE Id_Barang='$Id_Barang'
 ");

echo "<script>alert('data berhasil di simpan'); window.location.href='index.php';
</script>";
?>