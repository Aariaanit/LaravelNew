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
    <h1>Product Page</h1>
    <table>
        <tr>
            <td>Code</td>
            <td>Symbol</td>
            <td>Rate</td>
            <td>Description</td>
            <td>Rate Float</td>
        </tr>
        @foreach ($collection as $item)
        <tr>
            <td>{{$item['code']}}</td>
            <td>{{$item['symbol']}}</td>
            <td>{{$item['rate']}}</td>
            <td>{{$item['description']}}</td>
            <td>{{$item['rate_float']}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>