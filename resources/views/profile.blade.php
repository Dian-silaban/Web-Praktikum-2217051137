<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#bbdefb]">

    <div class="flex items-center justify-center h-screen">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-center text-2xl font-bold mb-6">{{ $title }}</h2>
            
            <!-- Foto Profil -->
            <div class="flex justify-center mb-4">
                <img src="{{ $user->foto ?? '/path/to/default-foto.jpg' }}" alt="Foto Profil" class="w-24 h-24 rounded-full object-cover">
            </div>

            <table class="min-w-full">
                <tbody>
                    <tr class="border-b">
                        <td class="text-sm font-medium text-gray-700">Nama</td>
                        <td class="text-sm text-gray-500">:</td>
                        <td class="text-sm text-gray-500">{{ $user->nama }}</td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-sm font-medium text-gray-700">Kelas</td>
                        <td class="text-sm text-gray-500">:</td>
                        <td class="text-sm text-gray-500">{{ $user->kelas->nama ?? 'Belum ada kelas' }}</td>
                    </tr>
                    <tr>
                        <td class="text-sm font-medium text-gray-700">NPM</td>
                        <td class="text-sm text-gray-500">:</td>
                        <td class="text-sm text-gray-500">{{ $user->npm }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
