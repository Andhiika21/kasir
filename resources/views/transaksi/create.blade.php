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
                <div class="row p-2">
                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-body">
  
                        <div class=" row mt-1">
                          <div class="col-md-4">
                            <label for="">Kode produk</label>
                          </div>
                          <div class="col-md-8">
                            <form method="GET">
                              <div class="d-flex">
                                <select name="id_barang" class="form-control mr-2" id="">
                                  <option value="{{ isset($dtbarang) ? $dtbarang->nama_barang : 'Nama Produk' }}">---</option>
                                  @foreach ($barangs as $barang)
                                  <option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>
                                  @endforeach
                                </select>
                                <button type="submit" class="btn btn-primary">Pilih</button>
                              </div>
                            </form>
                          </div>
                        </div>
  
                      <form action="{{ route('transaksidt') }}" method="POST">
                        @csrf
                        <div class=" row mt-1">
                          <div class="col-md-4">
                            <label for="">Nama Barang</label>
                          </div>
                          <div class="col-md-8">
                            <input type="text" value="{{ isset($dtbarang) ? $dtbarang->nama_barang : '' }}" disabled class="form-control" name="nama_barang">
                          </div>
                        </div>
  
                        <div class=" row mt-1">
                          <div class="col-md-4">
                            <label for="">Harga Satuan</label>
                          </div>
                          <div class="col-md-8">
                            
                            <input type="text" value="{{ isset($dtbarang) ? $dtbarang->harga : '' }}" disabled class="form-control" name="harga">
                          </div>
                        </div>

                        <div class="row mt-1">
                          <div class="col-md-4">
                            <label for="">Jumlah</label>
                          </div>
                          <div class="col-md-8">
                            <div class="d-flex">
                              <input type="number" value="{{ $qty }}" class="form-control mr-2" name="qty">
                              <a href="?id_barang={{ request('id_barang') }}&act=plus&qty={{ $qty }}" class="btn btn-primary mr-2"><i class="fas fa-plus"></i></a>            
                              <a href="?id_barang={{ request('id_barang') }}&act=min&qty={{ $qty }}" class="btn btn-primary mr-2"><i class="fas fa-minus"></i></a>
                            </div>
                          </div>
                        </div>

                        <div class="row mt-1">
                          <div class="col-md-4">
                            
                          </div>
                          <div class="col-md-8">
                            <h5>Subtotal : Rp. {{ $subtotal }} </h5>
                          </div>
                        </div>

                        <div class="row mt-1">
                          <div class="col-md-4">
                            
                          </div>
                          <div class="col-md-8">
                            <a href="{{ route('transaksi') }}" class="btn btn-info"><i class="fas fa-arrow-left"></i>
                              Kembali</a>
                              <button type="submit" class="btn btn-primary"> Tambah <i class="fas fa-arrow-right"></i></button> 
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  
                {{-- </div> --}}
                
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <table class="table">
                        <tr>  
                          <th>No</th>
                          <th>Nama Barang</th>
                          <th>QTY</th>
                          <th>#</th>
                        </tr>
                        <tr>  
                          <td>1</td>
                          <td>Baso</td>
                          <td>4</td>
                          <td>
                            <a href=""><i class="fas fa-times"></i></a>
                        </tr>
                      </table>
                      <a href="" class="btn btn-success"><i class="fas fa-check"></i> Selesai </a>
                    </div>
                  </div>
                </div>
                </div>

              <div class="row p-2">
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">

                      <div class="form-group">
                        <label for="">Total Belanja </label>
                        <input type="number" name="total" class="form-control" id="">
                      </div>

                      <div class="form-group">
                        <label for="">Dibayarkan </label>
                        <input type="number" name="bayar" class="form-control" id="">
                      </div>

                      <button type="submit" class="btn btn-primary btn-block"> Hitung </button>

                      <hr>

                      <div class="form-group">
                        <label for="">Kembalian </label>
                        <input type="number" disabled name="kembalian" class="form-control" id="">
                      </div>

                      
                    </div>
                  </div>
                </div>
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