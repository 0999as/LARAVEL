<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{--
    <div class="{{$CSS}}">
        <p>Какой-то текст</p>
    </div>
    --}}
    {{--
    <p>{{$name}}</p>
    <p>{{$age}}</p>
    <p>{{$salary}}</p>
    --}}
    {{--
    <form>
        @csrf
        <input name="username" value="{{$name}}">
        <input name="email" value="{{$email}}">
        <input name="age" value="{{$age}}">
    </form>
    --}}
    {{--
    <p style="{{$color}}">Какой-то текст</p>
    --}}
    {{--
    <a href="{{$href}}">{{$text}}</a>
    --}}
    {{--
    <p>{{$data}}</p>
    --}}
    {{--
    {{count($arr)}}
    --}}
    {{--
    @if ($city == '')
    <p>Москва</p>
    @else
    <p>{{$city}}</p>
    @endif
    --}}
    {{--
    {{ dd($location) }}
    --}}
    {{--
    @foreach ($location as $loc)
    @if ($loc['country'] == '')
    <p>Россия</p>
    @else
    <p>{{$loc['country']}}</p>
    @endif
    @if ($loc['city'] == '')
    <p>Москва</p>
    @else
    {{$loc['city']}}
    @endif
    @endforeach
    --}}
    {{--
    @foreach ($worker as $sotrudnik)
    <p>{{$sotrudnik['name']}}</p>
    <p>{{$sotrudnik['age']}}</p>
    <p>{{$sotrudnik['salary']}}</p>
    @endforeach
    --}}
    {{--
    <p>{!!$str!!}</p>
    --}}
    {{--
    @if ($day != '')
    <p>{{$day}}</p>
    @else
    <p>{{$day = date('d')}}</p>
    @endif
    @if ($month != '')
    <p>{{$month}}</p>
    @else
    <p>{{$month = date('m')}}</p>
    @endif
    @if ($year != '')
    <p>{{$year}}</p>
    @else
    <p>{{$year = date('Y')}}</p>
    @endif
    --}}
    {{--
    @if ($age > '18')
        <p>Какой-то текст</p>
    @elseif ($age == '18')
        <p>Текст какой-то</p>
    @else
        <p>Текст</p>
    @endif 
    @unless ($age >= '18')
       <p>Вы несовершеннолетний</p>
    @endunless
    --}}
    {{--
    @if (count($arr) > 0)
        {{array_sum($arr)}}
    @else
        <p>Массив пустой</p>
    @endif
    --}}
    <ul>
        @foreach ($arr as $element)
            <li>{{$element}}</li>
        @endforeach
    </ul>
</body>

</html>