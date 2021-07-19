<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        @if ($variable%4)
            <h1>{{4 * $variable }}</h1>
        @else
            "Pas possible"
        @endif
    </div>
</body>
</html>