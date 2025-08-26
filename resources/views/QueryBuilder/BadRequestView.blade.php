<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8fafc;
            text-align: center;
            padding: 50px;
        }
        h1 {
            font-size: 80px;
            margin-bottom: 20px;
            color: #e3342f;
        }
        p {
            font-size: 20px;
            margin-bottom: 30px;
        }
        a {
            text-decoration: none;
            background: #3490dc;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>404</h1>
    <p>Oops! The page you are looking for doesn’t exist.</p>
    <a href="{{ url('/') }}">Go Home</a>
</body>
</html>
