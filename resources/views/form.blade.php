<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Form laravel</title>
</head>
<body>
<form method="post" action="/form">
    @csrf
    <input type="text">
    <input type="submit">
</form>
</body>
</html>
