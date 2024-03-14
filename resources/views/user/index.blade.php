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
                    <table class="table table-bordered">
                      <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Username</th>
                          <th>Role</th>
                          <th>Email</th>
                          <th>Password</th>
                      </tr>
                      
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <a href="{{ route('user.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-plus"></i> Tambah User </a>
                    </div>

                    @foreach ($users as $user)
              <tr>
                <td>{{ $no++ }}</td>
                <td >{{ $user->name }}</td>
                <td >{{ $user->username }}</td>
                <td >{{ $user->role }}</td>
                <td >{{ $user->email }}</td>
                <td >{{ $user->password }}</td>
                <td><a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning m-1 "><i class="bi bi-pencil-square"></i></a>
                    <form action="{{ route('user.destroy', $user->id) }}" method="post" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="bi bi-trash"></i></button>
                    </form>
                    </td>
              </tr>
              @endforeach
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