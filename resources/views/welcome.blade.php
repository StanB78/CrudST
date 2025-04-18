<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Order</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            text-align: center;
            color: #333;
        }

        /* Header Styling */
        header {
            background-color: #28a745;
            padding: 15px 0;
            color: white;
            font-size: 18px;
            font-weight: bold;
        }

        .header-btn {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .header-btn a {
            text-decoration: none;
            color: white;
        }

        .header-btn button {
            background-color: #218838;
            color: white;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .header-btn button:hover {
            background-color: #1e7e34;
        }

        /* Main Heading Styling */
        h1 {
            font-size: 36px;
            margin-top: 30px;
            color: #333;
        }

        .intro-text {
            font-size: 18px;
            margin-top: 10px;
            color: #666;
        }

        /* Food Item Container */
        .menu-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
            padding: 20px;
        }

        .menu-item {
            background-color: white;
            border: 2px solid #28a745;
            padding: 15px;
            width: 200px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .menu-item:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .menu-item p {
            font-size: 16px;
            margin-bottom: 15px;
        }

        .menu-item button {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .menu-item button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<header>
    <div class="header-btn">
        <a href="{{ route('login') }}"><button>Login</button></a>
        <a href="{{ route('products.index') }}"><button>Menu</button></a>
        <a href="{{ route('products.contact') }}"><button>Contact</button></a>
    </div>
</header>

<h1>Welcome to Toko-Crud</h1>
<div class="intro-text">Please navigate in the bar up top to explore</div>

<script>
    function orderFood(item) {
        alert('You have ordered: ' + item);
    }
</script>

</body>
</html>
