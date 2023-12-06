<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
        
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
    
            /* Styling for the mobile menu */
            .mobile-menu {
                display: none;
            }

            .card-container {
                border: 2px solid #4a5568;
                border-radius: 10px;
                overflow: hidden;
                transition: transform 0.3s;
            }

            .card-container:hover {
                transform: scale(1.02);
            }
    
            @media (max-width: 767px) {
                .nav-menu {
                    display: none;
                }
    
                .mobile-menu {
                    display: block;
                }
    
                .mobile-menu a {
                    display: block;
                    padding: 1rem;
                    color: black;
                    text-decoration: none;
                    border-bottom: 1px solid #3455EB;
                    font-weight: bold;
                }
    
                .mobile-menu a:last-child {
                    border-bottom: none;
                }
    
                .mobile-menu-dropdown {
                    display: none;
                }
    
                .mobile-menu button {
                    color: #3455EB;
                    background: none;
                    border: none;
                    font-size: 1.5rem;
                    cursor: pointer;
                }
    
                .mobile-menu:hover .mobile-menu-dropdown {
                    display: block;
                }
            }
        </style>
    </head>
    <body class="">
        <header>
            <nav class=" p-4 shadow-xl">
                  <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
          
                      <div class="flex items-center mb-4 md:mb-0">
                          <img src="../images/SD MUHAMMADIYAH.png" alt="SD Logo" class="w-16 mr-2">
                          <p class=" text-lg font-semibold">SD Muhammadiyah Ambarawa</p>
                      </div>
          
                      <!-- Desktop menu -->
                      <ul class="max-sm:hidden nav-menu flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4">
                          <li><a href="/" class=" hover:text-gray-300 transition font-semibold">Home</a></li>
                          <li><a href="./profile" class=" hover:text-gray-300 transition font-semibold">Profil</a></li>
                          <li><a href="./fasilitas" class=" hover:text-gray-300 transition font-semibold">Fasilitas</a></li>
                          <li><a href="./ekstrakurikuler" class=" hover:text-gray-300 transition font-semibold">Ekstrakurikuler</a></li>
                          <li><a href="./publikasi" class=" hover:text-gray-300 transition font-semibold">Publikasi</a></li>
                          <li><a href="./kontak" class=" hover:text-gray-300 transition font-semibold">Kontak</a></li>
                          <li><a href="./ppdb" class=" hover:text-gray-300 transition font-semibold">PPDB</a></li>
                      </ul>
          
                      <!-- Mobile menu -->
                      <div class="mobile-menu">
                          <button id="mobile-menu-btn">
                              <i class="fas fa-bars"></i>
                          </button>
                          <div class="mobile-menu-dropdown">
                              <a href="/" class=" block py-2">Home</a>
                              <a href="./profile" class=" block py-2">Profil</a>
                              <a href="./fasilitas" class=" block py-2">Fasilitas</a>
                              <a href="./ekstrakurikuler" class=" block py-2">Ekstrakurikuler</a>
                              <a href="./publikasi" class=" block py-2">Publikasi</a>
                              <a href="./kontak" class=" block py-2">Kontak</a>
                              <a href="./ppdb" class=" block py-2">PPDB</a>
                          </div>
                      </div>
          
                  </div>
              </nav>
          
              <!-- Rest of your content goes here -->
          
              
              <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
              <script>
                  $(document).ready(function () {
                      $("#mobile-menu-btn").click(function (e) {
                          e.preventDefault();
                          $(".mobile-menu-dropdown").toggleClass("hidden");
                      });
              
                      // Handle click on mobile menu links
                      $(".mobile-menu-dropdown a").click(function (e) {
                          e.preventDefault();
                          $(".mobile-menu-dropdown").addClass("hidden");
                          var targetPage = $(this).attr("href");
                          if (targetPage !== "javascript:void(0)") {
                              // Redirect to the selected page if it's not "javascript:void(0)"
                              window.location.href = targetPage;
                          }
                      });
                  });
              </script>
          
          
        </header>

        <main>
            <div
                class="w-full h-60 lg:h-[33rem] bg-cover bg-center p-8 sm:p-16 md:p-24 "
                style="background-image: url(../images/1.jpg)"
            >
                    <h1 class=" text-white bg-slate-600 bg-opacity-30 max-sm:text-center max-sm:text-3xl md:text-7xl font-semibold text-start sm:pr-16 md:pr-96">
                        Selamat Datang di SD Muhammadiyah Ambarawa
                    </h1>
            </div>

            <div class="mx-8 sm:mx-16 md:mx-24 my-8 sm:my-16 md:my-32 grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">
                <div class="md:col-span-2 pr-4 md:pr-24 mb-8 md:mb-0">
                    <h3>PROFIL KAMI</h3>

                    <h1 class="mt-4 text-2xl sm:text-3xl md:text-5xl font-bold">
                        Sekolah Dasar Muhammadiyah Ambarawa Pringsewu
                    </h1>
                    <p class="mt-3 text-sm sm:text-base">
                        SD Muhammadiyah Ambarawa adalah sekolah islam unggulan
                        di Pringsewu yang menyelenggarakan Pendidikan Islam
                        terpadu, dengan mengintegrasikan Kurikulum Nasional,
                        Muatan Lokal (Nilai-Nilai ke-AlHamidiyah-an).
                        Mengadaptasi Metode Montessori dan Kurikulum Cambridge.
                        Pembelajaran menyenangkan menjadi ciri khas SD
                        Muhammadiyah melalui implementasi Metode Pembelajaran
                        STEAMMI yang merupakan integrasi ilmu Science,
                        Technology, Engineering, Math, Montessori, Islamic.
                        Metode SľEAMMI menstimulasi murid untuk berpikir kritis,
                        inovatif, kreatif, kolaboratif, komunikatif, dan mampu
                        memecahkan masalah yang merupakan ciri dari kompetensi
                        abad 21. Serta membentuk siswa dengan nilai-nilai Santri
                        KITAB (Komunikatif, Inovatif, Terbuka, Argumentatif,
                        Berintegritas) menjadikan pondasi dalam pembentukan
                        karakter Insan Muslim yang Cerdas, Mandiri, dan Terampil
                        (CERMAT).
                    </p>

                    <a href="./profile" class="mt-5 bg-[#3455EB] px-4 sm:px-8 py-2 sm:py-4 rounded-md text-white inline-block">
                        Selengkapnya
                    </a>
                </div>

                <div class="items-center w-full md:w-96">
                    <img src="../images/sekolah.JPG" alt="" class="" />
                </div>
            </div>



            <!-- Bagian Fasilitas Sekolah -->
            <div class="bg-[#3455EB] mx-4 md:mx-10 p-8 md:p-16">
                <h3 class="text-lg md:text-xl mt-8">Fasilitas Sekolah</h3>
                <h1 class="mt-4 text-2xl md:text-4xl font-bold pr-4 md:pr-10 text-black">Fasilitas Sekolah Dasar Muhammadiyah Ambarawa</h1>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
                @foreach ($facility as $index => $facilities)
                    <div class="card-container relative h-[25rem] rounded-xl overflow-hidden">
                        <img src="../image/{{$facilities->image}}" alt="{{$facilities->title}}" class="object-cover w-full h-full filter brightness-50">
                        <div class="absolute top-8 left-8 right-0 bottom-0 p-4 flex flex-col justify-start items-start">
                            <h2 class="text-xl text-white font-semibold mb-2">{{$facilities->title}}</h2>
                            <p class="text-sm text-white mb-2">{{$facilities->description}}</p>
                            <button class="bg-[white] py-2 px-5 rounded-lg mt-auto">
                                <a href="./fasilitas" class="font-medium text-black">Selengkapnya</a>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Bagian Berita Sekolah -->
        <div class="mx-4 md:mx-10 p-8 md:p-16">
                        <h3 class="text-lg md:text-xl mt-8">Berita Sekolah</h3>
                        <h1 class="mt-4 text-2xl md:text-4xl font-bold pr-4 md:pr-10">Berita Sekolah Dasar Muhammadiyah Ambarawa</h1>


            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
                @foreach ($news as $data)
                    <div class="card-container relative h-[25rem] rounded-xl overflow-hidden">
                        <img src="../image/{{$data->image}}" alt="{{$data->title}}" class="object-cover w-full h-full filter brightness-50">
                        <div class="absolute top-8 left-8 right-0 bottom-0 p-4 flex flex-col justify-start items-start">
                            <h2 class="text-xl text-white font-semibold mb-2">{{$data->title}}</h2>
                            <p class="text-sm text-white mb-2">{{$data->description}}</p>
                            <button class="bg-[white] py-2 px-5 rounded-lg mt-auto">
                                <a href="{{ route('detail.publikasi', ['id' => $data->id]) }}" class="font-medium text-black">Selengkapnya</a>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Bagian Prestasi Sekolah -->
        <div class="bg-[#3455EB] mx-4 md:mx-10 p-8 md:p-16 mb-8">
                        <h3 class="text-lg md:text-xl mt-8">Prestasi Sekolah</h3>
                        <h1 class="mt-4 text-2xl md:text-4xl font-bold pr-4 md:pr-10">Prestasi Sekolah Dasar Muhammadiyah Ambarawa</h1>


            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
                @foreach($achievement as $data)
                    <div class="card-container relative h-[25rem] rounded-xl overflow-hidden">
                        <img src="../image/{{$data->image}}" alt="{{$data->title}}" class="object-cover w-full h-full filter brightness-50">
                        <div class="absolute top-8 left-8 right-0 bottom-0 p-4 flex flex-col justify-start items-start">
                            <h2 class="text-xl text-white font-semibold mb-2">{{$data->title}}</h2>
                            <p class="text-sm text-white mb-2">{{$data->description}}</p>
                            <button class="bg-[white] py-2 px-5 rounded-lg mt-auto">
                                <a href="{{ route('detail.prestasi', ['id' => $data->id]) }}" class="font-medium text-black">Selengkapnya</a>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


              
            
            </main>

            <footer class="bg-gray-900 text-white text-center py-8">
                  <div class="container mx-auto">
                      <img src="../images/SD MUHAMMADIYAH.png" alt="logo sd muhammadiyah" class="w-16 mb-4 mx-auto">
                      <h3 class="text-lg font-semibold">SD Muhammadiyah Ambarawa</h3>
                      <p class="mb-4">
                          Jl. Hm. Ghardi No. 29 Ambarawa, 
                          Ambarawa, Kec. Ambarawa, 
                          Kab. Pringsewu Prov. Lampung
                      </p>
                      
                      <ul class="flex justify-center space-x-4">
                          <li><a href="#" target="_blank" class="text-white"><i class="fab fa-facebook"></i></a></li>
                          <li><a href="#" target="_blank" class="text-white"><i class="fab fa-twitter"></i></a></li>
                          <li><a href="#" target="_blank" class="text-white"><i class="fab fa-instagram"></i></a></li>
                          <!-- Tambahkan ikon media sosial lainnya sesuai kebutuhan -->
                      </ul>
          
                      <p class="mt-4 text-sm">&copy; 2023 SD Muhammadiyah Ambarawa</p>
                  </div>
              </footer>
          
              <!-- Tambahkan script untuk Font Awesome jika belum ada -->
       
    </body>
</html>
