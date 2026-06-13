<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis tareas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Lista de tareas</h1>
<a href="{{ route('tareas.create') }}">Crear nueva tarea</a>
    @forelse ($tareas as $tarea)
        <h2>{{ $tarea->titulo }}</h2>
        <p>{{ $tarea->descripcion }}</p>
        <a href="{{ route('tareas.edit', $tarea) }}">Editar</a>

        <form action="{{ route('tareas.destroy', $tarea) }}" method="POST">
            @csrf
            @method('DELETE')

           <button type="submit">Eliminar</button>
        </form>

    @empty
        <p>Todavía no hay tareas registradas.</p>
    @endforelse
</body>
</html>