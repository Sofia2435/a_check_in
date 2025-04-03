<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>

    <!-- Tailwind CSS -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />

    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body x-data="{ openMenu: false }" style="background-color:rgb(199, 246, 210)">

    <!-- Navbar -->
    <header class="px-4 py-2 shadow text-green-800" style=" background-color:#b6ffc7;">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <!-- Botón de menú -->
                <button @click="openMenu = !openMenu" class="p-4 focus:outline-none" type="button">
                    <svg class="fill-current w-6" viewBox="0 -21 384 384">
                        <path d="M362.668 0H21.332C9.578 0 0 9.578 0 21.332V64c0 11.754 9.578 21.332 21.332 21.332h341.336C374.422 85.332 384 75.754 384 64V21.332C384 9.578 374.422 0 362.668 0zm0 0M362.668 128H21.332C9.578 128 0 137.578 0 149.332V192c0 11.754 9.578 21.332 21.332 21.332h341.336c11.754 0 21.332-9.578 21.332-21.332v-42.668c0-11.754-9.578-21.332-21.332-21.332zm0 0M362.668 256H21.332C9.578 256 0 265.578 0 277.332V320c0 11.754 9.578 21.332 21.332 21.332h341.336c11.754 0 21.332-9.578 21.332-21.332v-42.668c0-11.754-9.578-21.332-21.332-21.332zm0 0" />
                    </svg>
                </button>
            </div>

            <!-- Perfil de usuario -->
            <div class="flex items-center" x-data="{ open: false }">
                <button @click="open = !open" class="flex items-center px-3 py-2 focus:outline-none hover:bg-green-400 rounded-md" >
                    <img src="https://cdn-icons-gif.flaticon.com/8819/8819071.gif" alt="Profile" class="h-10 w-10 rounded-full">
                    <span class="ml-4 text-sm hidden md:inline-block">{{ Auth::check() ? Auth::user()->name : 'Invitado' }}</span>
                    <svg class="fill-current w-3 ml-4" viewBox="0 0 407.437 407.437">
                        <path d="M386.258 91.567l-182.54 181.945L21.179 91.567 0 112.815 203.718 315.87l203.719-203.055z" />
                    </svg>
                </button>

                <!-- Dropdown -->
                <div x-show="open" @click.away="open = false"
                     class="absolute right-0 mt-16 mr-4 rounded border border-gray-200 shadow text-sm text-left" style="background-color: #b6ffc7;">
                    <ul>
                        <li class="px-4 py-3 border-b hover:bg-green-200"><a href="#">Mi Perfil</a></li>
                        <li class="px-4 py-3 hover:bg-green-200"><a href="{{ route('logout') }}">Cerrar Sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="flex">
        <!-- Sidebar -->
        <div x-show="openMenu" @click.away="openMenu = false"
             class="fixed inset-y-0 left-0 w-64 text-bg-green-800 transform transition-transform duration-300 ease-in-out"
             :class="openMenu ? 'translate-x-0' : '-translate-x-full'" style=" background-color: #b6ffc7;">
            <div class="sidebar text-center">
                <div class="p-1.5 mt-1 flex items-center">
                    <img src="{{ asset('images/logocheckin.png') }}" alt="Check-In"
                         class="w-12 h-auto mx-auto">
                </div>

                <div class="p-1.5 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-green-100">
                    <i class="bi bi-search text-sm"></i>
                    <input type="text" placeholder="Search"
                           class="text-[15px] ml-4 w-full bg-transparent focus:outline-none" />
                </div>

                <a href="{{ route('admin/aprendices') }}">
                    <div class="p-1.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-green-300">
                        <i class="bi bi-house-door-fill"></i>
                        <span class="text-[15px] ml-4 font-bold">Aprendices</span>
                    </div>
                </a>

                <a href="#">
                    <div class="p-1.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-green-300">
                        <i class="bi bi-house-door-fill"></i>
                        <span class="text-[15px] ml-4 font-bold">Instructores</span>
                    </div>
                </a>

                <a href="#">
                    <div class="p-1.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-green-300">
                        <i class="bi bi-bookmark-fill"></i>
                        <span class="text-[15px] ml-4 font-bold">Carnet Digital</span>
                    </div>
                </a>

                <a href="#">
                    <div class="p-1.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-green-300">
                        <i class="bi bi-house-door-fill"></i>
                        <span class="text-[15px] ml-4 font-bold">Programación</span>
                    </div>
                </a>

                <a href="#">
                    <div class="p-1.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-green-300">
                        <i class="bi bi-house-door-fill"></i>
                        <span class="text-[15px] ml-4 font-bold">Registro Equipos</span>
                    </div>
                </a>

                <a href="#">
                    <div class="p-1.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-green-300">
                        <i class="bi bi-house-door-fill"></i>
                        <span class="text-[15px] ml-4 font-bold">Asistencias</span>
                    </div>
                </a>

                <a href="#">
                    <div class="p-1.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-green-300">
                        <i class="bi bi-house-door-fill"></i>
                        <span class="text-[15px] ml-4 font-bold">Justificaciones</span>
                    </div>
                </a>

                <a href="{{ route('logout') }}">
                    <div class="my-4 bg-green-500 h-[1px]"></div>
                    <div class="p-1.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-green-300">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <span class="text-[15px] ml-4 font-bold">Logout</span>
                    </div>
                </a>
            </div>
        </div>

        <!-- Contenido principal -->
        <div class="flex-1 p-6">
            <div>@yield('contents')</div>
        </div>
    </div>

</body>

</html>
