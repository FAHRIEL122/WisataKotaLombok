<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalWisata = Wisata::count();
        $kota = "Lombok"; // Sesuai dengan spesifikasi
        
        // Statistik Sederhana
        $kategoriStats = Wisata::select('kategori', DB::raw('count(*) as total'))
            ->groupBy('kategori')
            ->get();

        return view('admin.dashboard', compact('totalWisata', 'kota', 'kategoriStats'));
    }
}
