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
    <div class="h-[30rem] flex items-center justify-center bg-slate-800">
        <a href="/convert" class="px-12 py-2 my-5 bg-indigo-600 hover:bg-indigo-800 text-white mx-5 ">Convert</a>
    </div>
    <x-footer />

</body>
</html>