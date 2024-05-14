<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Jadwal_Konser;
use Illuminate\Support\Facades\Redirect;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticket = Ticket::all();
        return view('ticket', compact('ticket'));
    }
    public function ticket_list()
    {
        $ticket = Ticket::all();
        return view('ticket_list', ['ticket' => $ticket]);
    }
    public function ticket_list_admin()
    {
        $ticket = Ticket::all();
        return view('ticket_list_admin', ['ticket' => $ticket]);
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
            'nama_acara' => 'required|min:1|max:255',
            'nama' => 'required|min:1|max:255',
            'email' => 'required|min:1|max:255',
            'nomor_hp' => 'required|min:0|max:255',
            'jumlah' => 'required|min:1|max:255',
        ]);

        $tiket = Ticket::create([
            'nama_acara' => $validation['nama_acara'],
            'nama' => $validation['nama'],
            'email' => $validation['email'],
            'nomor_hp' => $validation['nomor_hp'],
            'jumlah' => $validation['jumlah'],
            'additional' => $request->input('additional'),
        ]);
        
        $id = $tiket->id;
        $nama_acara = $tiket->nama_acara;
        $nama = $tiket->nama;
        $email = $tiket->email;
        $nomor_hp = $tiket->nomor_hp;
        $jumlah = $tiket->jumlah;
        $additional = $tiket->additional;
        $jadwal = Jadwal_Konser::where('nama', $nama_acara)->first();
        $total_harga = $jumlah * $jadwal->harga;
        return view('bayar_ticket', compact('id', 'nama_acara', 'nama', 'email', 'nomor_hp', 'jumlah', 'additional','total_harga'));
    }
    
    public function bayar($id)
    {   
        // Ambil data tiket berdasarkan ID
        $tiket = Ticket::find($id);
        $nama_acara = $tiket->nama_acara;
        $nama = $tiket->nama;
        $email = $tiket->email;
        $nomor_hp = $tiket->nomor_hp;
        $jumlah = $tiket->jumlah;
        $additional = $tiket->additional;

        $jadwal = Jadwal_Konser::where('nama', $tiket->nama_acara)->first();

        $total_harga = $jumlah * $jadwal->harga;

        return view('bayar_ticket', compact('id','nama_acara', 'nama', 'email', 'nomor_hp', 'jumlah', 'additional', 'total_harga'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request)
    {
        $validation = $request->validate([
            'bukti_trf' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $image = $request->file('bukti_trf');
        $imageName = $image->getClientOriginalName();
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images/bukti_trf'), $imageName);

        Ticket::where('id', $request->id)->update([
            'bukti_trf' => $imageName,
        ]);

        return redirect('/ticket_list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
