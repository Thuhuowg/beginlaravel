<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($collection as $i)
    <li>{{$i}}</li>
    @endforeach
    @for($i=0;$i<count($collection);$i++)
    <li>{{$collection[$i]}}</li>
    @endfor
    
</body>
</html>