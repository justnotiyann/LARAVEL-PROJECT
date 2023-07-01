<?php

namespace App\Http\Controllers;

use App\Models\Mading;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $results = Mading::get();
        return view('dashboard.index', compact('results'));
    }

    public function show()
    {
        return view('dashboard.create');
    }

    public function detail(Mading $mading)
    {
        return view('dashboard.detail', [
            'mading' => $mading
        ]);
    }
}
