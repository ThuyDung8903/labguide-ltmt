<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo</title>
</head>
<body>
<form action="demo" method="post">
    <!--Cần phải có @csrf để tạo ra mã token bảo mật form-->
    @csrf
    <input type="submit" value="Submit form">
</form>
</body>
</html>