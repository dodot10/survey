<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Survei</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4">Detail Survei</h1>
        <div class="mb-4">
            <p class="text-gray-700"><strong>Nama Tempat:</strong> {{ $survey->name }}</p>
        </div>
        <div class="mb-4">
            <p class="text-gray-700"><strong>Lokasi:</strong> {{ $survey->location }}</p>
        </div>
        <div class="flex gap-2">
            <a href="{{ route('surveys.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Kembali</a>
            <a href="{{ route('surveys.edit', $survey->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
            <form action="{{ route('surveys.destroy', $survey->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded" onclick="return confirm('Yakin ingin menghapus survei ini?')">Hapus</button>
            </form>
        </div>
    </div>
</body>
</html>
