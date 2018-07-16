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
}
