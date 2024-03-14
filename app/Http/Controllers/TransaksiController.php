<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Penjualan;
use App\Models\TransaksiDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TransaksiController extends Controller
{
    // Menampilkan semua transaksi
    public function index()
    {
        $penjualans = Penjualan::all();
        return view('transaksi.index',compact('penjualans'));
    }

    public function create()
    {   
        $barangs = Barang::get();
        $dbarang = request('id_barang');
        $dtbarang = Barang::find($dbarang);

        $act = request('act');
        $qty = request('qty');
        if($act == 'min'){
            if ($qty <= 1){
                $qty = 1;
            }else{
                $qty = $qty - 1;
            }
            $qty = $qty - 1;
        }else{
            $qty = $qty + 1;
        }

        $subtotal = 0;
        if($dbarang){
            $subtotal = $qty * $dtbarang->harga;
        }
        // $qty = request('')

        return view('transaksi.create', compact('barangs','dtbarang','qty','subtotal'));
    }

    public function store(Request $request)
    {

        $user = Auth::user()->id;
        $id_produk  = $request->id_produk; 
        $id_barang  = $request->id_barang;
        $subtotal  = $request->subtotal;
        $total      = $request->total; 
        $bayar      = $request-> bayar;
        $kembalian  = $request->kembalian;

        // var_dump($id_produk );die();
        $transaksi = Penjualan::create([
            'id_petugas' => $user,
            'id_barang' => $id_barang,
            'total' => $total,
            'bayar' => $bayar,
            'kembalian' => $kembalian,
            'tanggal' => date('Y-m-d'),
        ]);
        
        // Ambil ID dari transaksi yang baru saja dibuat
        $id_penjualan = $transaksi->id;
        
        for ($i = 0; $i < count($id_produk); $i++) {
            $id = $id_produk[$i];
            $subtotal = $subtotal[$i];

            TransaksiDetail::create([
                'id_penjualan' => $id_penjualan,
                'id_produk' => $id,                
                'total' => $total,
            ]);
        }
        // var_dump($request);die();
        // Validasi data dari request
        

        // Buat transaksi baru berdasarkan data yang diterima dari request

        // Redirect ke halaman indeks transaksi dengan pesan sukses
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan.');
    }
    public function edit()
    {
        $barangs = Barang::get();
        $dbarang = request('id_barang');
        $dtbarang = Barang::find($dbarang);

        $act = request('act');
        $qty = request('qty');
        if($act == 'min'){
            if ($qty <= 1){
                $qty = 1;
            }else{
                $qty = $qty - 1;
            }
            $qty = $qty - 1;
        }else{
            $qty = $qty + 1;
        }

        $subtotal = 0;
        if($dbarang){
            $subtotal = $qty * $dtbarang->harga;
        }
        // $qty = request('')

        return view('transaksi.create', compact('barangs','dtbarang','qty','subtotal'));
    }
    protected function addTransaksi()
    {
        $dbarang = request('id_barang');

        $data = [
            'id_petugas' => auth()->user()->id,
            'id_barang' => $dbarang,
        ];

        Penjualan::create($data);
    }
}   