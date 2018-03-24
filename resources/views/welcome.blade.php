<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Contact Manager</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
    <div class="container">
        <div id="app">
            <contacts></contacts>
        </div>
    </div>

    <script src="/js/app.js"></script>
</body>
</html>