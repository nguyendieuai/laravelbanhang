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
            @foreach($orders as $order)
            <tr>
                <td> {{$order->id}}</td>
                <td> {{$order->ngaylaphoadon}}</td>
                <td> {{$order->pdiachigiaohang}}</td>
                <td> {{$order->tien}}</td>
                <td> {{ $order->ghichu}} </td>
                <td> {{ $order->customer_id}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
   
</body>
</html>