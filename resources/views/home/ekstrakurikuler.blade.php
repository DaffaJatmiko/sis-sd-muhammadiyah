<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ekstrakulikuler</title>
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
<body class="bg-gray-100">
    <header>
        <nav class="p-4 shadow-xl bg-white">
            <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
                <div class="flex items-center mb-4 md:mb-0">
                    <img src="../images/SD MUHAMMADIYAH.png" alt="SD Logo" class="w-16 mr-2">
                    <p class="text-lg font-semibold">SD Muhammadiyah Ambarawa</p>
                </div>

                <!-- Desktop menu -->
                <ul class="max-sm:hidden nav-menu flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4">
                    <li><a href="/" class="hover:text-gray-300 transition font-semibold">Home</a></li>
                    <li><a href="./profile" class="hover:text-gray-300 transition font-semibold">Profil</a></li>
                    <li><a href="./fasilitas" class="hover:text-gray-300 transition font-semibold">Fasilitas</a></li>
                    <li><a href="./ekstrakurikuler" class="hover:text-gray-300 transition font-semibold">Ekstrakurikuler</a></li>
                    <li><a href="./publikasi" class="hover:text-gray-300 transition font-semibold">Publikasi</a></li>
                    <li><a href="./kontak" class="hover:text-gray-300 transition font-semibold">Kontak</a></li>
                    <li><a href="./ppdb" class="hover:text-gray-300 transition font-semibold">PPDB</a></li>
                </ul>

                <!-- Mobile menu -->
                <div class="mobile-menu">
                    <button id="mobile-menu-btn">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="mobile-menu-dropdown">
                        <a href="/" class="block py-2">Home</a>
                        <a href="./profile" class="block py-2">Profil</a>
                        <a href="./fasilitas" class="block py-2">Fasilitas</a>
                        <a href="./ekstrakurikuler" class="block py-2">Ekstrakurikuler</a>
                        <a href="./publikasi" class="block py-2">Publikasi</a>
                        <a href="./kontak" class="block py-2">Kontak</a>
                        <a href="./ppdb" class="block py-2">PPDB</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="bg-[#3455EB] h-[32rem] flex items-center justify-center">
            <div class="w-full max-w-6xl grid grid-cols-1 md:grid-cols-2 gap-8 rounded-md shadow-md mt-5 p-8">
                <div class="">
                    <h1 class="text-5xl max-sm:text-4xl font-semibold text-white">Ekstrakurikuler</h1>
                    <div class="mt-5 text-white">
                        <p class="text-xl font-normal">
                            SD Muhammadiyah Ambarawa Pringsewu memiliki beberapa ekstrakurikuler seperti:
                        </p>
                        <ul class="mt-2 list-disc ml-4">
                            @foreach ($extracurricular as $data)
                            <li class="mb-2">{{ $data->title }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <img src="../images/1.jpg" alt="" class="w-full h-96 max-sm:h-64 object-cover rounded-xl md:ml-auto">
            </div>
        </div>

        <div class="mt-16 container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach($extracurricular as $data)
                <div class="bg-white rounded-md overflow-hidden shadow-lg">
                    <img src="../image/{{$data->image}}" alt="{{$data->title}}" class="w-full h-48 object-cover rounded-t-md">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">{{$loop->iteration}}. {{$data->title}}</h2>
                        <p class="text-gray-700">{{$data->description}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <footer class="bg-gray-900 text-white text-center py-8 mt-16">
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
</body>
</html>
