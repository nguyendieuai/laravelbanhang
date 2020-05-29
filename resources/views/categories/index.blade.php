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
            @foreach($categories as $category)
            <tr>
                <td> {{$category->id}}</td>
                <td> {{$category->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
   
</body>
</html>