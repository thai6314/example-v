<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form add Product</title>
</head>

<body>
<div class="container">

    <form method="post" action="/product/add" >
        <div class="col-3">
            <label  class="form-label">Name</label>
            <input type="text" class="form-control" name="name"/>
            @if ($errors->has('name'))
                <p class="text-danger">{{ $errors->first('name') }}</p>
            @endif
        </div>
        <div class="col-3">
            <label  class="form-label">Image</label>
            <input type="text" class="form-control" name="image"/>
            @if ($errors->has('image'))
                <p class="text-danger">{{ $errors->first('image') }}</p>
            @endif
        </div>
        <div class="col-3">
            <label  class="form-label">Price</label>
            <input type="text" class="form-control" name="price"/>
            @if ($errors->has('price'))
                <p class="text-danger">{{ $errors->first('price') }}</p>
            @endif
        </div>
        <div class="col-3">
            <label  class="form-label">Branch</label>
            <input type="text" class="form-control" name="branch"/>
            @if ($errors->has('branch'))
                <p class="text-danger">{{ $errors->first('branch') }}</p>
            @endif
        </div>
        <div class="col-3">
            <label class="form-label">Description</label>
            <input type="text" class="form-control" name="description"/>
            @if ($errors->has('description'))
                <p class="text-danger">{{ $errors->first('description') }}</p>
            @endif
        </div>
        <div class="col-3">
            <label  class="form-label">Quantity</label>
            <input type="text" class="form-control" name="quantity"/>
            @if ($errors->has('quantity'))
                <p class="text-danger">{{ $errors->first('quantity') }}</p>
            @endif
        </div>
        <div class="col-3">
            <label  class="form-label">Category</label>
            <select class="form-select form-select-sm" name="category_id" aria-label=".form-select-sm example">
                @foreach($categories as $category)
                    <option value="{{$category->category_id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>
