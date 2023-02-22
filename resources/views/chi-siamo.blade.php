<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Giuseppe-Dattilo">
        <title>Chi siamo</title>
    </head>
<body>
    <h1>Laravel</h1>
    <h2>{{$name}}</h2>
    <ul>
        @foreach ($links as $link)
           <li><a href="{{route($link, $loop->index)}}">{{$link}}</a></li>
        @endforeach 
    </ul>
</body>
</html>