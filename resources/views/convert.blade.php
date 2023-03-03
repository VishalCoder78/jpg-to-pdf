<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>convert</title>
</head>
<body>
    <x-navbar />
    <div class="text-center">
        <h1 class="text-4xl font-bold">JPG TO PDF</h1>
        <h4 class="text-xl">Convert JPG images to PDF in seconds. Easily adjust orientation and margins.</h4>

    </div>
    <div class="h-[30rem] w-screen flex justify-center  ">
        <form action="{{url('/convert')}}" method="POST" enctype="multipart/form-data" class="grid grid-cols-5 grid-rows-6 gap-4 h-96 w-screen " >
            @csrf
            <input type="file" name="file" class=" col-start-1 col-span-5 row-start-1 row-span-5 border border-black bg-neutral-300 form-control center">
            <button type="submit" class=" bg-emerald-600 hover:bg-emerald-800 text-white w-52 col-start-3  col-span-3 row-span-1" >Convert into PDF</button>
        </form>
    </div>
    <x-footer />
</body>
</html>