<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
</head>
<body>
    <h1>Listado de Peliculas</h1>
    <a href="/pelicula/new">Crear</a>
    <table>
        <tr>
        <th>
               #
            </th>
            <th>
               Titulo
            </th>
            <th>
              Descripcion
            </th>
            <th>
              opciones
            </th>
        </tr>
        
        <?php foreach($peliculas as $key=>$p)   : ?>
            <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['titulo'] ?></td>
            <td><?= $p['descripcion'] ?></td>
            <td>
            <a href="/pelicula/show/<?= $p['id'] ?>">Show</a>
                <a href="/pelicula/edit/<?= $p['id'] ?>">Edit</a>
                <a href="/pelicula/remove/<?= $p['id'] ?>">Eliminar</a>
            </td>
            </tr> 
        <?php endforeach ?>   
        
    </table>
</body>
</html>