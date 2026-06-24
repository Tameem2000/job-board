<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? "JobsBoard" }}</title>
</head>
<body>
    <h1>Welcome To Job Board</h1>
     @foreach ($jobs as $job)
    <div>{{ $job['title'] }}: {{ $job['salary'] }}</div>

    @endforeach
    <nav>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/contact">Contact Us</a>

</nav>
</body>
</html>
