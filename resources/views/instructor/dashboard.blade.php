<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Instructor</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-yellow-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold text-yellow-700">Bienvenido, Instructor</h1>
        <p class="text-gray-700">Aquí puedes gestionar clases y alumnos.</p>
        <a href="{{ route('loginn') }}" class="text-red-500 hover:underline">Cerrar sesión</a>
    </div>
</body>
</html>
