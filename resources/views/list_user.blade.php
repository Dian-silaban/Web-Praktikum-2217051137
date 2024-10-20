@extends('layouts.app')

@section('title', 'List Daftar User')

@section('css')

<style>
    body {
        background-image : url('{{ asset('asset/images/bg.jpg') }}');
        background-size : cover; 
        background-position : center;  
        background-repeat : no-repeat;
        height : 100vh;
        margin: 0;
    }
</style>

@endsection

@section('content')
<div class="overflow-x-auto">
    <table class="min-w-full table-auto">
        <!-- Tabel lainnya -->
    </table>
</div>

<div class="bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Daftar User</h1>

    
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>

    <table class="table-custom">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->npm }}</td>
                    <td>{{ $user->nama_kelas ?? 'Kelas tidak ditemukan' }}</td>
                    <td>
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-edit">Edit</a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="inline-block"
                            onsubmit="return confirm('Yakin ingin menghapus user ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
