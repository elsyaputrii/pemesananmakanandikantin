<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Laravel App</title>
    <link href="{{ asset('styles/flowbite.min.css') }}" rel="stylesheet">
</head>
<body>

    @include('components.menu')

    <div class="container mx-auto my-4">
        @yield('content')
    </div>
    <footer class="mt-10 text-center text-sm text-gray-500 py-4 border-t">
        &copy; {{ date('Y') }} Laravel App. All rights reserved.
    </footer>

    <script src="{{ asset('styles/flowbite.min.js') }}"></script>
</body>
</html>
