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
                <div class="container-fluid">
                  <h1>User</h1>
                  <div class="card-body">
                    <div class="content">
                        <div class="card card-info card-outline">
                            <div class="card-header">
                                <h4>Tambah User</h4>
                            </div>
                          <div class="card-body">
                            <form method="POST" action="{{ route('user.store') }}">

                                @csrf
                                <div class="form-group">
                                    <label for="name">Nama :</label>
                                    <input type="text" name="name" class="form-control mb-3" autocomplete="off" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Username :</label>
                                    <input type="text" name="username" class="form-control mb-3" autocomplete="off" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label for="kategori">Kategori :</label>
                                    <select name="kategori" class="form-control mb-3" autocomplete="off" autofocus required>
                                    @foreach(\App\Models\User::$roleuser as $role)
                                        <option value="{{ $role }}">{{ ucfirst($role) }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                  <label for="role">Role :</label>
                                  <select class="form-control" name="role" autofocus required>
                                    <option value="">--Pilih Role--</option>
                                    <option value="dekan">Admin</option>
                                    <option value="operator">Petugas</option>
                                  </select>
                              </div>
                                <div class="form-group">
                                    <label for="email">Email :</label>
                                    <input type="email" name="email" class="form-control mb-3" autocomplete="off" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password :</label>
                                    <input type="password" name="password" class="form-control mb-3" minlength="8" autofocus required>
                                </div>
                                <div class="form-group">
                                   <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                          </div>
                        </div>
                       
                    </div>
                      
                    <!-- Page Heading -->
                    {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div> --}}

                    <!-- Content Row -->
                    <div class="row">

                        

                    <!-- Content Row -->

                    <div class="row">

                

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                        </div>

                        <div class="col-lg-6 mb-4">
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