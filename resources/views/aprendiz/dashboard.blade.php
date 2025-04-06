<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Aprendiz</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-green-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold text-green-700">Bienvenido, Aprendiz</h1>
        <p class="text-gray-700">Este es tu panel de aprendizaje.</p>
        <a href="{{ route('loginn') }}" class="text-red-500 hover:underline">Cerrar sesión</a>
    </div>

    <h2>Mis Equipos Registrados</h2>

@foreach($equipos as $equipo)
    <p>{{ $equipo->nombre }} - {{ $equipo->estado }}</p>
@endforeach

</body>
</html>
