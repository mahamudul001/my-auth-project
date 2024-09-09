<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: url('https://via.placeholder.com/1920x1080') no-repeat center center;
            background-size: cover;
            height: 100vh;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="hero">
        <div class="container">
            <h1 class="display-4">Welcome to Our Application</h1>
            <p class="lead">Your one-stop solution for all your needs.</p>
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Login</a>
            <a href="{{ route('register') }}" class="btn btn-secondary btn-lg ml-2">Register</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
