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
    <x-navbar />
    <div class="h-screen flex flex-col items-center justify-center bg-slate-800">
        <h1 class="text-4xl text-white m-5">The images have been converted into PDF</h1>
        <a href="/download/<?php echo $path ?>" class="bg-emerald-600 hover:bg-emerald-400 p-4 px-6 rounded-lg" >Download PDF</a>
    </div>
    <x-footer />
</body>
</html>