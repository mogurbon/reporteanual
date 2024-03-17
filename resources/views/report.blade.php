<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarjeta de Entrada</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
<div class="max-w-lg mx-auto bg-white rounded p-8 shadow-md">
    <h2 class="text-2xl font-bold mb-4">Entrada</h2>
    <div class="mb-4 lg:mb-4 md:mb-4">
        <div class="border-b pb-4">
            <p class="text-gray-600 font-semibold">Título:</p>
            <p class="text-gray-800">{{$report->title}}</p>
        </div>
        <div class="border-b pb-4 mt-4">
            <p class="text-gray-600 font-semibold">Contenido:</p>
            <p class="text-gray-800">{{$report->content}}</p>
        </div>
        <div class="border-b pb-4 mt-4">
            <p class="text-gray-600 font-semibold">Fecha de inicio:</p>
            <p class="text-gray-800">{{$report->init_date}}</p>
        </div>
        <div class="mt-4">
            <p class="text-gray-600 font-semibold">Fecha de fin:</p>
            <p class="text-gray-800">{{$report->end_date}}</p>
        </div>
    </div>
</div>
</body>
</html>
