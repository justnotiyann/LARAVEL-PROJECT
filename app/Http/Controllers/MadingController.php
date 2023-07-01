<?php

namespace App\Http\Controllers;

use App\Models\Mading;

use Illuminate\Http\Request;

class MadingController extends Controller
{

    public function index()
    {

        $result = Mading::get();
        return view('mading.index', [
            'result' => $result
        ]);
    }

    public function show()
    {
        return view('mading.create');
    }

    public function store(Request $request)
    {


        Mading::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar,
        ]);

        return redirect('/mading');
    }
}
