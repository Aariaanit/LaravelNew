<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        svg {
            width:30px;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <ul>
            <li>Open tasks: {{ $open_todos }}</li>
            <li>Completed tasks: {{ $completed_todos }}</li>
        </ul>

        @if(count($todos))
            <table class="table table-bordered">
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Status</td>
                </tr>
                @foreach ($todos as $todo)
                <tr>
                    <td>{{ $todo ->id }}</td>
                    <td>{{ $todo->title }}</td>
                    {{-- <td>{{ $todo->completed }}</td> --}}
                    <td>
                        @if($todo->completed)
                            <span class="badge badge-sm bg-success">Completed</span>
                        @else   
                            <span class="badge badge-sm bg-info">Open</span>
                        @endif
                    </td>
                </tr> 
                @endforeach
            </table>
            {{ $todos->links() }}
        @else
            <div class="alert alert-info">
                Todo list eshte e zbrazet!
            </div>
        @endif
    </div>
    
</body>
</html>