<?php require "include/head.php"; ?>
<?php require "include/nav.php"; ?>

<!-- Begin Page Content -->
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

// Proses update data ketika formulir disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Pastikan semua input telah diisi dengan benar sebelum memproses
  if (!empty($_POST['url_video']) && !empty($_POST['judul_video']) && !empty($_POST['kategori_video']) && !empty($_POST['durasi_video']) && !empty($_POST['sinopsis_video']) && !empty($_POST['deskripsi_video']) && !empty($_POST['img_thumbnail'])) {
    // Tangkap data dari form
    $url_video = $_POST['url_video'];
    $judul_video = $_POST['judul_video'];
    $kategori_video = $_POST['kategori_video'];
    $durasi_video = $_POST['durasi_video'];
    $sinopsis_video = $_POST['sinopsis_video'];
    $deskripsi_video = $_POST['deskripsi_video'];
    $img_thumbnail = $_POST['img_thumbnail'];

    // Lakukan query untuk memperbarui data di database
    $sql = "UPDATE vidio 
            INNER JOIN kategori ON vidio.id_vidio = kategori.id_kategori
            SET vidio.url_vidio='$url_video', 
                vidio.judul_vidio='$judul_video', 
                kategori.nama_kategori='$kategori_video', 
                vidio.durasi_vidio='$durasi_video', 
                vidio.sinopsis_vidio='$sinopsis_video', 
                vidio.deskripsi_vidio='$deskripsi_video',
                vidio.img_thumbnail='$img_thumbnail' 
            WHERE vidio.id_vidio=$id_video";

      if ($connect->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil diperbarui.');</script>";
      } else {
        echo "<script>alert('Terjadi kesalahan: ');</script>" . $connect->error;
      }
      } else {
        echo "<script>alert('Semua Kolom harus diisi: ');</script>" . $connect->error;
      }
}
?>
<div class="container-fluid pb-4">
  <div class="card shadow">
    <div class="card-header">
      <h3 class="text-center py-2">FORM EDIT DATA</h3>
    </div>
    <form class="px-5 pt-4 pb-5" method="POST" action="">
      <div class="row">
      <div class="col-12 col-md-6">
          <label for="url_video" class="form-label">URL VIDEO</label>
          <input type="text" class="form-control" id="url_video" name="url_video" value="<?php echo isset($url_video) ? $url_video : ''; ?>" aria-describedby="emailHelp" />
        </div>
        <div class="col-12 col-md-6">
          <label for="judul_video" class="form-label">JUDUL VIDEO</label>
          <input type="text" class="form-control" id="judul_video" name="judul_video" value="<?php echo isset($judul_video) ? $judul_video : ''; ?>" />
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6">
          <label for="kategori_video" class="form-label">KATEGORI VIDEO</label>
          <input type="text" class="form-control" id="kategori_video" name="kategori_video" value="<?php echo isset($kategori_video) ? $kategori_video : ''; ?>" />
        </div>
        <div class="col-12 col-md-6">
          <label for="durasi_video" class="form-label">DURASI VIDEO</label>
          <input type="text" class="form-control" id="durasi_video" name="durasi_video" value="<?php echo isset($durasi_video) ? $durasi_video : ''; ?>" />
        </div>
      </div>

      <div class="col-12 p-0 m-0">
        <div class="mb-3">
          <label for="sinopsis_video" class="form-label">SINOPSIS VIDEO</label>
          <textarea class="form-control" id="sinopsis_video" name="sinopsis_video"><?php echo isset($sinopsis_video) ? $sinopsis_video : ''; ?></textarea>
        </div>
        <div class="mb-3">
          <label for="deskripsi_video" class="form-label">DESKRIPSI VIDEO</label>
          <textarea class="form-control" id="deskripsi_video" name="deskripsi_video"><?php echo isset($deskripsi_video) ? $deskripsi_video : ''; ?></textarea>
        </div>
      </div>

      <div class="row">
      <label class="form-label" for="customFile">Uplout gambar gan</label>
      <input type="file" class="form-control" id="img_thumbnail" name="img_thumbnail" />
      </div> 

      <button type="submit" class="btn btn-danger">
        <i class="fas fa-plus-circle px-1 text-center"></i> Simpan
      </button>
      <button type="submit" class="btn btn-secondary">
        <i class="fas fa-undo-alt px-1"></i>
        Reset
      </button>
    </form>
  </div>
</div>
</div>

<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Pertakina Bedaya 2024</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          Anda yakin ingin Keluar?
        </h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Anda Ingin Keluar.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">
          Batal
        </button>
        <a class="btn btn-danger" href="login.html">Keluar</a>
      </div>
    </div>
  </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
<script src="js/demo/datatables-demo.js"></script>
</body>

</html>