<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/ajax/backup">Backup</a>
    <form action="/ajax/restore" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="backup"/>
        <input type="submit"/>
    </form>
</body>
</html>