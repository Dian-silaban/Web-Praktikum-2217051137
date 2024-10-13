<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#bbdefb]">

    <div class="flex items-center justify-center h-screen">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-center text-2xl font-bold mb-6">Create User</h2>
            <form action="{{ route('user.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama:</label>
                    <input type="text" name="nama" id="nama" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukkan Nama">
                </div>

                <div>
                    <label for="npm" class="block text-sm font-medium text-gray-700">NPM:</label>
                    <input type="text" name="npm" id="npm" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukkan NPM">
                </div>

                <div>
                    <label for="kelas" class="block text-sm font-medium text-gray-700">Kelas:</label>
                    <input type="text" name="kelas" id="kelas" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Masukkan Kelas">
                </div>

                <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Submit</button>
            </form>
        </div>
    </div>

</body>
</html>
