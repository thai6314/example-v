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
    <form method="post" action="/product/update" >
        <div class="col-3">
            <label  class="form-label">ID</label>
            <input readonly type="text" class="form-control" name="product_id" value="{{$product->product_id}}"/>
        </div>
        <div class="col-3">
            <label  class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{$product->name}}"/>
            @if ($errors->has('name'))
                <p class="text-danger">{{ $errors->first('name') }}</p>
            @endif
        </div>
        <div class="col-3">
            <label  class="form-label">Image</label>
            <input type="text" class="form-control" name="image" value="{{$product->image}}"/>
            @if ($errors->has('image'))
                <p class="text-danger">{{ $errors->first('image') }}</p>
            @endif
        </div>
        <div class="col-3">
            <label  class="form-label">Price</label>
            <input type="text" class="form-control" name="price" value="{{$product->price}}"/>
            @if ($errors->has('price'))
                <p class="text-danger">{{ $errors->first('price') }}</p>
            @endif
        </div>
        <div class="col-3">
            <label  class="form-label">Branch</label>
            <input type="text" class="form-control" name="branch" value="{{$product->branch}}"/>
            @if ($errors->has('branch'))
                <p class="text-danger">{{ $errors->first('branch') }}</p>
            @endif
        </div>
        <div class="col-3">
            <label class="form-label">Description</label>
            <input type="text" class="form-control" name="description" value="{{$product->description}}"/>
            @if ($errors->has('description'))
                <p class="text-danger">{{ $errors->first('description') }}</p>
            @endif
        </div>
        <div class="col-3">
            <label  class="form-label">Quantity</label>
            <input type="text" class="form-control" name="quantity" value="{{$product->quantity}}"/>
            @if ($errors->has('quantity'))
                <p class="text-danger">{{ $errors->first('quantity') }}</p>
            @endif
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
