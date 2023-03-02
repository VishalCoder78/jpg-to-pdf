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
    <div>
        <form action="{{url('/convert')}}" method="POST" enctype="multipart/form-data" >
            @csrf
            <input type="file" name="file">
            <button type="submit" class=" bg-indigo-600 hover:bg-indigo-800 text-white px-4">Convert into Image</button>
        </form>
            </div>
</body>
</html>