<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BerandaController extends Controller
{
    public function index() {
        $data = Post::all();
        return view('dashboard/beranda', compact('data'));
    }

    public function detail(string $id) {
        $data = Post::find($id);
        $produk = Produk::where('kategori_id', $data->kategori_id)->paginate(3);
        // dd($produk);
        return view('dashboard/detail', compact('data', 'produk'));
    }
}
