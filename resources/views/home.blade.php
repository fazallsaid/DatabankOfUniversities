<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Landing Page with 3D Object</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/icons/university.svg') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 flex flex-col min-h-full">
    <header class="bg-white shadow-sm">
        <nav class="container mx-auto px-6 py-3 flex justify-between items-center">
            <div class="text-xl font-bold text-gray-800">Databank of Universities</div>
            <div class="space-x-4">
                <a href="#" class="text-gray-600 hover:text-gray-800">About</a>
                <a href="#" class="text-gray-600 hover:text-gray-800">Documentation</a>
                <a href="#" class="text-gray-600 hover:text-gray-800">Contribute</a>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-12 flex-grow">
        <section class="flex flex-col items-center justify-center h-full">
            <model-viewer src="{{asset('object/toga.glb')}}" alt="3D model of a university" auto-rotate auto-rotate-delay="0" rotation-per-second="30deg" style="width: 400px; height: 400px;"></model-viewer>
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to Databank of Universities</h1>
            <p class="text-xl text-gray-600 mb-8">Get all the information you need about all universities of Indonesia.</p>
            <div class="flex space-x-4 mb-8">
                <a href="#" class="bg-blue-500 text-white px-6 py-2 rounded-full hover:bg-blue-600 transition duration-300">Get Started</a>
                <a href="#" class="bg-transparent text-gray-800 px-6 py-2 rounded-full hover:bg-blue-600 hover:text-white border-blue-500 border-[1px] transition duration-300">Documentation</a>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white text-center py-4 mt-auto">
        <p>&copy; 2023 - {{date('Y')}} Fastechnology. All rights reserved.</p>
    </footer>
</body>
</html>
