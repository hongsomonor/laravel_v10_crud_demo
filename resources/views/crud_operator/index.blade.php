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
    <div class=" text-6xl font-extrabold w-full h-32 bg-purple-800 text-purple-300 flex justify-center items-center">CRUD
        Operator</div>
    <div class=" w-[80%] h-40 mx-auto">
        @yield('content')
    </div>
</body>

</html>
