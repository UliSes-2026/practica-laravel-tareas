<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar tarea</title>
</head>
<body>
    <h1>Editar tarea</h1>

    <form action="{{ route('tareas.update', $tarea) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="titulo">Título:</label>
        <input
            type="text"
            id="titulo"
            name="titulo"
            value="{{ $tarea->titulo }}"
        >

        <br><br>

        <label for="descripcion">Descripción:</label>
        <textarea
            id="descripcion"
            name="descripcion"
        >{{ $tarea->descripcion }}</textarea>

        <br><br>

        <button type="submit">Actualizar tarea</button>
    </form>
</body>
</html>