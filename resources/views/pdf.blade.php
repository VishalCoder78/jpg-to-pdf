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
    <div class="flex items-center justify-center ">
        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/storage/'.$imgname))) }}" style="max-width: 100%">
    </div>
    </body>
</html>