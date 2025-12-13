<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Pro</title>

    <!-- TAILWIND CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Estilos personalizados opcionales -->
    <style>
      html {
        scroll-behavior: smooth;
      }
    </style>
  </head>

  <body class="bg-[#06283D] dark:bg-[#0a0a0a] dark:text-[#EDEDEC] text-[#f3f3f3] flex flex-col items-center min-h-screen">

    <!-- HEADER -->
    <header id="navbar"
      class="w-full fixed top-4 left-0 right-0 z-50 flex justify-center transition-all duration-300 ease-in-out">
      <nav
        class="w-full max-w-[90%] sm:max-w-xl md:max-w-2xl lg:max-w-4xl px-8 py-4 backdrop-blur-md bg-[#052233]/70 dark:bg-[#0a0a0a]/60 border border-white/10 rounded-full shadow-md transition-all duration-300 ease-in-out">
        
        <div class="flex items-center justify-center gap-x-8 gap-y-3 flex-wrap text-sm font-medium">
          <a href="#inicio" class="px-5 py-2 rounded-full hover:bg-black/10 hover:dark:bg-white/10 transition">Inicio</a>
          <a href="#sobre-mi" class="px-5 py-2 rounded-full hover:bg-black/10 hover:dark:bg-white/10 transition">Sobre mí</a>
          <a href="#experiencia" class="px-5 py-2 rounded-full hover:bg-black/10 hover:dark:bg-white/10 transition">Experiencia</a>
          <a href="#proyectos" class="px-5 py-2 rounded-full hover:bg-black/10 hover:dark:bg-white/10 transition">Proyectos</a>
          <a href="#contacto" class="px-5 py-2 rounded-full hover:bg-black/10 hover:dark:bg-white/10 transition">Contacto</a>
        </div>
      </nav>
    </header>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="mt-32 w-full max-w-4xl px-6 space-y-32 text-center text-lg">
      <section id="inicio" class="h-screen flex flex-col justify-center">
        <h1 class="text-4xl font-bold mb-2">Licenciado Alejandro Girardi</h1>
        <p class="text-gray-300 dark:text-gray-400">Desarrolador Back-end.</p>
        <a href="{{ route('download.cv') }}" 
            class="inline-flex items-center gap-2 px-6 py-3 rounded-full font-medium text-sm bg-[#2563EB] hover:bg-[#1D4ED8] text-white shadow-md hover:shadow-lg transition dark:bg-[#3B82F6] dark:hover:bg-[#2563EB]">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4" />
            </svg>
            Descargar CV
        </a>
    </section>

    <section id="sobre-mi" class="min-h-screen flex flex-col justify-center px-6 py-20">
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
            <div class="bg-gray-800/50 dark:bg-gray-900/50 rounded-lg p-6 backdrop-blur-sm border border-gray-700/50">
                <h3 class="text-2xl font-semibold mb-4 flex items-center gap-2">
                <span class="text-blue-400">💻</span>
                Tecnologías
                </h3>
                <div class="space-y-3">
                <div>
                    <h4 class="text-sm font-medium text-gray-400 mb-2">Lenguajes de Programación</h4>
                    <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-blue-500/20 text-blue-300 rounded-full text-sm">Python</span>
                    <span class="px-3 py-1 bg-purple-500/20 text-purple-300 rounded-full text-sm">PHP</span>
                    <span class="px-3 py-1 bg-yellow-500/20 text-yellow-300 rounded-full text-sm">JavaScript</span>
                    <span class="px-3 py-1 bg-indigo-500/20 text-indigo-300 rounded-full text-sm">Visual Basic</span>
                    </div>
                </div>
                <div>
                    <h4 class="text-sm font-medium text-gray-400 mb-2">Bases de Datos & APIs</h4>
                    <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-orange-500/20 text-orange-300 rounded-full text-sm">MySQL</span>
                    <span class="px-3 py-1 bg-pink-500/20 text-pink-300 rounded-full text-sm">GraphQL</span>
                    </div>
                </div>
                <div>
                    <h4 class="text-sm font-medium text-gray-400 mb-2">Frameworks & CMS</h4>
                    <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-red-500/20 text-red-300 rounded-full text-sm">Laravel</span>
                    <span class="px-3 py-1 bg-emerald-500/20 text-emerald-300 rounded-full text-sm">Express.js</span>
                    <span class="px-3 py-1 bg-cyan-500/20 text-cyan-300 rounded-full text-sm">WordPress</span>
                    </div>
                </div>
                <div>
                    <h4 class="text-sm font-medium text-gray-400 mb-2">Otros</h4>
                    <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-green-500/20 text-green-300 rounded-full text-sm">Mantenimiento de PC</span>
                    </div>
                </div>
                </div>
            </div>

            <!-- Columna Derecha: Habilidades -->
            <div class="bg-gray-800/50 dark:bg-gray-900/50 rounded-lg p-6 backdrop-blur-sm border border-gray-700/50">
                <h3 class="text-2xl font-semibold mb-4 flex items-center gap-2">
                <span class="text-green-400">✨</span>
                Habilidades Personales
                </h3>
                <ul class="space-y-3">
                <li class="flex items-start gap-3">
                    <span class="text-green-400 mt-1">▹</span>
                    <span class="text-gray-300 dark:text-gray-400">Mente abierta y capacidad de adaptación</span>
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
                    <span class="text-gray-300 dark:text-gray-400">Disposición para aprender continuamente</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-green-400 mt-1">▹</span>
                    <span class="text-gray-300 dark:text-gray-400">Abierto a sugerencias y trabajo en equipo</span>
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
                "Enfrento cada reto con perseverancia y compromiso, buscando siempre la excelencia en cada proyecto."
            </p>
            </div>

        </div>
    </section>

    <section id="experiencia" class="min-h-screen flex flex-col justify-center px-6 py-20">
        <div class="max-w-5xl mx-auto w-full">
            <!-- Título Principal -->
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-center">Experiencia</h2>
            <p class="text-lg text-gray-300 dark:text-gray-400 text-center mb-16 leading-relaxed max-w-3xl mx-auto">
            Desarrollador Full Stack con experiencia en sistemas empresariales y constante crecimiento profesional
            </p>

            <!-- Timeline de Experiencia -->
            <div class="space-y-12">
            
            <!-- Experiencia Profesional -->
            <div class="relative pl-8 border-l-2 border-blue-500">
                <!-- Indicador de Timeline -->
                <div class="absolute -left-[9px] top-0 w-4 h-4 bg-blue-500 rounded-full"></div>
                
                <div class="bg-gray-800/50 dark:bg-gray-900/50 rounded-lg p-6 backdrop-blur-sm border border-gray-700/50 hover:border-blue-500/50 transition-colors">
                <!-- Header del Trabajo -->
                <div class="flex flex-wrap justify-between items-start gap-3 mb-4">
                    <div>
                    <h3 class="text-2xl font-bold text-blue-400">Full Stack Developer</h3>
                    <p class="text-gray-300 font-medium mt-1">Somos Sistemas</p>
                    </div>
                    <span class="px-4 py-1 bg-green-500/20 text-green-300 rounded-full text-sm font-medium">
                    2023 - Actualidad
                    </span>
                </div>

                <!-- Descripción -->
                <p class="text-gray-300 dark:text-gray-400 mb-4 leading-relaxed">
                    Miembro del equipo de desarrollo encargado de crear, mejorar y mantener los módulos de los sistemas 
                    ERP y POS de la compañía. Propongo nuevas ideas e implemento soluciones que contribuyen al crecimiento 
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
                        <span class="px-2 py-1 bg-indigo-500/20 text-indigo-300 rounded text-xs">Visual Basic.NET</span>
                        <span class="px-2 py-1 bg-orange-500/20 text-orange-300 rounded text-xs">MySQL</span>
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
                        <span class="px-2 py-1 bg-purple-500/20 text-purple-300 rounded text-xs">PHP</span>
                        <span class="px-2 py-1 bg-yellow-500/20 text-yellow-300 rounded text-xs">JavaScript</span>
                        <span class="px-2 py-1 bg-blue-500/20 text-blue-300 rounded text-xs">AJAX</span>
                        <span class="px-2 py-1 bg-violet-500/20 text-violet-300 rounded text-xs">Bootstrap</span>
                        <span class="px-2 py-1 bg-orange-500/20 text-orange-300 rounded text-xs">MySQL</span>
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
                        <span class="px-2 py-1 bg-pink-500/20 text-pink-300 rounded text-xs">GraphQL</span>
                        <span class="px-2 py-1 bg-blue-500/20 text-blue-300 rounded text-xs">Node.js</span>
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
                        <span class="px-2 py-1 bg-emerald-500/20 text-emerald-300 rounded text-xs">Express.js</span>
                        <span class="px-2 py-1 bg-yellow-500/20 text-yellow-300 rounded text-xs">Node.js</span>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <!-- Autodesarrollo -->
            <div class="relative pl-8 border-l-2 border-green-500">
                <!-- Indicador de Timeline -->
                <div class="absolute -left-[9px] top-0 w-4 h-4 bg-green-500 rounded-full"></div>
                
                    <div class="bg-gray-800/50 dark:bg-gray-900/50 rounded-lg p-6 backdrop-blur-sm border border-gray-700/50 hover:border-green-500/50 transition-colors">
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
                            Dedicado al crecimiento profesional continuo, estudiando tecnologías modernas para ampliar mis 
                            capacidades y abarcar nuevos proyectos con herramientas de vanguardia.
                        </p>

                        <!-- Tecnologías en Estudio -->
                        <div class="grid md:grid-cols-3 gap-4">
                            <!-- Next.js -->
                            <div class="bg-gray-700/30 rounded-md p-4 text-center">
                            <div class="text-3xl mb-2">⚛️</div>
                            <h4 class="font-semibold text-white mb-1">Next.js</h4>
                            <p class="text-xs text-gray-400 mb-2">Framework de React</p>
                            <p class    ="text-xs text-gray-500">Construcción de interfaces modernas y dinámicas en el Front-end</p>
                            </div>

                            <!-- Laravel -->
                            <div class="bg-gray-700/30 rounded-md p-4 text-center">
                                <div class="text-3xl mb-2">🔧</div>
                                <h4 class="font-semibold text-white mb-1">Laravel</h4>
                                <p class="text-xs text-gray-400 mb-2">Framework de PHP</p>
                                <p class="text-xs text-gray-500">Desarrollo de Back-end robusto para sistemas web</p>
                            </div>

                            <!-- MariaDB -->
                            <div class="bg-gray-700/30 rounded-md p-4 text-center">
                                <div class="text-3xl mb-2">🗄️</div>
                                <h4 class="font-semibold text-white mb-1">MariaDB</h4>
                                <p class="text-xs text-gray-400 mb-2">Base de Datos</p>
                                <p class="text-xs text-gray-500">Creación y administración eficiente de bases de datos</p>
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
      <section id="proyectos" class="h-screen flex flex-col justify-center">
        <h2 class="text-3xl font-semibold mb-3">Proyectos</h2>
        <p class="text-gray-300 dark:text-gray-400 max-w-xl mx-auto">
          Explora algunos de mis trabajos destacados a lo largo de los años.
        </p>
      </section>

      <section id="contacto" class="h-screen flex flex-col justify-center">
        <h2 class="text-3xl font-semibold mb-3">Contacto</h2>
        <p class="text-gray-300 dark:text-gray-400 max-w-xl mx-auto">
          Puedes escribirme para colaboraciones o consultas profesionales.
        </p>
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

  </body>
</html>