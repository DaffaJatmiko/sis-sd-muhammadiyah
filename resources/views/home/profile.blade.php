<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Profile</title>
        <script src="https://cdn.tailwindcss.com"></script><link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
    
            /* Styling for the mobile menu */
            .mobile-menu {
                display: none;
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

        <main class="mx-4 md:mx-24">

            <!-- Bagian Kepala Sekolah & Wakil Kepala Sekolah -->
            <div class="flex justify-center items-center mt-14 mb-10"> <!-- Menambahkan mb-10 untuk memberi jarak ke bawah -->
                <div class="grid grid-cols-1">
                    <h1 class="text-4xl font-bold text-center mb-6">
                        Kepala Sekolah & Wakil Kepala Sekolah
                    </h1>

                    <div class="grid grid-cols-2 gap-10">
                        <div class="flex flex-col items-center">
                            <div
                                class="w-52 h-64 bg-cover"
                                style="background-image: url('../image/{{$profile->image_1}}')"
                            ></div>
                            <h2 class="mt-4 text-lg font-semibold">
                                {{$profile->name_1}}
                            </h2>
                            <p class="mt-2">Kepala Sekolah</p>
                        </div>

                        <div class="flex flex-col items-center">
                            <div
                                class="w-52 h-64 bg-zinc-950 bg-cover"
                                style="background-image: url('../image/{{$profile->image_2}}')"
                            ></div>
                            <h2 class="mt-4 text-lg font-semibold">
                                {{$profile->name_2}}
                            </h2>
                            <p class="mt-2">Wakil Kepala Sekolah</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian Pendahuluan -->
            <div class="bg-[#3455EB] pt-10 pb-20">
                <div class="mx-4 md:mx-24 py-6 text-black">
                    <h2 class="mt-5 text-xl font-semibold">PENDAHULUAN</h2>

                    <h2 class="mt-5 text-2xl font-bold">
                        Selamat datang di Sekolah Dasar Muhammadiyah <br/> Ambarawa Pringsewu!
                    </h2>

                    <p class="mt-5">
                        Puji syukur kita panjatkan kehadirat Allah SWT atas rahmat, taufiq, dan hidayah-Nya yang memungkinkan kita melaksanakan tugas pendidikan. Kurikulum Operasional SD Muhammadiyah Ambarawa Tahun Pelajaran 2023/2024 adalah hasil pengembangan kurikulum pendidikan dasar dan menengah sesuai dengan kondisi sekolah, dengan dukungan dari Dinas Pendidikan dan Kebudayaan Kabupaten Pringsewu.
                    </p>

                    <p class="mt-5">
                        Pengembangan kurikulum ini mengikuti Standar Nasional Pendidikan, konsep merdeka belajar, dan Profil Pelajar Pancasila. Keberhasilan implementasinya bergantung pada semangat pelaku di lapangan dan dukungan masyarakat. Semoga Kurikulum SD Muhammadiyah Ambarawa menjadi acuan dalam mencapai tujuan pendidikan di tingkat satuan pendidikan dan berkontribusi pada pencapaian tujuan pendidikan nasional.
                    </p>
                </div>
            </div>

            <!-- Bagian Visi Sekolah -->
            <div class="mx-4 md:mx-24 py-16 grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="text-black">
                    <h2 class="mt-5 text-xl font-semibold">VISI SEKOLAH</h2>
                    <p class="text-xl mt-5">“Membentuk Generasi Abad 21 yang Bertaqwa, Berakhlak Mulia, Berkarakter, Cerdas, Berprestasi, dan Unggul”</p>

                    <!-- Indikator Visi -->
                    <p class="text-xl font-semibold mb-4 mt-5">Indikator Visi</p>
                    <ul class="list-disc pl-5">
                        <li>Menumbuhkan Iman dan Takwa;</li>
                        <li>Membudayakan disiplin, sopan santun, literasi, dan cinta lingkungan hidup;</li>
                        <li>Meningkatkan ketrampilan hidup sehari-hari;</li>
                        <li>Mengenal dan dapat memanfaatkan IPTEK;</li>
                        <li>Meningkatkan prestasi bidang akademik dan non akademik.</li>
                    </ul>
                </div>

                <img src="../images/1.jpg" alt="" class="mt-10 rounded-2xl">
            </div>

            <!-- Bagian Misi Sekolah -->
            <div class="bg-[#3455EB] py-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mx-4 md:mx-24">
                    <img src="../images/1.jpg" alt="" class="mt-10 rounded-2xl">

                    <div class="text-black">
                        <h2 class="mt-5 text-xl font-semibold">MISI SEKOLAH</h2>
                        <p class="text-xl mt-5">
                            <div class="text-lg">
                                1. Menanamkan sikap religius;
                            </div>
                            <div class="text-lg">
                                2. Melaksanakan kegiatan tadarus, Shalat dhuha, dan Shalat dzuhur berjamaah;
                            </div>
                            <div class="text-lg">
                                3. Melaksanakan Pembelajaran aktif, inovatif, kreatif, efektif, dan menyenangkan;
                            </div>
                            <div class="text-lg">
                                4. Melaksanakan pembinaan khusus kepada murid yang berbakat baik bidang akademik maupun nonakademik; dan
                            </div>
                            <div class="text-lg">
                                5. Melaksanakan kegiatan ekstrakurikuler untuk memupuk sifat disiplin, mandiri, tanggung jawab, tenggang rasa, kasih sayang, dan hormat kepada orang tua.
                            </div>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bagian Kurikulum -->
            <div class="mx-4 md:mx-24 py-10 rounded-md">
                <h2 class="text-xl font-semibold text-black">KURIKULUM SD MUHAMMADIYAH AMBARAWA</h2>

                @php
                    $paragraphs = explode(PHP_EOL, $profile->curriculum);
                @endphp

                @foreach ($paragraphs as $paragraph)
                    <p class="mt-5 text-lg text-black">
                        {{$paragraph}}
                    </p>
                @endforeach
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
        <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>

    </body>
</html>
