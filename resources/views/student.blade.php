<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
</head>

<body>
    <h1>Student Input</h1>
    <form method="POST" action={{ route('student.store') }}>
        @csrf
        <div>
            <label for="name">Name : </label> <br>
            <input type="text" name="name">
        </div> <br />
        <div>
            <label for="gender">Gender : </label>
            <select name="gender" id="gender">
                <option value="male">male</option>
                <option value="female">female</option>
            </select>
        </div> <br />
        <button type="submit" name="save">Save</button>
    </form>
    <h1>Student List</h1>
    @foreach ($students as $student)
        <ul>
            <li>{{ $student['name'] }}</li>
            <li>{{ $student['gender'] }}</li>
        </ul>
    @endforeach
</body>

</html>
