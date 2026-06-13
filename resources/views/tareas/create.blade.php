<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva tarea</title>
</head>
<body>
    <h1>Crear tarea</h1>

    <form action="{{ route('tareas.store') }}" method="POST">
        @csrf

        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo">

        <br><br>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion"></textarea>

        <br><br>

        <button type="submit">Guardar tarea</button>
    </form>
</body>
</html>