<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Image</th>
        <th>ID</th>
        <th>Film</th>
        <th>Actor</th>
    </tr>
    </thead>

    <tbody>
    @foreach($films as $film)
        <tr>
            <td>
                @if($film->images)
                    @foreach($film->images as $image)
                        <img src="{{$image->path}}"/>
                    @endforeach
                @endif
            </td>
            <td>{{$film->id}}</td>
            <td>{{$film->name}}</td>
            <td>
                @if($film->actors)
                    @foreach($film->actors as $actor)
                        {{$actor->name}}<br>
                    @endforeach
                @endif
            </td>

        </tr>
    @endforeach
    </tbody>
</table>

<table>
    <thead>
    <tr>
        <th>Image</th>
        <th>ID</th>
        <th>Actor</th>
        <th>Film</th>
    </tr>
    </thead>

    <tbody>
    @foreach($actors as $actor)
        <tr>
            <td>
                @if($actor->images)
                    @foreach($actor->images as $image)
                        <img src="{{$image->path}}"/>
                    @endforeach
                @endif
            </td>
            <td>{{$actor->id}}</td>
            <td>{{$actor->name}}</td>
            <td>
                @if($actor->films)
                    @foreach($actor->films as $film)
                        {{$film->name}}<br>
                    @endforeach
                @endif
            </td>

        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
