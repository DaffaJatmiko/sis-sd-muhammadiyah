<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Prestasi Lengkap</title>
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
                      <ul class="max-sm:hidden nav-menu flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4 md:ml-auto">
                    <li><a href="/" class="hover:text-gray-300 transition font-semibold">Home</a></li>
                    <li><a href="/profile" class="hover:text-gray-300 transition font-semibold">Profil</a></li>
                    <li><a href="/fasilitas" class="hover:text-gray-300 transition font-semibold">Fasilitas</a></li>
                    <li><a href="/ekstrakurikuler" class="hover:text-gray-300 transition font-semibold">Ekstrakurikuler</a></li>
                    <li><a href="/publikasi" class="hover:text-gray-300 transition font-semibold">Publikasi</a></li>
                    <li><a href="/kontak" class="hover:text-gray-300 transition font-semibold">Kontak</a></li>
                    <li><a href="/ppdb" class="hover:text-gray-300 transition font-semibold">PPDB</a></li>
                </ul>

                <!-- Mobile menu -->
                <div class="mobile-menu">
                    <button id="mobile-menu-btn">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="mobile-menu-dropdown">
                        <a href="/" class="block py-2">Home</a>
                        <a href="/profile" class="block py-2">Profil</a>
                        <a href="/fasilitas" class="block py-2">Fasilitas</a>
                        <a href="/ekstrakurikuler" class="block py-2">Ekstrakurikuler</a>
                        <a href="/publikasi" class="block py-2">Publikasi</a>
                        <a href="/kontak" class="block py-2">Kontak</a>
                        <a href="/ppdb" class="block py-2">PPDB</a>
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
            <div class="w-screen h-10"></div>
            <div class="container mx-auto p-8 flex flex-col  lg:items-center lg:justify-center">
    
                <div class="mb-4 lg:mr-8 lg:mb-5">
                    <img src="../image/{{$news->image}}" alt="Crown Image" class="mx-auto lg:mx-0 w-[32rem] rounded-xl" />
                </div>
        
                <div class="text-center lg:text-left">
                    <p class="text-lg text-gray-700 mb-4 font-bold text-center ">
                      {{$news->title}}
                    </p>
        
                    <p class="text-base text-gray-700 text-justify">
                      {{$news->description}}
                    </p>
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
