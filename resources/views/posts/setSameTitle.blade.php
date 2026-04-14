<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{route('posts.setSameTitle')}}" method="POST">
        @csrf
        <input type="text" name="title" required>
        <button type="submit">Сохранить</button>
</body>
</html>