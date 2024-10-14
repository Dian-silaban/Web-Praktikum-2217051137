<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = '', $kelas = '', $npm = '')
    {
        // Data yang akan dikirim ke view
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];

        // Mengembalikan view dengan data
        return view('profile', $data);
    }
}
