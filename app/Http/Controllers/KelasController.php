<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (\request()->is('dashboard/kelas')) {
            return view('dashboard.kelas.all', ["title" => "Kelas", "kelass" => Kelas::all()]);
        } else {
            return view('kelas.all', ["title" => "Kelas", "kelass" => Kelas::all()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.kelas.create', [
            "title" => "Create",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
        ]);

        $result = Kelas::create($validateData);
        if ($result) {
            return redirect('/dashboard/kelas')->with('success', "Kelas Berhasil Ditambahkan");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kelas)
    {
        return view('dashboard.kelas.edit', [
            "title" => "Edit",
            "kelas" => $kelas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelas $kelas)
    {
        $validateData = $request->validate([
            'nama' => 'required',
        ]);

        $result = Kelas::where('id', $kelas->id)->update($validateData);
        if ($result) {
            return redirect('/dashboard/kelas')->with('success', "Kelas Berhasil Diedit");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kelas)
    {
        $result = Kelas::destroy($kelas->id);

        if ($result) {
            return redirect('/dashboard/kelas')->with('success', "Kelas Berhasil Dihapus");
        } else {
            return redirect('/dashboard/kelas')->with('error', "Gagal menghapus data kelas");
        }
    }
}
