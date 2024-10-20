@extends('layouts.app') <!-- Mewarisi layout app.blade.php -->

@section('content') 
<div class="flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-center text-2xl font-bold mb-6">Create User</h2>
        <form action="/user/store" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama:</label>
                <input type="text" id="nama" name="nama" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukkan Nama">
                @error('nama')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="npm" class="block text-sm font-medium text-gray-700">NPM:</label>
                <input type="text" id="npm" name="npm" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukkan NPM">
                @error('npm')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="kelas" class="block text-sm font-medium text-gray-700">Kelas:</label>
                <select name="kelas_id" id="kelas_id" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="" disabled selected>Pilih Kelas</option>
                    @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
                @error('kelas_id')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="foto">Upload Foto:</label>
                <input type="file" name="foto" id="foto">
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Submit</button>
        </form>
    </div>
</div>
@endsection <!-- Menandai akhir bagian konten -->
