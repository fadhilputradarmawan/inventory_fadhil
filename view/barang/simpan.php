<?php  include '../../config/koneksi.php'; 
 $Id_Barang = $_POST['Id_Barang']; 
 $Id_Jenis = $_POST['Id_Jenis']; 
 $Nama_barang = $_POST['Nama_barang'];
 $Harga_barang =$_POST['Harga_barang'];

 $query = mysqli_query($conn,"INSERT INTO barang VALUES('$Id_Barang','$Id_Jenis','$Nama_barang','$Harga_barang')");

echo "<script>alert('data berhasil di simpan'); window.location.href='index.php';
</script>";
?>