<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
</head>
<body>

    <h1>Users</h1>

    <ul>
        @foreach ($users as $user)
            <li>
                Name: {{ $user['name'] }} <br>
                Email: {{ $user['email'] }}
            </li>
            <hr>
        @endforeach
    </ul>

</body>
</html>