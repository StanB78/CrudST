<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Management</title>

    <!-- Bootstrap 5 CDN for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .header-btn {
            background-color: #28a745;
            color: white;
            padding: 15px;
            font-size: 20px;
            text-align: center;
            font-weight: bold;
            margin: 20px 0;
            border-radius: 5px;
            display: inline-block;
            text-decoration: none;
        }

        .header-btn:hover {
            background-color: #218838;
        }

        .menu-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .menu-item {
            background-color: #fff;
            border: 2px solid #28a745;
            padding: 20px;
            width: 250px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .menu-item:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        .menu-item p {
            font-size: 16px;
            margin-bottom: 15px;
        }

        .menu-item a {
            display: inline-block;
            padding: 8px 12px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            margin-bottom: 10px;
            transition: background-color 0.3s ease;
        }

        .menu-item a:hover {
            background-color: #0056b3;
        }

        button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

<header class="text-center">
    <a href="{{ route('products.create') }}" class="header-btn">Create Product</a>
</header>

<div class="menu-container">
    @foreach($allproduct as $product)
    <div class="menu-item">
        <p><strong>{{ $product->name }}</strong> - ${{ $product->price }}</p>
        <a href="{{ route('products.edit', $product->id) }}">Edit</a>
        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
        </form>
    </div>
    @endforeach
</div>

<!-- Bootstrap 5 JS for functionality (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
