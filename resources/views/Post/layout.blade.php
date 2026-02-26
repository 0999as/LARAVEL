<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}-site.com</title>
</head>
<body>
    <h1><i>{{$slot}} - 1</i></h1>
    <ul>
        <li>{{$arr[0] + $arr[1]}}</li>
        <li>{{count($arr)}}</li>
    </ul>
    @if(count($arr) >= 1)
        в массиве есть записи
    @else
        в массиве нет записей
    @endif
    @foreach ($arr as $elem)
	    <li>{{$elem}}</li>
    @endforeach
    @if(!$isAuth)
        вы авторизованы
    @else
        вы не авторизованы
    @endif
    <br>
    @if($num > 0)
        больше нуля
    @elseif($num === 0)
        равно нулю
    @else
        меньше нуля
    @endif
    <br>
    @foreach($arr as $elem)
        {{$elem}}
    @endforeach
    <br>
    @foreach($arr as $elem)
        <p>{{$elem}}</p>
    @endforeach
    @foreach($arr as $key => $elem)
        {{$key + 1}}. {{$elem}}
    @endforeach
    <ul>
        @foreach($arr as $elem)
            @if($elem > 0)
                <li>{{$elem}}</li>
            @endif
        @endforeach
    </ul>
    @if(count($arr) > 0)
        <ul>
            @foreach($arr as $elem)
                <li>{{$elem}}</li>
            @endforeach
        </ul>
    @endif
    {{--
    @foreach($arr as $subArr)
        @foreach($subArr as $elem)
            {{$elem}}
        @endforeach
    @endforeach
    @endforeach
    <ul>
        @foreach($arr as $subArr)
            <li>
                <ul>
                    @foreach($subArr as $elem)
                        <li>{{$elem}}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
    @forelse ($arr as $elem)
	    <p>{{$elem}}</p>
    @empty
	    <p>в массиве нет элементов</p>
    @endforelse
    --}}
    <ul>
        @foreach ($users as $user)
            <li>{{$user['name']}} {{$user['age']}}</li>
        @endforeach
    </ul>
    @foreach ($arr as $elem)
        @if ($loop -> first)
            первая итерация
        @endif
        @if ($loop -> last)
            последняя итерация
        @endif
        @if ($loop -> odd)
            нечётная итерация
        @endif
        @if ($loop -> even)
            чётная итерация
        @endif
        {{$elem}}
        <br>
    @endforeach
    <br>
    @foreach ($arr as $elem)
        {{$elem}}
        @break($elem == 3)
    @endforeach
    <br>
    @foreach ($arr as $elem)
        @continue($elem == 2)
        {{$elem}}
    @endforeach
    <br>
    @for ($i = 0;$i < 10;$i++)
        значение счётчика: {{$i}}
        <br>
    @endfor
    <br>
    @php
        echo 123;
    @endphp
</body>
</html>