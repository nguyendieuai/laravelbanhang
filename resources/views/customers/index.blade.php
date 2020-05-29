<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tbody>
            @foreach($customers as $customer)
            <tr>
                <td> {{$customer->id}}</td>
                <td> {{$customer->ten}}</td>
                <td> {{$customer->sdt}}</td>
                <td> {{$customer->diachi}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
   
</body>
</html>