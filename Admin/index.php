<?php require "include/head.php"; ?>
<?php require "include/nav.php"; ?>

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">
                Dashboard Learning Manajement System
              </h1>
            </div>

            <!-- Content Row -->
            <div class="row">
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                          Jumlah Vidio
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          5
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-video fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                          Kategori Bahasa
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          3
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-language fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <div class="d-flex justify-content-between">
                  <h6
                    class="font-weight-bold text-danger align-self-center py-2">
                    Data Pembelajaran Bahasa
                  </h6>
                  <a
                    href="create.html"
                    class="btn btn-danger py-2 px-3 my-2 text-white align-self-center">
                    <i class="fas fa-folder-plus"></i>
                    Tambah Vidio
                  </a>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <div
                    id="dataTable_wrapper"
                    class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                      <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="dataTable_length">
                          <label
                            >Show
                            <select
                              name="dataTable_length"
                              aria-controls="dataTable"
                              class="custom-select custom-select-sm form-control form-control-sm">
                              <option value="10">10</option>
                              <option value="25">25</option>
                              <option value="50">50</option>
                              <option value="100">100</option>
                            </select>
                            entries</label
                          >
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <div id="dataTable_filter" class="dataTables_filter">
                          <label
                            >Search:<input
                              type="search"
                              class="form-control form-control-sm"
                              placeholder=""
                              aria-controls="dataTable"
                          /></label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <table
                          class="table table-bordered dataTable"
                          id="dataTable"
                          width="100%"
                          cellspacing="0"
                          role="grid"
                          aria-describedby="dataTable_info"
                          style="width: 100%">
                          <thead>
                            <tr role="row">
                              <th
                                class="sorting sorting_asc"
                                tabindex="0"
                                aria-controls="dataTable"
                                rowspan="1"
                                colspan="1"
                                style="width: 15px"
                                aria-sort="ascending"
                                aria-label="Name: activate to sort column descending">
                                ID
                              </th>
                              <th
                                class="sorting"
                                tabindex="0"
                                aria-controls="dataTable"
                                rowspan="1"
                                colspan="1"
                                style="width: 61px"
                                aria-label="Position: activate to sort column ascending">
                                URL Vidio
                              </th>
                              <th
                                class="sorting"
                                tabindex="0"
                                aria-controls="dataTable"
                                rowspan="1"
                                colspan="1"
                                style="width: 49px"
                                aria-label="Office: activate to sort column ascending">
                                Judul Vidio
                              </th>
                              <th
                                class="sorting"
                                tabindex="0"
                                aria-controls="dataTable"
                                rowspan="1"
                                colspan="1"
                                style="width: 31px"
                                aria-label="Age: activate to sort column ascending">
                                Kategori Vidio
                              </th>
                              <th
                                class="sorting"
                                tabindex="0"
                                aria-controls="dataTable"
                                rowspan="1"
                                colspan="1"
                                style="width: 31px"
                                aria-label="Age: activate to sort column ascending">
                                Durasi
                              </th>
                              <th
                                class="sorting"
                                tabindex="0"
                                aria-controls="dataTable"
                                rowspan="1"
                                colspan="1"
                                style="width: 150px"
                                aria-label="Start date: activate to sort column ascending">
                                Sinopsis
                              </th>
                              <th
                                class="sorting"
                                tabindex="0"
                                aria-controls="dataTable"
                                rowspan="1"
                                colspan="1"
                                style="width: 300px"
                                aria-label="Salary: activate to sort column ascending">
                                Deskripsi Vidio
                              </th>
                              <th
                                class="sorting"
                                tabindex="0"
                                aria-controls="dataTable"
                                rowspan="1"
                                colspan="1"
                                style="width: 40px"
                                aria-label="Salary: activate to sort column ascending">
                                Action
                              </th>
                            </tr>
                          </thead>
                          <tfoot>
                            <tr>
                              <th rowspan="1" colspan="1">ID</th>
                              <th rowspan="1" colspan="1">URL Vidio</th>
                              <th rowspan="1" colspan="1">Judul Vidio</th>
                              <th rowspan="1" colspan="1">Kategori Vidio</th>
                              <th rowspan="1" colspan="1">Durasi</th>
                              <th rowspan="1" colspan="1">Sinopsis</th>
                              <th rowspan="1" colspan="1">Deskripsi</th>
                              <th rowspan="1" colspan="1">Action</th>
                            </tr>
                          </tfoot>
                          <tbody>
                            <tr class="odd">
                              <td class="sorting_1">12</td>
                              <td>
                                https://www.youtube.com/embed/icK6kVTegDA?si=bX-IN5Iw5q7ul9Db
                              </td>
                              <td>Belajar Bahasa Jepang OTODIDAK</td>
                              <td>Bahasa Jepang</td>
                              <td>38.05 menit</td>
                              <td>
                                HIRAGANA adalah huruf utama yang paling banyak
                                digunakan dalam Bahasa Jepang. Buat Kalian
                                Pemula yg baru mulai Belajar Bahasa Jepang
                              </td>
                              <td>
                                HIRAGANA adalah huruf utama yang paling banyak
                                digunakan dalam Bahasa Jepang. Buat Kalian
                                Pemula yg baru mulai Belajar Bahasa Jepang
                              </td>
                              <td>
                                <div class="d-flex">
                                  <a
                                    href="show.php"
                                    class="btn btn-primary btn-circle">
                                    <i class="far fa-eye"></i>
                                  </a>
                                  <a
                                    href="edit.php"
                                    class="btn btn-warning btn-circle mx-2">
                                    <i class="far fa-edit"></i>
                                  </a>
                                  <a href="" class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr class="even">
                              <td class="sorting_1">12</td>
                              <td>
                                https://www.youtube.com/embed/icK6kVTegDA?si=bX-IN5Iw5q7ul9Db
                              </td>
                              <td>Belajar Bahasa Jepang OTODIDAK</td>
                              <td>Bahasa Jepang</td>
                              <td>38.05 menit</td>
                              <td>
                                HIRAGANA adalah huruf utama yang paling banyak
                                digunakan dalam Bahasa Jepang. Buat Kalian
                                Pemula yg baru mulai Belajar Bahasa Jepang
                              </td>
                              <td>
                                HIRAGANA adalah huruf utama yang paling banyak
                                digunakan dalam Bahasa Jepang. Buat Kalian
                                Pemula yg baru mulai Belajar Bahasa Jepang
                              </td>
                              <td>
                                <div class="d-flex">
                                  <a
                                    href="show.php"
                                    class="btn btn-primary btn-circle">
                                    <i class="far fa-eye"></i>
                                  </a>
                                  <a
                                    href="edit.php"
                                    class="btn btn-warning btn-circle mx-2">
                                    <i class="far fa-edit"></i>
                                  </a>
                                  <a href="" class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 col-md-5">
                        <div
                          class="dataTables_info"
                          id="dataTable_info"
                          role="status"
                          aria-live="polite">
                          Showing 1 to 10 of 57 entries
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-7">
                        <div
                          class="dataTables_paginate paging_simple_numbers"
                          id="dataTable_paginate">
                          <ul class="pagination">
                            <li
                              class="paginate_button page-item previous disabled"
                              id="dataTable_previous">
                              <a
                                href="#"
                                aria-controls="dataTable"
                                data-dt-idx="0"
                                tabindex="0"
                                class="page-link"
                                >Previous</a
                              >
                            </li>
                            <li class="paginate_button page-item active">
                              <a
                                href="#"
                                aria-controls="dataTable"
                                data-dt-idx="1"
                                tabindex="0"
                                class="page-link"
                                >1</a
                              >
                            </li>
                            <li class="paginate_button page-item">
                              <a
                                href="#"
                                aria-controls="dataTable"
                                data-dt-idx="2"
                                tabindex="0"
                                class="page-link"
                                >2</a
                              >
                            </li>
                            <li class="paginate_button page-item">
                              <a
                                href="#"
                                aria-controls="dataTable"
                                data-dt-idx="3"
                                tabindex="0"
                                class="page-link"
                                >3</a
                              >
                            </li>
                            <li class="paginate_button page-item">
                              <a
                                href="#"
                                aria-controls="dataTable"
                                data-dt-idx="4"
                                tabindex="0"
                                class="page-link"
                                >4</a
                              >
                            </li>
                            <li class="paginate_button page-item">
                              <a
                                href="#"
                                aria-controls="dataTable"
                                data-dt-idx="5"
                                tabindex="0"
                                class="page-link"
                                >5</a
                              >
                            </li>
                            <li class="paginate_button page-item">
                              <a
                                href="#"
                                aria-controls="dataTable"
                                data-dt-idx="6"
                                tabindex="0"
                                class="page-link"
                                >6</a
                              >
                            </li>
                            <li
                              class="paginate_button page-item next"
                              id="dataTable_next">
                              <a
                                href="#"
                                aria-controls="dataTable"
                                data-dt-idx="7"
                                tabindex="0"
                                class="page-link"
                                >Next</a
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

<?php require "include/footer.php" ?>
