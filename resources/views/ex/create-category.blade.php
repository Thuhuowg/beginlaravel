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
    <div class="row">
    <form method="post" action="{{route('category.add')}}">
        @csrf

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" class="form-control" name="name" placeholder="Category" >
        </div>


        <br>
        <button class="btn btn-primary">Submit</button>




    </form>
    </div>


    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>

            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
            <tr>

                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>

            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <a href="{{url('/list-posts')}}">
        <button class="btn btn-warning">Back</button>
    </a>
</div>
</body>
</html>
