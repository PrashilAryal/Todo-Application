<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1 style="text-align: center;">Edit this todo!</h1>
    <div class="d-flex justify-content-center">

        <form action="{{route('updateTodo')}}" method="post">
            @csrf
            <div class="input-group">
                <input type="text" name="todo" class="form-control" value="{{$data->title}}">
                <input type="hidden" name="id" value="{{$data->id}}">
                <div class="input-group-append" style="margin-left: 5px;">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>