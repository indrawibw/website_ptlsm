<?php

namespace App\Http\Controllers;

use App\Models\Kerjasama;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class KerjasamaController extends Controller
{
    public function index()
    {
        $kerjasama = Kerjasama::latest()->paginate(10);
        return view('kerjasama.index', compact('kerjasama'));
    }

    public function create()
    {
        return view('kerjasama.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'email' => 'required|email',
        'pesan' => 'required',
    ]);

    Kerjasama::create($request->only('nama', 'email', 'pesan'));

    return back()->with('success', 'Pesan berhasil dikirim!');
}

    public function edit(Kerjasama $kerjasama)
    {
        return view('kerjasama.edit', compact('kerjasama'));
    }

    public function update(Request $request, Kerjasama $kerjasama)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'pesan' => 'required',
        ]);

        $kerjasama->update($request->all());

        return redirect()->route('kerjasama.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy(Kerjasama $kerjasama)
    {
        $kerjasama->delete();
        return redirect()->route('kerjasama.index')->with('success', 'Data berhasil dihapus.');
    }

    public function exportPdf()
    {
        $kerjasama = Kerjasama::latest()->get();

        $pdf = PDF::loadView('kerjasama.pdf', compact('kerjasama'));
        return $pdf->download('data-kerjasama.pdf');
    }

}
