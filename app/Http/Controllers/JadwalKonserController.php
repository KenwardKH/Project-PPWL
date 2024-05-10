<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal_Konser;

class JadwalKonserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'nama' => 'required|min:1|max:255',
            'gambar' => 'required|min:1|max:255',
            'artis' => 'required|min:1|max:255',
            'harga' => 'required|numeric|min:0|max:9999999.99',
            'tanggal_konser' => 'required|min:1|max:255',
            'waktu_mulai' => 'required|min:1|max:255',
            'waktu_berakhir' => 'required|min:1|max:255',
            'lokasi' => 'required|min:1|max:255',
        ]);
        $image = $request->file('gambar');
        $imageName = $image->getClientOriginalName();
            
        // Move the image to the public/images/poster directory
        $image->move(public_path('images/poster'), $imageName);
        $jadwal = Jadwal_konser::create([
            'nama' => $validation['nama'],
            'gambar' => $imageName,
            'artis' => $validation['artis'],
            'harga' => $validation['harga'],
            'tanggal_konser' => $validation['tanggal_konser'],
            'waktu_mulai' => $validation['waktu_mulai'],
            'waktu_berakhir' => $validation['waktu_berakhir'],
            'lokasi' => $validation['lokasi'],
        ]);

        return redirect('/jadwal_konser');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $jadwal_konsers = Jadwal_Konser::all();
        return view('jadwal_konser', compact('jadwal_konsers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jadwal = Jadwal_Konser::find($id);
        return view('edit_jadwal_konser', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validation = $request->validate([
            'nama' => 'required|min:1|max:255',
            'gambar' => 'required|min:1|max:255',
            'artis' => 'required|min:1|max:255',
            'harga' => 'required|numeric|min:0|max:9999999.99',
            'tanggal_konser' => 'required|min:1|max:255',
            'waktu_mulai' => 'required|min:1|max:255',
            'waktu_berakhir' => 'required|min:1|max:255',
            'lokasi' => 'required|min:1|max:255',
        ]);

        $image = $request->file('gambar');
        $imageName = $image->getClientOriginalName();
        // Move the image to the public/images/poster directory
        $image->move(public_path('images/poster'), $imageName);

        Jadwal_Konser::where('id', $request->id)->update([
            'nama' => $validation['nama'],
            'gambar' => $imageName,
            'artis' => $validation['artis'],
            'harga' => $validation['harga'],
            'tanggal_konser' => $validation['tanggal_konser'],
            'waktu_mulai' => $validation['waktu_mulai'],
            'waktu_berakhir' => $validation['waktu_berakhir'],
            'lokasi' => $validation['lokasi'],
        ]);

        return redirect('/jadwal_konser');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Jadwal_Konser::find($id)->delete();
        return redirect('/jadwal_konser');
    }
}
