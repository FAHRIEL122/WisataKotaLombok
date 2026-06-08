<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function welcome(Request $request) {
        $query = Wisata::query();

        if ($request->filled('search')) {
            $query->where('nama_tempat', 'like', '%' . $request->search . '%')
                  ->orWhere('alamat', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        $wisatas = $query->latest()->get();
        return view('welcome', compact('wisatas'));
    }

    public function detail($id) {
        $wisata = Wisata::with('galeris')->findOrFail($id);
        return view('detail', compact('wisata'));
    }
}