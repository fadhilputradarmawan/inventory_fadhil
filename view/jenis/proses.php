<?php
 $Id_Jenis = $_GET['Id_Jenis']; 
 $Nama_Jenis = $_POST['Nama_Jenis'];
 include '../../config/koneksi.php'; 
 $query = mysqli_query($conn,query: "UPDATE jenis SET
 Nama_Jenis='$Nama_Jenis'
 WHERE Id_Jenis='$Id_Jenis'
 ");

echo "<script>alert('data berhasil di simpan'); window.location.href='index.php';
</script>";
?>