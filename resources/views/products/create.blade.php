<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a Product</title>

    <!-- Bootstrap 5 CDN for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Create a Product</h1>

    <form method="post" action="{{ route('products.store') }}" class="bg-light p-4 rounded shadow-sm">
        @csrf
        @method('post')

        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter product name" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Product Price</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Enter product price" required>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg">Save Product</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
