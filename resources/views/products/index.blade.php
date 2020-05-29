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
            @foreach($products as $product)
            <tr>
                <td> {{$product->id}}</td>
                <td> {{$product->ten}}</td>
                <td> {{$product->anh}}</td>
                <td> {{$product->gia}}</td>
                <td> {{$product->soluong}}</td>
                <td> {{$product-category_id}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
   
</body>
</html>