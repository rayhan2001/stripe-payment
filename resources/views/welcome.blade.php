<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Product : laptop</h2>
    <h3>Proce : 5$</h3>

    <form action="{{route('stripe')}}" method="post">
    @csrf
    <input type="hidden" name="product_name" id="" value="laptop">
    <input type="hidden" name="amount" id="" value="5">
    <input type="hidden" name="quantity" id="" value="1">
    <button type="submit">Submit</button>
    </form>
</body>
</html>
