<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border:3px solid black;
            border-collapse: collapse;
        }
        td{
            border:1px solid black;
            
        }
    </style>
</head>
<body>
    <h1>Users Page</h1>
    <table>
        <tr>
            <td>ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Birthday</td>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['firstName']}}</td>
            <td>{{$user['lastName']}}</td>
            <td>{{$user['email']}}</td>
            <td>{{$user['birthday']}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>