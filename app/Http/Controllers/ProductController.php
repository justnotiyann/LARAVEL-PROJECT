<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Product::paginate(10);
        return view('product.index', ['result' => $result]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create', [
            'result' => new Product,
            'button' => 'Create Data'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return ddd($request->file('image')->store('product-image'));
        $validateData = $request->validate([
            'nama_product' => 'required|string|max:255',
            'jenis_product' => 'required|in:aksesoris,skin_care,makanan',
            'quantity' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'harga' => 'required|numeric',
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('product-image');
        }
        ;

        Product::create($validateData);
        return redirect('/product');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $result = Product::where('id', $id)->first();
        return view('product.show', ['result' => $result, 'button' => 'Edit Data'], );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditProductRequest $request, string $id)
    {
        Product::where('id', $id)->update($request->validated());
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::where('id', $id)->delete();
        return back()->with('success', 'Berhasil Hapus Data');
    }
}
