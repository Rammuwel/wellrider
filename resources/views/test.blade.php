<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>teas</title>
</head>
<body>
    
    <div>
        @if (auth()->guard('owner')->check())
            <h1>{{ auth()->guard('owner')->user()->firstname}}</h1>
        @endif
    </div>
</body>
</html>