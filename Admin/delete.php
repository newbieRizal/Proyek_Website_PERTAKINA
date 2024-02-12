<?php
// Ambil ID video yang dipilih dari parameter URL
if(isset($_GET['id'])) {
    $id_video = $_GET['id']; 
    // Lakukan query untuk mendapatkan data video berdasarkan ID
    $sql = "SELECT vidio.*, kategori.nama_kategori FROM vidio JOIN kategori ON kategori.id_kategori = vidio.id_vidio";
    $result = $connect->query($sql);
    if($result->num_rows > 0) {
        // Ambil data video
        $row = $result->fetch_assoc();
        $url_video = $row['url_vidio'];
        $judul_video = $row['judul_vidio'];
        $kategori_video = $row['nama_kategori'];
        $durasi_video = $row['durasi_vidio'];
        $sinopsis_video = $row['sinopsis_vidio'];
        $deskripsi_video = $row['deskripsi_vidio'];
    }
}