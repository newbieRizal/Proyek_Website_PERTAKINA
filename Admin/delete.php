<?php
include "../config/database/database.php";
// Pastikan ada parameter ID yang diterima
if(isset($_GET['id'])) {
    // Ambil ID video yang dipilih dari parameter URL
    $id_video = $_GET['id']; 

    // Lakukan query untuk menghapus data video berdasarkan ID
    $sql = "DELETE FROM `vidio` WHERE id_vidio = '$id_video'";
    
    // Eksekusi query
    if ($connect->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil dihapus.');</script>";
        header("index.php");
    } else {
        echo "<script>alert('Terjadi kesalahan: " . $connect->error . "');</script>";
    }
}
?>
