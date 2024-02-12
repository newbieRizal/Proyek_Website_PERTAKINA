<?php require "include/head.php"; ?>
<?php require "include/nav.php"; ?>


          <!-- Begin Page Content -->

          <div class="container-fluid pb-4">
            <div class="card shadow">
              <div class="card-header">
                <h3 class="text-center py-2">FORM INPUT DATA</h3>
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

<?php require "include/footer.php";
