<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>this is the blade create product</h1>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" placeholder="Name" />
        </div>
        <div>
            <label for="name">Qty:</label>
            <input type="text" name="qty" placeholder="Qty" />
        </div>
        <div>
            <label for="name">Price:</label>
            <input type="text" name="Price" placeholder="Price" />
        </div>
        <div>
            <label for="name">Description:</label>
            <input type="Description" name="Description" placeholder="Description" />
        </div>
        <div>
            <input type="submit" value="save A New Product " />
        </div>
    </form>
</body>

</html>