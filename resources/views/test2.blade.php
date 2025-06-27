<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test 2</title>
</head>

<body>
    <h1>Students List</h1>

    @foreach ($students as $s)
        <ul>
            <li>id : {{ $s['id'] }}</li>
            <li>name : {{ $s['name'] }}</li>
            <li>gender : {{ $s['gender'] }}</li>
        </ul>
    @endforeach

</body>

</html>
