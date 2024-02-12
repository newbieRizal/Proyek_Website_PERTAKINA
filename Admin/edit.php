<?php require "include/head.php"; ?>
<?php require "include/nav.php"; ?>

          <!-- Begin Page Content -->

          <div class="container-fluid pb-4">
            <div class="card shadow">
              <div class="card-header">
                <h3 class="text-center py-2">FORM EDIT DATA</h3>
              </div>
              <form class="px-5 pt-4 pb-5">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <label for="exampleInputEmail1" class="form-label"
                      >URL VIDEO</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="exampleInputEmail1"
                      aria-describedby="emailHelp" />
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="exampleInputPassword1" class="form-label"
                      >JUDUL VIDEO</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="exampleInputPassword1" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-md-6">
                    <label for="exampleInputPassword1" class="form-label"
                      >KATEGORI VIDEO</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="exampleInputPassword1" />
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="exampleInputPassword1" class="form-label"
                      >DURASI VIDEO</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="exampleInputPassword1" />
                  </div>
                </div>

                <div class="col-12 p-0 m-0">
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"
                      >SINOPSIS VIDEO</label
                    >
                    <textarea class="form-control" name="" id=""></textarea>
                    <!-- <input
                      type="text"
                      class="form-control"
                      id="exampleInputPassword1" /> -->
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"
                      >DESKRIPSI VIDEO</label
                    >
                    <textarea class="form-control" name="" id=""></textarea>
                  </div>
                </div>

                <button type="submit" class="btn btn-danger">
                  <i class="fas fa-plus-circle px-1 text-center"></i> Buat vidio
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
    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Anda yakin ingin Keluar?
            </h5>
            <button
              class="close"
              type="button"
              data-dismiss="modal"
              aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Anda Ingin Keluar.</div>
          <div class="modal-footer">
            <button
              class="btn btn-secondary"
              type="button"
              data-dismiss="modal">
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
