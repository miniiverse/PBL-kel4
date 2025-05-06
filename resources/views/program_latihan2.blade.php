<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MetaMeal - Program Latihan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
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
          <p class="italic">Selamat Datang</p>
        </div>
      </div>
      <nav>
        <ul>
          <li class="mb-4 flex items-center"><i class="fas fa-home mr-2"></i><a href="#" class="text-lg">Beranda</a></li>
          <li class="mb-4 flex items-center"><i class="fas fa-utensils mr-2"></i><a href="#" class="text-lg">Program Makan</a></li>
          <li class="mb-4 flex items-center"><i class="fas fa-running mr-2"></i><a href="#" class="text-lg">Program Latihan</a></li>
          <li class="mb-4 flex items-center"><i class="fas fa-chart-line mr-2"></i><a href="#" class="text-lg">Laporan Latihan</a></li>
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

      <!-- Tambah Program Latihan Button -->
      <div class="flex justify-end mb-4">
        <button 
          id="openAddModal" 
          class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600 transition"
        >
          + Tambah Program Latihan
        </button>
      </div>

      <!-- Program Latihan List -->
      <section class="space-y-4">
        <!-- Latihan Bahu -->
        <div class="bg-gray-200 p-4 rounded-lg shadow-md flex justify-between items-center">
          <div>
            <h2 class="text-xl font-bold">Rivaldo</h2>
            <p class="text-sm font-semibold">Senin, 8 April 2025</p>
            <p>Latihan Bahu</p>
          </div>
          <div class="space-x-2">
            <button class="bg-green-500 text-white px-4 py-2 rounded open-modal-btn"
              data-nama="Rivaldo"
              data-tanggal="2025-04-08"
              data-latihan="Latihan Bahu"
              data-detail="Angkat dumbbell dan tekan ke atas"
              data-status="not yet"
            >Ubah</button>
            <button class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
          </div>
        </div>

        <!-- Kardio -->
        <div class="bg-gray-200 p-4 rounded-lg shadow-md flex justify-between items-center">
          <div>
            <h2 class="text-xl font-bold">Rivaldo</h2>
            <p class="text-sm font-semibold">Selasa, 9 April 2025</p>
            <p>Kardio</p>
          </div>
          <div class="space-x-2">
            <button class="bg-green-500 text-white px-4 py-2 rounded open-modal-btn"
              data-nama="Rivaldo"
              data-tanggal="2025-04-09"
              data-latihan="Kardio"
              data-detail="Lari di treadmill selama 30 menit"
              data-status="not yet"
            >Ubah</button>
            <button class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
          </div>
        </div>

        <!-- Latihan Perut -->
        <div class="bg-gray-200 p-4 rounded-lg shadow-md flex justify-between items-center">
          <div>
            <h2 class="text-xl font-bold">Rivaldo</h2>
            <p class="text-sm font-semibold">Rabu, 10 April 2025</p>
            <p>Latihan Perut</p>
          </div>
          <div class="space-x-2">
            <button class="bg-green-500 text-white px-4 py-2 rounded open-modal-btn"
              data-nama="Rivaldo"
              data-tanggal="2025-04-10"
              data-latihan="Latihan Perut"
              data-detail="Sit-up 3 set x 15 reps"
              data-status="finish"
            >Ubah</button>
            <button class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
          </div>
        </div>
      </section>
    </div>
  </div>

  <!-- Modal -->
  <div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-lg shadow-lg p-6 w-96">
      <h2 class="text-xl font-bold mb-4">Tambah Program Latihan</h2>
      <form id="editForm">
        <input type="hidden" id="modalMode" value="edit" />
        <div class="mb-4">
          <label class="block text-sm font-semibold mb-1">Nama</label>
          <input type="text" id="modalNama" class="w-full border rounded p-2" />
        </div>
        <div class="mb-4">
          <label class="block text-sm font-semibold mb-1">Tanggal</label>
          <input type="date" id="modalTanggal" class="w-full border rounded p-2" />
        </div>
        <div class="mb-4">
          <label class="block text-sm font-semibold mb-1">Jenis Latihan</label>
          <input type="text" id="modalLatihan" class="w-full border rounded p-2" />
        </div>
        <div class="mb-4">
          <label class="block text-sm font-semibold mb-1">Details</label>
          <textarea class="w-full border rounded p-2 resize-none" id="details" name="details" rows="3" required ></textarea>
        </div>
        <div class="mb-4">
          <label class="block text-sm font-semibold mb-1">Status</label>
          <select class="w-full border rounded p-2" id="edit-status" name="status" required>
            <option value="not yet">Not Yet</option>
            <option value="finish">Finish</option>
          </select>
        </div>
        <div class="flex justify-end space-x-2">
          <button type="button" id="closeModal" class="px-4 py-2 bg-gray-400 text-white rounded">Batal</button>
          <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded">Simpan</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Script -->
  <script>
    const modal = document.getElementById("editModal");
    const closeModal = document.getElementById("closeModal");
    const modalMode = document.getElementById("modalMode");
    const section = document.querySelector("section.space-y-4");
    const modalNama = document.getElementById("modalNama");
    const modalTanggal = document.getElementById("modalTanggal");
    const modalLatihan = document.getElementById("modalLatihan");
    const modalDetails = document.getElementById("details");
    const modalStatus = document.getElementById("edit-status");

    document.querySelectorAll(".open-modal-btn").forEach(button => {
      button.addEventListener("click", () => {
        modalMode.value = "edit";
        modalNama.value = button.getAttribute("data-nama");
        modalTanggal.value = button.getAttribute("data-tanggal");
        modalLatihan.value = button.getAttribute("data-latihan");
        modalDetails.value = button.getAttribute("data-detail");
        modalStatus.value = button.getAttribute("data-status");
        modal.classList.remove("hidden");
      });
    });

    document.getElementById("openAddModal").addEventListener("click", () => {
      modalMode.value = "add";
      modalNama.value = "";
      modalTanggal.value = "";
      modalLatihan.value = "";
      modalDetails.value = "";
      modalStatus.value = "not yet";
      modal.classList.remove("hidden");
    });

    closeModal.addEventListener("click", () => {
      modal.classList.add("hidden");
    });

    document.getElementById("editForm").addEventListener("submit", function(e) {
      e.preventDefault();
      const mode = modalMode.value;

      if (mode === "add") {
        const newItem = document.createElement("div");
        newItem.className = "bg-gray-200 p-4 rounded-lg shadow-md flex justify-between items-center";
        newItem.innerHTML = `
          <div>
            <h2 class="text-xl font-bold">${modalNama.value}</h2>
            <p class="text-sm font-semibold">${modalTanggal.value}</p>
            <p>${modalLatihan.value}</p>
          </div>
          <div class="space-x-2">
            <button class="bg-green-500 text-white px-4 py-2 rounded open-modal-btn"
              data-nama="${modalNama.value}"
              data-tanggal="${modalTanggal.value}"
              data-latihan="${modalLatihan.value}"
              data-detail="${modalDetails.value}"
              data-status="${modalStatus.value}">
              Ubah
            </button>
            <button class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
          </div>
        `;
        section.appendChild(newItem);

        newItem.querySelector(".open-modal-btn").addEventListener("click", function () {
          modalMode.value = "edit";
          modalNama.value = this.getAttribute("data-nama");
          modalTanggal.value = this.getAttribute("data-tanggal");
          modalLatihan.value = this.getAttribute("data-latihan");
          modalDetails.value = this.getAttribute("data-detail");
          modalStatus.value = this.getAttribute("data-status");
          modal.classList.remove("hidden");
        });

        alert("Program latihan berhasil ditambahkan!");
      } else {
        alert("Program latihan berhasil diubah: " + modalLatihan.value);
      }

      modal.classList.add("hidden");
    });
  </script>
</body>
</html>
