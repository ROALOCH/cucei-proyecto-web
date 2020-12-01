<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Todos</title>
</head>

<body>
    <div class="text-center pt-10">
        <h1 class="text-2xl">Nueva Tarea</h1>
        <form action="/todos/create" method="POST" class="py-5">
            @csrf
            <input type="text" name="title" placeholder="¿Qué tienes por hacer?" class="py-2 px-2 border rounded-lg" />
            <input type="submit" value="Crear" class="p-2 border rounded-lg" />
        </form>
        <x-alert />
    </div>
</body>

</html>