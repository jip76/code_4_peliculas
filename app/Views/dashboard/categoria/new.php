<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear categorias</title>
</head>
<body>
    <form action="/dashboard/categoria/create " method="post">
    <?=  view('dashboard/categoria/_form',['op'=>'crear'])?>
    </form>
</body>
</html> 