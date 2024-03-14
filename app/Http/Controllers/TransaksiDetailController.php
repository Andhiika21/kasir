<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiDetailController extends Controller
{
    public function create(Request $request)
    {
       $data = [
        'id_barang' => $request->id_barang,
        'nama_barang' => $request->nama_barang,
        'id_penjualan' => $request->id_penjualan,
        'qty' => $request->qty,
        'subtotal' => $request->subtotal,
        ''
       ];
       


    }
}
