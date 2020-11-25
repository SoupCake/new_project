<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @yield('header')
    <div class="links">
        <a href="/">Home</a>
        <a href="/about">About Us</a>
        <a href="/case">COVID-19 Cases</a>
        <a href="/news">News</a>
    </div>
    @yield('content')
</body>
</html>