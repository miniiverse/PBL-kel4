<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Program Latihan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" defer></script>
</head>
<body class="bg-gray-100">
  <div class="flex flex-col md:flex-row h-screen transition-all duration-300 ease-in-out">
    
    <!-- Sidebar -->
    <aside class="bg-[#A0D468] text-white w-full md:w-64 p-4 transition-all duration-300 ease-in-out">
      <div class="flex items-center mb-8">
       
        <img src="logo.jpeg" alt="Logo" class="h-20 w-20 rounded-full shadow-md border border-gray-200">
        <div>
          <h1 class="text-2xl font-bold">MetaMeal</h1>
          <p class="italic">Selamat Datang</p>
        </div>
      </div>
      <nav>
        <ul>
          <li class="mb-4 flex items-center bg-white text-[#5F8C2D] rounded-lg p-2 font-semibold shadow-md">
            <i class="fas fa-home mr-2"></i>
            <a href="beranda" class="text-lg">Beranda</a>
          </li>
          <li class="mb-4 flex items-center hover:bg-white hover:text-[#5F8C2D] rounded-lg p-2 transition duration-200 ease-in-out">
            <i class="fas fa-utensils mr-2"></i>
            <a href="resepmakan" class="text-lg">Program Makan</a>
          </li>
          <li class="mb-4 flex items-center hover:bg-white hover:text-[#5F8C2D] rounded-lg p-2 transition duration-200 ease-in-out">
            <i class="fas fa-running mr-2"></i>
            <a href="programlatihan" class="text-lg">Program Latihan</a>
          </li>
          <li class="mb-4 flex items-center hover:bg-white hover:text-[#5F8C2D] rounded-lg p-2 transition duration-200 ease-in-out">
            <i class="fas fa-chart-line mr-2"></i>
            <a href="progres.blade.php\" class="text-lg">Laporan Latihan</a>
          </li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <!-- Header -->
      <div class="flex justify-between items-center mb-6 bg-[#5F8C2D] p-4 rounded-lg text-white shadow">
        <div class="flex items-center bg-white rounded-full shadow-md p-2 w-full md:w-1/2">
          <i class="fas fa-search text-gray-400 ml-2" ></i>
          <input type="text" placeholder="Search..." class="ml-2 w-full border-none focus:outline-none bg-transparent text-black">
        </div>

        <!-- User Icons & Pop-up -->
        <div class="hidden md:flex items-center space-x-4 relative">
        <a href="notifikasi.blade.php" class="text-white text-xl hover:text-gray-200">
  <i class="fas fa-bell"></i>
</a>

          <button onclick="toggleProfile()" class="text-white text-xl focus:outline-none">
            <i class="fas fa-user-circle"></i>
          </button>
          
          <!-- Pop-up Profile -->
          <div id="profilePopup" class="hidden absolute right-0 top-16 w-80 bg-white border border-gray-300 rounded-lg shadow-xl z-50 p-6">


            <div class="text-center">
              <img src="profil.jpeg" class="w-24 h-24 rounded-full mx-auto mb-3 border" alt="Foto Profil">
              <h2 class="text-lg font-bold text-gray-800">Adrian Rizqullah</h2>
              <p class="text-gray-600 mb-2">adrian@gmail.com</p>
              <div class="text-left text-sm text-gray-700 space-y-1 mb-4">
                <p><strong>Umur:</strong> 19 tahun</p>
                <p><strong>Berat:</strong> 57 kg</p>
                <p><strong>Tinggi:</strong> 160 cm</p>
              </div>
              <button class="bg-[#5F8C2D] hover:bg-[#4a7224] text-white px-4 py-2 rounded-full">Ubah Profil</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Welcome Section -->
      <div class="bg-white rounded-xl shadow-md p-8 text-center transition duration-300 ease-in-out">
        <div class="flex justify-center mb-6">
          <img src="beranda.png" alt="Tips Diet" class="w-96 max-w-full rounded-lg border border-gray-300">
        </div>
        <h1 class="text-3xl font-bold mb-2">Selamat Datang Di MetaMeal</h1>
        <p class="text-gray-600">Temukan Tips Dietmu disini</p>
      </div>
    </main>
  </div>

  <script>
    function toggleProfile() {
      const popup = document.getElementById('profilePopup');
      popup.classList.toggle('hidden');
    }

    // Klik di luar pop-up untuk menutup
    window.addEventListener('click', function(e) {
      const popup = document.getElementById('profilePopup');
      const button = e.target.closest('button');
      if (!popup.contains(e.target) && !button) {
        popup.classList.add('hidden');
      }
    });
  </script>
</body>
</html>
