<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold text-blue-700">Bienvenido, Administrador</h1>
        <p class="text-gray-700">Aquí puedes gestionar usuarios y configuraciones.</p>
        <a href="{{ route('loginn') }}" class="text-red-500 hover:underline">Cerrar sesión</a>
    </div>
</body>
</html>
