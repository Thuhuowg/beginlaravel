<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="card">
    <div class="card-body">
        Posts Table
    </div>
</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->contents}}</td>

            <td>
                @if($post->category)
                    {{$post->category->name}}
                @endif
            </td>
{{--            <td>--}}
{{--                @if($category->post)--}}
{{--                    {{$category->post->content}}--}}
{{--                @endif--}}
{{--            </td>--}}
            <td>

                <a
                    class="btn btn-primary" href='/update/{{$post->id}}'>Update
                </a>

                    <a
                        class="btn btn-danger" onclick="return confirm('Delete ?')"
                                href='/delete/{{$post->id}}' >Delete

                    </a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<a href="{{url('/create-post')}}">
    <button class="btn btn-primary">Add Post</button>
</a>
<span>
    <a href="{{url('/create-category')}}">
    <button class="btn btn-warning">Add Category</button>
</a>
</span>





</body>
</html>
