<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MetaMeal - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-custom-green { background-color: #7CAF3F; }
        .bg-custom-darkgreen { background-color: #3F7D20; }
        .text-custom-green { color: #7CAF3F; }
        .text-custom-darkgreen { color: #3F7D20; }
    </style>
</head>
<body class="bg-custom-green">
    <!-- Navbar -->
    <nav class="bg-custom-darkgreen text-white px-6 py-4 flex justify-between items-center">
        <div class="flex items-center space-x-2">
        <img src="logo.jpeg" alt="Logo" class="h-10 w-30 rounded-full shadow-md border border-gray-200">
            <span class="text-xl font-bold"><span class="text-purple-600">Meta</span><span class="text-white">Meal</span></span>
        </div>
        <ul class="flex space-x-6">
            <li><a href="landing" class="hover:underline">Home</a></li>
            <li><a href="about" class="hover:underline">About</a></li>
            <li><a href="fitur" class="hover:underline">Fitur</a></li>

        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="flex flex-col md:flex-row items-center justify-between px-8 md:px-16 py-12 bg-custom-green">
        <div class="md:w-1/2 mb-8 md:mb-0">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">Diet Lebih Mudah & Terarah dengan <span class="text-white">MetaMeal</span></h1>
            <p class="text-sm text-white mb-6 max-w-md">MetaMeal adalah solusi cerdas untuk membantu Anda mencapai gaya hidup sehat. Dapatkan rencana makan personal, rekomendasi makanan bergizi, dan panduan latihan sesuai kebutuhan Anda.</p>
            <div class="flex space-x-4">
                <a href="#" class="bg-white text-custom-darkgreen px-4 py-2 rounded hover:bg-gray-100 font-semibold">Login</a>
                <a href="daftar" class="border border-white text-white px-4 py-2 rounded hover:bg-white hover:text-custom-darkgreen font-semibold">Register</a>
            </div>
        </div>
        <div class="md:w-1/2">
            <div class="relative">
                <img src="landing.png" alt="Diet Image" class="rounded shadow-lg max-w-full h-auto">
                <div class="absolute top-0 left-0 w-full h-full border-dotted border-2 border-blue-200 opacity-25 pointer-events-none"></div>
            </div>
        </div>
    </section>
</body>
</html>
