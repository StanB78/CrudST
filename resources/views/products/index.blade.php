<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Order</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }

        .menu-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .menu-item {
            border: 4px solid lightgreen;
            padding: 10px;
            margin: 10px;
            width: 200px;
            border-radius: 5px;
        }

        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .header-btn {
            background: lightgreen;
            padding: 20px;
            font-size: 24px;
            text-align: center;
            font-weight: bold;
        }
    </style>

</head>
<body>

<header class="header-btn">
    <div class="top-right">
            <a href="{{ route('products.contact') }}"><button>Contact</button></a>
            <a href="{{ route('login') }}">
            <button class="login-btn">Login</button>
        </a>
    </div>
</header>

<h1>Food Order</h1>

<div class="menu-container">
    @foreach($allproduct as $product)
    <div class="menu-item">
        <p>{{ $product->name }} - ${{ $product->price }}</p>
    </div>
    @endforeach
</div>


<script>
    function orderFood(item) {
        alert('You have ordered: ' + item);
    }
</script>

</body>
</html>
