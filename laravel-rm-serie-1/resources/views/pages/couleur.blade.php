<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        
        @foreach ($colors as $item)
        @if ($color == $item)
            <ul>
                <li style="font-weight: bold">{{$item}}</li>
            </ul>
        @else
            <ul>
                <li>{{$item}}</li>
            </ul>
        @endif
        @endforeach
    </div>
</body>

<script src="{{asset('js/app.js')}}"></script>
</html>