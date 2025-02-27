<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Tempat Ujian</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4">Daftar Survei Tempat Ujian</h1>
        <a href="{{ route('surveys.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Survei</a>
        <table class="w-full mt-4 border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Nama Tempat</th>
                    <th class="border px-4 py-2">Lokasi</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($surveys as $index => $survey)
                    <tr>
                        <td class="border px-4 py-2">{{ $index + 1 }}</td>
                        <td class="border px-4 py-2">{{ $survey->name }}</td>
                        <td class="border px-4 py-2">{{ $survey->location }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('surveys.show', $survey->id) }}" class="text-blue-500">Lihat</a>
                            <a href="{{ route('surveys.edit', $survey->id) }}" class="text-yellow-500 mx-2">Edit</a>
                            <form action="{{ route('surveys.destroy', $survey->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
