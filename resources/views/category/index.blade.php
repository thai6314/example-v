<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Category</title>
</head>

<body>

<div class="container">
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="row">
        <a class="btn btn-sm btn-primary" href="/category/show-form-add" role="button">Add</a>
        <div class="col">
            ID
        </div>
        <div class="col">
            Name
        </div>
        <div class="col">
            Description
        </div>
        <div class="col">
            Action
        </div>
    </div><br>
    @foreach ($categories as $category)
        <div class="row">
            <div class="col">
                {{ $category->category_id }}
            </div>
            <div class="col">
                {{ $category->name }}
            </div>
            <div class="col">
                {{ $category->description }}
            </div>
            <div class="col">
                <a class="btn btn-primary" href="{{ route('category.form.update', ['id' => $category->category_id]) }}"
                   role="button">Update</a>
                <a class="btn btn-danger" href="{{ route('category.delete', ['id' => $category->category_id]) }}"
                   role="button">Delete</a>
            </div>
        </div>
        <br>
    @endforeach
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>
