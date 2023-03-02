<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="h-screen flex items-center justify-center bg-slate-800">
        <a href="/download/<?php echo $path ?>" class="bg-emerald-600 hover:bg-emerald-400 p-4 px-6 rounded-lg" >Download PDF</a>
    </div>
</body>
</html>