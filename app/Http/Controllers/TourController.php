<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\Tour;

use Illuminate\Http\Request;

class TourController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kategori=Kategori::where('status', '1')->get();
        $tour = Tour::all();
        return view('pages.data_tour.data_tour', compact('tour','kategori'));
    }
    public function create()
    {
        $kategori=Kategori::where('status', '1')->get();
        return view('pages.data_tour.create', compact('kategori'));
    }
    public function store(Request $request){
        $tour = new Tour();
        $tour->namatour = $request->nama;
        $tour->deskripsi = $request->deskripsi;
        $tour->id_kategori = $request->kategori;
        $tour->harga = $request->harga;
        $tour->gambar = $request->file('gambar')->store('tour');
        $tour->save();
        return redirect()->route('tour');
    }

    public function edit($id)
    {
        $tour = Tour::find($id);
        $kategori=Kategori::where('status', '1')->get();
        return view('pages.data_tour.edit', compact('tour','kategori'));
    }

    public function update(Request $request, $id){
        $tour = Tour::find($id);
        $tour->namatour = $request->nama;
        $tour->deskripsi = $request->deskripsi;
        $tour->id_kategori = $request->kategori;
        $tour->harga = $request->harga;
        if ($tour->gambar = $request->file('gambar') == ''){
            $tour->gambar = $request->old_gambar;
        }else{
            $tour->gambar = $request->file('gambar')->store('tour');
        }
        $tour->update();
        return redirect()->route('tour');
    }

    public function destroy($id){
        $tour = Tour::find($id);
        $tour->delete();
        return redirect()->route('tour');
    }
}
