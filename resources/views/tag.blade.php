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
<h1>danh sách bài viết</h1>
@foreach($posts as $post)
    <h2>{{$post->title}}</h2>
    <div>{{$post->content}}</div>
    <h3>Gắn thẻ bởi:</h3>
    @foreach($post->tags as $tag)
        <div>{{$tag->name}}</div>
    @endforeach
    <br>
@endforeach
<br>
<br>
<h1>Danh sách các sản phẩm </h1>
@foreach($products as $product)
    <div>{{$product->name}}</div>
    <h3>gắn thẻ bởi:</h3>
    @foreach($product->tags as $tag)
        <div>{{$tag->name}}</div>
    @endforeach
    <br>
@endforeach

</body>
</html>
