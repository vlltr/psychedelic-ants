<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Plaza Fantasma en la Asamblea: ¡Descubre y Juega! 👻</title>
    <meta name="description" content="Generador de Plazas Fantasmas en la Asamblea de El Salvador: Descubre tu plaza fantasma y adivina tu salario.">
    <meta name="keywords" content="generador, plazas fantasmas, asamblea, El Salvador, política, empleos falsos">
    <meta name="author" content="Villatoro">
    <meta property="og:title" content="Tu Plaza Fantasma en la Asamblea: ¡Descubre y Juega! 👻">
    <meta property="og:description" content="Generador de Plazas Fantasmas en la Asamblea de El Salvador: Descubre tu plaza fantasma y adivina tu salario.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
<div id="card" class="bg-white rounded-lg shadow-lg p-6 max-w-lg w-full">
    <h2 class="text-2xl font-bold mb-4 text-center">Tu Plaza Fantasma 👻</h2>
    <p class="text-gray-700 text-center mb-6">
        ¿Te imaginas ser chero o familiar de un diputado de Nuevas Ideas? Descubre cuál sería tu plaza y cuánto podrías ganar en la Asamblea Legislativa. ¡Juega ahora y adivina tu nuevo salario!
    </p>
    <button id="playButton" class="w-full bg-gray-900 text-white font-bold py-2 px-4 rounded hover:bg-gray-700">
        Jugar Ahora 🎉
    </button>
</div>

<div id="loading" class="hidden flex items-center justify-center min-h-screen">
    <div class="border-gray-300 h-20 w-20 animate-spin rounded-full border-8 border-t-gray-600"></div>
</div>
</body>
</html>
