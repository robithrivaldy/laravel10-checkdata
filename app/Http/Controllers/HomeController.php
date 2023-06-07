<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorehomeRequest;
use App\Http\Requests\UpdatehomeRequest;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }


    public function store(Request $request)
    {
        $nisn = $request->nisn;
        $data = student::where('nisn', $nisn)->first();
        // $data = DB::table('students')->where('nisn', '=', '$nisn')->get();
        // mengirim data pegawai ke view index
        if ($data) {
            return view('result')->with('item', $data);
        } else {
            echo '<center><h1>DATA NISN SISWA TIDAK DITEMUKAN</h1></center>';
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
}
