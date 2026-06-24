<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs</title>
</head>
<body>
    <h1>Hello</h1>
    @foreach ($jobs as $job)
    <div>{{ $job['title'] }}: {{ $job['salary'] }}</div>

    @endforeach
</body>
</html>
