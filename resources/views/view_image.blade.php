<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Gallery</title>
    <script src="https://cdn.tailwindcss.com/3.4.1"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="text-center">
        <h1 class="text-4xl font-bold text-blue-600 mb-6">My Images</h1>

        <div class="flex flex-col md:flex-row justify-center items-center gap-6">
            <img src="{{ asset('images/gambar1.jpg') }}" alt="Gambar 1" class="rounded-lg shadow-lg w-80">
            <img src="{{ asset('images/gambar2.png') }}" alt="Gambar 2" class="rounded-lg shadow-lg w-80">
        </div>
    </div>

</body>
</html>