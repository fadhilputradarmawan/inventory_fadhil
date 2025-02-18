<?php 
$Id_Barang = $_GET['Id_Barang'];

include '../../config/koneksi.php'; 
$query = mysqli_query($conn,query: "DELETE FROM barang WHERE Id_Barang='$Id_Barang'");
if ($query){
echo "<script>alert('data berhasil di hapus')</script>";
echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('data berhasil gagal di hapus')</script>";
    echo "<script>window.location.href='index.php'</script>";
    }
?>