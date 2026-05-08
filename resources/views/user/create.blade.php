<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <input name="login" placeholder="Логин" required>
        <input name="password" type="password" placeholder="Пароль" required>
        <input name="name" placeholder="Имя" required>
        <input name="surname" placeholder="Фамилия" required>
        <input name="email" type="email" placeholder="Email" required>
        <button type="submit">Создать</button>
    </form>
</body>

</html>