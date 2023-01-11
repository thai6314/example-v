<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Product</title>
    <style>
        img{
            width: 150px;
            height: 120px;
        }
    </style>
</head>

<body>
<div class="container">
    <a class="btn btn-primary" href="/product/show-form-add" role="button">Add</a>
    <div class="row">
        <div class="col">ID</div>
        <div class="col">Image</div>
        <div class="col"> Name</div>
        <div class="col"> Price</div>
        <div class="col"> Branch</div>
        <div class="col">Description</div>
        <div class="col">Quantity</div>
        <div class="col">Action </div>
    </div>
    @foreach ($products as $product)
        <div class="row">
            <div class="col">
                {{ $product->product_id }}
            </div>
            <div class="col">
                <img src="{{ $product->image }}">
            </div>
            <div class="col">
                {{ $product->name }}
            </div>
            <div class="col">
                {{ $product->price }}
            </div>
            <div class="col">
                {{ $product->branch }}
            </div>
            <div class="col">
                {{ $product ->description }}
            </div>
            <div class="col">
                {{ $product->quantity }}
            </div>
            <div class="col">
                <a class="btn btn-primary" href="{{ route('product.form.update', $product->product_id) }}" role="button">Update</a>
                <a class="btn btn-danger" href="{{ route('product.delete', $product->product_id) }}" role="button">Delete</a>
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
