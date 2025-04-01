<!DOCTYPE html>
<html lang="id" dir="ltr" >

<head>
	<!-- Required meta tags -->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/png" href="{{asset('images/icons/university.svg')}}" />
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
  rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
<!-- Core Css -->
<link rel="stylesheet" href="{{asset('assets/css/theme.css')}}" />
	<title>Login / Databank of Universities</title>
</head>

<body class="DEFAULT_THEME ">
	<main>
				<!-- Main Content -->
                <div class="flex flex-col w-full  overflow-hidden relative min-h-screen radial-gradient items-center justify-center g-0 px-4">

                    <div class="justify-center items-center w-full card lg:flex max-w-md ">
                        <div class=" w-full card-body">
                                <a href="#" class="py-4 block"><img src="{{asset('images/icons/university.svg')}}" alt="" class="mx-auto" width="30%"/></a>
                                <p class="mb-4 text-gray-400 text-lg text-center">Login to Databank of Universities</p>
                            <!-- form -->
                            <form>
                                <!-- username -->
                                <div class="mb-4">
                                    <label for="forUsername"
                                    class="block text-sm mb-2 text-gray-400">Username / Email</label>
                                <input type="text" id="forUsername" name="usermail" class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 " aria-describedby="hs-input-helper-text">
                                </div>
                                <!-- password -->
                                <div class="mb-6">
                                    <label for="forPassword"
                                    class="block text-sm  mb-2 text-gray-400">Password</label>
                                <input type="password" id="forPassword" name="password"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 " aria-describedby="hs-input-helper-text">
                                </div>
                                <!-- checkbox -->
                                  <div class="flex justify-between">
                                    {{-- <div class="flex">
                                        <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded-[4px] text-blue-600 focus:ring-blue-500 " id="hs-default-checkbox" checked>
                                        <label for="hs-default-checkbox" class="text-sm text-gray-500 ms-3">Remeber this Device</label>
                                    </div> --}}
                                        <a href="#" class="text-sm font-semibold text-blue-600 hover:text-blue-700">Forgot Password ?</a>
                                  </div>
                                    <!-- button -->
                                      <div class="grid my-6">
                                        <a href="#" class="btn py-[10px] text-base text-white font-medium hover:bg-blue-700">Sign In</a>
                                      </div>

                                      <div class="flex justify-center gap-2 items-center">
                                        <p class="text-base font-semibold text-gray-400">Are you data contributor?</p>
                                        <a href="#" class="text-sm font-semibold text-blue-600 hover:text-blue-700">Create an account here</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

			</div>
		<!--end of project-->
	</main>



<script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
<script src="{{asset('assets/libs/iconify-icon/dist/iconify-icon.min.js')}}"></script>
<script src="{{asset('assets/libs/@preline/dropdown/index.js')}}"></script>
<script src="{{asset('assets/libs/@preline/overlay/index.js')}}"></script>
<script src="{{asset('assets/js/sidebarmenu.js')}}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Dapatkan elemen input berdasarkan ID
        const usernameInput = document.getElementById('forUsername');

        // Tambahkan event listener 'blur' (ketika input kehilangan fokus)
        if (usernameInput) {
            usernameInput.addEventListener('blur', function() {
                const value = this.value.trim();

                // Periksa apakah input mengandung karakter '@', menandakan upaya memasukkan email
                if (value.includes('@')) {
                    // Regex sederhana untuk validasi format email
                    // ^[^\s@]+ : Awal string, diikuti satu atau lebih karakter yang bukan spasi atau @
                    // @         : Harus ada karakter @
                    // [^\s@]+  : Diikuti satu atau lebih karakter yang bukan spasi atau @ (domain)
                    // \.        : Harus ada titik
                    // [^\s@]+$ : Diikuti satu atau lebih karakter yang bukan spasi atau @, sampai akhir string (TLD)
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                    // Uji apakah nilai input sesuai dengan format email
                    if (!emailRegex.test(value)) {
                        // Jika format tidak valid, tampilkan pesan error (misalnya, ubah border)
                        console.warn('Format email tidak valid:', value); // Tampilkan di console
                        // Anda bisa menambahkan logika untuk menampilkan pesan error di bawah input
                        // Contoh: document.getElementById('email-error-message').textContent = 'Format email salah.';
                        this.style.borderColor = 'red'; // Ubah warna border menjadi merah
                    } else {
                        // Jika format valid, kembalikan border ke normal
                        this.style.borderColor = ''; // Hapus style border inline
                        // Contoh: document.getElementById('email-error-message').textContent = '';
                    }
                } else {
                    // Jika tidak mengandung '@', anggap sebagai username, kembalikan border ke normal
                    // Kecuali jika input kosong, biarkan validasi default browser/server
                    if (value !== '') {
                        this.style.borderColor = ''; // Hapus style border inline
                        // Contoh: document.getElementById('email-error-message').textContent = '';
                    }
                }
            });

            // Opsional: Hapus indikasi error saat pengguna mulai mengetik lagi
            usernameInput.addEventListener('input', function() {
                 if (this.style.borderColor === 'red') {
                     this.style.borderColor = '';
                     // Contoh: document.getElementById('email-error-message').textContent = '';
                 }
            });
        } else {
            console.error("Element with ID 'forUsername' not found.");
        }
    });
</script>
</body>

</html>