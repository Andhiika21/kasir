<!DOCTYPE html>
<html lang="en">

<head>

   @include('partials.head')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('partials.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('partials.navbar')

                <!-- Begin Page Content -->
                  <!-- dalam resources/views/barang/create.blade.php -->

                  <div class="container-fluid">
                    <h1>Barang</h1>
                    <div class="card-body">
                      <div class="content">
                          <div class="card card-info card-outline">
                              <div class="card-header">
                                  <h4>Tambah Barang</h4>
                              </div>
                            <div class="card-body">

                                <form method="POST" action="{{ route('barang.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Add your form fields for 'foto', 'nama_barang', 'kategori', 'harga', and 'stok' -->
                                    <div class="form-group">
                                        <label for="nama_barang">Nama Barang:</label>
                                        <input type="text" name="nama_barang" class="form-control mb-3" autocomplete="off" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori">Kategori:</label>
                                        <select name="kategori" class="form-control mb-3" autocomplete="off" autofocus required>
                                        @foreach(\App\Models\Barang::$kategoriValues as $kategori)
                                            <option value="{{ $kategori }}">{{ ucfirst($kategori) }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga:</label>
                                        <input type="number" name="harga" min="0" class="form-control mb-3" autocomplete="off" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">Stok:</label>
                                        <input type="number" name="stok" min="0" class="form-control mb-3" autocomplete="off" autofocus required>
                                    </div>
                                    <button type="submit">Submit</button>
                                </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    {{-- <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div> --}}

    @include('partials.script')

</body>

</html>