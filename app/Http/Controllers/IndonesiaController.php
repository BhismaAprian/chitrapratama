<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Buku;
use App\Models\Galeri;
use App\Models\Halaman;
use App\Models\Infografis;
use App\Models\Laporan;
use App\Models\LembarFakta;
use App\Models\SiaranPers;
use App\Models\Video;
use Illuminate\Http\Request;

class IndonesiaController extends Controller
{
    public function index()
    {
        return view('indonesian.beranda');
    }




    public function buku(Request $request)
    {
        return view('indonesian.buku');
    }

    

    public function infografis(Request $request)
    {

        return view('indonesian.infografis');
    }

    public function galeri()
    {

        return view('indonesian.galeri');
    }

    public function tentangKami()
    {
        return view('indonesian.tentang_kami');
    }
}
