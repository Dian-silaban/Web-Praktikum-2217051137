<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\User; 
use App\Models\UserModel;

class UserController extends Controller
{
    public $userModel; 
    public $kelasModel;

    public function __construct() 
    { 
        $this->userModel = new UserModel(); 
        $this->kelasModel = new Kelas(); 
    } 

    public function profile(Request $request)
    {
        $data = [
            'nama' => $request->input('nama', ''),
            'kelas' => $request->input('kelas', ''),
            'npm' => $request->input('npm', ''),
        ];

        return view('profile', $data);
    }

    public function index() 
        { 
            $data = [ 
                'title' => 'List User', 
                'users' => $this->userModel->getUser(), 
            ]; 
        
            return view('list_user', $data); 
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

       
        $this->userModel->create([ 
            'nama' => $request->input('nama'), 
            'npm' => $request->input('npm'), 
            'kelas_id' => $request->input('kelas_id'), 
            ]); 
            return redirect()->to('/users');
    }

    public function create()
    {
        
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Create User', 
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }
}
