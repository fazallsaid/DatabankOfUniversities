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
    <header class="bg-white shadow-sm fixed top-0 left-0 right-0 z-10">
        <nav class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-gray-800">Databank of Universities</a>
            <div class="space-x-4">
                <a href="{{url('about')}}" class="text-gray-600 hover:text-gray-800">About</a>
                <a href="{{url('docs')}}" class="text-gray-600 hover:text-gray-800">API Documentation</a>
                <a href="{{url('contribute')}}" class="text-gray-600 hover:text-gray-800">Contribute</a>
            </div>
        </nav>
    </header>
