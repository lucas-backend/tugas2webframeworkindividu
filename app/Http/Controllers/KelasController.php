<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Data contoh (dummy data) sesuai tema absensi sekolah
        $kelasList = [
            ['id' => 1, 'nama_kelas' => 'X IPA 1', 'wali_kelas' => 'Ibu Guru A', 'jumlah_siswa' => 32],
            ['id' => 2, 'nama_kelas' => 'XI IPS 2', 'wali_kelas' => 'Bapak Guru B', 'jumlah_siswa' => 30],
            ['id' => 3, 'nama_kelas' => 'XII IPA 3', 'wali_kelas' => 'Ibu Guru C', 'jumlah_siswa' => 28],
        ];

        return view('kelas.index', compact('kelasList'));
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
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
