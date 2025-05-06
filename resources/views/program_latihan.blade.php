<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Program Latihan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" defer></script>
</head>
<body class="bg-gray-100">
  <div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="bg-[#A0D468] text-white w-64 p-4">
      <div class="flex items-center mb-8">
        <img 
          src="https://storage.googleapis.com/a1aa/image/DIghuSu04qP-elliIsS0Jrs4ZTYTe9D7qQ-sjiN6dtM.jpg" 
          alt="MetaMeal Logo" 
          class="w-12 h-12 mr-2"
        />
        <div>
          <h1 class="text-2xl font-bold">MetaMeal</h1>
          <p class="italic">Selamat Datang </p>
        </div>
      </div>

      <nav>
        <ul>
          <li class="mb-4 flex items-center">
            <i class="fas fa-home mr-2"></i>
            <a href="#" class="text-lg">Beranda</a>
          </li>
          <li class="mb-4 flex items-center">
            <i class="fas fa-utensils mr-2"></i>
            <a href="#" class="text-lg">Program Makan</a>
          </li>
          <li class="mb-4 flex items-center">
            <i class="fas fa-running mr-2"></i>
            <a href="#" class="text-lg">Program Latihan</a>
          </li>
          <li class="mb-4 flex items-center">
            <i class="fas fa-chart-line mr-2"></i>
            <a href="#" class="text-lg">Laporan Latihan</a>
          </li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 p-6">
      <!-- Header -->
      <div class="flex justify-between items-center mb-6 bg-[#5F8C2D] p-4 rounded-lg text-white">
        <div class="flex items-center bg-white rounded-full shadow-md p-2 w-1/2">
          <i class="fas fa-search text-gray-400 ml-2"></i>
          <input type="text" placeholder="Search..." class="ml-2 w-full border-none focus:outline-none">
        </div>
        <div class="flex items-center space-x-4">
          <i class="fas fa-bell text-white"></i>
          <i class="fas fa-user-circle text-white"></i>
        </div>
      </div>

      <!-- Content List -->
      <div class="space-y-4">
        <div class="bg-gray-200 p-4 rounded-lg shadow-md flex justify-between items-center">
          <div>
            <h2 class="text-xl font-bold">Rivaldo</h2>
            <p class="text-sm font-semibold">Senin, 8 April 2025</p>
            <p class="text-sm">Latihan Bahu</p>
          </div>
          <button onclick="showLatihanDetail('bahu')" class="focus:outline-none">
            <i class="fas fa-arrow-right text-gray-600"></i>
          </button>
        </div>

        <div class="bg-gray-200 p-4 rounded-lg shadow-md flex justify-between items-center">
          <div>
            <h2 class="text-xl font-bold">Rivaldo</h2>
            <p class="text-sm font-semibold">Selasa, 9 April 2025</p>
            <p class="text-sm">Kardio</p>
          </div>
          <button onclick="showLatihanDetail('kardio')" class="focus:outline-none">
            <i class="fas fa-arrow-right text-gray-600"></i>
          </button>
        </div>

        <div class="bg-gray-200 p-4 rounded-lg shadow-md flex justify-between items-center">
          <div>
            <h2 class="text-xl font-bold">Rivaldo</h2>
            <p class="text-sm font-semibold">Rabu, 10 April 2025</p>
            <p class="text-sm">Latihan Perut</p>
          </div>
          <button onclick="showLatihanDetail('perut')" class="focus:outline-none">
            <i class="fas fa-arrow-right text-gray-600"></i>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div id="latihanModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-xl relative">
      <button onclick="toggleLatihanModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
        <i class="fas fa-times"></i>
      </button>
      <div id="latihanContent"></div>
      <div class="flex justify-between mt-4">
        <button onclick="toggleLatihanModal()" class="bg-gray-300 text-gray-700 px-4 py-2 rounded">Kembali</button>
        <button onclick="showNoteInput()" class="bg-green-500 text-white px-4 py-2 rounded">Selesai</button>
      </div>
      <div id="noteSection" class="mt-4 hidden">
        <label class="block mb-2 font-semibold">Catatan Latihan:</label>
        <textarea class="w-full border p-2 rounded mb-2" placeholder="Tulis bagaimana latihannya..."></textarea>
        <button onclick="latihanSelesai()" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
      </div>
    </div>
  </div>

  <!-- Script -->
  <script>
    function toggleLatihanModal() {
      const modal = document.getElementById("latihanModal");
      modal.classList.toggle("hidden");
      document.getElementById("noteSection").classList.add("hidden");
    }

    function showNoteInput() {
      document.getElementById("noteSection").classList.remove("hidden");
    }

    function latihanSelesai() {
      const note = document.querySelector('#noteSection textarea').value;
      alert("Latihan selesai!\nCatatan: " + note);
      toggleLatihanModal();
    }

    function showLatihanDetail(type) {
      const content = {
        bahu: `
          <h3 class="text-2xl font-bold mb-4">🏋️‍♂️ Latihan Bahu</h3>
          <ol class="list-decimal list-inside">
            <li>Angkat dumbbell ke samping setinggi bahu</li>
            <li>Turunkan perlahan dan ulangi 3 set</li>
            <li>Istirahat 30 detik tiap set</li>
          </ol>
        `,
        kardio: `
          <h3 class="text-2xl font-bold mb-4">🏃‍♂️ Kardio</h3>
          <ol class="list-decimal list-inside">
            <li>Lari di tempat selama 3 menit</li>
            <li>Jumping jack 2 menit</li>
            <li>High knees 2 menit</li>
          </ol>
        `,
        perut: `
          <h3 class="text-2xl font-bold mb-4">🧘‍♀️ Latihan Perut</h3>
          <ol class="list-decimal list-inside">
            <li>30x sit-up</li>
            <li>Plank 1 menit</li>
            <li>Leg raises 15x</li>
          </ol>
        `
      };

      document.getElementById("latihanContent").innerHTML = content[type];
      toggleLatihanModal();
    }
  </script>
</body>
</html>
