<?php  include '../../config/koneksi.php'; 
 $Id_Jenis = $_POST['Id_Jenis']; 
 $Nama_Jenis = $_POST['Nama_Jenis'];

 $query = mysqli_query($conn,"INSERT INTO jenis VALUES('$Id_Jenis','$Nama_Jenis')");

echo "<script>alert('data berhasil di simpan'); window.location.href='index.php';
</script>";
?>