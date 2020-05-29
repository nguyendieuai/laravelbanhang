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
            @foreach($orderdetails as $orderdetail)
            <tr>
                <td> {{$orderdetail->id}}</td>
                <td> {{$orderdetail->dongia}}</td>
                <td> {{$orderdetail->soluongmua}}</td>
                <td> {{$orderdetail->order_id}} </td>
                <td> {{$orderdetail->product_id}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
   
</body>
</html>