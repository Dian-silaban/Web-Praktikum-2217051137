<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel; 


class UserController extends Controller
{
    public function profile(Request $request)
    {
        $data = [
            'nama' => $request->input('nama', ''),
            'kelas' => $request->input('kelas', ''),
            'npm' => $request->input('npm', ''),
        ];

        return view('profile', $data);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255|unique:user,npm', 
            'kelas_id' => 'required|exists:kelas,id', 
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'npm.required' => 'NPM wajib diisi.',
            'npm.unique' => 'NPM sudah terdaftar.',
            'kelas_id.required' => 'Kelas wajib dipilih.',
            'kelas_id.exists' => 'Kelas tidak valid.',
        ]);
    
        
        $user = UserModel::create($validatedData);
        $user->load('kelas');
        
        return view('profile', [
            'nama' => $user->nama,
            'npm' => $user->npm,
            'nama_kelas' => $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan',
        ]);
    }
    
    

    public function create() {
        $kelas = Kelas::all(); 
        return view('create_user', compact('kelas')); 
    }

    
}
