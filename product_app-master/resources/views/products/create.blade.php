<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <title>Create a Product</title>
</head>

<body>
    <div class="container">
        <h1>Create a Product</h1>
        @if($errors->any())
            <ul class="error-message">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form method="post" action="{{ route('product.store') }}">
            @csrf
            @method('post')
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter the product name">
            </div>
            <div>
                <label for="qty">Quantity:</label>
                <input type="text" id="qty" name="qty" placeholder="Enter the quantity">
            </div>
            <div>
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" placeholder="Enter the price">
            </div>
            <div>
                <input type="submit" value="Save Product">
            </div>
        </form>
    </div>
</body>


{{-- used Internel CSS --}}

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 80px;
        
    }

    .container {
        max-width: 500px;
        max-height: 500px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-bottom: 8px;
        font-weight: bold;

    }

    input[type="text"] {
        padding: 10px ;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-left: 160px;
        /* display: flex; */
    }

    input[type="submit"] {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    .error-message {
        color: #dc3545;
        margin-top: 8px;
    }
</style>


</html>
