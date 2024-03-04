<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buah = Fruit::all();
        return view('fruits.index', compact('buah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fruits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // dd => Dump and Die

        $pesan = [
            'nama_buah.required'    => 'Belum ada nama buah',
            'harga.required'        => 'Belum ada harga',
            'harga.min'             => 'Harga tidak mencukupi',
        ];

        $request->validate([
            'nama_buah'     => 'required',
            'harga'         => 'required|min:4',
        ], $pesan);
        // $request adalah variabel bawaan dari laravel

        $buah = new Fruit(); // Mendapat data

        $buah->nama_buah  = $request->nama_buah;
        $buah->harga      = $request->harga;
        // nama_buah di $request diambil dari "name" di dalam tag input di create.blade.php
        // Yang diatas adalah column

        $buah->save();
        return redirect()->route('fruits.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $buah = Fruit::findOrFail($id);
        // findOrFail = Keyword untuk mencari data =D
        // Nanti $buah hanya menyediakan 1 data sesuai id-nya

        return view('fruits.show', compact('buah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $buah = Fruit::findOrFail($id);
       return view('fruits.edit', compact('buah')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $buah = Fruit::findOrFail($id);

        
        $buah->nama_buah  = $request->nama_buah;
        $buah->harga      = $request->harga;

        $buah->update();
        return redirect()->route('fruits.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buah = Fruit::findOrFail($id);
        $buah->delete();
        
        return redirect()->route('fruits.index');
    }
}
