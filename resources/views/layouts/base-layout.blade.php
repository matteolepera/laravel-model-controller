@vite(['resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("win-title")</title>
</head>

<body>
    <main>
        @yield("main")
    </main>
</body>

</html>