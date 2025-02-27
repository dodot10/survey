<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Survey App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-800">Selamat Datang di Aplikasi Survey</h1>
        <p class="text-gray-600 mt-2">Silakan login untuk mengakses fitur survey.</p>
        
        <div class="mt-6">
            <a href="{{ route('login') }}" class="bg-indigo-600 text-white px-4 py-2 rounded shadow-md hover:bg-indigo-500">
                Login
            </a>
        </div>
    </div>
</body>
</html>
