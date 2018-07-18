<?php

namespace App\Http\Controllers;

use App\Barang;

class BarangController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
       $barang =  Barang::all();
       return response()->json(['status' => '200', 'data' => $barang]);
    }

    public function add()
    {
        $nama_barang = $_POST['nama_barang'];
        $merk_barang = $_POST['merk_barang'];
        $harga_barang = $_POST['harga_barang'];

        if ("" !== $nama_barang && "" !== $merk_barang && "" !== $harga_barang) {
            return response()->json(['status' => '200','message' => 'Ada isinya', 'data' => $_POST]);
        }

        return response()->json(['status' => '200','message' => 'Nama barang, merk dan harga harus di isi!', 'data' => '']);

        
    }
}
