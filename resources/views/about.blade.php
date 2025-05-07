<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MetaMeal - About</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-custom-green { background-color: #7CAF3F; }
        .bg-custom-darkgreen { background-color: #3F7D20; }
        .text-custom-green { color: #7CAF3F; }
        .text-custom-darkgreen { color: #3F7D20; }
        .bg-light-blue { background-color: #E3F0FF; }
        .border-light-blue { border-color: #BFD8FF; }
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
            <li><a href="landingpg" class="hover:underline">Home</a></li>
            <li><a href="about" class="hover:underline">About</a></li>
            <li><a href="fitur" class="hover:underline">Fitur</a></li>
        </ul>
        <div class="space-x-2">
            <a href="#" class="bg-white text-custom-darkgreen px-4 py-1 rounded hover:bg-gray-100 font-semibold">Login</a>
            <a href="#" class="bg-custom-green text-white px-4 py-1 border border-white rounded hover:bg-white hover:text-custom-darkgreen font-semibold">Register</a>
        </div>
    </nav>

    <!-- About Section -->
    <section class="bg-light-blue px-6 py-12 md:px-20 md:py-16 rounded-lg m-6 md:mx-20">
        <div class="flex flex-col md:flex-row items-center gap-10">
            <div class="md:w-1/2">
                <img src="about.png" alt="Man Eating Food" class="w-full max-w-sm mx-auto">
            </div>
            <div class="md:w-1/2 border border-dashed border-light-blue p-6 rounded-lg bg-white shadow">
                <h2 class="text-xl md:text-2xl font-bold text-blue-600 mb-4">Tentang MetaMeal</h2>
                <p class="text-gray-700 text-sm mb-4">
                    MetaMeal adalah platform diet yang membantu Anda mencapai pola makan sehat dengan cara yang lebih mudah dan menyenangkan. Kami menyediakan panduan diet, rekomendasi menu sehat, dan fitur latihan fisik, memastikan progres Anda bisa mencapai target tubuh ideal tanpa stress.
                </p>
                <h3 class="font-semibold text-blue-600 mb-2">Kenapa Memilih MetaMeal?</h3>
                <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                    <li><strong>Personalized diet</strong> – Sesuai dengan kebutuhan dan preferensi Anda</li>
                    <li><strong>Latihan Fisik & Rencana Makan</strong> – Latihan fisik, Makanan sehat, lezat, dan mudah dibuat</li>
                    <li><strong>Pelacakan Kemajuan</strong> – Pantau berat badan, kalori, dan progress diet Anda</li>
                    <li><strong>Tips & Edukasi Sehat</strong> – Dapatkan insight dari ahli gizi</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white py-8 px-6 md:px-20 text-gray-700 border-t border-gray-200">
        <div class="flex flex-col md:flex-row justify-between gap-8">
            <div>
                <h4 class="text-xl font-bold text-custom-darkgreen">MetaMeal</h4>
                <p class="text-sm">Copyright © 2025 Metameal<br>All rights reserved.</p>
                <div class="flex space-x-3 mt-2">
                    <a href="#"><img src="/icons/facebook.svg" class="h-4"></a>
                    <a href="#"><img src="/icons/twitter.svg" class="h-4"></a>
                    <a href="#"><img src="/icons/instagram.svg" class="h-4"></a>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div>
                    <h5 class="font-semibold mb-2">Company</h5>
                    <ul class="text-sm space-y-1">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-semibold mb-2">Legal policy</h5>
                    <ul class="text-sm space-y-1">
                        <li><a href="#">Status policy</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Terms of service</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
