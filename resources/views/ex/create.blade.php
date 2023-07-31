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
        Edit Post table
    </div>
</div>
<br>
<br>

<div class="container-fluid">
<form method="post" action="{{route('post.category.add')}}">
    @csrf

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" placeholder="title of posts" >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Content</label>
            <textarea class="form-control" name="contents" rows="3"></textarea>
        </div>

    <select name="category_id" class="form-select" aria-label="Default select example">
        <option disabled selected>Open this select menu</option>

    @foreach($categories as $category)
            <option value="{{$category->id}}">

            {{$category->name}}
        </option>

        @endforeach
    </select>

    <br>
        <button class="btn btn-primary">Submit</button>




</form>
<br>
<a href="{{url('/list-posts')}}">
    <button class="btn btn-warning">Back</button>
</a>
</div>
</body>
</html>
