<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NilaiSiswa;
class SiswaController extends Controller
{
    public function index($kelasNya = null)
    {
        $kelas = NilaiSiswa::get()->groupBy('kelas')->keys()->sort()->values();
        if($kelasNya){
            $siswa = NilaiSiswa::where('kelas', $kelasNya)->paginate(10);
        }else{
            $siswa = NilaiSiswa::paginate(10);
        }
        return view('welcome',compact('siswa','kelas'));
    }
}
