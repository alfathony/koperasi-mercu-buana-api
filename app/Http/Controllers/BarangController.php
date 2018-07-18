<?php

namespace App\Http\Controllers;

use App\Barang;
use DB;

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
       $barang =  Barang::orderBy('id','DESC')->get();
       return response()->json(['status' => '200', 'data' => $barang]);
    }

    public function add()
    {
        $nama_barang = $_POST['nama_barang'];
        $merk_barang = $_POST['merk_barang'];
        $harga_barang = $_POST['harga_barang'];

        if ("" !== $nama_barang && "" !== $merk_barang && "" !== $harga_barang) {

            DB::table('barang')->insert(
                ['nama_barang' => $nama_barang, 'merk_barang' => $merk_barang, 'harga_barang' => $harga_barang]
            );

            return response()->json(['status' => '200','message' => 'Suksess', 'data' => $_POST]);
        }

        return response()->json(['status' => '200','message' => 'Nama barang, merk dan harga harus di isi!', 'data' => '']);

        
    }
}
