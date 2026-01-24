<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Alejandro Girardi</title>

    <!-- TAILWIND CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Estilos personalizados opcionales -->
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            max-width: 100%;
            overflow-x: hidden;
        }

        @keyframes fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fade-in 0.6s ease-out;
        }

        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out;
        }

        .animate-fade-in-up-delay {
            animation: fade-in-up 0.8s ease-out 0.2s both;
        }

        .animate-fade-in-up-delay-2 {
            animation: fade-in-up 0.8s ease-out 0.4s both;
        }

        .animate-fade-in-up-delay-3 {
            animation: fade-in-up 0.8s ease-out 0.6s both;
        }
    </style>
</head>

<body
    class="bg-[#06283D] dark:bg-[#0a0a0a] dark:text-[#EDEDEC] text-[#f3f3f3] flex flex-col items-center min-h-screen overflow-x-hidden">

    <!-- HEADER -->
    <header id="navbar"
        class="w-full fixed top-4 left-0 right-0 z-50 flex justify-center transition-all duration-300 ease-in-out">
        <nav
            class="w-full max-w-[90%] sm:max-w-xl md:max-w-2xl lg:max-w-4xl px-8 py-4 backdrop-blur-md bg-[#052233]/70 dark:bg-[#0a0a0a]/60 border border-white/10 rounded-full shadow-md transition-all duration-300 ease-in-out">

            <div class="flex items-center justify-center gap-x-8 gap-y-3 flex-wrap text-sm font-medium">
                <a href="#inicio"
                    class="px-5 py-2 rounded-full hover:bg-black/10 hover:dark:bg-white/10 transition">Inicio</a>
                <a href="#sobre-mi"
                    class="px-5 py-2 rounded-full hover:bg-black/10 hover:dark:bg-white/10 transition">Sobre mí</a>
                <a href="#experiencia"
                    class="px-5 py-2 rounded-full hover:bg-black/10 hover:dark:bg-white/10 transition">Experiencia</a>
                <a href="#proyectos"
                    class="px-5 py-2 rounded-full hover:bg-black/10 hover:dark:bg-white/10 transition">Proyectos</a>
                <a href="#contacto"
                    class="px-5 py-2 rounded-full hover:bg-black/10 hover:dark:bg-white/10 transition">Contacto</a>
            </div>
        </nav>
    </header>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="mt-32 w-full max-w-4xl px-4 sm:px-6 space-y-16 sm:space-y-32 text-center text-lg">
        <section id="inicio" class="h-screen flex flex-col justify-center items-center px-4 sm:px-6 overflow-hidden">
            <div class="max-w-4xl mx-auto text-center">

                <!-- Badge de Saludo -->
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 bg-blue-500/10 border border-blue-500/20 rounded-full mb-6 animate-fade-in">
                    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                    <span class="text-sm text-blue-400 font-medium">Disponible para proyectos</span>
                </div>

                <!-- Título Principal -->
                <h1
                    class="text-5xl md:text-6xl lg:text-7xl font-bold mb-4 bg-gradient-to-r from-white via-blue-100 to-blue-300 bg-clip-text text-transparent animate-fade-in-up">
                    Licenciado Alejandro Girardi
                </h1>

                <!-- Subtítulo con efecto typing -->
                <div class="mb-8 animate-fade-in-up-delay">
                    <p class="text-xl md:text-2xl text-gray-300 dark:text-gray-400 mb-2">
                        Desarrollador <span class="text-blue-400 font-semibold">Back-end</span>
                    </p>
                    <p class="text-sm md:text-base text-gray-500 max-w-2xl mx-auto">
                        Creando soluciones robustas y escalables con pasión por la tecnología
                    </p>
                </div>

                <!-- Botones de Acción -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center animate-fade-in-up-delay-2">
                    <!-- Botón Descargar CV -->
                    <a href="{{ route('download.cv') }}"
                        class="group inline-flex items-center gap-2 px-6 py-3 rounded-full font-medium text-sm bg-blue-600 hover:bg-blue-700 text-white shadow-lg hover:shadow-xl hover:shadow-blue-500/50 transition-all duration-300 hover:scale-105">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 group-hover:animate-bounce"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4" />
                        </svg>
                        Descargar CV
                    </a>

                    <!-- Botón Contactar -->
                    <a href="#contacto"
                        class="inline-flex items-center gap-2 px-6 py-3 rounded-full font-medium text-sm bg-gray-800/50 hover:bg-gray-700/50 text-white border border-gray-700 hover:border-blue-500/50 shadow-md transition-all duration-300 hover:scale-105">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Contactar
                    </a>
                </div>

                <!-- Stack Tecnológico Rápido -->
                <div class="mt-12 animate-fade-in-up-delay-3">
                    <p class="text-xs text-gray-500 mb-4 uppercase tracking-wider">Stack Principal</p>
                    <div class="flex flex-wrap gap-3 justify-center">
                        <span
                            class="px-3 py-1.5 bg-purple-500/10 border border-purple-500/20 text-purple-300 rounded-lg text-xs font-medium">PHP</span>
                        <span
                            class="px-3 py-1.5 bg-red-500/10 border border-red-500/20 text-red-300 rounded-lg text-xs font-medium">Laravel</span>
                        <span
                            class="px-3 py-1.5 bg-yellow-500/10 border border-yellow-500/20 text-yellow-300 rounded-lg text-xs font-medium">JavaScript</span>
                        <span
                            class="px-3 py-1.5 bg-green-500/10 border border-green-500/20 text-green-300 rounded-lg text-xs font-medium">Vue.js</span>
                        <span
                            class="px-3 py-1.5 bg-pink-500/10 border border-pink-500/20 text-pink-300 rounded-lg text-xs font-medium">GraphQL</span>
                        <span
                            class="px-3 py-1.5 bg-orange-500/10 border border-orange-500/20 text-orange-300 rounded-lg text-xs font-medium">MySQL</span>
                    </div>
                </div>

                <!-- Indicador de Scroll -->
                <div class="hidden sm:block absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                    <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>

            </div>
        </section>

        <section id="sobre-mi" class="min-h-screen flex flex-col justify-center px-4 sm:px-6 py-20">
            <div class="max-w-4xl mx-auto">
                <!-- Título Principal -->
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-center">Sobre mí</h2>

                <!-- Descripción Principal -->
                <p class="text-lg text-gray-300 dark:text-gray-400 text-center mb-12 leading-relaxed">
                    Licenciado en Informática con amplia experiencia en desarrollo web y gestión de bases de datos.
                    Me apasiona crear soluciones digitales eficientes y enfrentar nuevos desafíos tecnológicos con
                    perseverancia y compromiso.
                </p>

                <!-- Grid de Contenido -->
                <div class="grid md:grid-cols-2 gap-8 mb-12">

                    <!-- Columna Izquierda: Tecnologías -->
                    <div
                        class="bg-gray-800/50 dark:bg-gray-900/50 rounded-lg p-6 backdrop-blur-sm border border-gray-700/50">
                        <h3 class="text-2xl font-semibold mb-4 flex items-center gap-2">
                            <span class="text-blue-400">💻</span>
                            Tecnologías
                        </h3>
                        <div class="space-y-3">
                            <div>
                                <h4 class="text-sm font-medium text-gray-400 mb-2">Lenguajes de Programación</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="px-3 py-1 bg-blue-500/20 text-blue-300 rounded-full text-sm">Python</span>
                                    <span
                                        class="px-3 py-1 bg-purple-500/20 text-purple-300 rounded-full text-sm">PHP</span>
                                    <span
                                        class="px-3 py-1 bg-yellow-500/20 text-yellow-300 rounded-full text-sm">JavaScript</span>
                                    <span class="px-3 py-1 bg-indigo-500/20 text-indigo-300 rounded-full text-sm">Visual
                                        Basic</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-400 mb-2">Bases de Datos & APIs</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="px-3 py-1 bg-orange-500/20 text-orange-300 rounded-full text-sm">MySQL</span>
                                    <span
                                        class="px-3 py-1 bg-pink-500/20 text-pink-300 rounded-full text-sm">GraphQL</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-400 mb-2">Frameworks & CMS</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="px-3 py-1 bg-red-500/20 text-red-300 rounded-full text-sm">Laravel</span>
                                    <span
                                        class="px-3 py-1 bg-emerald-500/20 text-emerald-300 rounded-full text-sm">Express.js</span>
                                    <span
                                        class="px-3 py-1 bg-cyan-500/20 text-cyan-300 rounded-full text-sm">WordPress</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-400 mb-2">Otros</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="px-3 py-1 bg-green-500/20 text-green-300 rounded-full text-sm">Mantenimiento
                                        de PC</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Columna Derecha: Habilidades -->
                    <div
                        class="bg-gray-800/50 dark:bg-gray-900/50 rounded-lg p-6 backdrop-blur-sm border border-gray-700/50">
                        <h3 class="text-2xl font-semibold mb-4 flex items-center gap-2">
                            <span class="text-green-400">✨</span>
                            Habilidades Personales
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <span class="text-green-400 mt-1">▹</span>
                                <span class="text-gray-300 dark:text-gray-400">Mente abierta y capacidad de
                                    adaptación</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-green-400 mt-1">▹</span>
                                <span class="text-gray-300 dark:text-gray-400">Responsable y dedicado al trabajo</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-green-400 mt-1">▹</span>
                                <span class="text-gray-300 dark:text-gray-400">Proactivo y entusiasta</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-green-400 mt-1">▹</span>
                                <span class="text-gray-300 dark:text-gray-400">Disposición para aprender
                                    continuamente</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-green-400 mt-1">▹</span>
                                <span class="text-gray-300 dark:text-gray-400">Abierto a sugerencias y trabajo en
                                    equipo</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-green-400 mt-1">▹</span>
                                <span class="text-gray-300 dark:text-gray-400">Perseverante ante los desafíos</span>
                            </li>
                        </ul>
                    </div>

                </div>

                <!-- Frase de Cierre -->
                <div class="text-center">
                    <p class="text-gray-400 dark:text-gray-500 italic">
                        "Enfrento cada reto con perseverancia y compromiso, buscando siempre la excelencia en cada
                        proyecto."
                    </p>
                </div>

            </div>
        </section>

        <section id="experiencia" class="min-h-screen flex flex-col justify-center px-4 sm:px-6 py-20">
            <div class="max-w-5xl mx-auto w-full">
                <!-- Título Principal -->
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-center">Experiencia</h2>
                <p
                    class="text-lg text-gray-300 dark:text-gray-400 text-center mb-16 leading-relaxed max-w-3xl mx-auto">
                    Desarrollador Full Stack con experiencia en sistemas empresariales y constante crecimiento
                    profesional
                </p>

                <!-- Timeline de Experiencia -->
                <div class="space-y-12">

                    <!-- Experiencia Profesional -->
                    <div class="relative pl-8 border-l-2 border-blue-500">
                        <!-- Indicador de Timeline -->
                        <div class="absolute -left-[9px] top-0 w-4 h-4 bg-blue-500 rounded-full"></div>

                        <div
                            class="bg-gray-800/50 dark:bg-gray-900/50 rounded-lg p-6 backdrop-blur-sm border border-gray-700/50 hover:border-blue-500/50 transition-colors">
                            <!-- Header del Trabajo -->
                            <div class="flex flex-wrap justify-between items-start gap-3 mb-4">
                                <div>
                                    <h3 class="text-2xl font-bold text-blue-400">Full Stack Developer</h3>
                                    <p class="text-gray-300 font-medium mt-1">Somos Sistemas</p>
                                </div>
                                <span
                                    class="px-4 py-1 bg-green-500/20 text-green-300 rounded-full text-sm font-medium">
                                    2023 - Actualidad
                                </span>
                            </div>

                            <!-- Descripción -->
                            <p class="text-gray-300 dark:text-gray-400 mb-4 leading-relaxed">
                                Miembro del equipo de desarrollo encargado de crear, mejorar y mantener los módulos de
                                los sistemas
                                ERP y POS de la compañía. Propongo nuevas ideas e implemento soluciones que contribuyen
                                al crecimiento
                                de la organización.
                            </p>

                            <!-- Proyectos/Sistemas -->
                            <div class="space-y-4">
                                <!-- Sistema POS -->
                                <div class="bg-gray-700/30 rounded-md p-4">
                                    <h4 class="font-semibold text-purple-400 mb-2 flex items-center gap-2">
                                        <span>🛒</span> Sistema POS (Punto de Venta)
                                    </h4>
                                    <p class="text-sm text-gray-400 mb-3">
                                        Sistema de facturación empresarial para gestión de ventas en tiempo real.
                                    </p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="px-2 py-1 bg-indigo-500/20 text-indigo-300 rounded text-xs">Visual
                                            Basic.NET</span>
                                        <span
                                            class="px-2 py-1 bg-orange-500/20 text-orange-300 rounded text-xs">MySQL</span>
                                    </div>
                                </div>

                                <!-- Sistema ERP -->
                                <div class="bg-gray-700/30 rounded-md p-4">
                                    <h4 class="font-semibold text-cyan-400 mb-2 flex items-center gap-2">
                                        <span>⚙️</span> Sistema ERP (Administrativo)
                                    </h4>
                                    <p class="text-sm text-gray-400 mb-3">
                                        Sistema administrativo integral para la gestión de recursos empresariales.
                                    </p>
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="px-2 py-1 bg-purple-500/20 text-purple-300 rounded text-xs">PHP</span>
                                        <span
                                            class="px-2 py-1 bg-yellow-500/20 text-yellow-300 rounded text-xs">JavaScript</span>
                                        <span
                                            class="px-2 py-1 bg-blue-500/20 text-blue-300 rounded text-xs">AJAX</span>
                                        <span
                                            class="px-2 py-1 bg-violet-500/20 text-violet-300 rounded text-xs">Bootstrap</span>
                                        <span
                                            class="px-2 py-1 bg-orange-500/20 text-orange-300 rounded text-xs">MySQL</span>
                                    </div>
                                </div>

                                <!-- Sistema WMS Pescadería -->
                                <div class="bg-gray-700/30 rounded-md p-4">
                                    <h4 class="font-semibold text-emerald-400 mb-2 flex items-center gap-2">
                                        <span>🐟</span> WMS Pescadería (Backend)
                                    </h4>
                                    <p class="text-sm text-gray-400 mb-3">
                                        Sistema de gestión de almacén especializado para el sector pesquero.
                                    </p>
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="px-2 py-1 bg-pink-500/20 text-pink-300 rounded text-xs">GraphQL</span>
                                        <span
                                            class="px-2 py-1 bg-blue-500/20 text-blue-300 rounded text-xs">Node.js</span>
                                    </div>
                                </div>

                                <!-- Migrador de Data -->
                                <div class="bg-gray-700/30 rounded-md p-4">
                                    <h4 class="font-semibold text-amber-400 mb-2 flex items-center gap-2">
                                        <span>🔄</span> Optimización de Migrador de Data
                                    </h4>
                                    <p class="text-sm text-gray-400 mb-3">
                                        Mejora y optimización de sistema de migración de datos empresariales.
                                    </p>
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="px-2 py-1 bg-emerald-500/20 text-emerald-300 rounded text-xs">Express.js</span>
                                        <span
                                            class="px-2 py-1 bg-yellow-500/20 text-yellow-300 rounded text-xs">Node.js</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Autodesarrollo -->
                    <div class="relative pl-8 border-l-2 border-green-500">
                        <!-- Indicador de Timeline -->
                        <div class="absolute -left-[9px] top-0 w-4 h-4 bg-green-500 rounded-full"></div>

                        <div
                            class="bg-gray-800/50 dark:bg-gray-900/50 rounded-lg p-6 backdrop-blur-sm border border-gray-700/50 hover:border-green-500/50 transition-colors">
                            <!-- Header -->
                            <div class="flex flex-wrap justify-between items-start gap-3 mb-4">
                                <div>
                                    <h3 class="text-2xl font-bold text-green-400">Desarrollo Profesional Continuo</h3>
                                    <p class="text-gray-300 font-medium mt-1">Aprendizaje Autodidacta</p>
                                </div>
                                <span class="px-4 py-1 bg-blue-500/20 text-blue-300 rounded-full text-sm font-medium">
                                    En curso
                                </span>
                            </div>

                            <!-- Descripción -->
                            <p class="text-gray-300 dark:text-gray-400 mb-4 leading-relaxed">
                                Dedicado al crecimiento profesional continuo, estudiando tecnologías modernas para
                                ampliar mis
                                capacidades y abarcar nuevos proyectos con herramientas de vanguardia.
                            </p>

                            <!-- Tecnologías en Estudio -->
                            <div class="grid md:grid-cols-3 gap-4">
                                <!-- Next.js -->
                                <div class="bg-gray-700/30 rounded-md p-4 text-center">
                                    <div class="text-3xl mb-2">⚛️</div>
                                    <h4 class="font-semibold text-white mb-1">Next.js</h4>
                                    <p class="text-xs text-gray-400 mb-2">Framework de React</p>
                                    <p class    ="text-xs text-gray-500">Construcción de interfaces modernas y
                                        dinámicas en el Front-end</p>
                                </div>

                                <!-- Laravel -->
                                <div class="bg-gray-700/30 rounded-md p-4 text-center">
                                    <div class="text-3xl mb-2">🔧</div>
                                    <h4 class="font-semibold text-white mb-1">Laravel</h4>
                                    <p class="text-xs text-gray-400 mb-2">Framework de PHP</p>
                                    <p class="text-xs text-gray-500">Desarrollo de Back-end robusto para sistemas web
                                    </p>
                                </div>

                                <!-- MariaDB -->
                                <div class="bg-gray-700/30 rounded-md p-4 text-center">
                                    <div class="text-3xl mb-2">🗄️</div>
                                    <h4 class="font-semibold text-white mb-1">MariaDB</h4>
                                    <p class="text-xs text-gray-400 mb-2">Base de Datos</p>
                                    <p class="text-xs text-gray-500">Creación y administración eficiente de bases de
                                        datos</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Indicador de Continuidad -->
                <div class="mt-8 text-center">
                    <div class="inline-flex items-center gap-2 text-gray-500">
                        <div class="w-2 h-2 bg-gray-600 rounded-full animate-pulse"></div>
                        <span class="text-sm">En constante evolución...</span>
                    </div>
                </div>

            </div>
        </section>

        <section id="proyectos" class="min-h-screen flex flex-col justify-center px-4 sm:px-6 py-20">
            <div class="max-w-6xl mx-auto w-full">
                <!-- Título Principal -->
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-center">Proyectos</h2>
                <p
                    class="text-lg text-gray-300 dark:text-gray-400 text-center mb-16 leading-relaxed max-w-3xl mx-auto">
                    Explora algunos de mis trabajos destacados y las soluciones que he desarrollado
                </p>

                <!-- Grid de Proyectos -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                    <!-- Proyecto 1: Sistema POS -->
                    <div
                        class="group bg-gray-800/50 dark:bg-gray-900/50 rounded-lg overflow-hidden border border-gray-700/50 hover:border-purple-500/50 transition-all duration-300 sm:hover:transform sm:hover:scale-105">
                        <!-- Imagen del Proyecto -->
                        <div
                            class="relative h-48 bg-gradient-to-br from-purple-500/20 to-indigo-500/20 overflow-hidden">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="text-6xl opacity-50">🛒</span>
                            </div>
                            <!-- Overlay al hacer hover -->
                            <div
                                class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span class="text-white font-semibold">Ver detalles</span>
                            </div>
                        </div>

                        <!-- Contenido del Proyecto -->
                        <div class="p-5">
                            <h3 class="text-xl font-bold text-purple-400 mb-2">Sistema POS</h3>
                            <p class="text-sm text-gray-400 mb-4 line-clamp-3">
                                Sistema de punto de venta empresarial para gestión de facturación en tiempo real,
                                con control de inventario y reportes de ventas.
                            </p>

                            <!-- Tecnologías -->
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-indigo-500/20 text-indigo-300 rounded text-xs">Visual
                                    Basic.NET</span>
                                <span class="px-2 py-1 bg-orange-500/20 text-orange-300 rounded text-xs">MySQL</span>
                            </div>

                            <!-- Botón/Link (opcional) -->
                            <button
                                class="w-full py-2 bg-purple-500/10 hover:bg-purple-500/20 text-purple-400 rounded transition-colors text-sm font-medium">
                                Ver más detalles
                            </button>
                        </div>
                    </div>

                    <!-- Proyecto 2: Sistema ERP -->
                    <div
                        class="group bg-gray-800/50 dark:bg-gray-900/50 rounded-lg overflow-hidden border border-gray-700/50 hover:border-cyan-500/50 transition-all duration-300 sm:hover:transform sm:hover:scale-105">
                        <div class="relative h-48 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 overflow-hidden">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="text-6xl opacity-50">⚙️</span>
                            </div>
                            <div
                                class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span class="text-white font-semibold">Ver detalles</span>
                            </div>
                        </div>

                        <div class="p-5">
                            <h3 class="text-xl font-bold text-cyan-400 mb-2">Sistema ERP</h3>
                            <p class="text-sm text-gray-400 mb-4 line-clamp-3">
                                Sistema administrativo integral para la gestión de recursos empresariales,
                                módulos de contabilidad, inventario y recursos humanos.
                            </p>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-purple-500/20 text-purple-300 rounded text-xs">PHP</span>
                                <span
                                    class="px-2 py-1 bg-yellow-500/20 text-yellow-300 rounded text-xs">JavaScript</span>
                                <span class="px-2 py-1 bg-blue-500/20 text-blue-300 rounded text-xs">AJAX</span>
                                <span
                                    class="px-2 py-1 bg-violet-500/20 text-violet-300 rounded text-xs">Bootstrap</span>
                            </div>

                            <button
                                class="w-full py-2 bg-cyan-500/10 hover:bg-cyan-500/20 text-cyan-400 rounded transition-colors text-sm font-medium">
                                Ver más detalles
                            </button>
                        </div>
                    </div>

                    <!-- Proyecto 3: WMS Pescadería -->
                    <div
                        class="group bg-gray-800/50 dark:bg-gray-900/50 rounded-lg overflow-hidden border border-gray-700/50 hover:border-emerald-500/50 transition-all duration-300 sm:hover:transform sm:hover:scale-105">
                        <div
                            class="relative h-48 bg-gradient-to-br from-emerald-500/20 to-teal-500/20 overflow-hidden">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="text-6xl opacity-50">🐟</span>
                            </div>
                            <div
                                class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span class="text-white font-semibold">Ver detalles</span>
                            </div>
                        </div>

                        <div class="p-5">
                            <h3 class="text-xl font-bold text-emerald-400 mb-2">WMS Pescadería</h3>
                            <p class="text-sm text-gray-400 mb-4 line-clamp-3">
                                Backend de sistema de gestión de almacén especializado para el sector pesquero,
                                con API GraphQL para manejo eficiente de inventario.
                            </p>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-pink-500/20 text-pink-300 rounded text-xs">GraphQL</span>
                                <span
                                    class="px-2 py-1 bg-emerald-500/20 text-emerald-300 rounded text-xs">Node.js</span>
                            </div>

                            <button
                                class="w-full py-2 bg-emerald-500/10 hover:bg-emerald-500/20 text-emerald-400 rounded transition-colors text-sm font-medium">
                                Ver más detalles
                            </button>
                        </div>
                    </div>

                    <!-- Proyecto 4: Migrador de Data -->
                    <div
                        class="group bg-gray-800/50 dark:bg-gray-900/50 rounded-lg overflow-hidden border border-gray-700/50 hover:border-amber-500/50 transition-all duration-300 sm:hover:transform sm:hover:scale-105">
                        <div
                            class="relative h-48 bg-gradient-to-br from-amber-500/20 to-orange-500/20 overflow-hidden">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="text-6xl opacity-50">🔄</span>
                            </div>
                            <div
                                class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span class="text-white font-semibold">Ver detalles</span>
                            </div>
                        </div>

                        <div class="p-5">
                            <h3 class="text-xl font-bold text-amber-400 mb-2">Migrador de Data</h3>
                            <p class="text-sm text-gray-400 mb-4 line-clamp-3">
                                Optimización de sistema de migración de datos empresariales, mejorando
                                la velocidad y confiabilidad del proceso de transferencia.
                            </p>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span
                                    class="px-2 py-1 bg-emerald-500/20 text-emerald-300 rounded text-xs">Express.js</span>
                                <span class="px-2 py-1 bg-yellow-500/20 text-yellow-300 rounded text-xs">Node.js</span>
                            </div>

                            <button
                                class="w-full py-2 bg-amber-500/10 hover:bg-amber-500/20 text-amber-400 rounded transition-colors text-sm font-medium">
                                Ver más detalles
                            </button>
                        </div>
                    </div>

                    <!-- Proyecto 5: Ejemplo con imagen real -->
                    <div
                        class="group bg-gray-800/50 dark:bg-gray-900/50 rounded-lg overflow-hidden border border-gray-700/50 hover:border-blue-500/50 transition-all duration-300 sm:hover:transform sm:hover:scale-105">
                        <!-- Aquí irá tu imagen real -->
                        <div class="relative h-48 bg-gray-700 overflow-hidden">
                            <!-- Reemplaza el src con la ruta de tu imagen -->
                            <img src="/ruta/a/tu/imagen.jpg" alt="Nombre del proyecto"
                                class="w-full h-full object-cover" />
                            <div
                                class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span class="text-white font-semibold">Ver detalles</span>
                            </div>
                        </div>

                        <div class="p-5">
                            <h3 class="text-xl font-bold text-blue-400 mb-2">Tu Próximo Proyecto</h3>
                            <p class="text-sm text-gray-400 mb-4 line-clamp-3">
                                Descripción de tu proyecto. Explica qué hace, qué problema resuelve
                                y por qué es importante.
                            </p>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-green-500/20 text-green-300 rounded text-xs">Vue.js</span>
                                <span class="px-2 py-1 bg-red-500/20 text-red-300 rounded text-xs">Laravel</span>
                            </div>

                            <button
                                class="w-full py-2 bg-blue-500/10 hover:bg-blue-500/20 text-blue-400 rounded transition-colors text-sm font-medium">
                                Ver más detalles
                            </button>
                        </div>
                    </div>

                    <!-- Proyecto 6: Otro ejemplo -->
                    <div
                        class="group bg-gray-800/50 dark:bg-gray-900/50 rounded-lg overflow-hidden border border-gray-700/50 hover:border-rose-500/50 transition-all duration-300 sm:hover:transform sm:hover:scale-105">
                        <div class="relative h-48 bg-gradient-to-br from-rose-500/20 to-pink-500/20 overflow-hidden">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="text-6xl opacity-50">🚀</span>
                            </div>
                            <div
                                class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span class="text-white font-semibold">Ver detalles</span>
                            </div>
                        </div>

                        <div class="p-5">
                            <h3 class="text-xl font-bold text-rose-400 mb-2">Otro Proyecto</h3>
                            <p class="text-sm text-gray-400 mb-4 line-clamp-3">
                                Agrega tantos proyectos como necesites. Cada uno con su descripción,
                                tecnologías y una imagen representativa.
                            </p>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-2 py-1 bg-green-500/20 text-green-300 rounded text-xs">Vue.js</span>
                                <span class="px-2 py-1 bg-blue-500/20 text-blue-300 rounded text-xs">TypeScript</span>
                            </div>

                            <button
                                class="w-full py-2 bg-rose-500/10 hover:bg-rose-500/20 text-rose-400 rounded transition-colors text-sm font-medium">
                                Ver más detalles
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="contacto" class="min-h-screen flex flex-col justify-center px-4 sm:px-6 py-20">
            <div class="max-w-5xl mx-auto w-full px-2 sm:px-0">
                <!-- Título Principal -->
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-center">Contacto</h2>
                <p
                    class="text-lg text-gray-300 dark:text-gray-400 text-center mb-12 leading-relaxed max-w-2xl mx-auto">
                    ¿Tienes un proyecto en mente o quieres colaborar? Estaré encantado de escucharte
                </p>

                <div class="grid md:grid-cols-2 gap-6 md:gap-8">

                    <!-- Columna Izquierda: Información de Contacto -->
                    <div class="space-y-6">
                        <h3 class="text-xl md:text-2xl font-bold mb-6">Información de Contacto</h3>

                        <!-- Email -->
                        <div
                            class="flex items-start gap-3 md:gap-4 p-3 md:p-4 bg-gray-800/50 dark:bg-gray-900/50 rounded-lg border border-gray-700/50 hover:border-blue-500/50 transition-colors">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center">
                                <span class="text-2xl">📧</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-blue-400 mb-1">Email</h4>
                                <a href="mailto:alejandrogirardi99@gmail.com"
                                    class="text-gray-300 hover:text-blue-400 transition-colors text-sm md:text-base break-all">
                                    alejandrogirardi99@gmail.com
                                </a>
                            </div>
                        </div>

                        <!-- Teléfono -->
                        <div
                            class="flex items-start gap-3 md:gap-4 p-3 md:p-4 bg-gray-800/50 dark:bg-gray-900/50 rounded-lg border border-gray-700/50 hover:border-green-500/50 transition-colors">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-green-500/20 rounded-lg flex items-center justify-center">
                                <span class="text-2xl">📱</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-green-400 mb-1">Teléfono</h4>
                                <a href="tel:+584248226215"
                                    class="text-gray-300 hover:text-green-400 transition-colors">
                                    +58 (424) 822-6215
                                </a>
                            </div>
                        </div>

                        <!-- Ubicación -->
                        <div
                            class="flex items-start gap-3 md:gap-4 p-3 md:p-4 bg-gray-800/50 dark:bg-gray-900/50 rounded-lg border border-gray-700/50 hover:border-purple-500/50 transition-colors">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-purple-500/20 rounded-lg flex items-center justify-center">
                                <span class="text-2xl">📍</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-purple-400 mb-1">Ubicación</h4>
                                <p class="text-gray-300">Venezuela</p>
                            </div>
                        </div>

                        <!-- Redes Sociales -->
                        <div class="pt-4">
                            <h4 class="font-semibold text-gray-300 mb-4">Encuéntrame en:</h4>
                            <div class="flex gap-3">
                                <!-- LinkedIn -->
                                <a href="www.linkedin.com/in/alejandro-girardi" target="_blank"
                                    rel="noopener noreferrer"
                                    class="w-12 h-12 bg-blue-600/20 hover:bg-blue-600/30 rounded-lg flex items-center justify-center transition-colors group">
                                    <span class="text-xl group-hover:scale-110 transition-transform">💼</span>
                                </a>
                                <!-- GitHub -->
                                <a href="https://github.com/Al3x28" target="_blank" rel="noopener noreferrer"
                                    class="w-12 h-12 bg-gray-700/50 hover:bg-gray-700/70 rounded-lg flex items-center justify-center transition-colors group">
                                    <span class="text-xl group-hover:scale-110 transition-transform">💻</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Columna Derecha: Formulario de Contacto -->
                    <form id="contactForm" action="{{ route('contact.store') }}" method="POST"
                        class="bg-gray-800/50 dark:bg-gray-900/50 rounded-lg p-4 md:p-6 border border-gray-700/50">
                        @csrf
                        <h3 class="text-xl md:text-2xl font-bold mb-6">Envíame un mensaje</h3>

                        <!-- Mensaje de respuesta -->
                        <div id="formMessage" class="hidden mb-4 p-4 rounded-lg"></div>

                        <div class="space-y-4">
                            <!-- Nombre -->
                            <div>
                                <label for="nombre" class="block text-sm font-medium text-gray-300 mb-2">
                                    Nombre completo
                                </label>
                                <input type="text" id="nombre" name="nombre" placeholder="Juan Pérez"
                                    class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:outline-none focus:border-blue-500 text-white placeholder-gray-400 transition-colors" />
                                <span class="text-red-400 text-sm error-message" id="error-nombre"></span>
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-300 mb-2">
                                    Email
                                </label>
                                <input type="email" id="email" name="email" placeholder="tu@email.com"
                                    class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:outline-none focus:border-blue-500 text-white placeholder-gray-400 transition-colors" />
                                <span class="text-red-400 text-sm error-message" id="error-email"></span>
                            </div>

                            <!-- Asunto -->
                            <div>
                                <label for="asunto" class="block text-sm font-medium text-gray-300 mb-2">
                                    Asunto
                                </label>
                                <input type="text" id="asunto" name="asunto"
                                    placeholder="Propuesta de colaboración"
                                    class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:outline-none focus:border-blue-500 text-white placeholder-gray-400 transition-colors" />
                                <span class="text-red-400 text-sm error-message" id="error-asunto"></span>
                            </div>

                            <!-- Mensaje -->
                            <div>
                                <label for="mensaje" class="block text-sm font-medium text-gray-300 mb-2">
                                    Mensaje
                                </label>
                                <textarea id="mensaje" name="mensaje" rows="5" placeholder="Cuéntame sobre tu proyecto o consulta..."
                                    class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:outline-none focus:border-blue-500 text-white placeholder-gray-400 resize-none transition-colors"></textarea>
                                <span class="text-red-400 text-sm error-message" id="error-mensaje"></span>
                            </div>

                            <!-- Botón Enviar -->
                            <button type="submit" id="submitBtn"
                                class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-colors duration-300 flex items-center justify-center gap-2 group">
                                <span id="btnText">Enviar mensaje</span>
                                <span id="btnArrow" class="group-hover:translate-x-1 transition-transform">→</span>
                                <span id="btnSpinner" class="hidden">
                                    <svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10"
                                            stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor"
                                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                        </path>
                                    </svg>
                                </span>
                            </button>

                            <!-- Mensaje de privacidad -->
                            <p class="text-xs text-gray-500 text-center mt-4">
                                Tus datos están seguros y solo serán usados para responderte
                            </p>
                        </div>
                    </form>

                </div>

                <!-- Disponibilidad -->
                <div class="mt-12 text-center">
                    <div
                        class="inline-flex items-center gap-2 px-6 py-3 bg-green-500/10 border border-green-500/30 rounded-full">
                        <span class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></span>
                        <span class="text-green-400 font-medium">Disponible para proyectos freelance</span>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <!-- SCRIPT EFECTO SCROLL -->
    <script>
        const navbar = document.getElementById('navbar');
        const navInner = navbar.querySelector('nav');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 60) {
                navbar.classList.replace('top-4', 'top-0');
                navInner.classList.add('py-2', 'bg-[#041C2A]/90', 'shadow-lg', 'scale-[0.97]');
            } else {
                navbar.classList.replace('top-0', 'top-4');
                navInner.classList.remove('py-2', 'bg-[#041C2A]/90', 'shadow-lg', 'scale-[0.97]');
            }
        });
    </script>

    <!-- SCRIPT FORMULARIO DE CONTACTO -->
    <script>
        document.getElementById('contactForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            // Limpiar mensajes de error previos
            document.querySelectorAll('.error-message').forEach(el => el.textContent = '');
            document.getElementById('formMessage').classList.add('hidden');

            // Elementos del botón
            const submitBtn = document.getElementById('submitBtn');
            const btnText = document.getElementById('btnText');
            const btnArrow = document.getElementById('btnArrow');
            const btnSpinner = document.getElementById('btnSpinner');

            // Deshabilitar botón y mostrar spinner
            submitBtn.disabled = true;
            btnText.textContent = 'Enviando...';
            btnArrow.classList.add('hidden');
            btnSpinner.classList.remove('hidden');

            // Obtener datos del formulario
            const formData = new FormData(this);

            try {
                const response = await fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                const data = await response.json();

                if (response.ok && data.success) {
                    // Mostrar mensaje de éxito
                    const messageDiv = document.getElementById('formMessage');
                    messageDiv.textContent = data.message;
                    messageDiv.className =
                        'mb-4 p-4 rounded-lg bg-green-500/20 border border-green-500/50 text-green-300';
                    messageDiv.classList.remove('hidden');

                    // Limpiar formulario
                    this.reset();

                    // Scroll al mensaje
                    messageDiv.scrollIntoView({
                        behavior: 'smooth',
                        block: 'nearest'
                    });

                } else {
                    // Mostrar errores de validación
                    if (data.errors) {
                        for (const [field, messages] of Object.entries(data.errors)) {
                            const errorElement = document.getElementById(`error-${field}`);
                            if (errorElement) {
                                errorElement.textContent = messages[0];
                            }
                        }
                    } else {
                        // Mostrar mensaje de error general
                        const messageDiv = document.getElementById('formMessage');
                        messageDiv.textContent = data.message || 'Hubo un error al enviar el mensaje.';
                        messageDiv.className =
                            'mb-4 p-4 rounded-lg bg-red-500/20 border border-red-500/50 text-red-300';
                        messageDiv.classList.remove('hidden');
                    }
                }

            } catch (error) {
                // Error de red o servidor
                const messageDiv = document.getElementById('formMessage');
                messageDiv.textContent =
                    'Error de conexión. Por favor, verifica tu conexión a internet e intenta nuevamente.';
                messageDiv.className =
                    'mb-4 p-4 rounded-lg bg-red-500/20 border border-red-500/50 text-red-300';
                messageDiv.classList.remove('hidden');
            } finally {
                // Restaurar botón
                submitBtn.disabled = false;
                btnText.textContent = 'Enviar mensaje';
                btnArrow.classList.remove('hidden');
                btnSpinner.classList.add('hidden');
            }
        });
    </script>

</body>

</html>
